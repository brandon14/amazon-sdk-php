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
 * OrderItemStatus.
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
 * Selling Partner API for Retail Procurement Orders.
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
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

namespace TNT\Amazon\VendorOrders\V1\Model;

use TNT\Amazon\VendorOrders\V1\ObjectSerializer;

/**
 * OrderItemStatus Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class OrderItemStatus implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'OrderItemStatus';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'item_sequence_number' => 'string',
        'buyer_product_identifier' => 'string',
        'vendor_product_identifier' => 'string',
        'net_cost' => '\TNT\Amazon\VendorOrders\V1\Model\Money',
        'list_price' => '\TNT\Amazon\VendorOrders\V1\Model\Money',
        'ordered_quantity' => '\TNT\Amazon\VendorOrders\V1\Model\OrderItemStatusOrderedQuantity',
        'acknowledgement_status' => '\TNT\Amazon\VendorOrders\V1\Model\OrderItemStatusAcknowledgementStatus',
        'receiving_status' => '\TNT\Amazon\VendorOrders\V1\Model\OrderItemStatusReceivingStatus',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'item_sequence_number' => null,
        'buyer_product_identifier' => null,
        'vendor_product_identifier' => null,
        'net_cost' => null,
        'list_price' => null,
        'ordered_quantity' => null,
        'acknowledgement_status' => null,
        'receiving_status' => null,
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
        'item_sequence_number' => 'itemSequenceNumber',
        'buyer_product_identifier' => 'buyerProductIdentifier',
        'vendor_product_identifier' => 'vendorProductIdentifier',
        'net_cost' => 'netCost',
        'list_price' => 'listPrice',
        'ordered_quantity' => 'orderedQuantity',
        'acknowledgement_status' => 'acknowledgementStatus',
        'receiving_status' => 'receivingStatus',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'item_sequence_number' => 'setItemSequenceNumber',
        'buyer_product_identifier' => 'setBuyerProductIdentifier',
        'vendor_product_identifier' => 'setVendorProductIdentifier',
        'net_cost' => 'setNetCost',
        'list_price' => 'setListPrice',
        'ordered_quantity' => 'setOrderedQuantity',
        'acknowledgement_status' => 'setAcknowledgementStatus',
        'receiving_status' => 'setReceivingStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'item_sequence_number' => 'getItemSequenceNumber',
        'buyer_product_identifier' => 'getBuyerProductIdentifier',
        'vendor_product_identifier' => 'getVendorProductIdentifier',
        'net_cost' => 'getNetCost',
        'list_price' => 'getListPrice',
        'ordered_quantity' => 'getOrderedQuantity',
        'acknowledgement_status' => 'getAcknowledgementStatus',
        'receiving_status' => 'getReceivingStatus',
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
        $this->container['item_sequence_number'] = isset($data['item_sequence_number']) ? $data['item_sequence_number'] : null;
        $this->container['buyer_product_identifier'] = isset($data['buyer_product_identifier']) ? $data['buyer_product_identifier'] : null;
        $this->container['vendor_product_identifier'] = isset($data['vendor_product_identifier']) ? $data['vendor_product_identifier'] : null;
        $this->container['net_cost'] = isset($data['net_cost']) ? $data['net_cost'] : null;
        $this->container['list_price'] = isset($data['list_price']) ? $data['list_price'] : null;
        $this->container['ordered_quantity'] = isset($data['ordered_quantity']) ? $data['ordered_quantity'] : null;
        $this->container['acknowledgement_status'] = isset($data['acknowledgement_status']) ? $data['acknowledgement_status'] : null;
        $this->container['receiving_status'] = isset($data['receiving_status']) ? $data['receiving_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['item_sequence_number'] === null) {
            $invalidProperties[] = "'item_sequence_number' can't be null";
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
     * Gets item_sequence_number.
     *
     * @return string
     */
    public function getItemSequenceNumber()
    {
        return $this->container['item_sequence_number'];
    }

    /**
     * Sets item_sequence_number.
     *
     * @param string $item_sequence_number Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
     *
     * @return $this
     */
    public function setItemSequenceNumber($item_sequence_number)
    {
        $this->container['item_sequence_number'] = $item_sequence_number;

        return $this;
    }

    /**
     * Gets buyer_product_identifier.
     *
     * @return string
     */
    public function getBuyerProductIdentifier()
    {
        return $this->container['buyer_product_identifier'];
    }

    /**
     * Sets buyer_product_identifier.
     *
     * @param string $buyer_product_identifier buyer's Standard Identification Number (ASIN) of an item
     *
     * @return $this
     */
    public function setBuyerProductIdentifier($buyer_product_identifier)
    {
        $this->container['buyer_product_identifier'] = $buyer_product_identifier;

        return $this;
    }

    /**
     * Gets vendor_product_identifier.
     *
     * @return string
     */
    public function getVendorProductIdentifier()
    {
        return $this->container['vendor_product_identifier'];
    }

    /**
     * Sets vendor_product_identifier.
     *
     * @param string $vendor_product_identifier the vendor selected product identification of the item
     *
     * @return $this
     */
    public function setVendorProductIdentifier($vendor_product_identifier)
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }

    /**
     * Gets net_cost.
     *
     * @return \TNT\Amazon\VendorOrders\V1\Model\Money
     */
    public function getNetCost()
    {
        return $this->container['net_cost'];
    }

    /**
     * Sets net_cost.
     *
     * @param \TNT\Amazon\VendorOrders\V1\Model\Money $net_cost the net cost to Amazon each (cost)
     *
     * @return $this
     */
    public function setNetCost($net_cost)
    {
        $this->container['net_cost'] = $net_cost;

        return $this;
    }

    /**
     * Gets list_price.
     *
     * @return \TNT\Amazon\VendorOrders\V1\Model\Money
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price.
     *
     * @param \TNT\Amazon\VendorOrders\V1\Model\Money $list_price the list Price to Amazon each (list)
     *
     * @return $this
     */
    public function setListPrice($list_price)
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets ordered_quantity.
     *
     * @return \TNT\Amazon\VendorOrders\V1\Model\OrderItemStatusOrderedQuantity
     */
    public function getOrderedQuantity()
    {
        return $this->container['ordered_quantity'];
    }

    /**
     * Sets ordered_quantity.
     *
     * @param \TNT\Amazon\VendorOrders\V1\Model\OrderItemStatusOrderedQuantity $ordered_quantity ordered_quantity
     *
     * @return $this
     */
    public function setOrderedQuantity($ordered_quantity)
    {
        $this->container['ordered_quantity'] = $ordered_quantity;

        return $this;
    }

    /**
     * Gets acknowledgement_status.
     *
     * @return \TNT\Amazon\VendorOrders\V1\Model\OrderItemStatusAcknowledgementStatus
     */
    public function getAcknowledgementStatus()
    {
        return $this->container['acknowledgement_status'];
    }

    /**
     * Sets acknowledgement_status.
     *
     * @param \TNT\Amazon\VendorOrders\V1\Model\OrderItemStatusAcknowledgementStatus $acknowledgement_status acknowledgement_status
     *
     * @return $this
     */
    public function setAcknowledgementStatus($acknowledgement_status)
    {
        $this->container['acknowledgement_status'] = $acknowledgement_status;

        return $this;
    }

    /**
     * Gets receiving_status.
     *
     * @return \TNT\Amazon\VendorOrders\V1\Model\OrderItemStatusReceivingStatus
     */
    public function getReceivingStatus()
    {
        return $this->container['receiving_status'];
    }

    /**
     * Sets receiving_status.
     *
     * @param \TNT\Amazon\VendorOrders\V1\Model\OrderItemStatusReceivingStatus $receiving_status receiving_status
     *
     * @return $this
     */
    public function setReceivingStatus($receiving_status)
    {
        $this->container['receiving_status'] = $receiving_status;

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
