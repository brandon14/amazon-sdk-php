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
 * TransportDetailInput.
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
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TNT\Amazon\FulfillmentInbound\V0\Model;

use TNT\Amazon\FulfillmentInbound\V0\ObjectSerializer;

/**
 * TransportDetailInput Class Doc Comment.
 *
 * @category Class
 *
 * @description Information required to create an Amazon-partnered carrier shipping estimate, or to alert the Amazon fulfillment center to the arrival of an inbound shipment by a non-Amazon-partnered carrier.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class TransportDetailInput implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'TransportDetailInput';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'partnered_small_parcel_data' => '\TNT\Amazon\FulfillmentInbound\V0\Model\PartneredSmallParcelDataInput',
        'non_partnered_small_parcel_data' => '\TNT\Amazon\FulfillmentInbound\V0\Model\NonPartneredSmallParcelDataInput',
        'partnered_ltl_data' => '\TNT\Amazon\FulfillmentInbound\V0\Model\PartneredLtlDataInput',
        'non_partnered_ltl_data' => '\TNT\Amazon\FulfillmentInbound\V0\Model\NonPartneredLtlDataInput',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'partnered_small_parcel_data' => null,
        'non_partnered_small_parcel_data' => null,
        'partnered_ltl_data' => null,
        'non_partnered_ltl_data' => null,
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
        'partnered_small_parcel_data' => 'PartneredSmallParcelData',
        'non_partnered_small_parcel_data' => 'NonPartneredSmallParcelData',
        'partnered_ltl_data' => 'PartneredLtlData',
        'non_partnered_ltl_data' => 'NonPartneredLtlData',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'partnered_small_parcel_data' => 'setPartneredSmallParcelData',
        'non_partnered_small_parcel_data' => 'setNonPartneredSmallParcelData',
        'partnered_ltl_data' => 'setPartneredLtlData',
        'non_partnered_ltl_data' => 'setNonPartneredLtlData',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'partnered_small_parcel_data' => 'getPartneredSmallParcelData',
        'non_partnered_small_parcel_data' => 'getNonPartneredSmallParcelData',
        'partnered_ltl_data' => 'getPartneredLtlData',
        'non_partnered_ltl_data' => 'getNonPartneredLtlData',
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
        $this->container['partnered_small_parcel_data'] = isset($data['partnered_small_parcel_data']) ? $data['partnered_small_parcel_data'] : null;
        $this->container['non_partnered_small_parcel_data'] = isset($data['non_partnered_small_parcel_data']) ? $data['non_partnered_small_parcel_data'] : null;
        $this->container['partnered_ltl_data'] = isset($data['partnered_ltl_data']) ? $data['partnered_ltl_data'] : null;
        $this->container['non_partnered_ltl_data'] = isset($data['non_partnered_ltl_data']) ? $data['non_partnered_ltl_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets partnered_small_parcel_data.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\PartneredSmallParcelDataInput
     */
    public function getPartneredSmallParcelData()
    {
        return $this->container['partnered_small_parcel_data'];
    }

    /**
     * Sets partnered_small_parcel_data.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\PartneredSmallParcelDataInput $partnered_small_parcel_data partnered_small_parcel_data
     *
     * @return $this
     */
    public function setPartneredSmallParcelData($partnered_small_parcel_data)
    {
        $this->container['partnered_small_parcel_data'] = $partnered_small_parcel_data;

        return $this;
    }

    /**
     * Gets non_partnered_small_parcel_data.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\NonPartneredSmallParcelDataInput
     */
    public function getNonPartneredSmallParcelData()
    {
        return $this->container['non_partnered_small_parcel_data'];
    }

    /**
     * Sets non_partnered_small_parcel_data.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\NonPartneredSmallParcelDataInput $non_partnered_small_parcel_data non_partnered_small_parcel_data
     *
     * @return $this
     */
    public function setNonPartneredSmallParcelData($non_partnered_small_parcel_data)
    {
        $this->container['non_partnered_small_parcel_data'] = $non_partnered_small_parcel_data;

        return $this;
    }

    /**
     * Gets partnered_ltl_data.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\PartneredLtlDataInput
     */
    public function getPartneredLtlData()
    {
        return $this->container['partnered_ltl_data'];
    }

    /**
     * Sets partnered_ltl_data.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\PartneredLtlDataInput $partnered_ltl_data partnered_ltl_data
     *
     * @return $this
     */
    public function setPartneredLtlData($partnered_ltl_data)
    {
        $this->container['partnered_ltl_data'] = $partnered_ltl_data;

        return $this;
    }

    /**
     * Gets non_partnered_ltl_data.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\NonPartneredLtlDataInput
     */
    public function getNonPartneredLtlData()
    {
        return $this->container['non_partnered_ltl_data'];
    }

    /**
     * Sets non_partnered_ltl_data.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\NonPartneredLtlDataInput $non_partnered_ltl_data non_partnered_ltl_data
     *
     * @return $this
     */
    public function setNonPartneredLtlData($non_partnered_ltl_data)
    {
        $this->container['non_partnered_ltl_data'] = $non_partnered_ltl_data;

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
