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
 * FixedSlotCapacityQuery.
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
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
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

namespace TNT\Amazon\Services\V1\Model;

use TNT\Amazon\Services\V1\ObjectSerializer;

/**
 * FixedSlotCapacityQuery Class Doc Comment.
 *
 * @category Class
 *
 * @description Request schema for the &#x60;getFixedSlotCapacity&#x60; operation. This schema is used to define the time range, capacity types and slot duration which are being queried.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class FixedSlotCapacityQuery implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FixedSlotCapacityQuery';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'capacity_types' => '\TNT\Amazon\Services\V1\Model\CapacityType[]',
        'slot_duration' => 'float',
        'start_date_time' => '\DateTime',
        'end_date_time' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'capacity_types' => null,
        'slot_duration' => 'int32',
        'start_date_time' => 'date-time',
        'end_date_time' => 'date-time',
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
        'capacity_types' => 'capacityTypes',
        'slot_duration' => 'slotDuration',
        'start_date_time' => 'startDateTime',
        'end_date_time' => 'endDateTime',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'capacity_types' => 'setCapacityTypes',
        'slot_duration' => 'setSlotDuration',
        'start_date_time' => 'setStartDateTime',
        'end_date_time' => 'setEndDateTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'capacity_types' => 'getCapacityTypes',
        'slot_duration' => 'getSlotDuration',
        'start_date_time' => 'getStartDateTime',
        'end_date_time' => 'getEndDateTime',
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
        $this->container['capacity_types'] = isset($data['capacity_types']) ? $data['capacity_types'] : null;
        $this->container['slot_duration'] = isset($data['slot_duration']) ? $data['slot_duration'] : null;
        $this->container['start_date_time'] = isset($data['start_date_time']) ? $data['start_date_time'] : null;
        $this->container['end_date_time'] = isset($data['end_date_time']) ? $data['end_date_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_date_time'] === null) {
            $invalidProperties[] = "'start_date_time' can't be null";
        }
        if ($this->container['end_date_time'] === null) {
            $invalidProperties[] = "'end_date_time' can't be null";
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
     * Gets capacity_types.
     *
     * @return \TNT\Amazon\Services\V1\Model\CapacityType[]
     */
    public function getCapacityTypes()
    {
        return $this->container['capacity_types'];
    }

    /**
     * Sets capacity_types.
     *
     * @param \TNT\Amazon\Services\V1\Model\CapacityType[] $capacity_types An array of capacity types which are being requested. Default value is `[SCHEDULED_CAPACITY]`.
     *
     * @return $this
     */
    public function setCapacityTypes($capacity_types)
    {
        $this->container['capacity_types'] = $capacity_types;

        return $this;
    }

    /**
     * Gets slot_duration.
     *
     * @return float
     */
    public function getSlotDuration()
    {
        return $this->container['slot_duration'];
    }

    /**
     * Sets slot_duration.
     *
     * @param float $slot_duration Size in which slots are being requested. This value should be a multiple of 5 and fall in the range: 5 <= `slotDuration` <= 360.
     *
     * @return $this
     */
    public function setSlotDuration($slot_duration)
    {
        $this->container['slot_duration'] = $slot_duration;

        return $this;
    }

    /**
     * Gets start_date_time.
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time.
     *
     * @param \DateTime $start_date_time start date time from which the capacity slots are being requested in ISO 8601 format
     *
     * @return $this
     */
    public function setStartDateTime($start_date_time)
    {
        $this->container['start_date_time'] = $start_date_time;

        return $this;
    }

    /**
     * Gets end_date_time.
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->container['end_date_time'];
    }

    /**
     * Sets end_date_time.
     *
     * @param \DateTime $end_date_time end date time up to which the capacity slots are being requested in ISO 8601 format
     *
     * @return $this
     */
    public function setEndDateTime($end_date_time)
    {
        $this->container['end_date_time'] = $end_date_time;

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
