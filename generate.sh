#!/bin/bash

START=$(date +%s)

# Function to check for a given number of jobs, and sleep until one frees up.
job_limiter() {
  while [[ $(jobs | wc -l) -ge "$1" ]]; do
    sleep 5;
  done
}

# Parse any command line args
while [[ $# -gt 0 ]]; do
  key="$1"

  case $key in
    -j|--jobs)
      JOB_MAX="$2"
      # Shift past arg and arg value.
      shift
      shift
      ;;
    -h|--help|*)
      cat << EOF
Usage: set-up-dev.sh
-j   --jobs <num jobs> | Number of concurrent jobs to run | Defaults to 8
-h   --help            | Show this screen
EOF
      exit 0
      ;;
  esac
done

BASE_PACKAGE_DIR="./src"
BASE_INVOKER_PACKAGE="TNT\\Amazon"
BASE_PACKAGE_NAME="amazon"
GITHUB_NAME="brandon14"
SDK_VERSION=0.2.0
SDK_USER_AGENT="$GITHUB_NAME/amazon-sdk-php/$SDK_VERSION/php"

# Set JOB_MAX default if not supplied.
[[ -z ${JOB_MAX+x} ]] && JOB_MAX=8

JAVA=$(which java 2>/dev/null)
PHP_CS_FIXER=$(realpath ./vendor/bin/php-cs-fixer)
JQ=$(which jq 2>/dev/null)
FILENAME_REGEX="^([a-zA-Z-]+)-model\/.*\.json$"

echo "===========> Starting OpenAPI SDK generation with [$JOB_MAX] jobs at $(date)..."
echo ""

# Ensure we can find the Java executable.
if [[ ! -x "$JAVA" ]]; then
  echo "Cannot find Java executable. Please try again..."
  exit 1
fi

# Ensure PHP-CS-Fixer is available.
if [[ ! -x "$PHP_CS_FIXER" ]]; then
  echo "Cannot find PHP-CS-Fixer script. Please try again..."
  exit 1
fi

# Ensure jq is available.
if [[ ! -x "$JQ" ]]; then
  echo "Cannot find executable jq. Please try again..."
  exit 1
fi

# Add bat file to php-cs-fixer script if running under a windows type environment.
if [[ "$OSTYPE" != "linux-gnu"* ]] || [[ "$OSTYPE" != "darwin"* ]] || [[ "$OSTYPE" != "freebsd"* ]]; then
  echo "Running under windows. Adding .bat to executable..."
  PHP_CS_FIXER="$PHP_CS_FIXER.bat"
fi

echo "Cleaning output folder [$BASE_PACKAGE_DIR]..."
# Clean output directory.
rm -rf "$BASE_PACKAGE_DIR"

# Generate each API for Amazon.
for openapispec in ./selling-partner-api-models/models/**/*.json; do
  # If we don't find the OpenAPI file, skip with
  if [[ -f "$openapispec" ]]; then
    # Check for max jobs running, if so sleep until a job frees up.
    echo "Checking for max threads running..."
    job_limiter "$JOB_MAX"
    echo "Not at max jobs, can continue..."

    # Clean file path name to get just the file name, and pull out the API name from the path.
    CLEAN_API_SPEC_NAME="${openapispec#"./selling-partner-api-models/models/"}"
    # Use regex to parse filename to grab pieces we need.
    [[ "$CLEAN_API_SPEC_NAME" =~ $FILENAME_REGEX ]];

    API_NAME="${BASH_REMATCH[1]}"
    # Strip off "-api" since some models are named foo-bar-api-model and some are named foo-bar-model.
    API_NAME="${API_NAME/%-api}"
    # Split API name into array so we can convert to PascalCase
    API_NAME_PROPER=(${API_NAME//-/ })
    # Convert to PascalCase using printf to join everything back together.
    API_NAME_PROPER=$(printf %s "${API_NAME_PROPER[@]^}")

    # Get API version from JSON spec using JQ.
    API_VERSION=$(cat "$openapispec" | jq -r .info.version)
    # If it's a date version, strip dashes so it's just a number.
    API_VERSION="${API_VERSION//-/}"

    # If it does not start with 'V', add it to it (for date versions).
    if [[ "${API_VERSION::1}" != "v" ]]; then
      API_VERSION="v$API_VERSION"
    fi;

    echo "===========> Generating OpenAPI library from file $openapispec with API name $API_NAME"
    echo ""

    # Run command to generate openapi library, run in background so we can speed up the process.
    "$JAVA" -jar ./bin/swagger-codegen-cli-2.4.28.jar generate \
    -l php \
    -i "$openapispec" \
    -o "$BASE_PACKAGE_DIR/$API_NAME_PROPER/${API_VERSION^}" \
    --invoker-package "$BASE_INVOKER_PACKAGE"\\"$API_NAME_PROPER"\\"${API_VERSION^}" \
    --additional-properties=srcBasePath='' \
    --additional-properties=packagePath='' \
    --git-user-id "$GITHUB_NAME" \
    --git-repo-id "$BASE_PACKAGE_NAME"-"$API_NAME"-"$API_VERSION" \
    --http-user-agent "$SDK_USER_AGENT" \
    -t ./templates &

    # Make test directory for each library.
    mkdir -p ./tests/Unit/$API_NAME_PROPER/${API_VERSION^}

    echo ""
  else
    echo "Cannot find API spec file at $openapispec, Skipping file..."
  fi
done

wait

LINT_START=$(date +%s)

echo "===========> Running PHP linter on generated SDKs at $(date)..."
# Batch PHP-CS-Fixer fixing using find-files and xargs to speed up linting.
"$PHP_CS_FIXER" list-files --config=./.php-cs-fixer.dist.php | xargs -n 20 -P "$JOB_MAX" "$PHP_CS_FIXER" fix --using-cache=no --config=./.php-cs-fixer.dist.php --allow-risky=yes

# Cleanup tests files since you cannot skip their generation.
find ./"$BASE_PACKAGE_DIR"/ -type d -name "*test*" -exec rm -rf {} +

END=$(date +%s)
ELAPSED=$((END-START))
LINT_ELAPSED=$((END-LINT_START))

echo "===========> Finished generating OpenAPI SDK at $(date)..."
echo "===========> Took $ELAPSED seconds to run in total, $LINT_ELAPSED to lint..."

exit 0
