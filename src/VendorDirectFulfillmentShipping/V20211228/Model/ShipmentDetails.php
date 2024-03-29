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
 * ShipmentDetails.
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
 * Selling Partner API for Direct Fulfillment Shipping.
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * OpenAPI spec version: 2021-12-28
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TNT\Amazon\VendorDirectFulfillmentShipping\V20211228\Model;

use TNT\Amazon\VendorDirectFulfillmentShipping\V20211228\ObjectSerializer;

/**
 * ShipmentDetails Class Doc Comment.
 *
 * @category Class
 *
 * @description Details about a shipment.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentDetails implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShipmentDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipped_date' => '\DateTime',
        'shipment_status' => 'string',
        'is_priority_shipment' => 'bool',
        'vendor_order_number' => 'string',
        'estimated_delivery_date' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipped_date' => 'date-time',
        'shipment_status' => null,
        'is_priority_shipment' => null,
        'vendor_order_number' => null,
        'estimated_delivery_date' => 'date-time',
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
        'shipped_date' => 'shippedDate',
        'shipment_status' => 'shipmentStatus',
        'is_priority_shipment' => 'isPriorityShipment',
        'vendor_order_number' => 'vendorOrderNumber',
        'estimated_delivery_date' => 'estimatedDeliveryDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipped_date' => 'setShippedDate',
        'shipment_status' => 'setShipmentStatus',
        'is_priority_shipment' => 'setIsPriorityShipment',
        'vendor_order_number' => 'setVendorOrderNumber',
        'estimated_delivery_date' => 'setEstimatedDeliveryDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipped_date' => 'getShippedDate',
        'shipment_status' => 'getShipmentStatus',
        'is_priority_shipment' => 'getIsPriorityShipment',
        'vendor_order_number' => 'getVendorOrderNumber',
        'estimated_delivery_date' => 'getEstimatedDeliveryDate',
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

    public const SHIPMENT_STATUS_SHIPPED = 'SHIPPED';
    public const SHIPMENT_STATUS_FLOOR_DENIAL = 'FLOOR_DENIAL';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getShipmentStatusAllowableValues()
    {
        return [
            self::SHIPMENT_STATUS_SHIPPED,
            self::SHIPMENT_STATUS_FLOOR_DENIAL,
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
        $this->container['shipped_date'] = isset($data['shipped_date']) ? $data['shipped_date'] : null;
        $this->container['shipment_status'] = isset($data['shipment_status']) ? $data['shipment_status'] : null;
        $this->container['is_priority_shipment'] = isset($data['is_priority_shipment']) ? $data['is_priority_shipment'] : null;
        $this->container['vendor_order_number'] = isset($data['vendor_order_number']) ? $data['vendor_order_number'] : null;
        $this->container['estimated_delivery_date'] = isset($data['estimated_delivery_date']) ? $data['estimated_delivery_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipped_date'] === null) {
            $invalidProperties[] = "'shipped_date' can't be null";
        }
        if ($this->container['shipment_status'] === null) {
            $invalidProperties[] = "'shipment_status' can't be null";
        }
        $allowedValues = $this->getShipmentStatusAllowableValues();

        if (null !== $this->container['shipment_status'] && ! \in_array($this->container['shipment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipment_status', must be one of '%s'",
                $this->container['shipment_status'],
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
     * Gets shipped_date.
     *
     * @return \DateTime
     */
    public function getShippedDate()
    {
        return $this->container['shipped_date'];
    }

    /**
     * Sets shipped_date.
     *
     * @param \DateTime $shipped_date This field indicates the date of the departure of the shipment from vendor's location. Vendors are requested to send ASNs within 30 minutes of departure from their warehouse/distribution center or at least 6 hours prior to the appointment time at the Amazon destination warehouse, whichever is sooner. Shipped date mentioned in the Shipment Confirmation should not be in the future.
     *
     * @return $this
     */
    public function setShippedDate($shipped_date)
    {
        $this->container['shipped_date'] = $shipped_date;

        return $this;
    }

    /**
     * Gets shipment_status.
     *
     * @return string
     */
    public function getShipmentStatus()
    {
        return $this->container['shipment_status'];
    }

    /**
     * Sets shipment_status.
     *
     * @param string $shipment_status indicate the shipment status
     *
     * @return $this
     */
    public function setShipmentStatus($shipment_status)
    {
        $allowedValues = $this->getShipmentStatusAllowableValues();
        if (! \in_array($shipment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'shipment_status', must be one of '%s'", $shipment_status, implode("', '", $allowedValues)));
        }
        $this->container['shipment_status'] = $shipment_status;

        return $this;
    }

    /**
     * Gets is_priority_shipment.
     *
     * @return bool
     */
    public function getIsPriorityShipment()
    {
        return $this->container['is_priority_shipment'];
    }

    /**
     * Sets is_priority_shipment.
     *
     * @param bool $is_priority_shipment provide the priority of the shipment
     *
     * @return $this
     */
    public function setIsPriorityShipment($is_priority_shipment)
    {
        $this->container['is_priority_shipment'] = $is_priority_shipment;

        return $this;
    }

    /**
     * Gets vendor_order_number.
     *
     * @return string
     */
    public function getVendorOrderNumber()
    {
        return $this->container['vendor_order_number'];
    }

    /**
     * Sets vendor_order_number.
     *
     * @param string $vendor_order_number the vendor order number is a unique identifier generated by a vendor for their reference
     *
     * @return $this
     */
    public function setVendorOrderNumber($vendor_order_number)
    {
        $this->container['vendor_order_number'] = $vendor_order_number;

        return $this;
    }

    /**
     * Gets estimated_delivery_date.
     *
     * @return \DateTime
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date.
     *
     * @param \DateTime $estimated_delivery_date Date on which the shipment is expected to reach the buyer's warehouse. It needs to be an estimate based on the average transit time between the ship-from location and the destination. The exact appointment time will be provided by buyer and is potentially not known when creating the shipment confirmation.
     *
     * @return $this
     */
    public function setEstimatedDeliveryDate($estimated_delivery_date)
    {
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

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
