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
 * BoxContentsFeeDetails.
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
 * BoxContentsFeeDetails Class Doc Comment.
 *
 * @category Class
 *
 * @description The manual processing fee per unit and total fee for a shipment.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class BoxContentsFeeDetails implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'BoxContentsFeeDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'total_units' => '\TNT\Amazon\FulfillmentInbound\V0\Model\Quantity',
        'fee_per_unit' => '\TNT\Amazon\FulfillmentInbound\V0\Model\Amount',
        'total_fee' => '\TNT\Amazon\FulfillmentInbound\V0\Model\Amount',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'total_units' => null,
        'fee_per_unit' => null,
        'total_fee' => null,
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
        'total_units' => 'TotalUnits',
        'fee_per_unit' => 'FeePerUnit',
        'total_fee' => 'TotalFee',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'total_units' => 'setTotalUnits',
        'fee_per_unit' => 'setFeePerUnit',
        'total_fee' => 'setTotalFee',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'total_units' => 'getTotalUnits',
        'fee_per_unit' => 'getFeePerUnit',
        'total_fee' => 'getTotalFee',
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
        $this->container['total_units'] = isset($data['total_units']) ? $data['total_units'] : null;
        $this->container['fee_per_unit'] = isset($data['fee_per_unit']) ? $data['fee_per_unit'] : null;
        $this->container['total_fee'] = isset($data['total_fee']) ? $data['total_fee'] : null;
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
     * Gets total_units.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\Quantity
     */
    public function getTotalUnits()
    {
        return $this->container['total_units'];
    }

    /**
     * Sets total_units.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\Quantity $total_units the number of units to ship
     *
     * @return $this
     */
    public function setTotalUnits($total_units)
    {
        $this->container['total_units'] = $total_units;

        return $this;
    }

    /**
     * Gets fee_per_unit.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\Amount
     */
    public function getFeePerUnit()
    {
        return $this->container['fee_per_unit'];
    }

    /**
     * Sets fee_per_unit.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\Amount $fee_per_unit the manual processing fee per unit
     *
     * @return $this
     */
    public function setFeePerUnit($fee_per_unit)
    {
        $this->container['fee_per_unit'] = $fee_per_unit;

        return $this;
    }

    /**
     * Gets total_fee.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\Amount
     */
    public function getTotalFee()
    {
        return $this->container['total_fee'];
    }

    /**
     * Sets total_fee.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\Amount $total_fee the total manual processing fee for the shipment
     *
     * @return $this
     */
    public function setTotalFee($total_fee)
    {
        $this->container['total_fee'] = $total_fee;

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
