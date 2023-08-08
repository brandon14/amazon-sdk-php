<?php

/**
 * This file is part of the trollandtoad/amazon-sdk-php package.
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
 * VendorShippingApi
 * PHP version ^7.2 || ^8.0.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Retail Procurement Shipments.
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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

namespace TNT\Amazon\VendorShipments\V1\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use TNT\Amazon\VendorShipments\V1\ApiException;
use TNT\Amazon\VendorShipments\V1\Configuration;
use TNT\Amazon\VendorShipments\V1\HeaderSelector;
use TNT\Amazon\VendorShipments\V1\ObjectSerializer;

/**
 * VendorShippingApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class VendorShippingApi
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
     * Operation submitShipmentConfirmations.
     *
     * @param \TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsRequest $body body (required)
     *
     * @throws \TNT\Amazon\VendorShipments\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsResponse
     */
    public function submitShipmentConfirmations($body)
    {
        [$response] = $this->submitShipmentConfirmationsWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation submitShipmentConfirmationsWithHttpInfo.
     *
     * @param \TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsRequest $body (required)
     *
     * @throws \TNT\Amazon\VendorShipments\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function submitShipmentConfirmationsWithHttpInfo($body)
    {
        $returnType = '\TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsResponse';
        $request = $this->submitShipmentConfirmationsRequest($body);

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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation submitShipmentConfirmationsAsync.
     *
     * @param \TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsRequest $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitShipmentConfirmationsAsync($body)
    {
        return $this->submitShipmentConfirmationsAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation submitShipmentConfirmationsAsyncWithHttpInfo.
     *
     * @param \TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsRequest $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitShipmentConfirmationsAsyncWithHttpInfo($body)
    {
        $returnType = '\TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsResponse';
        $request = $this->submitShipmentConfirmationsRequest($body);

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
     * Create request for operation 'submitShipmentConfirmations'.
     *
     * @param \TNT\Amazon\VendorShipments\V1\Model\SubmitShipmentConfirmationsRequest $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function submitShipmentConfirmationsRequest($body)
    {
        // Verify the required parameter 'body' is set.
        if ($body === null || (\is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling submitShipmentConfirmations');
        }

        $resourcePath = '/vendor/shipping/v1/shipmentConfirmations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // Body params.
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
            'POST',
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
