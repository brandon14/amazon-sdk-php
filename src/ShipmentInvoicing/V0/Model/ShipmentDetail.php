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
 * ShipmentDetail.
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
 * ShipmentDetail Class Doc Comment.
 *
 * @category Class
 * @description The information required by a selling partner to issue a shipment invoice.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentDetail implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShipmentDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'warehouse_id' => 'string',
        'amazon_order_id' => 'string',
        'amazon_shipment_id' => 'string',
        'purchase_date' => '\DateTime',
        'shipping_address' => '\TNT\Amazon\ShipmentInvoicing\V0\Model\Address',
        'payment_method_details' => '\TNT\Amazon\ShipmentInvoicing\V0\Model\PaymentMethodDetailItemList',
        'marketplace_id' => 'string',
        'seller_id' => 'string',
        'buyer_name' => 'string',
        'buyer_county' => 'string',
        'buyer_tax_info' => '\TNT\Amazon\ShipmentInvoicing\V0\Model\BuyerTaxInfo',
        'marketplace_tax_info' => '\TNT\Amazon\ShipmentInvoicing\V0\Model\MarketplaceTaxInfo',
        'seller_display_name' => 'string',
        'shipment_items' => '\TNT\Amazon\ShipmentInvoicing\V0\Model\ShipmentItems',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'warehouse_id' => null,
        'amazon_order_id' => null,
        'amazon_shipment_id' => null,
        'purchase_date' => 'date-time',
        'shipping_address' => null,
        'payment_method_details' => null,
        'marketplace_id' => null,
        'seller_id' => null,
        'buyer_name' => null,
        'buyer_county' => null,
        'buyer_tax_info' => null,
        'marketplace_tax_info' => null,
        'seller_display_name' => null,
        'shipment_items' => null,
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
        'warehouse_id' => 'WarehouseId',
        'amazon_order_id' => 'AmazonOrderId',
        'amazon_shipment_id' => 'AmazonShipmentId',
        'purchase_date' => 'PurchaseDate',
        'shipping_address' => 'ShippingAddress',
        'payment_method_details' => 'PaymentMethodDetails',
        'marketplace_id' => 'MarketplaceId',
        'seller_id' => 'SellerId',
        'buyer_name' => 'BuyerName',
        'buyer_county' => 'BuyerCounty',
        'buyer_tax_info' => 'BuyerTaxInfo',
        'marketplace_tax_info' => 'MarketplaceTaxInfo',
        'seller_display_name' => 'SellerDisplayName',
        'shipment_items' => 'ShipmentItems',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'warehouse_id' => 'setWarehouseId',
        'amazon_order_id' => 'setAmazonOrderId',
        'amazon_shipment_id' => 'setAmazonShipmentId',
        'purchase_date' => 'setPurchaseDate',
        'shipping_address' => 'setShippingAddress',
        'payment_method_details' => 'setPaymentMethodDetails',
        'marketplace_id' => 'setMarketplaceId',
        'seller_id' => 'setSellerId',
        'buyer_name' => 'setBuyerName',
        'buyer_county' => 'setBuyerCounty',
        'buyer_tax_info' => 'setBuyerTaxInfo',
        'marketplace_tax_info' => 'setMarketplaceTaxInfo',
        'seller_display_name' => 'setSellerDisplayName',
        'shipment_items' => 'setShipmentItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'warehouse_id' => 'getWarehouseId',
        'amazon_order_id' => 'getAmazonOrderId',
        'amazon_shipment_id' => 'getAmazonShipmentId',
        'purchase_date' => 'getPurchaseDate',
        'shipping_address' => 'getShippingAddress',
        'payment_method_details' => 'getPaymentMethodDetails',
        'marketplace_id' => 'getMarketplaceId',
        'seller_id' => 'getSellerId',
        'buyer_name' => 'getBuyerName',
        'buyer_county' => 'getBuyerCounty',
        'buyer_tax_info' => 'getBuyerTaxInfo',
        'marketplace_tax_info' => 'getMarketplaceTaxInfo',
        'seller_display_name' => 'getSellerDisplayName',
        'shipment_items' => 'getShipmentItems',
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
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['amazon_order_id'] = isset($data['amazon_order_id']) ? $data['amazon_order_id'] : null;
        $this->container['amazon_shipment_id'] = isset($data['amazon_shipment_id']) ? $data['amazon_shipment_id'] : null;
        $this->container['purchase_date'] = isset($data['purchase_date']) ? $data['purchase_date'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        $this->container['payment_method_details'] = isset($data['payment_method_details']) ? $data['payment_method_details'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['seller_id'] = isset($data['seller_id']) ? $data['seller_id'] : null;
        $this->container['buyer_name'] = isset($data['buyer_name']) ? $data['buyer_name'] : null;
        $this->container['buyer_county'] = isset($data['buyer_county']) ? $data['buyer_county'] : null;
        $this->container['buyer_tax_info'] = isset($data['buyer_tax_info']) ? $data['buyer_tax_info'] : null;
        $this->container['marketplace_tax_info'] = isset($data['marketplace_tax_info']) ? $data['marketplace_tax_info'] : null;
        $this->container['seller_display_name'] = isset($data['seller_display_name']) ? $data['seller_display_name'] : null;
        $this->container['shipment_items'] = isset($data['shipment_items']) ? $data['shipment_items'] : null;
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
     * Gets warehouse_id.
     *
     * @return string
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id.
     *
     * @param string $warehouse_id the Amazon-defined identifier for the warehouse
     *
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets amazon_order_id.
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param string $amazon_order_id the Amazon-defined identifier for the order
     *
     * @return $this
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

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
     * @param string $amazon_shipment_id the Amazon-defined identifier for the shipment
     *
     * @return $this
     */
    public function setAmazonShipmentId($amazon_shipment_id)
    {
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }

    /**
     * Gets purchase_date.
     *
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->container['purchase_date'];
    }

    /**
     * Sets purchase_date.
     *
     * @param \DateTime $purchase_date the date and time when the order was created
     *
     * @return $this
     */
    public function setPurchaseDate($purchase_date)
    {
        $this->container['purchase_date'] = $purchase_date;

        return $this;
    }

    /**
     * Gets shipping_address.
     *
     * @return \TNT\Amazon\ShipmentInvoicing\V0\Model\Address
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address.
     *
     * @param \TNT\Amazon\ShipmentInvoicing\V0\Model\Address $shipping_address shipping_address
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets payment_method_details.
     *
     * @return \TNT\Amazon\ShipmentInvoicing\V0\Model\PaymentMethodDetailItemList
     */
    public function getPaymentMethodDetails()
    {
        return $this->container['payment_method_details'];
    }

    /**
     * Sets payment_method_details.
     *
     * @param \TNT\Amazon\ShipmentInvoicing\V0\Model\PaymentMethodDetailItemList $payment_method_details payment_method_details
     *
     * @return $this
     */
    public function setPaymentMethodDetails($payment_method_details)
    {
        $this->container['payment_method_details'] = $payment_method_details;

        return $this;
    }

    /**
     * Gets marketplace_id.
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id the identifier for the marketplace where the order was placed
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets seller_id.
     *
     * @return string
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id.
     *
     * @param string $seller_id the seller identifier
     *
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets buyer_name.
     *
     * @return string
     */
    public function getBuyerName()
    {
        return $this->container['buyer_name'];
    }

    /**
     * Sets buyer_name.
     *
     * @param string $buyer_name the name of the buyer
     *
     * @return $this
     */
    public function setBuyerName($buyer_name)
    {
        $this->container['buyer_name'] = $buyer_name;

        return $this;
    }

    /**
     * Gets buyer_county.
     *
     * @return string
     */
    public function getBuyerCounty()
    {
        return $this->container['buyer_county'];
    }

    /**
     * Sets buyer_county.
     *
     * @param string $buyer_county the county of the buyer
     *
     * @return $this
     */
    public function setBuyerCounty($buyer_county)
    {
        $this->container['buyer_county'] = $buyer_county;

        return $this;
    }

    /**
     * Gets buyer_tax_info.
     *
     * @return \TNT\Amazon\ShipmentInvoicing\V0\Model\BuyerTaxInfo
     */
    public function getBuyerTaxInfo()
    {
        return $this->container['buyer_tax_info'];
    }

    /**
     * Sets buyer_tax_info.
     *
     * @param \TNT\Amazon\ShipmentInvoicing\V0\Model\BuyerTaxInfo $buyer_tax_info buyer_tax_info
     *
     * @return $this
     */
    public function setBuyerTaxInfo($buyer_tax_info)
    {
        $this->container['buyer_tax_info'] = $buyer_tax_info;

        return $this;
    }

    /**
     * Gets marketplace_tax_info.
     *
     * @return \TNT\Amazon\ShipmentInvoicing\V0\Model\MarketplaceTaxInfo
     */
    public function getMarketplaceTaxInfo()
    {
        return $this->container['marketplace_tax_info'];
    }

    /**
     * Sets marketplace_tax_info.
     *
     * @param \TNT\Amazon\ShipmentInvoicing\V0\Model\MarketplaceTaxInfo $marketplace_tax_info marketplace_tax_info
     *
     * @return $this
     */
    public function setMarketplaceTaxInfo($marketplace_tax_info)
    {
        $this->container['marketplace_tax_info'] = $marketplace_tax_info;

        return $this;
    }

    /**
     * Gets seller_display_name.
     *
     * @return string
     */
    public function getSellerDisplayName()
    {
        return $this->container['seller_display_name'];
    }

    /**
     * Sets seller_display_name.
     *
     * @param string $seller_display_name the seller’s friendly name registered in the marketplace
     *
     * @return $this
     */
    public function setSellerDisplayName($seller_display_name)
    {
        $this->container['seller_display_name'] = $seller_display_name;

        return $this;
    }

    /**
     * Gets shipment_items.
     *
     * @return \TNT\Amazon\ShipmentInvoicing\V0\Model\ShipmentItems
     */
    public function getShipmentItems()
    {
        return $this->container['shipment_items'];
    }

    /**
     * Sets shipment_items.
     *
     * @param \TNT\Amazon\ShipmentInvoicing\V0\Model\ShipmentItems $shipment_items shipment_items
     *
     * @return $this
     */
    public function setShipmentItems($shipment_items)
    {
        $this->container['shipment_items'] = $shipment_items;

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