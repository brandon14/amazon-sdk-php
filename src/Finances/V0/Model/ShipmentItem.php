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
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace TNT\Amazon\Finances\V0\Model;

use TNT\Amazon\Finances\V0\ObjectSerializer;

/**
 * ShipmentItem Class Doc Comment.
 *
 * @category Class
 *
 * @description An item of a shipment, refund, guarantee claim, or chargeback.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentItem implements ModelInterface, \ArrayAccess
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
        'seller_sku' => 'string',
        'order_item_id' => 'string',
        'order_adjustment_item_id' => 'string',
        'quantity_shipped' => 'int',
        'item_charge_list' => '\TNT\Amazon\Finances\V0\Model\ChargeComponentList',
        'item_charge_adjustment_list' => '\TNT\Amazon\Finances\V0\Model\ChargeComponentList',
        'item_fee_list' => '\TNT\Amazon\Finances\V0\Model\FeeComponentList',
        'item_fee_adjustment_list' => '\TNT\Amazon\Finances\V0\Model\FeeComponentList',
        'item_tax_withheld_list' => '\TNT\Amazon\Finances\V0\Model\TaxWithheldComponentList',
        'promotion_list' => '\TNT\Amazon\Finances\V0\Model\PromotionList',
        'promotion_adjustment_list' => '\TNT\Amazon\Finances\V0\Model\PromotionList',
        'cost_of_points_granted' => '\TNT\Amazon\Finances\V0\Model\Currency',
        'cost_of_points_returned' => '\TNT\Amazon\Finances\V0\Model\Currency',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'seller_sku' => null,
        'order_item_id' => null,
        'order_adjustment_item_id' => null,
        'quantity_shipped' => 'int32',
        'item_charge_list' => null,
        'item_charge_adjustment_list' => null,
        'item_fee_list' => null,
        'item_fee_adjustment_list' => null,
        'item_tax_withheld_list' => null,
        'promotion_list' => null,
        'promotion_adjustment_list' => null,
        'cost_of_points_granted' => null,
        'cost_of_points_returned' => null,
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
        'seller_sku' => 'SellerSKU',
        'order_item_id' => 'OrderItemId',
        'order_adjustment_item_id' => 'OrderAdjustmentItemId',
        'quantity_shipped' => 'QuantityShipped',
        'item_charge_list' => 'ItemChargeList',
        'item_charge_adjustment_list' => 'ItemChargeAdjustmentList',
        'item_fee_list' => 'ItemFeeList',
        'item_fee_adjustment_list' => 'ItemFeeAdjustmentList',
        'item_tax_withheld_list' => 'ItemTaxWithheldList',
        'promotion_list' => 'PromotionList',
        'promotion_adjustment_list' => 'PromotionAdjustmentList',
        'cost_of_points_granted' => 'CostOfPointsGranted',
        'cost_of_points_returned' => 'CostOfPointsReturned',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_sku' => 'setSellerSku',
        'order_item_id' => 'setOrderItemId',
        'order_adjustment_item_id' => 'setOrderAdjustmentItemId',
        'quantity_shipped' => 'setQuantityShipped',
        'item_charge_list' => 'setItemChargeList',
        'item_charge_adjustment_list' => 'setItemChargeAdjustmentList',
        'item_fee_list' => 'setItemFeeList',
        'item_fee_adjustment_list' => 'setItemFeeAdjustmentList',
        'item_tax_withheld_list' => 'setItemTaxWithheldList',
        'promotion_list' => 'setPromotionList',
        'promotion_adjustment_list' => 'setPromotionAdjustmentList',
        'cost_of_points_granted' => 'setCostOfPointsGranted',
        'cost_of_points_returned' => 'setCostOfPointsReturned',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'order_item_id' => 'getOrderItemId',
        'order_adjustment_item_id' => 'getOrderAdjustmentItemId',
        'quantity_shipped' => 'getQuantityShipped',
        'item_charge_list' => 'getItemChargeList',
        'item_charge_adjustment_list' => 'getItemChargeAdjustmentList',
        'item_fee_list' => 'getItemFeeList',
        'item_fee_adjustment_list' => 'getItemFeeAdjustmentList',
        'item_tax_withheld_list' => 'getItemTaxWithheldList',
        'promotion_list' => 'getPromotionList',
        'promotion_adjustment_list' => 'getPromotionAdjustmentList',
        'cost_of_points_granted' => 'getCostOfPointsGranted',
        'cost_of_points_returned' => 'getCostOfPointsReturned',
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
        $this->container['order_item_id'] = isset($data['order_item_id']) ? $data['order_item_id'] : null;
        $this->container['order_adjustment_item_id'] = isset($data['order_adjustment_item_id']) ? $data['order_adjustment_item_id'] : null;
        $this->container['quantity_shipped'] = isset($data['quantity_shipped']) ? $data['quantity_shipped'] : null;
        $this->container['item_charge_list'] = isset($data['item_charge_list']) ? $data['item_charge_list'] : null;
        $this->container['item_charge_adjustment_list'] = isset($data['item_charge_adjustment_list']) ? $data['item_charge_adjustment_list'] : null;
        $this->container['item_fee_list'] = isset($data['item_fee_list']) ? $data['item_fee_list'] : null;
        $this->container['item_fee_adjustment_list'] = isset($data['item_fee_adjustment_list']) ? $data['item_fee_adjustment_list'] : null;
        $this->container['item_tax_withheld_list'] = isset($data['item_tax_withheld_list']) ? $data['item_tax_withheld_list'] : null;
        $this->container['promotion_list'] = isset($data['promotion_list']) ? $data['promotion_list'] : null;
        $this->container['promotion_adjustment_list'] = isset($data['promotion_adjustment_list']) ? $data['promotion_adjustment_list'] : null;
        $this->container['cost_of_points_granted'] = isset($data['cost_of_points_granted']) ? $data['cost_of_points_granted'] : null;
        $this->container['cost_of_points_returned'] = isset($data['cost_of_points_returned']) ? $data['cost_of_points_returned'] : null;
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
     * @param string $seller_sku The seller SKU of the item. The seller SKU is qualified by the seller's seller ID, which is included with every call to the Selling Partner API.
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
     * @param string $order_item_id an Amazon-defined order item identifier
     *
     * @return $this
     */
    public function setOrderItemId($order_item_id)
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets order_adjustment_item_id.
     *
     * @return string
     */
    public function getOrderAdjustmentItemId()
    {
        return $this->container['order_adjustment_item_id'];
    }

    /**
     * Sets order_adjustment_item_id.
     *
     * @param string $order_adjustment_item_id an Amazon-defined order adjustment identifier defined for refunds, guarantee claims, and chargeback events
     *
     * @return $this
     */
    public function setOrderAdjustmentItemId($order_adjustment_item_id)
    {
        $this->container['order_adjustment_item_id'] = $order_adjustment_item_id;

        return $this;
    }

    /**
     * Gets quantity_shipped.
     *
     * @return int
     */
    public function getQuantityShipped()
    {
        return $this->container['quantity_shipped'];
    }

    /**
     * Sets quantity_shipped.
     *
     * @param int $quantity_shipped the number of items shipped
     *
     * @return $this
     */
    public function setQuantityShipped($quantity_shipped)
    {
        $this->container['quantity_shipped'] = $quantity_shipped;

        return $this;
    }

    /**
     * Gets item_charge_list.
     *
     * @return \TNT\Amazon\Finances\V0\Model\ChargeComponentList
     */
    public function getItemChargeList()
    {
        return $this->container['item_charge_list'];
    }

    /**
     * Sets item_charge_list.
     *
     * @param \TNT\Amazon\Finances\V0\Model\ChargeComponentList $item_charge_list a list of charges associated with the shipment item
     *
     * @return $this
     */
    public function setItemChargeList($item_charge_list)
    {
        $this->container['item_charge_list'] = $item_charge_list;

        return $this;
    }

    /**
     * Gets item_charge_adjustment_list.
     *
     * @return \TNT\Amazon\Finances\V0\Model\ChargeComponentList
     */
    public function getItemChargeAdjustmentList()
    {
        return $this->container['item_charge_adjustment_list'];
    }

    /**
     * Sets item_charge_adjustment_list.
     *
     * @param \TNT\Amazon\Finances\V0\Model\ChargeComponentList $item_charge_adjustment_list A list of charge adjustments associated with the shipment item. This value is only returned for refunds, guarantee claims, and chargeback events.
     *
     * @return $this
     */
    public function setItemChargeAdjustmentList($item_charge_adjustment_list)
    {
        $this->container['item_charge_adjustment_list'] = $item_charge_adjustment_list;

        return $this;
    }

    /**
     * Gets item_fee_list.
     *
     * @return \TNT\Amazon\Finances\V0\Model\FeeComponentList
     */
    public function getItemFeeList()
    {
        return $this->container['item_fee_list'];
    }

    /**
     * Sets item_fee_list.
     *
     * @param \TNT\Amazon\Finances\V0\Model\FeeComponentList $item_fee_list a list of fees associated with the shipment item
     *
     * @return $this
     */
    public function setItemFeeList($item_fee_list)
    {
        $this->container['item_fee_list'] = $item_fee_list;

        return $this;
    }

    /**
     * Gets item_fee_adjustment_list.
     *
     * @return \TNT\Amazon\Finances\V0\Model\FeeComponentList
     */
    public function getItemFeeAdjustmentList()
    {
        return $this->container['item_fee_adjustment_list'];
    }

    /**
     * Sets item_fee_adjustment_list.
     *
     * @param \TNT\Amazon\Finances\V0\Model\FeeComponentList $item_fee_adjustment_list A list of fee adjustments associated with the shipment item. This value is only returned for refunds, guarantee claims, and chargeback events.
     *
     * @return $this
     */
    public function setItemFeeAdjustmentList($item_fee_adjustment_list)
    {
        $this->container['item_fee_adjustment_list'] = $item_fee_adjustment_list;

        return $this;
    }

    /**
     * Gets item_tax_withheld_list.
     *
     * @return \TNT\Amazon\Finances\V0\Model\TaxWithheldComponentList
     */
    public function getItemTaxWithheldList()
    {
        return $this->container['item_tax_withheld_list'];
    }

    /**
     * Sets item_tax_withheld_list.
     *
     * @param \TNT\Amazon\Finances\V0\Model\TaxWithheldComponentList $item_tax_withheld_list a list of taxes withheld information for a shipment item
     *
     * @return $this
     */
    public function setItemTaxWithheldList($item_tax_withheld_list)
    {
        $this->container['item_tax_withheld_list'] = $item_tax_withheld_list;

        return $this;
    }

    /**
     * Gets promotion_list.
     *
     * @return \TNT\Amazon\Finances\V0\Model\PromotionList
     */
    public function getPromotionList()
    {
        return $this->container['promotion_list'];
    }

    /**
     * Sets promotion_list.
     *
     * @param \TNT\Amazon\Finances\V0\Model\PromotionList $promotion_list promotion_list
     *
     * @return $this
     */
    public function setPromotionList($promotion_list)
    {
        $this->container['promotion_list'] = $promotion_list;

        return $this;
    }

    /**
     * Gets promotion_adjustment_list.
     *
     * @return \TNT\Amazon\Finances\V0\Model\PromotionList
     */
    public function getPromotionAdjustmentList()
    {
        return $this->container['promotion_adjustment_list'];
    }

    /**
     * Sets promotion_adjustment_list.
     *
     * @param \TNT\Amazon\Finances\V0\Model\PromotionList $promotion_adjustment_list A list of promotion adjustments associated with the shipment item. This value is only returned for refunds, guarantee claims, and chargeback events.
     *
     * @return $this
     */
    public function setPromotionAdjustmentList($promotion_adjustment_list)
    {
        $this->container['promotion_adjustment_list'] = $promotion_adjustment_list;

        return $this;
    }

    /**
     * Gets cost_of_points_granted.
     *
     * @return \TNT\Amazon\Finances\V0\Model\Currency
     */
    public function getCostOfPointsGranted()
    {
        return $this->container['cost_of_points_granted'];
    }

    /**
     * Sets cost_of_points_granted.
     *
     * @param \TNT\Amazon\Finances\V0\Model\Currency $cost_of_points_granted the cost of Amazon Points granted for a shipment item
     *
     * @return $this
     */
    public function setCostOfPointsGranted($cost_of_points_granted)
    {
        $this->container['cost_of_points_granted'] = $cost_of_points_granted;

        return $this;
    }

    /**
     * Gets cost_of_points_returned.
     *
     * @return \TNT\Amazon\Finances\V0\Model\Currency
     */
    public function getCostOfPointsReturned()
    {
        return $this->container['cost_of_points_returned'];
    }

    /**
     * Sets cost_of_points_returned.
     *
     * @param \TNT\Amazon\Finances\V0\Model\Currency $cost_of_points_returned The cost of Amazon Points returned for a shipment item. This value is only returned for refunds, guarantee claims, and chargeback events.
     *
     * @return $this
     */
    public function setCostOfPointsReturned($cost_of_points_returned)
    {
        $this->container['cost_of_points_returned'] = $cost_of_points_returned;

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
