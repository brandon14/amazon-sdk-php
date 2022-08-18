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
 * ReturnItem.
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

use ArrayAccess;
use TNT\Amazon\FulfillmentOutbound\V20200701\ObjectSerializer;

/**
 * ReturnItem Class Doc Comment.
 *
 * @category Class
 * @description An item that Amazon accepted for return.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ReturnItem implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ReturnItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'seller_return_item_id' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'amazon_shipment_id' => 'string',
        'seller_return_reason_code' => 'string',
        'return_comment' => 'string',
        'amazon_return_reason_code' => 'string',
        'status' => '\TNT\Amazon\FulfillmentOutbound\V20200701\Model\FulfillmentReturnItemStatus',
        'status_changed_date' => '\TNT\Amazon\FulfillmentOutbound\V20200701\Model\Timestamp',
        'return_authorization_id' => 'string',
        'return_received_condition' => '\TNT\Amazon\FulfillmentOutbound\V20200701\Model\ReturnItemDisposition',
        'fulfillment_center_id' => 'string',
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
        'seller_return_reason_code' => null,
        'return_comment' => null,
        'amazon_return_reason_code' => null,
        'status' => null,
        'status_changed_date' => null,
        'return_authorization_id' => null,
        'return_received_condition' => null,
        'fulfillment_center_id' => null,
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
        'seller_return_reason_code' => 'sellerReturnReasonCode',
        'return_comment' => 'returnComment',
        'amazon_return_reason_code' => 'amazonReturnReasonCode',
        'status' => 'status',
        'status_changed_date' => 'statusChangedDate',
        'return_authorization_id' => 'returnAuthorizationId',
        'return_received_condition' => 'returnReceivedCondition',
        'fulfillment_center_id' => 'fulfillmentCenterId',
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
        'seller_return_reason_code' => 'setSellerReturnReasonCode',
        'return_comment' => 'setReturnComment',
        'amazon_return_reason_code' => 'setAmazonReturnReasonCode',
        'status' => 'setStatus',
        'status_changed_date' => 'setStatusChangedDate',
        'return_authorization_id' => 'setReturnAuthorizationId',
        'return_received_condition' => 'setReturnReceivedCondition',
        'fulfillment_center_id' => 'setFulfillmentCenterId',
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
        'seller_return_reason_code' => 'getSellerReturnReasonCode',
        'return_comment' => 'getReturnComment',
        'amazon_return_reason_code' => 'getAmazonReturnReasonCode',
        'status' => 'getStatus',
        'status_changed_date' => 'getStatusChangedDate',
        'return_authorization_id' => 'getReturnAuthorizationId',
        'return_received_condition' => 'getReturnReceivedCondition',
        'fulfillment_center_id' => 'getFulfillmentCenterId',
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
        $this->container['seller_return_reason_code'] = isset($data['seller_return_reason_code']) ? $data['seller_return_reason_code'] : null;
        $this->container['return_comment'] = isset($data['return_comment']) ? $data['return_comment'] : null;
        $this->container['amazon_return_reason_code'] = isset($data['amazon_return_reason_code']) ? $data['amazon_return_reason_code'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_changed_date'] = isset($data['status_changed_date']) ? $data['status_changed_date'] : null;
        $this->container['return_authorization_id'] = isset($data['return_authorization_id']) ? $data['return_authorization_id'] : null;
        $this->container['return_received_condition'] = isset($data['return_received_condition']) ? $data['return_received_condition'] : null;
        $this->container['fulfillment_center_id'] = isset($data['fulfillment_center_id']) ? $data['fulfillment_center_id'] : null;
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
        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if ($this->container['amazon_shipment_id'] === null) {
            $invalidProperties[] = "'amazon_shipment_id' can't be null";
        }
        if ($this->container['seller_return_reason_code'] === null) {
            $invalidProperties[] = "'seller_return_reason_code' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['status_changed_date'] === null) {
            $invalidProperties[] = "'status_changed_date' can't be null";
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
     * Gets seller_return_reason_code.
     *
     * @return string
     */
    public function getSellerReturnReasonCode()
    {
        return $this->container['seller_return_reason_code'];
    }

    /**
     * Sets seller_return_reason_code.
     *
     * @param string $seller_return_reason_code the return reason code assigned to the return item by the seller
     *
     * @return $this
     */
    public function setSellerReturnReasonCode($seller_return_reason_code)
    {
        $this->container['seller_return_reason_code'] = $seller_return_reason_code;

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
        $this->container['return_comment'] = $return_comment;

        return $this;
    }

    /**
     * Gets amazon_return_reason_code.
     *
     * @return string
     */
    public function getAmazonReturnReasonCode()
    {
        return $this->container['amazon_return_reason_code'];
    }

    /**
     * Sets amazon_return_reason_code.
     *
     * @param string $amazon_return_reason_code the return reason code that the Amazon fulfillment center assigned to the return item
     *
     * @return $this
     */
    public function setAmazonReturnReasonCode($amazon_return_reason_code)
    {
        $this->container['amazon_return_reason_code'] = $amazon_return_reason_code;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return \TNT\Amazon\FulfillmentOutbound\V20200701\Model\FulfillmentReturnItemStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param \TNT\Amazon\FulfillmentOutbound\V20200701\Model\FulfillmentReturnItemStatus $status indicates if the return item has been processed by an Amazon fulfillment center
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_changed_date.
     *
     * @return \TNT\Amazon\FulfillmentOutbound\V20200701\Model\Timestamp
     */
    public function getStatusChangedDate()
    {
        return $this->container['status_changed_date'];
    }

    /**
     * Sets status_changed_date.
     *
     * @param \TNT\Amazon\FulfillmentOutbound\V20200701\Model\Timestamp $status_changed_date indicates when the status last changed
     *
     * @return $this
     */
    public function setStatusChangedDate($status_changed_date)
    {
        $this->container['status_changed_date'] = $status_changed_date;

        return $this;
    }

    /**
     * Gets return_authorization_id.
     *
     * @return string
     */
    public function getReturnAuthorizationId()
    {
        return $this->container['return_authorization_id'];
    }

    /**
     * Sets return_authorization_id.
     *
     * @param string $return_authorization_id Identifies the return authorization used to return this item. See ReturnAuthorization.
     *
     * @return $this
     */
    public function setReturnAuthorizationId($return_authorization_id)
    {
        $this->container['return_authorization_id'] = $return_authorization_id;

        return $this;
    }

    /**
     * Gets return_received_condition.
     *
     * @return \TNT\Amazon\FulfillmentOutbound\V20200701\Model\ReturnItemDisposition
     */
    public function getReturnReceivedCondition()
    {
        return $this->container['return_received_condition'];
    }

    /**
     * Sets return_received_condition.
     *
     * @param \TNT\Amazon\FulfillmentOutbound\V20200701\Model\ReturnItemDisposition $return_received_condition return_received_condition
     *
     * @return $this
     */
    public function setReturnReceivedCondition($return_received_condition)
    {
        $this->container['return_received_condition'] = $return_received_condition;

        return $this;
    }

    /**
     * Gets fulfillment_center_id.
     *
     * @return string
     */
    public function getFulfillmentCenterId()
    {
        return $this->container['fulfillment_center_id'];
    }

    /**
     * Sets fulfillment_center_id.
     *
     * @param string $fulfillment_center_id the identifier for the Amazon fulfillment center that processed the return item
     *
     * @return $this
     */
    public function setFulfillmentCenterId($fulfillment_center_id)
    {
        $this->container['fulfillment_center_id'] = $fulfillment_center_id;

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
