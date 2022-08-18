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
 * BuyBoxPriceType.
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
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace TNT\Amazon\ProductPricing\V0\Model;

use ArrayAccess;
use TNT\Amazon\ProductPricing\V0\ObjectSerializer;

/**
 * BuyBoxPriceType Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class BuyBoxPriceType implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'BuyBoxPriceType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'condition' => 'string',
        'offer_type' => '\TNT\Amazon\ProductPricing\V0\Model\OfferCustomerType',
        'quantity_tier' => 'int',
        'quantity_discount_type' => '\TNT\Amazon\ProductPricing\V0\Model\QuantityDiscountType',
        'landed_price' => '\TNT\Amazon\ProductPricing\V0\Model\MoneyType',
        'listing_price' => '\TNT\Amazon\ProductPricing\V0\Model\MoneyType',
        'shipping' => '\TNT\Amazon\ProductPricing\V0\Model\MoneyType',
        'points' => '\TNT\Amazon\ProductPricing\V0\Model\Points',
        'seller_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'condition' => null,
        'offer_type' => null,
        'quantity_tier' => 'int32',
        'quantity_discount_type' => null,
        'landed_price' => null,
        'listing_price' => null,
        'shipping' => null,
        'points' => null,
        'seller_id' => null,
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
        'condition' => 'condition',
        'offer_type' => 'offerType',
        'quantity_tier' => 'quantityTier',
        'quantity_discount_type' => 'quantityDiscountType',
        'landed_price' => 'LandedPrice',
        'listing_price' => 'ListingPrice',
        'shipping' => 'Shipping',
        'points' => 'Points',
        'seller_id' => 'sellerId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'condition' => 'setCondition',
        'offer_type' => 'setOfferType',
        'quantity_tier' => 'setQuantityTier',
        'quantity_discount_type' => 'setQuantityDiscountType',
        'landed_price' => 'setLandedPrice',
        'listing_price' => 'setListingPrice',
        'shipping' => 'setShipping',
        'points' => 'setPoints',
        'seller_id' => 'setSellerId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'condition' => 'getCondition',
        'offer_type' => 'getOfferType',
        'quantity_tier' => 'getQuantityTier',
        'quantity_discount_type' => 'getQuantityDiscountType',
        'landed_price' => 'getLandedPrice',
        'listing_price' => 'getListingPrice',
        'shipping' => 'getShipping',
        'points' => 'getPoints',
        'seller_id' => 'getSellerId',
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
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['offer_type'] = isset($data['offer_type']) ? $data['offer_type'] : null;
        $this->container['quantity_tier'] = isset($data['quantity_tier']) ? $data['quantity_tier'] : null;
        $this->container['quantity_discount_type'] = isset($data['quantity_discount_type']) ? $data['quantity_discount_type'] : null;
        $this->container['landed_price'] = isset($data['landed_price']) ? $data['landed_price'] : null;
        $this->container['listing_price'] = isset($data['listing_price']) ? $data['listing_price'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['seller_id'] = isset($data['seller_id']) ? $data['seller_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['landed_price'] === null) {
            $invalidProperties[] = "'landed_price' can't be null";
        }
        if ($this->container['listing_price'] === null) {
            $invalidProperties[] = "'listing_price' can't be null";
        }
        if ($this->container['shipping'] === null) {
            $invalidProperties[] = "'shipping' can't be null";
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
     * Gets condition.
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition.
     *
     * @param string $condition Indicates the condition of the item. For example: New, Used, Collectible, Refurbished, or Club.
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets offer_type.
     *
     * @return \TNT\Amazon\ProductPricing\V0\Model\OfferCustomerType
     */
    public function getOfferType()
    {
        return $this->container['offer_type'];
    }

    /**
     * Sets offer_type.
     *
     * @param \TNT\Amazon\ProductPricing\V0\Model\OfferCustomerType $offer_type Indicates the type of customer that the offer is valid for.<br><br>When the offer type is B2C in a quantity discount, the seller is winning the Buy Box because others do not have inventory at that quantity, not because they have a quantity discount on the ASIN.
     *
     * @return $this
     */
    public function setOfferType($offer_type)
    {
        $this->container['offer_type'] = $offer_type;

        return $this;
    }

    /**
     * Gets quantity_tier.
     *
     * @return int
     */
    public function getQuantityTier()
    {
        return $this->container['quantity_tier'];
    }

    /**
     * Sets quantity_tier.
     *
     * @param int $quantity_tier indicates at what quantity this price becomes active
     *
     * @return $this
     */
    public function setQuantityTier($quantity_tier)
    {
        $this->container['quantity_tier'] = $quantity_tier;

        return $this;
    }

    /**
     * Gets quantity_discount_type.
     *
     * @return \TNT\Amazon\ProductPricing\V0\Model\QuantityDiscountType
     */
    public function getQuantityDiscountType()
    {
        return $this->container['quantity_discount_type'];
    }

    /**
     * Sets quantity_discount_type.
     *
     * @param \TNT\Amazon\ProductPricing\V0\Model\QuantityDiscountType $quantity_discount_type indicates the type of quantity discount this price applies to
     *
     * @return $this
     */
    public function setQuantityDiscountType($quantity_discount_type)
    {
        $this->container['quantity_discount_type'] = $quantity_discount_type;

        return $this;
    }

    /**
     * Gets landed_price.
     *
     * @return \TNT\Amazon\ProductPricing\V0\Model\MoneyType
     */
    public function getLandedPrice()
    {
        return $this->container['landed_price'];
    }

    /**
     * Sets landed_price.
     *
     * @param \TNT\Amazon\ProductPricing\V0\Model\MoneyType $landed_price the value calculated by adding ListingPrice + Shipping - Points
     *
     * @return $this
     */
    public function setLandedPrice($landed_price)
    {
        $this->container['landed_price'] = $landed_price;

        return $this;
    }

    /**
     * Gets listing_price.
     *
     * @return \TNT\Amazon\ProductPricing\V0\Model\MoneyType
     */
    public function getListingPrice()
    {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price.
     *
     * @param \TNT\Amazon\ProductPricing\V0\Model\MoneyType $listing_price the price of the item
     *
     * @return $this
     */
    public function setListingPrice($listing_price)
    {
        $this->container['listing_price'] = $listing_price;

        return $this;
    }

    /**
     * Gets shipping.
     *
     * @return \TNT\Amazon\ProductPricing\V0\Model\MoneyType
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping.
     *
     * @param \TNT\Amazon\ProductPricing\V0\Model\MoneyType $shipping the shipping cost
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets points.
     *
     * @return \TNT\Amazon\ProductPricing\V0\Model\Points
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points.
     *
     * @param \TNT\Amazon\ProductPricing\V0\Model\Points $points the number of Amazon Points offered with the purchase of an item
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

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
     * @param string $seller_id the seller identifier for the offer
     *
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

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