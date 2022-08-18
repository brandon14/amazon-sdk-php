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
 * FeesEstimateIdentifier.
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
 * Selling Partner API for Product Fees.
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
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

namespace TNT\Amazon\ProductFees\V0\Model;

use ArrayAccess;
use TNT\Amazon\ProductFees\V0\ObjectSerializer;

/**
 * FeesEstimateIdentifier Class Doc Comment.
 *
 * @category Class
 * @description An item identifier, marketplace, time of request, and other details that identify an estimate.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class FeesEstimateIdentifier implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FeesEstimateIdentifier';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
        'seller_id' => 'string',
        'id_type' => '\TNT\Amazon\ProductFees\V0\Model\IdType',
        'id_value' => 'string',
        'is_amazon_fulfilled' => 'bool',
        'price_to_estimate_fees' => '\TNT\Amazon\ProductFees\V0\Model\PriceToEstimateFees',
        'seller_input_identifier' => 'string',
        'optional_fulfillment_program' => '\TNT\Amazon\ProductFees\V0\Model\OptionalFulfillmentProgram',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
        'seller_id' => null,
        'id_type' => null,
        'id_value' => null,
        'is_amazon_fulfilled' => null,
        'price_to_estimate_fees' => null,
        'seller_input_identifier' => null,
        'optional_fulfillment_program' => null,
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
        'marketplace_id' => 'MarketplaceId',
        'seller_id' => 'SellerId',
        'id_type' => 'IdType',
        'id_value' => 'IdValue',
        'is_amazon_fulfilled' => 'IsAmazonFulfilled',
        'price_to_estimate_fees' => 'PriceToEstimateFees',
        'seller_input_identifier' => 'SellerInputIdentifier',
        'optional_fulfillment_program' => 'OptionalFulfillmentProgram',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'seller_id' => 'setSellerId',
        'id_type' => 'setIdType',
        'id_value' => 'setIdValue',
        'is_amazon_fulfilled' => 'setIsAmazonFulfilled',
        'price_to_estimate_fees' => 'setPriceToEstimateFees',
        'seller_input_identifier' => 'setSellerInputIdentifier',
        'optional_fulfillment_program' => 'setOptionalFulfillmentProgram',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'seller_id' => 'getSellerId',
        'id_type' => 'getIdType',
        'id_value' => 'getIdValue',
        'is_amazon_fulfilled' => 'getIsAmazonFulfilled',
        'price_to_estimate_fees' => 'getPriceToEstimateFees',
        'seller_input_identifier' => 'getSellerInputIdentifier',
        'optional_fulfillment_program' => 'getOptionalFulfillmentProgram',
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
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['seller_id'] = isset($data['seller_id']) ? $data['seller_id'] : null;
        $this->container['id_type'] = isset($data['id_type']) ? $data['id_type'] : null;
        $this->container['id_value'] = isset($data['id_value']) ? $data['id_value'] : null;
        $this->container['is_amazon_fulfilled'] = isset($data['is_amazon_fulfilled']) ? $data['is_amazon_fulfilled'] : null;
        $this->container['price_to_estimate_fees'] = isset($data['price_to_estimate_fees']) ? $data['price_to_estimate_fees'] : null;
        $this->container['seller_input_identifier'] = isset($data['seller_input_identifier']) ? $data['seller_input_identifier'] : null;
        $this->container['optional_fulfillment_program'] = isset($data['optional_fulfillment_program']) ? $data['optional_fulfillment_program'] : null;
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
     * @param string $marketplace_id a marketplace identifier
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
     * Gets id_type.
     *
     * @return \TNT\Amazon\ProductFees\V0\Model\IdType
     */
    public function getIdType()
    {
        return $this->container['id_type'];
    }

    /**
     * Sets id_type.
     *
     * @param \TNT\Amazon\ProductFees\V0\Model\IdType $id_type id_type
     *
     * @return $this
     */
    public function setIdType($id_type)
    {
        $this->container['id_type'] = $id_type;

        return $this;
    }

    /**
     * Gets id_value.
     *
     * @return string
     */
    public function getIdValue()
    {
        return $this->container['id_value'];
    }

    /**
     * Sets id_value.
     *
     * @param string $id_value the item identifier
     *
     * @return $this
     */
    public function setIdValue($id_value)
    {
        $this->container['id_value'] = $id_value;

        return $this;
    }

    /**
     * Gets is_amazon_fulfilled.
     *
     * @return bool
     */
    public function getIsAmazonFulfilled()
    {
        return $this->container['is_amazon_fulfilled'];
    }

    /**
     * Sets is_amazon_fulfilled.
     *
     * @param bool $is_amazon_fulfilled when true, the offer is fulfilled by Amazon
     *
     * @return $this
     */
    public function setIsAmazonFulfilled($is_amazon_fulfilled)
    {
        $this->container['is_amazon_fulfilled'] = $is_amazon_fulfilled;

        return $this;
    }

    /**
     * Gets price_to_estimate_fees.
     *
     * @return \TNT\Amazon\ProductFees\V0\Model\PriceToEstimateFees
     */
    public function getPriceToEstimateFees()
    {
        return $this->container['price_to_estimate_fees'];
    }

    /**
     * Sets price_to_estimate_fees.
     *
     * @param \TNT\Amazon\ProductFees\V0\Model\PriceToEstimateFees $price_to_estimate_fees the item price on which the fee estimate is based
     *
     * @return $this
     */
    public function setPriceToEstimateFees($price_to_estimate_fees)
    {
        $this->container['price_to_estimate_fees'] = $price_to_estimate_fees;

        return $this;
    }

    /**
     * Gets seller_input_identifier.
     *
     * @return string
     */
    public function getSellerInputIdentifier()
    {
        return $this->container['seller_input_identifier'];
    }

    /**
     * Sets seller_input_identifier.
     *
     * @param string $seller_input_identifier a unique identifier provided by the caller to track this request
     *
     * @return $this
     */
    public function setSellerInputIdentifier($seller_input_identifier)
    {
        $this->container['seller_input_identifier'] = $seller_input_identifier;

        return $this;
    }

    /**
     * Gets optional_fulfillment_program.
     *
     * @return \TNT\Amazon\ProductFees\V0\Model\OptionalFulfillmentProgram
     */
    public function getOptionalFulfillmentProgram()
    {
        return $this->container['optional_fulfillment_program'];
    }

    /**
     * Sets optional_fulfillment_program.
     *
     * @param \TNT\Amazon\ProductFees\V0\Model\OptionalFulfillmentProgram $optional_fulfillment_program optional_fulfillment_program
     *
     * @return $this
     */
    public function setOptionalFulfillmentProgram($optional_fulfillment_program)
    {
        $this->container['optional_fulfillment_program'] = $optional_fulfillment_program;

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
