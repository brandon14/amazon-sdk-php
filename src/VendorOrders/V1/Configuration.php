<?php

/**
 * This file is part of the brandon14/amazon-sdk-php package.
 *
 * MIT License
 *
 * Copyright (c) 2022 Brandon Clothier
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

declare(strict_types=1);

/**
 * Configuration
 * PHP version ^7.2 || ^8.0.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Retail Procurement Orders.
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
 *
 * OpenAPI spec version: v1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TNT\Amazon\VendorOrders\V1;

/**
 * Configuration Class Doc Comment
 * PHP version ^7.2 || ^8.0.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Configuration
{
    /**
     * Default configuration.
     *
     * @var Configuration
     */
    private static $defaultConfiguration;

    /**
     * Associate array to store API key(s).
     *
     * @var string[]
     */
    protected $apiKeys = [];

    /**
     * Associate array to store API prefix (e.g. Bearer).
     *
     * @var string[]
     */
    protected $apiKeyPrefixes = [];

    /**
     * Access token for OAuth.
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     * Username for HTTP basic authentication.
     *
     * @var string
     */
    protected $username = '';

    /**
     * Password for HTTP basic authentication.
     *
     * @var string
     */
    protected $password = '';

    /**
     * The host.
     *
     * @var string
     */
    protected $host = 'https://sellingpartnerapi-na.amazon.com';

    /**
     * User agent of the HTTP request, set to "PHP-Swagger" by default.
     *
     * @var string
     */
    protected $userAgent = 'brandon14/amazon-sdk-php/0.2.0/php';

    /**
     * Debug switch (default set to false).
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default).
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default).
     *
     * @var string
     */
    protected $tempFolderPath;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }

    /**
     * Sets API key.
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $key              API key or token
     *
     * @return $this
     */
    public function setApiKey($apiKeyIdentifier, $key)
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;

        return $this;
    }

    /**
     * Gets API key.
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string|null API key or token
     */
    public function getApiKey($apiKeyIdentifier)
    {
        return $this->apiKeys[$apiKeyIdentifier] ?? null;
    }

    /**
     * Sets the prefix for API key (e.g. Bearer).
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $prefix           API key prefix, e.g. Bearer
     *
     * @return $this
     */
    public function setApiKeyPrefix($apiKeyIdentifier, $prefix)
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;

        return $this;
    }

    /**
     * Gets API key prefix.
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string|null
     */
    public function getApiKeyPrefix($apiKeyIdentifier)
    {
        return $this->apiKeyPrefixes[$apiKeyIdentifier] ?? null;
    }

    /**
     * Sets the access token for OAuth.
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Gets the access token for OAuth.
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets the username for HTTP basic authentication.
     *
     * @param string $username Username for HTTP basic authentication
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Gets the username for HTTP basic authentication.
     *
     * @return string Username for HTTP basic authentication
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the password for HTTP basic authentication.
     *
     * @param string $password Password for HTTP basic authentication
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Gets the password for HTTP basic authentication.
     *
     * @return string Password for HTTP basic authentication
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the host.
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Gets the host.
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the user agent of the api client.
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (! \is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Gets the user agent of the api client.
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag.
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;

        return $this;
    }

    /**
     * Gets the debug flag.
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file.
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;

        return $this;
    }

    /**
     * Gets the debug file.
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path.
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;

        return $this;
    }

    /**
     * Gets the temp folder path.
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /**
     * Gets the default configuration instance.
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new self();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the default configuration instance.
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(self $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging.
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report = 'PHP SDK (TNT\Amazon\VendorOrders\V1) Debug Report:'.PHP_EOL;
        $report .= '    OS: '.php_uname().PHP_EOL;
        $report .= '    PHP Version: '.PHP_VERSION.PHP_EOL;
        $report .= '    The version of the OpenAPI document: v1'.PHP_EOL;
        $report .= '    Temp Folder Path: '.self::getDefaultConfiguration()->getTempFolderPath().PHP_EOL;

        return $report;
    }

    /**
     * Get API key (with prefix if set).
     *
     * @param string $apiKeyIdentifier name of apikey
     *
     * @return string|null API key with the prefix
     */
    public function getApiKeyWithPrefix($apiKeyIdentifier)
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix.' '.$apiKey;
        }

        return $keyWithPrefix;
    }
}
