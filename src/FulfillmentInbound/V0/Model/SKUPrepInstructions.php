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
 * SKUPrepInstructions.
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
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace TNT\Amazon\FulfillmentInbound\V0\Model;

use ArrayAccess;
use TNT\Amazon\FulfillmentInbound\V0\ObjectSerializer;

/**
 * SKUPrepInstructions Class Doc Comment.
 *
 * @category Class
 * @description Labeling requirements and item preparation instructions to help you prepare items for shipment to Amazon&#39;s fulfillment network.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class SKUPrepInstructions implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'SKUPrepInstructions';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'seller_sku' => 'string',
        'asin' => 'string',
        'barcode_instruction' => '\TNT\Amazon\FulfillmentInbound\V0\Model\BarcodeInstruction',
        'prep_guidance' => '\TNT\Amazon\FulfillmentInbound\V0\Model\PrepGuidance',
        'prep_instruction_list' => '\TNT\Amazon\FulfillmentInbound\V0\Model\PrepInstructionList',
        'amazon_prep_fees_details_list' => '\TNT\Amazon\FulfillmentInbound\V0\Model\AmazonPrepFeesDetailsList',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'seller_sku' => null,
        'asin' => null,
        'barcode_instruction' => null,
        'prep_guidance' => null,
        'prep_instruction_list' => null,
        'amazon_prep_fees_details_list' => null,
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
        'asin' => 'ASIN',
        'barcode_instruction' => 'BarcodeInstruction',
        'prep_guidance' => 'PrepGuidance',
        'prep_instruction_list' => 'PrepInstructionList',
        'amazon_prep_fees_details_list' => 'AmazonPrepFeesDetailsList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_sku' => 'setSellerSku',
        'asin' => 'setAsin',
        'barcode_instruction' => 'setBarcodeInstruction',
        'prep_guidance' => 'setPrepGuidance',
        'prep_instruction_list' => 'setPrepInstructionList',
        'amazon_prep_fees_details_list' => 'setAmazonPrepFeesDetailsList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'asin' => 'getAsin',
        'barcode_instruction' => 'getBarcodeInstruction',
        'prep_guidance' => 'getPrepGuidance',
        'prep_instruction_list' => 'getPrepInstructionList',
        'amazon_prep_fees_details_list' => 'getAmazonPrepFeesDetailsList',
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
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['barcode_instruction'] = isset($data['barcode_instruction']) ? $data['barcode_instruction'] : null;
        $this->container['prep_guidance'] = isset($data['prep_guidance']) ? $data['prep_guidance'] : null;
        $this->container['prep_instruction_list'] = isset($data['prep_instruction_list']) ? $data['prep_instruction_list'] : null;
        $this->container['amazon_prep_fees_details_list'] = isset($data['amazon_prep_fees_details_list']) ? $data['amazon_prep_fees_details_list'] : null;
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
     * Gets barcode_instruction.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\BarcodeInstruction
     */
    public function getBarcodeInstruction()
    {
        return $this->container['barcode_instruction'];
    }

    /**
     * Sets barcode_instruction.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\BarcodeInstruction $barcode_instruction barcode_instruction
     *
     * @return $this
     */
    public function setBarcodeInstruction($barcode_instruction)
    {
        $this->container['barcode_instruction'] = $barcode_instruction;

        return $this;
    }

    /**
     * Gets prep_guidance.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\PrepGuidance
     */
    public function getPrepGuidance()
    {
        return $this->container['prep_guidance'];
    }

    /**
     * Sets prep_guidance.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\PrepGuidance $prep_guidance prep_guidance
     *
     * @return $this
     */
    public function setPrepGuidance($prep_guidance)
    {
        $this->container['prep_guidance'] = $prep_guidance;

        return $this;
    }

    /**
     * Gets prep_instruction_list.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\PrepInstructionList
     */
    public function getPrepInstructionList()
    {
        return $this->container['prep_instruction_list'];
    }

    /**
     * Sets prep_instruction_list.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\PrepInstructionList $prep_instruction_list prep_instruction_list
     *
     * @return $this
     */
    public function setPrepInstructionList($prep_instruction_list)
    {
        $this->container['prep_instruction_list'] = $prep_instruction_list;

        return $this;
    }

    /**
     * Gets amazon_prep_fees_details_list.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\AmazonPrepFeesDetailsList
     */
    public function getAmazonPrepFeesDetailsList()
    {
        return $this->container['amazon_prep_fees_details_list'];
    }

    /**
     * Sets amazon_prep_fees_details_list.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\AmazonPrepFeesDetailsList $amazon_prep_fees_details_list amazon_prep_fees_details_list
     *
     * @return $this
     */
    public function setAmazonPrepFeesDetailsList($amazon_prep_fees_details_list)
    {
        $this->container['amazon_prep_fees_details_list'] = $amazon_prep_fees_details_list;

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
