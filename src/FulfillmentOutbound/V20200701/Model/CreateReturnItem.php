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
 * CreateReturnItem.
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
 * CreateReturnItem Class Doc Comment.
 *
 * @category Class
 *
 * @description An item that Amazon accepted for return.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class CreateReturnItem implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CreateReturnItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'seller_return_item_id' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'amazon_shipment_id' => 'string',
        'return_reason_code' => 'string',
        'return_comment' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'seller_return_item_id' => null,
        'seller_fulfillment_order_item_id' => null,
        'amazon_shipment_id' => null,
        'return_reason_code' => null,
        'return_comment' => null,
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
        'seller_return_item_id' => 'sellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'amazonShipmentId',
        'return_reason_code' => 'returnReasonCode',
        'return_comment' => 'returnComment',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_return_item_id' => 'setSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'setAmazonShipmentId',
        'return_reason_code' => 'setReturnReasonCode',
        'return_comment' => 'setReturnComment',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_return_item_id' => 'getSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'getAmazonShipmentId',
        'return_reason_code' => 'getReturnReasonCode',
        'return_comment' => 'getReturnComment',
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
        $this->container['seller_return_item_id'] = isset($data['seller_return_item_id']) ? $data['seller_return_item_id'] : null;
        $this->container['seller_fulfillment_order_item_id'] = isset($data['seller_fulfillment_order_item_id']) ? $data['seller_fulfillment_order_item_id'] : null;
        $this->container['amazon_shipment_id'] = isset($data['amazon_shipment_id']) ? $data['amazon_shipment_id'] : null;
        $this->container['return_reason_code'] = isset($data['return_reason_code']) ? $data['return_reason_code'] : null;
        $this->container['return_comment'] = isset($data['return_comment']) ? $data['return_comment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['seller_return_item_id'] === null) {
            $invalidProperties[] = "'seller_return_item_id' can't be null";
        }
        if (mb_strlen($this->container['seller_return_item_id']) > 80) {
            $invalidProperties[] = "invalid value for 'seller_return_item_id', the character length must be smaller than or equal to 80.";
        }

        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if ($this->container['amazon_shipment_id'] === null) {
            $invalidProperties[] = "'amazon_shipment_id' can't be null";
        }
        if ($this->container['return_reason_code'] === null) {
            $invalidProperties[] = "'return_reason_code' can't be null";
        }
        if (null !== $this->container['return_comment'] && (mb_strlen($this->container['return_comment']) > 1000)) {
            $invalidProperties[] = "invalid value for 'return_comment', the character length must be smaller than or equal to 1000.";
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
     * Gets seller_return_item_id.
     *
     * @return string
     */
    public function getSellerReturnItemId()
    {
        return $this->container['seller_return_item_id'];
    }

    /**
     * Sets seller_return_item_id.
     *
     * @param string $seller_return_item_id an identifier assigned by the seller to the return item
     *
     * @return $this
     */
    public function setSellerReturnItemId($seller_return_item_id)
    {
        if (mb_strlen($seller_return_item_id) > 80) {
            throw new \InvalidArgumentException('invalid length for $seller_return_item_id when calling CreateReturnItem., must be smaller than or equal to 80.');
        }

        $this->container['seller_return_item_id'] = $seller_return_item_id;

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
     * @param string $seller_fulfillment_order_item_id the identifier assigned to the item by the seller when the fulfillment order was created
     *
     * @return $this
     */
    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    /**
     * Gets amazon_shipment_id.
     *
     * @return string
     */
    public function getAmazonShipmentId()
    {
        return $this->container['amazon_shipment_id'];
    }

    /**
     * Sets amazon_shipment_id.
     *
     * @param string $amazon_shipment_id the identifier for the shipment that is associated with the return item
     *
     * @return $this
     */
    public function setAmazonShipmentId($amazon_shipment_id)
    {
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }

    /**
     * Gets return_reason_code.
     *
     * @return string
     */
    public function getReturnReasonCode()
    {
        return $this->container['return_reason_code'];
    }

    /**
     * Sets return_reason_code.
     *
     * @param string $return_reason_code the return reason code assigned to the return item by the seller
     *
     * @return $this
     */
    public function setReturnReasonCode($return_reason_code)
    {
        $this->container['return_reason_code'] = $return_reason_code;

        return $this;
    }

    /**
     * Gets return_comment.
     *
     * @return string
     */
    public function getReturnComment()
    {
        return $this->container['return_comment'];
    }

    /**
     * Sets return_comment.
     *
     * @param string $return_comment an optional comment about the return item
     *
     * @return $this
     */
    public function setReturnComment($return_comment)
    {
        if (null !== $return_comment && (mb_strlen($return_comment) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $return_comment when calling CreateReturnItem., must be smaller than or equal to 1000.');
        }

        $this->container['return_comment'] = $return_comment;

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
