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
 * ShipmentItem.
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
 * Selling Partner API for Shipment Invoicing.
 *
 * The Selling Partner API for Shipment Invoicing helps you programmatically retrieve shipment invoice information in the Brazil marketplace for a selling partner’s Fulfillment by Amazon (FBA) orders.
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

namespace TNT\Amazon\ShipmentInvoicing\V0\Model;

use ArrayAccess;
use TNT\Amazon\ShipmentInvoicing\V0\ObjectSerializer;

/**
 * ShipmentItem Class Doc Comment.
 *
 * @category Class
 * @description The shipment item information required by a seller to issue a shipment invoice.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentItem implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShipmentItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'asin' => 'string',
        'seller_sku' => 'string',
        'order_item_id' => 'string',
        'title' => 'string',
        'quantity_ordered' => 'float',
        'item_price' => '\TNT\Amazon\ShipmentInvoicing\V0\Model\Money',
        'shipping_price' => '\TNT\Amazon\ShipmentInvoicing\V0\Model\Money',
        'gift_wrap_price' => '\TNT\Amazon\ShipmentInvoicing\V0\Model\Money',
        'shipping_discount' => '\TNT\Amazon\ShipmentInvoicing\V0\Model\Money',
        'promotion_discount' => '\TNT\Amazon\ShipmentInvoicing\V0\Model\Money',
        'serial_numbers' => '\TNT\Amazon\ShipmentInvoicing\V0\Model\SerialNumbersList',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'asin' => null,
        'seller_sku' => null,
        'order_item_id' => null,
        'title' => null,
        'quantity_ordered' => null,
        'item_price' => null,
        'shipping_price' => null,
        'gift_wrap_price' => null,
        'shipping_discount' => null,
        'promotion_discount' => null,
        'serial_numbers' => null,
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
        'asin' => 'ASIN',
        'seller_sku' => 'SellerSKU',
        'order_item_id' => 'OrderItemId',
        'title' => 'Title',
        'quantity_ordered' => 'QuantityOrdered',
        'item_price' => 'ItemPrice',
        'shipping_price' => 'ShippingPrice',
        'gift_wrap_price' => 'GiftWrapPrice',
        'shipping_discount' => 'ShippingDiscount',
        'promotion_discount' => 'PromotionDiscount',
        'serial_numbers' => 'SerialNumbers',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'seller_sku' => 'setSellerSku',
        'order_item_id' => 'setOrderItemId',
        'title' => 'setTitle',
        'quantity_ordered' => 'setQuantityOrdered',
        'item_price' => 'setItemPrice',
        'shipping_price' => 'setShippingPrice',
        'gift_wrap_price' => 'setGiftWrapPrice',
        'shipping_discount' => 'setShippingDiscount',
        'promotion_discount' => 'setPromotionDiscount',
        'serial_numbers' => 'setSerialNumbers',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'seller_sku' => 'getSellerSku',
        'order_item_id' => 'getOrderItemId',
        'title' => 'getTitle',
        'quantity_ordered' => 'getQuantityOrdered',
        'item_price' => 'getItemPrice',
        'shipping_price' => 'getShippingPrice',
        'gift_wrap_price' => 'getGiftWrapPrice',
        'shipping_discount' => 'getShippingDiscount',
        'promotion_discount' => 'getPromotionDiscount',
        'serial_numbers' => 'getSerialNumbers',
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
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['seller_sku'] = isset($data['seller_sku']) ? $data['seller_sku'] : null;
        $this->container['order_item_id'] = isset($data['order_item_id']) ? $data['order_item_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['quantity_ordered'] = isset($data['quantity_ordered']) ? $data['quantity_ordered'] : null;
        $this->container['item_price'] = isset($data['item_price']) ? $data['item_price'] : null;
        $this->container['shipping_price'] = isset($data['shipping_price']) ? $data['shipping_price'] : null;
        $this->container['gift_wrap_price'] = isset($data['gift_wrap_price']) ? $data['gift_wrap_price'] : null;
        $this->container['shipping_discount'] = isset($data['shipping_discount']) ? $data['shipping_discount'] : null;
        $this->container['promotion_discount'] = isset($data['promotion_discount']) ? $data['promotion_discount'] : null;
        $this->container['serial_numbers'] = isset($data['serial_numbers']) ? $data['serial_numbers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets asin.
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param string $asin the Amazon Standard Identification Number (ASIN) of the item
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
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
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets order_item_id.
     *
     * @return string
     */
    public function getOrderItemId()
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id.
     *
     * @param string $order_item_id the Amazon-defined identifier for the order item
     *
     * @return $this
     */
    public function setOrderItemId($order_item_id)
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param string $title the name of the item
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets quantity_ordered.
     *
     * @return float
     */
    public function getQuantityOrdered()
    {
        return $this->container['quantity_ordered'];
    }

    /**
     * Sets quantity_ordered.
     *
     * @param float $quantity_ordered the number of items ordered
     *
     * @return $this
     */
    public function setQuantityOrdered($quantity_ordered)
    {
        $this->container['quantity_ordered'] = $quantity_ordered;

        return $this;
    }

    /**
     * Gets item_price.
     *
     * @return \TNT\Amazon\ShipmentInvoicing\V0\Model\Money
     */
    public function getItemPrice()
    {
        return $this->container['item_price'];
    }

    /**
     * Sets item_price.
     *
     * @param \TNT\Amazon\ShipmentInvoicing\V0\Model\Money $item_price The selling price of the item multiplied by the quantity ordered. Note that ItemPrice excludes ShippingPrice and GiftWrapPrice.
     *
     * @return $this
     */
    public function setItemPrice($item_price)
    {
        $this->container['item_price'] = $item_price;

        return $this;
    }

    /**
     * Gets shipping_price.
     *
     * @return \TNT\Amazon\ShipmentInvoicing\V0\Model\Money
     */
    public function getShippingPrice()
    {
        return $this->container['shipping_price'];
    }

    /**
     * Sets shipping_price.
     *
     * @param \TNT\Amazon\ShipmentInvoicing\V0\Model\Money $shipping_price the shipping price of the item
     *
     * @return $this
     */
    public function setShippingPrice($shipping_price)
    {
        $this->container['shipping_price'] = $shipping_price;

        return $this;
    }

    /**
     * Gets gift_wrap_price.
     *
     * @return \TNT\Amazon\ShipmentInvoicing\V0\Model\Money
     */
    public function getGiftWrapPrice()
    {
        return $this->container['gift_wrap_price'];
    }

    /**
     * Sets gift_wrap_price.
     *
     * @param \TNT\Amazon\ShipmentInvoicing\V0\Model\Money $gift_wrap_price the gift wrap price of the item
     *
     * @return $this
     */
    public function setGiftWrapPrice($gift_wrap_price)
    {
        $this->container['gift_wrap_price'] = $gift_wrap_price;

        return $this;
    }

    /**
     * Gets shipping_discount.
     *
     * @return \TNT\Amazon\ShipmentInvoicing\V0\Model\Money
     */
    public function getShippingDiscount()
    {
        return $this->container['shipping_discount'];
    }

    /**
     * Sets shipping_discount.
     *
     * @param \TNT\Amazon\ShipmentInvoicing\V0\Model\Money $shipping_discount the discount on the shipping price
     *
     * @return $this
     */
    public function setShippingDiscount($shipping_discount)
    {
        $this->container['shipping_discount'] = $shipping_discount;

        return $this;
    }

    /**
     * Gets promotion_discount.
     *
     * @return \TNT\Amazon\ShipmentInvoicing\V0\Model\Money
     */
    public function getPromotionDiscount()
    {
        return $this->container['promotion_discount'];
    }

    /**
     * Sets promotion_discount.
     *
     * @param \TNT\Amazon\ShipmentInvoicing\V0\Model\Money $promotion_discount the total of all promotional discounts in the offer
     *
     * @return $this
     */
    public function setPromotionDiscount($promotion_discount)
    {
        $this->container['promotion_discount'] = $promotion_discount;

        return $this;
    }

    /**
     * Gets serial_numbers.
     *
     * @return \TNT\Amazon\ShipmentInvoicing\V0\Model\SerialNumbersList
     */
    public function getSerialNumbers()
    {
        return $this->container['serial_numbers'];
    }

    /**
     * Sets serial_numbers.
     *
     * @param \TNT\Amazon\ShipmentInvoicing\V0\Model\SerialNumbersList $serial_numbers the list of serial numbers
     *
     * @return $this
     */
    public function setSerialNumbers($serial_numbers)
    {
        $this->container['serial_numbers'] = $serial_numbers;

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