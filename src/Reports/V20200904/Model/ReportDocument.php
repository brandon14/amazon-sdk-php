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
 * ReportDocument.
 *
 * PHP version ^7.2 || ^8.0
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Reports.
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * OpenAPI spec version: 2020-09-04
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TNT\Amazon\Reports\V20200904\Model;

use TNT\Amazon\Reports\V20200904\ObjectSerializer;

/**
 * ReportDocument Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ReportDocument implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ReportDocument';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'report_document_id' => 'string',
        'url' => 'string',
        'encryption_details' => '\TNT\Amazon\Reports\V20200904\Model\ReportDocumentEncryptionDetails',
        'compression_algorithm' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'report_document_id' => null,
        'url' => null,
        'encryption_details' => null,
        'compression_algorithm' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'report_document_id' => 'reportDocumentId',
        'url' => 'url',
        'encryption_details' => 'encryptionDetails',
        'compression_algorithm' => 'compressionAlgorithm',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'report_document_id' => 'setReportDocumentId',
        'url' => 'setUrl',
        'encryption_details' => 'setEncryptionDetails',
        'compression_algorithm' => 'setCompressionAlgorithm',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'report_document_id' => 'getReportDocumentId',
        'url' => 'getUrl',
        'encryption_details' => 'getEncryptionDetails',
        'compression_algorithm' => 'getCompressionAlgorithm',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    public const COMPRESSION_ALGORITHM_GZIP = 'GZIP';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getCompressionAlgorithmAllowableValues()
    {
        return [
            self::COMPRESSION_ALGORITHM_GZIP,
        ];
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['report_document_id'] = isset($data['report_document_id']) ? $data['report_document_id'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['encryption_details'] = isset($data['encryption_details']) ? $data['encryption_details'] : null;
        $this->container['compression_algorithm'] = isset($data['compression_algorithm']) ? $data['compression_algorithm'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['report_document_id'] === null) {
            $invalidProperties[] = "'report_document_id' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['encryption_details'] === null) {
            $invalidProperties[] = "'encryption_details' can't be null";
        }
        $allowedValues = $this->getCompressionAlgorithmAllowableValues();

        if (null !== $this->container['compression_algorithm'] && ! \in_array($this->container['compression_algorithm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'compression_algorithm', must be one of '%s'",
                $this->container['compression_algorithm'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets report_document_id.
     *
     * @return string
     */
    public function getReportDocumentId()
    {
        return $this->container['report_document_id'];
    }

    /**
     * Sets report_document_id.
     *
     * @param string $report_document_id The identifier for the report document. This identifier is unique only in combination with a seller ID.
     *
     * @return $this
     */
    public function setReportDocumentId($report_document_id)
    {
        $this->container['report_document_id'] = $report_document_id;

        return $this;
    }

    /**
     * Gets url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url.
     *
     * @param string $url A presigned URL for the report document. If `compressionAlgorithm` is not returned, you can download the report directly from this URL. This URL expires after 5 minutes.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets encryption_details.
     *
     * @return \TNT\Amazon\Reports\V20200904\Model\ReportDocumentEncryptionDetails
     */
    public function getEncryptionDetails()
    {
        return $this->container['encryption_details'];
    }

    /**
     * Sets encryption_details.
     *
     * @param \TNT\Amazon\Reports\V20200904\Model\ReportDocumentEncryptionDetails $encryption_details encryption_details
     *
     * @return $this
     */
    public function setEncryptionDetails($encryption_details)
    {
        $this->container['encryption_details'] = $encryption_details;

        return $this;
    }

    /**
     * Gets compression_algorithm.
     *
     * @return string
     */
    public function getCompressionAlgorithm()
    {
        return $this->container['compression_algorithm'];
    }

    /**
     * Sets compression_algorithm.
     *
     * @param string $compression_algorithm If the report document contents have been compressed, the compression algorithm used is returned in this property and you must decompress the report when you download. Otherwise, you can download the report directly. Refer to [Step 2. Download and decrypt the report](doc:reports-api-v2020-09-04-use-case-guide#step-2-download-and-decrypt-the-report) in the use case guide, where sample code is provided.
     *
     * @return $this
     */
    public function setCompressionAlgorithm($compression_algorithm)
    {
        $allowedValues = $this->getCompressionAlgorithmAllowableValues();
        if (null !== $compression_algorithm && ! \in_array($compression_algorithm, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'compression_algorithm', must be one of '%s'", $compression_algorithm, implode("', '", $allowedValues)));
        }
        $this->container['compression_algorithm'] = $compression_algorithm;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     */
    public function offsetSet($offset, $value): void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (\defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
