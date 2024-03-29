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
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace TNT\Amazon\MerchantFulfillment\V0\Model;

use TNT\Amazon\MerchantFulfillment\V0\ObjectSerializer;

/**
 * Item Class Doc Comment.
 *
 * @category Class
 *
 * @description An Amazon order item identifier and a quantity.
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
        'order_item_id' => '\TNT\Amazon\MerchantFulfillment\V0\Model\OrderItemId',
        'quantity' => '\TNT\Amazon\MerchantFulfillment\V0\Model\ItemQuantity',
        'item_weight' => '\TNT\Amazon\MerchantFulfillment\V0\Model\Weight',
        'item_description' => '\TNT\Amazon\MerchantFulfillment\V0\Model\ItemDescription',
        'transparency_code_list' => '\TNT\Amazon\MerchantFulfillment\V0\Model\TransparencyCodeList',
        'item_level_seller_inputs_list' => '\TNT\Amazon\MerchantFulfillment\V0\Model\AdditionalSellerInputsList',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'order_item_id' => null,
        'quantity' => null,
        'item_weight' => null,
        'item_description' => null,
        'transparency_code_list' => null,
        'item_level_seller_inputs_list' => null,
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
        'order_item_id' => 'OrderItemId',
        'quantity' => 'Quantity',
        'item_weight' => 'ItemWeight',
        'item_description' => 'ItemDescription',
        'transparency_code_list' => 'TransparencyCodeList',
        'item_level_seller_inputs_list' => 'ItemLevelSellerInputsList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'order_item_id' => 'setOrderItemId',
        'quantity' => 'setQuantity',
        'item_weight' => 'setItemWeight',
        'item_description' => 'setItemDescription',
        'transparency_code_list' => 'setTransparencyCodeList',
        'item_level_seller_inputs_list' => 'setItemLevelSellerInputsList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'order_item_id' => 'getOrderItemId',
        'quantity' => 'getQuantity',
        'item_weight' => 'getItemWeight',
        'item_description' => 'getItemDescription',
        'transparency_code_list' => 'getTransparencyCodeList',
        'item_level_seller_inputs_list' => 'getItemLevelSellerInputsList',
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
        $this->container['order_item_id'] = isset($data['order_item_id']) ? $data['order_item_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['item_weight'] = isset($data['item_weight']) ? $data['item_weight'] : null;
        $this->container['item_description'] = isset($data['item_description']) ? $data['item_description'] : null;
        $this->container['transparency_code_list'] = isset($data['transparency_code_list']) ? $data['transparency_code_list'] : null;
        $this->container['item_level_seller_inputs_list'] = isset($data['item_level_seller_inputs_list']) ? $data['item_level_seller_inputs_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order_item_id'] === null) {
            $invalidProperties[] = "'order_item_id' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * Gets order_item_id.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\OrderItemId
     */
    public function getOrderItemId()
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\OrderItemId $order_item_id order_item_id
     *
     * @return $this
     */
    public function setOrderItemId($order_item_id)
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\ItemQuantity
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\ItemQuantity $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets item_weight.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\Weight
     */
    public function getItemWeight()
    {
        return $this->container['item_weight'];
    }

    /**
     * Sets item_weight.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\Weight $item_weight item_weight
     *
     * @return $this
     */
    public function setItemWeight($item_weight)
    {
        $this->container['item_weight'] = $item_weight;

        return $this;
    }

    /**
     * Gets item_description.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\ItemDescription
     */
    public function getItemDescription()
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\ItemDescription $item_description item_description
     *
     * @return $this
     */
    public function setItemDescription($item_description)
    {
        $this->container['item_description'] = $item_description;

        return $this;
    }

    /**
     * Gets transparency_code_list.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\TransparencyCodeList
     */
    public function getTransparencyCodeList()
    {
        return $this->container['transparency_code_list'];
    }

    /**
     * Sets transparency_code_list.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\TransparencyCodeList $transparency_code_list transparency_code_list
     *
     * @return $this
     */
    public function setTransparencyCodeList($transparency_code_list)
    {
        $this->container['transparency_code_list'] = $transparency_code_list;

        return $this;
    }

    /**
     * Gets item_level_seller_inputs_list.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\AdditionalSellerInputsList
     */
    public function getItemLevelSellerInputsList()
    {
        return $this->container['item_level_seller_inputs_list'];
    }

    /**
     * Sets item_level_seller_inputs_list.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\AdditionalSellerInputsList $item_level_seller_inputs_list a list of additional seller inputs required to ship this item using the chosen shipping service
     *
     * @return $this
     */
    public function setItemLevelSellerInputsList($item_level_seller_inputs_list)
    {
        $this->container['item_level_seller_inputs_list'] = $item_level_seller_inputs_list;

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
