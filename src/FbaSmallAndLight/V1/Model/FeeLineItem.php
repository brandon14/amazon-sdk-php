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
 * FeeLineItem.
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
 * Selling Partner API for FBA Small And Light.
 *
 * The Selling Partner API for FBA Small and Light lets you help sellers manage their listings in the Small and Light program. The program reduces the cost of fulfilling orders for small and lightweight FBA inventory. You can enroll or remove items from the program and check item eligibility and enrollment status. You can also preview the estimated program fees charged to a seller for items sold while enrolled in the program.
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

namespace TNT\Amazon\FbaSmallAndLight\V1\Model;

use ArrayAccess;
use TNT\Amazon\FbaSmallAndLight\V1\ObjectSerializer;

/**
 * FeeLineItem Class Doc Comment.
 *
 * @category Class
 * @description Fee details for a specific fee.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class FeeLineItem implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FeeLineItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fee_type' => 'string',
        'fee_charge' => '\TNT\Amazon\FbaSmallAndLight\V1\Model\MoneyType',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fee_type' => null,
        'fee_charge' => null,
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
        'fee_type' => 'feeType',
        'fee_charge' => 'feeCharge',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'fee_type' => 'setFeeType',
        'fee_charge' => 'setFeeCharge',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'fee_type' => 'getFeeType',
        'fee_charge' => 'getFeeCharge',
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

    public const FEE_TYPE_FBA_WEIGHT_BASED_FEE = 'FBAWeightBasedFee';
    public const FEE_TYPE_FBA_PER_ORDER_FULFILLMENT_FEE = 'FBAPerOrderFulfillmentFee';
    public const FEE_TYPE_FBA_PER_UNIT_FULFILLMENT_FEE = 'FBAPerUnitFulfillmentFee';
    public const FEE_TYPE_COMMISSION = 'Commission';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getFeeTypeAllowableValues()
    {
        return [
            self::FEE_TYPE_FBA_WEIGHT_BASED_FEE,
            self::FEE_TYPE_FBA_PER_ORDER_FULFILLMENT_FEE,
            self::FEE_TYPE_FBA_PER_UNIT_FULFILLMENT_FEE,
            self::FEE_TYPE_COMMISSION,
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
        $this->container['fee_type'] = isset($data['fee_type']) ? $data['fee_type'] : null;
        $this->container['fee_charge'] = isset($data['fee_charge']) ? $data['fee_charge'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fee_type'] === null) {
            $invalidProperties[] = "'fee_type' can't be null";
        }
        $allowedValues = $this->getFeeTypeAllowableValues();

        if (null !== $this->container['fee_type'] && ! \in_array($this->container['fee_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fee_type', must be one of '%s'",
                $this->container['fee_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fee_charge'] === null) {
            $invalidProperties[] = "'fee_charge' can't be null";
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
     * Gets fee_type.
     *
     * @return string
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type.
     *
     * @param string $fee_type the type of fee charged to the seller
     *
     * @return $this
     */
    public function setFeeType($fee_type)
    {
        $allowedValues = $this->getFeeTypeAllowableValues();
        if (! \in_array($fee_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'fee_type', must be one of '%s'", $fee_type, implode("', '", $allowedValues)));
        }
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets fee_charge.
     *
     * @return \TNT\Amazon\FbaSmallAndLight\V1\Model\MoneyType
     */
    public function getFeeCharge()
    {
        return $this->container['fee_charge'];
    }

    /**
     * Sets fee_charge.
     *
     * @param \TNT\Amazon\FbaSmallAndLight\V1\Model\MoneyType $fee_charge amount charged to the seller for the specific fee type
     *
     * @return $this
     */
    public function setFeeCharge($fee_charge)
    {
        $this->container['fee_charge'] = $fee_charge;

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
