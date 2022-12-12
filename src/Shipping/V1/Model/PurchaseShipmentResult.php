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
 * PurchaseShipmentResult.
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
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.   **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
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

namespace TNT\Amazon\Shipping\V1\Model;

use TNT\Amazon\Shipping\V1\ObjectSerializer;

/**
 * PurchaseShipmentResult Class Doc Comment.
 *
 * @category Class
 *
 * @description The payload schema for the purchaseShipment operation.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseShipmentResult implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PurchaseShipmentResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipment_id' => '\TNT\Amazon\Shipping\V1\Model\ShipmentId',
        'service_rate' => '\TNT\Amazon\Shipping\V1\Model\ServiceRate',
        'label_results' => '\TNT\Amazon\Shipping\V1\Model\LabelResultList',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipment_id' => null,
        'service_rate' => null,
        'label_results' => null,
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
        'shipment_id' => 'shipmentId',
        'service_rate' => 'serviceRate',
        'label_results' => 'labelResults',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_id' => 'setShipmentId',
        'service_rate' => 'setServiceRate',
        'label_results' => 'setLabelResults',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
        'service_rate' => 'getServiceRate',
        'label_results' => 'getLabelResults',
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
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['service_rate'] = isset($data['service_rate']) ? $data['service_rate'] : null;
        $this->container['label_results'] = isset($data['label_results']) ? $data['label_results'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipment_id'] === null) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }
        if ($this->container['service_rate'] === null) {
            $invalidProperties[] = "'service_rate' can't be null";
        }
        if ($this->container['label_results'] === null) {
            $invalidProperties[] = "'label_results' can't be null";
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
     * Gets shipment_id.
     *
     * @return \TNT\Amazon\Shipping\V1\Model\ShipmentId
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id.
     *
     * @param \TNT\Amazon\Shipping\V1\Model\ShipmentId $shipment_id shipment_id
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets service_rate.
     *
     * @return \TNT\Amazon\Shipping\V1\Model\ServiceRate
     */
    public function getServiceRate()
    {
        return $this->container['service_rate'];
    }

    /**
     * Sets service_rate.
     *
     * @param \TNT\Amazon\Shipping\V1\Model\ServiceRate $service_rate service_rate
     *
     * @return $this
     */
    public function setServiceRate($service_rate)
    {
        $this->container['service_rate'] = $service_rate;

        return $this;
    }

    /**
     * Gets label_results.
     *
     * @return \TNT\Amazon\Shipping\V1\Model\LabelResultList
     */
    public function getLabelResults()
    {
        return $this->container['label_results'];
    }

    /**
     * Sets label_results.
     *
     * @param \TNT\Amazon\Shipping\V1\Model\LabelResultList $label_results label_results
     *
     * @return $this
     */
    public function setLabelResults($label_results)
    {
        $this->container['label_results'] = $label_results;

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
