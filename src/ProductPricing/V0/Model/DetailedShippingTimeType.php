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
 * DetailedShippingTimeType.
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
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace TNT\Amazon\ProductPricing\V0\Model;

use TNT\Amazon\ProductPricing\V0\ObjectSerializer;

/**
 * DetailedShippingTimeType Class Doc Comment.
 *
 * @category Class
 *
 * @description The time range in which an item will likely be shipped once an order has been placed.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class DetailedShippingTimeType implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'DetailedShippingTimeType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'minimum_hours' => 'int',
        'maximum_hours' => 'int',
        'available_date' => 'string',
        'availability_type' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'minimum_hours' => 'int64',
        'maximum_hours' => 'int64',
        'available_date' => null,
        'availability_type' => null,
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
        'minimum_hours' => 'minimumHours',
        'maximum_hours' => 'maximumHours',
        'available_date' => 'availableDate',
        'availability_type' => 'availabilityType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'minimum_hours' => 'setMinimumHours',
        'maximum_hours' => 'setMaximumHours',
        'available_date' => 'setAvailableDate',
        'availability_type' => 'setAvailabilityType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'minimum_hours' => 'getMinimumHours',
        'maximum_hours' => 'getMaximumHours',
        'available_date' => 'getAvailableDate',
        'availability_type' => 'getAvailabilityType',
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

    public const AVAILABILITY_TYPE_NOW = 'NOW';
    public const AVAILABILITY_TYPE_FUTURE_WITHOUT_DATE = 'FUTURE_WITHOUT_DATE';
    public const AVAILABILITY_TYPE_FUTURE_WITH_DATE = 'FUTURE_WITH_DATE';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getAvailabilityTypeAllowableValues()
    {
        return [
            self::AVAILABILITY_TYPE_NOW,
            self::AVAILABILITY_TYPE_FUTURE_WITHOUT_DATE,
            self::AVAILABILITY_TYPE_FUTURE_WITH_DATE,
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
        $this->container['minimum_hours'] = isset($data['minimum_hours']) ? $data['minimum_hours'] : null;
        $this->container['maximum_hours'] = isset($data['maximum_hours']) ? $data['maximum_hours'] : null;
        $this->container['available_date'] = isset($data['available_date']) ? $data['available_date'] : null;
        $this->container['availability_type'] = isset($data['availability_type']) ? $data['availability_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAvailabilityTypeAllowableValues();

        if (null !== $this->container['availability_type'] && ! \in_array($this->container['availability_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'availability_type', must be one of '%s'",
                $this->container['availability_type'],
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
     * Gets minimum_hours.
     *
     * @return int
     */
    public function getMinimumHours()
    {
        return $this->container['minimum_hours'];
    }

    /**
     * Sets minimum_hours.
     *
     * @param int $minimum_hours the minimum time, in hours, that the item will likely be shipped after the order has been placed
     *
     * @return $this
     */
    public function setMinimumHours($minimum_hours)
    {
        $this->container['minimum_hours'] = $minimum_hours;

        return $this;
    }

    /**
     * Gets maximum_hours.
     *
     * @return int
     */
    public function getMaximumHours()
    {
        return $this->container['maximum_hours'];
    }

    /**
     * Sets maximum_hours.
     *
     * @param int $maximum_hours the maximum time, in hours, that the item will likely be shipped after the order has been placed
     *
     * @return $this
     */
    public function setMaximumHours($maximum_hours)
    {
        $this->container['maximum_hours'] = $maximum_hours;

        return $this;
    }

    /**
     * Gets available_date.
     *
     * @return string
     */
    public function getAvailableDate()
    {
        return $this->container['available_date'];
    }

    /**
     * Sets available_date.
     *
     * @param string $available_date The date when the item will be available for shipping. Only displayed for items that are not currently available for shipping.
     *
     * @return $this
     */
    public function setAvailableDate($available_date)
    {
        $this->container['available_date'] = $available_date;

        return $this;
    }

    /**
     * Gets availability_type.
     *
     * @return string
     */
    public function getAvailabilityType()
    {
        return $this->container['availability_type'];
    }

    /**
     * Sets availability_type.
     *
     * @param string $availability_type Indicates whether the item is available for shipping now, or on a known or an unknown date in the future. If known, the availableDate property indicates the date that the item will be available for shipping. Possible values: NOW, FUTURE_WITHOUT_DATE, FUTURE_WITH_DATE.
     *
     * @return $this
     */
    public function setAvailabilityType($availability_type)
    {
        $allowedValues = $this->getAvailabilityTypeAllowableValues();
        if (null !== $availability_type && ! \in_array($availability_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'availability_type', must be one of '%s'", $availability_type, implode("', '", $allowedValues)));
        }
        $this->container['availability_type'] = $availability_type;

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
