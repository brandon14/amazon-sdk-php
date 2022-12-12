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
 * FbaInventoryApi
 * PHP version ^7.2 || ^8.0.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for FBA Inventory.
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
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

namespace TNT\Amazon\FbaInventory\V1\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use TNT\Amazon\FbaInventory\V1\ApiException;
use TNT\Amazon\FbaInventory\V1\Configuration;
use TNT\Amazon\FbaInventory\V1\HeaderSelector;
use TNT\Amazon\FbaInventory\V1\ObjectSerializer;

/**
 * FbaInventoryApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class FbaInventoryApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfiguration()
    {
        return $this->config;
    }

    /**
     * Operation getInventorySummaries.
     *
     * @param string    $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string    $granularity_id   The granularity ID for the inventory aggregation level. (required)
     * @param string[]  $marketplace_ids  The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool      $details          true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param \DateTime $start_date_time  A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param string[]  $seller_skus      A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param string    $next_token       String token returned in the response of your previous request. (optional)
     *
     * @throws \TNT\Amazon\FbaInventory\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \TNT\Amazon\FbaInventory\V1\Model\GetInventorySummariesResponse
     */
    public function getInventorySummaries($granularity_type, $granularity_id, $marketplace_ids, $details = 'false', $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        [$response] = $this->getInventorySummariesWithHttpInfo($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token);

        return $response;
    }

    /**
     * Operation getInventorySummariesWithHttpInfo.
     *
     * @param string    $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string    $granularity_id   The granularity ID for the inventory aggregation level. (required)
     * @param string[]  $marketplace_ids  The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool      $details          true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param \DateTime $start_date_time  A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param string[]  $seller_skus      A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param string    $next_token       String token returned in the response of your previous request. (optional)
     *
     * @throws \TNT\Amazon\FbaInventory\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \TNT\Amazon\FbaInventory\V1\Model\GetInventorySummariesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInventorySummariesWithHttpInfo($granularity_type, $granularity_id, $marketplace_ids, $details = 'false', $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        $returnType = '\TNT\Amazon\FbaInventory\V1\Model\GetInventorySummariesResponse';
        $request = $this->getInventorySummariesRequest($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token);

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null, $e);
            } catch (ConnectException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null, $e);
            } catch (GuzzleException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null, $e);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
            }

            $responseBody = $response->getBody();

            if ($returnType === '\SplFileObject') {
                $content = $responseBody; // Stream goes to serializer.
            } else {
                $content = $responseBody->getContents();

                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\FbaInventory\V1\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\FbaInventory\V1\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\FbaInventory\V1\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\FbaInventory\V1\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\FbaInventory\V1\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\FbaInventory\V1\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\FbaInventory\V1\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getInventorySummariesAsync.
     *
     * @param string    $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string    $granularity_id   The granularity ID for the inventory aggregation level. (required)
     * @param string[]  $marketplace_ids  The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool      $details          true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param \DateTime $start_date_time  A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param string[]  $seller_skus      A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param string    $next_token       String token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventorySummariesAsync($granularity_type, $granularity_id, $marketplace_ids, $details = 'false', $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        return $this->getInventorySummariesAsyncWithHttpInfo($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInventorySummariesAsyncWithHttpInfo.
     *
     * @param string    $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string    $granularity_id   The granularity ID for the inventory aggregation level. (required)
     * @param string[]  $marketplace_ids  The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool      $details          true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param \DateTime $start_date_time  A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param string[]  $seller_skus      A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param string    $next_token       String token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventorySummariesAsyncWithHttpInfo($granularity_type, $granularity_id, $marketplace_ids, $details = 'false', $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        $returnType = '\TNT\Amazon\FbaInventory\V1\Model\GetInventorySummariesResponse';
        $request = $this->getInventorySummariesRequest($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();

                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; // Stream goes to serializer.
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody(), $exception);
                }
            );
    }

    /**
     * Create request for operation 'getInventorySummaries'.
     *
     * @param string    $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string    $granularity_id   The granularity ID for the inventory aggregation level. (required)
     * @param string[]  $marketplace_ids  The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool      $details          true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param \DateTime $start_date_time  A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param string[]  $seller_skus      A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param string    $next_token       String token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getInventorySummariesRequest($granularity_type, $granularity_id, $marketplace_ids, $details = 'false', $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        // Verify the required parameter 'granularity_type' is set.
        if ($granularity_type === null || (\is_array($granularity_type) && count($granularity_type) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $granularity_type when calling getInventorySummaries');
        }
        // Verify the required parameter 'granularity_id' is set.
        if ($granularity_id === null || (\is_array($granularity_id) && count($granularity_id) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $granularity_id when calling getInventorySummaries');
        }
        // Verify the required parameter 'marketplace_ids' is set.
        if ($marketplace_ids === null || (\is_array($marketplace_ids) && count($marketplace_ids) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_ids when calling getInventorySummaries');
        }
        if (count($marketplace_ids) > 1) {
            throw new \InvalidArgumentException('invalid value for "$marketplace_ids" when calling FbaInventoryApi.getInventorySummaries, number of items must be less than or equal to 1.');
        }

        if ($seller_skus !== null && count($seller_skus) > 50) {
            throw new \InvalidArgumentException('invalid value for "$seller_skus" when calling FbaInventoryApi.getInventorySummaries, number of items must be less than or equal to 50.');
        }

        $resourcePath = '/fba/inventory/v1/summaries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // Query params.
        if ($details !== null) {
            $queryParams['details'] = ObjectSerializer::toQueryValue($details);
        }
        // Query params.
        if ($granularity_type !== null) {
            $queryParams['granularityType'] = ObjectSerializer::toQueryValue($granularity_type);
        }
        // Query params.
        if ($granularity_id !== null) {
            $queryParams['granularityId'] = ObjectSerializer::toQueryValue($granularity_id);
        }
        // Query params.
        if ($start_date_time !== null) {
            $queryParams['startDateTime'] = ObjectSerializer::toQueryValue($start_date_time);
        }
        // Query params.
        if (\is_array($seller_skus)) {
            $queryParams['sellerSkus'] = $seller_skus;
        } elseif ($seller_skus !== null) {
            $queryParams['sellerSkus'] = ObjectSerializer::toQueryValue($seller_skus);
        }
        // Query params.
        if ($next_token !== null) {
            $queryParams['nextToken'] = ObjectSerializer::toQueryValue($next_token);
        }
        // Query params.
        if (\is_array($marketplace_ids)) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
        } elseif ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_ids);
        }

        // Body params.
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // For model (json/xml).
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if ($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }

                // array has no __toString(), so we should encode it manually
                if (\is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue,
                    ];
                }

                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);

        return new Request(
            'GET',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option.
     *
     * @throws \RuntimeException on file opening failure
     *
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];

        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'ab');

            if (! $options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: '.$this->config->getDebugFile());
            }
        }

        return $options;
    }
}
