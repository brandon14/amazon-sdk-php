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

use ArrayAccess;
use TNT\Amazon\VendorDirectFulfillmentOrders\V1\ObjectSerializer;

/**
 * ShipmentDetails Class Doc Comment.
 *
 * @category Class
 * @description Shipment details required for the shipment.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentDetails implements ModelInterface, ArrayAccess
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
        'is_priority_shipment' => 'bool',
        'is_scheduled_delivery_shipment' => 'bool',
        'is_pslip_required' => 'bool',
        'is_gift' => 'bool',
        'ship_method' => 'string',
        'shipment_dates' => '\TNT\Amazon\VendorDirectFulfillmentOrders\V1\Model\ShipmentDates',
        'message_to_customer' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'is_priority_shipment' => null,
        'is_scheduled_delivery_shipment' => null,
        'is_pslip_required' => null,
        'is_gift' => null,
        'ship_method' => null,
        'shipment_dates' => null,
        'message_to_customer' => null,
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
        'is_priority_shipment' => 'isPriorityShipment',
        'is_scheduled_delivery_shipment' => 'isScheduledDeliveryShipment',
        'is_pslip_required' => 'isPslipRequired',
        'is_gift' => 'isGift',
        'ship_method' => 'shipMethod',
        'shipment_dates' => 'shipmentDates',
        'message_to_customer' => 'messageToCustomer',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'is_priority_shipment' => 'setIsPriorityShipment',
        'is_scheduled_delivery_shipment' => 'setIsScheduledDeliveryShipment',
        'is_pslip_required' => 'setIsPslipRequired',
        'is_gift' => 'setIsGift',
        'ship_method' => 'setShipMethod',
        'shipment_dates' => 'setShipmentDates',
        'message_to_customer' => 'setMessageToCustomer',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'is_priority_shipment' => 'getIsPriorityShipment',
        'is_scheduled_delivery_shipment' => 'getIsScheduledDeliveryShipment',
        'is_pslip_required' => 'getIsPslipRequired',
        'is_gift' => 'getIsGift',
        'ship_method' => 'getShipMethod',
        'shipment_dates' => 'getShipmentDates',
        'message_to_customer' => 'getMessageToCustomer',
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
        $this->container['is_priority_shipment'] = isset($data['is_priority_shipment']) ? $data['is_priority_shipment'] : null;
        $this->container['is_scheduled_delivery_shipment'] = isset($data['is_scheduled_delivery_shipment']) ? $data['is_scheduled_delivery_shipment'] : null;
        $this->container['is_pslip_required'] = isset($data['is_pslip_required']) ? $data['is_pslip_required'] : null;
        $this->container['is_gift'] = isset($data['is_gift']) ? $data['is_gift'] : null;
        $this->container['ship_method'] = isset($data['ship_method']) ? $data['ship_method'] : null;
        $this->container['shipment_dates'] = isset($data['shipment_dates']) ? $data['shipment_dates'] : null;
        $this->container['message_to_customer'] = isset($data['message_to_customer']) ? $data['message_to_customer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_priority_shipment'] === null) {
            $invalidProperties[] = "'is_priority_shipment' can't be null";
        }
        if ($this->container['is_pslip_required'] === null) {
            $invalidProperties[] = "'is_pslip_required' can't be null";
        }
        if ($this->container['ship_method'] === null) {
            $invalidProperties[] = "'ship_method' can't be null";
        }
        if ($this->container['shipment_dates'] === null) {
            $invalidProperties[] = "'shipment_dates' can't be null";
        }
        if ($this->container['message_to_customer'] === null) {
            $invalidProperties[] = "'message_to_customer' can't be null";
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
     * @param bool $is_priority_shipment when true, this is a priority shipment
     *
     * @return $this
     */
    public function setIsPriorityShipment($is_priority_shipment)
    {
        $this->container['is_priority_shipment'] = $is_priority_shipment;

        return $this;
    }

    /**
     * Gets is_scheduled_delivery_shipment.
     *
     * @return bool
     */
    public function getIsScheduledDeliveryShipment()
    {
        return $this->container['is_scheduled_delivery_shipment'];
    }

    /**
     * Sets is_scheduled_delivery_shipment.
     *
     * @param bool $is_scheduled_delivery_shipment when true, this order is part of a scheduled delivery program
     *
     * @return $this
     */
    public function setIsScheduledDeliveryShipment($is_scheduled_delivery_shipment)
    {
        $this->container['is_scheduled_delivery_shipment'] = $is_scheduled_delivery_shipment;

        return $this;
    }

    /**
     * Gets is_pslip_required.
     *
     * @return bool
     */
    public function getIsPslipRequired()
    {
        return $this->container['is_pslip_required'];
    }

    /**
     * Sets is_pslip_required.
     *
     * @param bool $is_pslip_required when true, a packing slip is required to be sent to the customer
     *
     * @return $this
     */
    public function setIsPslipRequired($is_pslip_required)
    {
        $this->container['is_pslip_required'] = $is_pslip_required;

        return $this;
    }

    /**
     * Gets is_gift.
     *
     * @return bool
     */
    public function getIsGift()
    {
        return $this->container['is_gift'];
    }

    /**
     * Sets is_gift.
     *
     * @param bool $is_gift When true, the order contain a gift. Include the gift message and gift wrap information.
     *
     * @return $this
     */
    public function setIsGift($is_gift)
    {
        $this->container['is_gift'] = $is_gift;

        return $this;
    }

    /**
     * Gets ship_method.
     *
     * @return string
     */
    public function getShipMethod()
    {
        return $this->container['ship_method'];
    }

    /**
     * Sets ship_method.
     *
     * @param string $ship_method Ship method to be used for shipping the order. Amazon defines ship method codes indicating the shipping carrier and shipment service level. To see the full list of ship methods in use, including both the code and the friendly name, search the 'Help' section on Vendor Central for 'ship methods'.
     *
     * @return $this
     */
    public function setShipMethod($ship_method)
    {
        $this->container['ship_method'] = $ship_method;

        return $this;
    }

    /**
     * Gets shipment_dates.
     *
     * @return \TNT\Amazon\VendorDirectFulfillmentOrders\V1\Model\ShipmentDates
     */
    public function getShipmentDates()
    {
        return $this->container['shipment_dates'];
    }

    /**
     * Sets shipment_dates.
     *
     * @param \TNT\Amazon\VendorDirectFulfillmentOrders\V1\Model\ShipmentDates $shipment_dates shipment_dates
     *
     * @return $this
     */
    public function setShipmentDates($shipment_dates)
    {
        $this->container['shipment_dates'] = $shipment_dates;

        return $this;
    }

    /**
     * Gets message_to_customer.
     *
     * @return string
     */
    public function getMessageToCustomer()
    {
        return $this->container['message_to_customer'];
    }

    /**
     * Sets message_to_customer.
     *
     * @param string $message_to_customer message to customer for order status
     *
     * @return $this
     */
    public function setMessageToCustomer($message_to_customer)
    {
        $this->container['message_to_customer'] = $message_to_customer;

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