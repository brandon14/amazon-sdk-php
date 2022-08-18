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
 * Package.
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
 * Package Class Doc Comment.
 *
 * @category Class
 * @description A package. This object contains all the details of the scheduled Easy Ship package including the package identifier, physical attributes such as dimensions and weight, selected time slot to handover the package to carrier, status of the package, and tracking/invoice details.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Package implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Package';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'scheduled_package_id' => '\TNT\Amazon\EasyShip\V20220323\Model\ScheduledPackageId',
        'package_dimensions' => '\TNT\Amazon\EasyShip\V20220323\Model\Dimensions',
        'package_weight' => '\TNT\Amazon\EasyShip\V20220323\Model\Weight',
        'package_items' => '\TNT\Amazon\EasyShip\V20220323\Model\Items',
        'package_time_slot' => '\TNT\Amazon\EasyShip\V20220323\Model\TimeSlot',
        'package_identifier' => '\TNT\Amazon\EasyShip\V20220323\Model\PackageIdentifier',
        'invoice' => '\TNT\Amazon\EasyShip\V20220323\Model\InvoiceData',
        'package_status' => '\TNT\Amazon\EasyShip\V20220323\Model\PackageStatus',
        'tracking_details' => '\TNT\Amazon\EasyShip\V20220323\Model\TrackingDetails',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'scheduled_package_id' => null,
        'package_dimensions' => null,
        'package_weight' => null,
        'package_items' => null,
        'package_time_slot' => null,
        'package_identifier' => null,
        'invoice' => null,
        'package_status' => null,
        'tracking_details' => null,
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
        'scheduled_package_id' => 'scheduledPackageId',
        'package_dimensions' => 'packageDimensions',
        'package_weight' => 'packageWeight',
        'package_items' => 'packageItems',
        'package_time_slot' => 'packageTimeSlot',
        'package_identifier' => 'packageIdentifier',
        'invoice' => 'invoice',
        'package_status' => 'packageStatus',
        'tracking_details' => 'trackingDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'scheduled_package_id' => 'setScheduledPackageId',
        'package_dimensions' => 'setPackageDimensions',
        'package_weight' => 'setPackageWeight',
        'package_items' => 'setPackageItems',
        'package_time_slot' => 'setPackageTimeSlot',
        'package_identifier' => 'setPackageIdentifier',
        'invoice' => 'setInvoice',
        'package_status' => 'setPackageStatus',
        'tracking_details' => 'setTrackingDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'scheduled_package_id' => 'getScheduledPackageId',
        'package_dimensions' => 'getPackageDimensions',
        'package_weight' => 'getPackageWeight',
        'package_items' => 'getPackageItems',
        'package_time_slot' => 'getPackageTimeSlot',
        'package_identifier' => 'getPackageIdentifier',
        'invoice' => 'getInvoice',
        'package_status' => 'getPackageStatus',
        'tracking_details' => 'getTrackingDetails',
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
        $this->container['scheduled_package_id'] = isset($data['scheduled_package_id']) ? $data['scheduled_package_id'] : null;
        $this->container['package_dimensions'] = isset($data['package_dimensions']) ? $data['package_dimensions'] : null;
        $this->container['package_weight'] = isset($data['package_weight']) ? $data['package_weight'] : null;
        $this->container['package_items'] = isset($data['package_items']) ? $data['package_items'] : null;
        $this->container['package_time_slot'] = isset($data['package_time_slot']) ? $data['package_time_slot'] : null;
        $this->container['package_identifier'] = isset($data['package_identifier']) ? $data['package_identifier'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['package_status'] = isset($data['package_status']) ? $data['package_status'] : null;
        $this->container['tracking_details'] = isset($data['tracking_details']) ? $data['tracking_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['scheduled_package_id'] === null) {
            $invalidProperties[] = "'scheduled_package_id' can't be null";
        }
        if ($this->container['package_dimensions'] === null) {
            $invalidProperties[] = "'package_dimensions' can't be null";
        }
        if ($this->container['package_weight'] === null) {
            $invalidProperties[] = "'package_weight' can't be null";
        }
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
     * Gets scheduled_package_id.
     *
     * @return \TNT\Amazon\EasyShip\V20220323\Model\ScheduledPackageId
     */
    public function getScheduledPackageId()
    {
        return $this->container['scheduled_package_id'];
    }

    /**
     * Sets scheduled_package_id.
     *
     * @param \TNT\Amazon\EasyShip\V20220323\Model\ScheduledPackageId $scheduled_package_id scheduled_package_id
     *
     * @return $this
     */
    public function setScheduledPackageId($scheduled_package_id)
    {
        $this->container['scheduled_package_id'] = $scheduled_package_id;

        return $this;
    }

    /**
     * Gets package_dimensions.
     *
     * @return \TNT\Amazon\EasyShip\V20220323\Model\Dimensions
     */
    public function getPackageDimensions()
    {
        return $this->container['package_dimensions'];
    }

    /**
     * Sets package_dimensions.
     *
     * @param \TNT\Amazon\EasyShip\V20220323\Model\Dimensions $package_dimensions package_dimensions
     *
     * @return $this
     */
    public function setPackageDimensions($package_dimensions)
    {
        $this->container['package_dimensions'] = $package_dimensions;

        return $this;
    }

    /**
     * Gets package_weight.
     *
     * @return \TNT\Amazon\EasyShip\V20220323\Model\Weight
     */
    public function getPackageWeight()
    {
        return $this->container['package_weight'];
    }

    /**
     * Sets package_weight.
     *
     * @param \TNT\Amazon\EasyShip\V20220323\Model\Weight $package_weight package_weight
     *
     * @return $this
     */
    public function setPackageWeight($package_weight)
    {
        $this->container['package_weight'] = $package_weight;

        return $this;
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
     * Gets invoice.
     *
     * @return \TNT\Amazon\EasyShip\V20220323\Model\InvoiceData
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice.
     *
     * @param \TNT\Amazon\EasyShip\V20220323\Model\InvoiceData $invoice invoice
     *
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets package_status.
     *
     * @return \TNT\Amazon\EasyShip\V20220323\Model\PackageStatus
     */
    public function getPackageStatus()
    {
        return $this->container['package_status'];
    }

    /**
     * Sets package_status.
     *
     * @param \TNT\Amazon\EasyShip\V20220323\Model\PackageStatus $package_status package_status
     *
     * @return $this
     */
    public function setPackageStatus($package_status)
    {
        $this->container['package_status'] = $package_status;

        return $this;
    }

    /**
     * Gets tracking_details.
     *
     * @return \TNT\Amazon\EasyShip\V20220323\Model\TrackingDetails
     */
    public function getTrackingDetails()
    {
        return $this->container['tracking_details'];
    }

    /**
     * Sets tracking_details.
     *
     * @param \TNT\Amazon\EasyShip\V20220323\Model\TrackingDetails $tracking_details tracking_details
     *
     * @return $this
     */
    public function setTrackingDetails($tracking_details)
    {
        $this->container['tracking_details'] = $tracking_details;

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