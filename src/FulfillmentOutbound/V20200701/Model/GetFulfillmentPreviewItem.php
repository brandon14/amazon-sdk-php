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
 * GetFulfillmentPreviewItem.
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
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TNT\Amazon\FulfillmentOutbound\V20200701\Model;

use TNT\Amazon\FulfillmentOutbound\V20200701\ObjectSerializer;

/**
 * GetFulfillmentPreviewItem Class Doc Comment.
 *
 * @category Class
 *
 * @description Item information for a fulfillment order preview.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class GetFulfillmentPreviewItem implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetFulfillmentPreviewItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'seller_sku' => 'string',
        'quantity' => '\TNT\Amazon\FulfillmentOutbound\V20200701\Model\Quantity',
        'per_unit_declared_value' => '\TNT\Amazon\FulfillmentOutbound\V20200701\Model\Money',
        'seller_fulfillment_order_item_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'seller_sku' => null,
        'quantity' => null,
        'per_unit_declared_value' => null,
        'seller_fulfillment_order_item_id' => null,
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
        'seller_sku' => 'sellerSku',
        'quantity' => 'quantity',
        'per_unit_declared_value' => 'perUnitDeclaredValue',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_sku' => 'setSellerSku',
        'quantity' => 'setQuantity',
        'per_unit_declared_value' => 'setPerUnitDeclaredValue',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'quantity' => 'getQuantity',
        'per_unit_declared_value' => 'getPerUnitDeclaredValue',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
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
        $this->container['seller_sku'] = isset($data['seller_sku']) ? $data['seller_sku'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['per_unit_declared_value'] = isset($data['per_unit_declared_value']) ? $data['per_unit_declared_value'] : null;
        $this->container['seller_fulfillment_order_item_id'] = isset($data['seller_fulfillment_order_item_id']) ? $data['seller_fulfillment_order_item_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['seller_sku'] === null) {
            $invalidProperties[] = "'seller_sku' can't be null";
        }
        if (mb_strlen($this->container['seller_sku']) > 50) {
            $invalidProperties[] = "invalid value for 'seller_sku', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if (mb_strlen($this->container['seller_fulfillment_order_item_id']) > 50) {
            $invalidProperties[] = "invalid value for 'seller_fulfillment_order_item_id', the character length must be smaller than or equal to 50.";
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
     * Gets seller_sku.
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param string $seller_sku the seller SKU of the item
     *
     * @return $this
     */
    public function setSellerSku($seller_sku)
    {
        if (mb_strlen($seller_sku) > 50) {
            throw new \InvalidArgumentException('invalid length for $seller_sku when calling GetFulfillmentPreviewItem., must be smaller than or equal to 50.');
        }

        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return \TNT\Amazon\FulfillmentOutbound\V20200701\Model\Quantity
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param \TNT\Amazon\FulfillmentOutbound\V20200701\Model\Quantity $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets per_unit_declared_value.
     *
     * @return \TNT\Amazon\FulfillmentOutbound\V20200701\Model\Money
     */
    public function getPerUnitDeclaredValue()
    {
        return $this->container['per_unit_declared_value'];
    }

    /**
     * Sets per_unit_declared_value.
     *
     * @param \TNT\Amazon\FulfillmentOutbound\V20200701\Model\Money $per_unit_declared_value The monetary value assigned by the seller to this item. This is a required field if this order is an export order.
     *
     * @return $this
     */
    public function setPerUnitDeclaredValue($per_unit_declared_value)
    {
        $this->container['per_unit_declared_value'] = $per_unit_declared_value;

        return $this;
    }

    /**
     * Gets seller_fulfillment_order_item_id.
     *
     * @return string
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id.
     *
     * @param string $seller_fulfillment_order_item_id a fulfillment order item identifier that the seller creates to track items in the fulfillment preview
     *
     * @return $this
     */
    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        if (mb_strlen($seller_fulfillment_order_item_id) > 50) {
            throw new \InvalidArgumentException('invalid length for $seller_fulfillment_order_item_id when calling GetFulfillmentPreviewItem., must be smaller than or equal to 50.');
        }

        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

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
