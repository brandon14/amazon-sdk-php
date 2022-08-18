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
 * PackageDetails.
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
 * Selling Partner API for Easy Ship.
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders.  Your Easy Ship applications can:  * Get available time slots for packages to be scheduled for delivery.  * Schedule, reschedule, and cancel Easy Ship orders.  * Print labels, invoices, and warranties.  See the [Marketplace Support Table](doc:easy-ship-api-v2022-03-23-use-case-guide) for the differences in Easy Ship operations by marketplace.
 *
 * OpenAPI spec version: 2022-03-23
 * Contact: marketplaceapitest@amazon.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TNT\Amazon\EasyShip\V20220323\Model;

use ArrayAccess;
use TNT\Amazon\EasyShip\V20220323\ObjectSerializer;

/**
 * PackageDetails Class Doc Comment.
 *
 * @category Class
 * @description Package details. Includes &#x60;packageItems&#x60;, &#x60;packageTimeSlot&#x60;, and &#x60;packageIdentifier&#x60;.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class PackageDetails implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PackageDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'package_items' => '\TNT\Amazon\EasyShip\V20220323\Model\Items',
        'package_time_slot' => '\TNT\Amazon\EasyShip\V20220323\Model\TimeSlot',
        'package_identifier' => '\TNT\Amazon\EasyShip\V20220323\Model\PackageIdentifier',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'package_items' => null,
        'package_time_slot' => null,
        'package_identifier' => null,
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
        'package_items' => 'packageItems',
        'package_time_slot' => 'packageTimeSlot',
        'package_identifier' => 'packageIdentifier',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'package_items' => 'setPackageItems',
        'package_time_slot' => 'setPackageTimeSlot',
        'package_identifier' => 'setPackageIdentifier',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'package_items' => 'getPackageItems',
        'package_time_slot' => 'getPackageTimeSlot',
        'package_identifier' => 'getPackageIdentifier',
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
        $this->container['package_items'] = isset($data['package_items']) ? $data['package_items'] : null;
        $this->container['package_time_slot'] = isset($data['package_time_slot']) ? $data['package_time_slot'] : null;
        $this->container['package_identifier'] = isset($data['package_identifier']) ? $data['package_identifier'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['package_time_slot'] === null) {
            $invalidProperties[] = "'package_time_slot' can't be null";
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
     * Gets package_items.
     *
     * @return \TNT\Amazon\EasyShip\V20220323\Model\Items
     */
    public function getPackageItems()
    {
        return $this->container['package_items'];
    }

    /**
     * Sets package_items.
     *
     * @param \TNT\Amazon\EasyShip\V20220323\Model\Items $package_items package_items
     *
     * @return $this
     */
    public function setPackageItems($package_items)
    {
        $this->container['package_items'] = $package_items;

        return $this;
    }

    /**
     * Gets package_time_slot.
     *
     * @return \TNT\Amazon\EasyShip\V20220323\Model\TimeSlot
     */
    public function getPackageTimeSlot()
    {
        return $this->container['package_time_slot'];
    }

    /**
     * Sets package_time_slot.
     *
     * @param \TNT\Amazon\EasyShip\V20220323\Model\TimeSlot $package_time_slot package_time_slot
     *
     * @return $this
     */
    public function setPackageTimeSlot($package_time_slot)
    {
        $this->container['package_time_slot'] = $package_time_slot;

        return $this;
    }

    /**
     * Gets package_identifier.
     *
     * @return \TNT\Amazon\EasyShip\V20220323\Model\PackageIdentifier
     */
    public function getPackageIdentifier()
    {
        return $this->container['package_identifier'];
    }

    /**
     * Sets package_identifier.
     *
     * @param \TNT\Amazon\EasyShip\V20220323\Model\PackageIdentifier $package_identifier package_identifier
     *
     * @return $this
     */
    public function setPackageIdentifier($package_identifier)
    {
        $this->container['package_identifier'] = $package_identifier;

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
