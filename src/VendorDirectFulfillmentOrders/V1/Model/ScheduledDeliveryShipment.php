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
 * ScheduledDeliveryShipment.
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
 * Selling Partner API for Direct Fulfillment Orders.
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
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

namespace TNT\Amazon\VendorDirectFulfillmentOrders\V1\Model;

use TNT\Amazon\VendorDirectFulfillmentOrders\V1\ObjectSerializer;

/**
 * ScheduledDeliveryShipment Class Doc Comment.
 *
 * @category Class
 *
 * @description Dates for the scheduled delivery shipments.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ScheduledDeliveryShipment implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ScheduledDeliveryShipment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'scheduled_delivery_service_type' => 'string',
        'earliest_nominated_delivery_date' => '\DateTime',
        'latest_nominated_delivery_date' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'scheduled_delivery_service_type' => null,
        'earliest_nominated_delivery_date' => 'date-time',
        'latest_nominated_delivery_date' => 'date-time',
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
        'scheduled_delivery_service_type' => 'scheduledDeliveryServiceType',
        'earliest_nominated_delivery_date' => 'earliestNominatedDeliveryDate',
        'latest_nominated_delivery_date' => 'latestNominatedDeliveryDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'scheduled_delivery_service_type' => 'setScheduledDeliveryServiceType',
        'earliest_nominated_delivery_date' => 'setEarliestNominatedDeliveryDate',
        'latest_nominated_delivery_date' => 'setLatestNominatedDeliveryDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'scheduled_delivery_service_type' => 'getScheduledDeliveryServiceType',
        'earliest_nominated_delivery_date' => 'getEarliestNominatedDeliveryDate',
        'latest_nominated_delivery_date' => 'getLatestNominatedDeliveryDate',
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
        $this->container['scheduled_delivery_service_type'] = isset($data['scheduled_delivery_service_type']) ? $data['scheduled_delivery_service_type'] : null;
        $this->container['earliest_nominated_delivery_date'] = isset($data['earliest_nominated_delivery_date']) ? $data['earliest_nominated_delivery_date'] : null;
        $this->container['latest_nominated_delivery_date'] = isset($data['latest_nominated_delivery_date']) ? $data['latest_nominated_delivery_date'] : null;
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
     * Gets scheduled_delivery_service_type.
     *
     * @return string
     */
    public function getScheduledDeliveryServiceType()
    {
        return $this->container['scheduled_delivery_service_type'];
    }

    /**
     * Sets scheduled_delivery_service_type.
     *
     * @param string $scheduled_delivery_service_type scheduled delivery service type
     *
     * @return $this
     */
    public function setScheduledDeliveryServiceType($scheduled_delivery_service_type)
    {
        $this->container['scheduled_delivery_service_type'] = $scheduled_delivery_service_type;

        return $this;
    }

    /**
     * Gets earliest_nominated_delivery_date.
     *
     * @return \DateTime
     */
    public function getEarliestNominatedDeliveryDate()
    {
        return $this->container['earliest_nominated_delivery_date'];
    }

    /**
     * Sets earliest_nominated_delivery_date.
     *
     * @param \DateTime $earliest_nominated_delivery_date earliest nominated delivery date for the scheduled delivery
     *
     * @return $this
     */
    public function setEarliestNominatedDeliveryDate($earliest_nominated_delivery_date)
    {
        $this->container['earliest_nominated_delivery_date'] = $earliest_nominated_delivery_date;

        return $this;
    }

    /**
     * Gets latest_nominated_delivery_date.
     *
     * @return \DateTime
     */
    public function getLatestNominatedDeliveryDate()
    {
        return $this->container['latest_nominated_delivery_date'];
    }

    /**
     * Sets latest_nominated_delivery_date.
     *
     * @param \DateTime $latest_nominated_delivery_date latest nominated delivery date for the scheduled delivery
     *
     * @return $this
     */
    public function setLatestNominatedDeliveryDate($latest_nominated_delivery_date)
    {
        $this->container['latest_nominated_delivery_date'] = $latest_nominated_delivery_date;

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
