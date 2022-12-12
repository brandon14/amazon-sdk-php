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
 * Item.
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
 * Selling Partner API for Retail Procurement Shipments.
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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

namespace TNT\Amazon\VendorShipments\V1\Model;

use TNT\Amazon\VendorShipments\V1\ObjectSerializer;

/**
 * Item Class Doc Comment.
 *
 * @category Class
 *
 * @description Details of the item being shipped.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Item implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Item';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'item_sequence_number' => 'string',
        'amazon_product_identifier' => 'string',
        'vendor_product_identifier' => 'string',
        'shipped_quantity' => '\TNT\Amazon\VendorShipments\V1\Model\ItemQuantity',
        'item_details' => '\TNT\Amazon\VendorShipments\V1\Model\ItemDetails',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'item_sequence_number' => null,
        'amazon_product_identifier' => null,
        'vendor_product_identifier' => null,
        'shipped_quantity' => null,
        'item_details' => null,
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
        'amazon_product_identifier' => 'amazonProductIdentifier',
        'vendor_product_identifier' => 'vendorProductIdentifier',
        'shipped_quantity' => 'shippedQuantity',
        'item_details' => 'itemDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'item_sequence_number' => 'setItemSequenceNumber',
        'amazon_product_identifier' => 'setAmazonProductIdentifier',
        'vendor_product_identifier' => 'setVendorProductIdentifier',
        'shipped_quantity' => 'setShippedQuantity',
        'item_details' => 'setItemDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'item_sequence_number' => 'getItemSequenceNumber',
        'amazon_product_identifier' => 'getAmazonProductIdentifier',
        'vendor_product_identifier' => 'getVendorProductIdentifier',
        'shipped_quantity' => 'getShippedQuantity',
        'item_details' => 'getItemDetails',
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
        $this->container['amazon_product_identifier'] = isset($data['amazon_product_identifier']) ? $data['amazon_product_identifier'] : null;
        $this->container['vendor_product_identifier'] = isset($data['vendor_product_identifier']) ? $data['vendor_product_identifier'] : null;
        $this->container['shipped_quantity'] = isset($data['shipped_quantity']) ? $data['shipped_quantity'] : null;
        $this->container['item_details'] = isset($data['item_details']) ? $data['item_details'] : null;
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
        if ($this->container['shipped_quantity'] === null) {
            $invalidProperties[] = "'shipped_quantity' can't be null";
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
     * @param string $item_sequence_number Item sequence number for the item. The first item will be 001, the second 002, and so on. This number is used as a reference to refer to this item from the carton or pallet level.
     *
     * @return $this
     */
    public function setItemSequenceNumber($item_sequence_number)
    {
        $this->container['item_sequence_number'] = $item_sequence_number;

        return $this;
    }

    /**
     * Gets amazon_product_identifier.
     *
     * @return string
     */
    public function getAmazonProductIdentifier()
    {
        return $this->container['amazon_product_identifier'];
    }

    /**
     * Sets amazon_product_identifier.
     *
     * @param string $amazon_product_identifier amazon Standard Identification Number (ASIN) of an item
     *
     * @return $this
     */
    public function setAmazonProductIdentifier($amazon_product_identifier)
    {
        $this->container['amazon_product_identifier'] = $amazon_product_identifier;

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
     * @param string $vendor_product_identifier The vendor selected product identification of the item. Should be the same as was sent in the purchase order.
     *
     * @return $this
     */
    public function setVendorProductIdentifier($vendor_product_identifier)
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }

    /**
     * Gets shipped_quantity.
     *
     * @return \TNT\Amazon\VendorShipments\V1\Model\ItemQuantity
     */
    public function getShippedQuantity()
    {
        return $this->container['shipped_quantity'];
    }

    /**
     * Sets shipped_quantity.
     *
     * @param \TNT\Amazon\VendorShipments\V1\Model\ItemQuantity $shipped_quantity total item quantity shipped in this shipment
     *
     * @return $this
     */
    public function setShippedQuantity($shipped_quantity)
    {
        $this->container['shipped_quantity'] = $shipped_quantity;

        return $this;
    }

    /**
     * Gets item_details.
     *
     * @return \TNT\Amazon\VendorShipments\V1\Model\ItemDetails
     */
    public function getItemDetails()
    {
        return $this->container['item_details'];
    }

    /**
     * Sets item_details.
     *
     * @param \TNT\Amazon\VendorShipments\V1\Model\ItemDetails $item_details item_details
     *
     * @return $this
     */
    public function setItemDetails($item_details)
    {
        $this->container['item_details'] = $item_details;

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
