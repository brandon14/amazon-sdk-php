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
 * GetPrepInstructionsResult.
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

use TNT\Amazon\FulfillmentInbound\V0\ObjectSerializer;

/**
 * GetPrepInstructionsResult Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class GetPrepInstructionsResult implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetPrepInstructionsResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'sku_prep_instructions_list' => '\TNT\Amazon\FulfillmentInbound\V0\Model\SKUPrepInstructionsList',
        'invalid_sku_list' => '\TNT\Amazon\FulfillmentInbound\V0\Model\InvalidSKUList',
        'asin_prep_instructions_list' => '\TNT\Amazon\FulfillmentInbound\V0\Model\ASINPrepInstructionsList',
        'invalid_asin_list' => '\TNT\Amazon\FulfillmentInbound\V0\Model\InvalidASINList',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'sku_prep_instructions_list' => null,
        'invalid_sku_list' => null,
        'asin_prep_instructions_list' => null,
        'invalid_asin_list' => null,
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
        'sku_prep_instructions_list' => 'SKUPrepInstructionsList',
        'invalid_sku_list' => 'InvalidSKUList',
        'asin_prep_instructions_list' => 'ASINPrepInstructionsList',
        'invalid_asin_list' => 'InvalidASINList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'sku_prep_instructions_list' => 'setSkuPrepInstructionsList',
        'invalid_sku_list' => 'setInvalidSkuList',
        'asin_prep_instructions_list' => 'setAsinPrepInstructionsList',
        'invalid_asin_list' => 'setInvalidAsinList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'sku_prep_instructions_list' => 'getSkuPrepInstructionsList',
        'invalid_sku_list' => 'getInvalidSkuList',
        'asin_prep_instructions_list' => 'getAsinPrepInstructionsList',
        'invalid_asin_list' => 'getInvalidAsinList',
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
        $this->container['sku_prep_instructions_list'] = isset($data['sku_prep_instructions_list']) ? $data['sku_prep_instructions_list'] : null;
        $this->container['invalid_sku_list'] = isset($data['invalid_sku_list']) ? $data['invalid_sku_list'] : null;
        $this->container['asin_prep_instructions_list'] = isset($data['asin_prep_instructions_list']) ? $data['asin_prep_instructions_list'] : null;
        $this->container['invalid_asin_list'] = isset($data['invalid_asin_list']) ? $data['invalid_asin_list'] : null;
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
     * Gets sku_prep_instructions_list.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\SKUPrepInstructionsList
     */
    public function getSkuPrepInstructionsList()
    {
        return $this->container['sku_prep_instructions_list'];
    }

    /**
     * Sets sku_prep_instructions_list.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\SKUPrepInstructionsList $sku_prep_instructions_list sku_prep_instructions_list
     *
     * @return $this
     */
    public function setSkuPrepInstructionsList($sku_prep_instructions_list)
    {
        $this->container['sku_prep_instructions_list'] = $sku_prep_instructions_list;

        return $this;
    }

    /**
     * Gets invalid_sku_list.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\InvalidSKUList
     */
    public function getInvalidSkuList()
    {
        return $this->container['invalid_sku_list'];
    }

    /**
     * Sets invalid_sku_list.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\InvalidSKUList $invalid_sku_list invalid_sku_list
     *
     * @return $this
     */
    public function setInvalidSkuList($invalid_sku_list)
    {
        $this->container['invalid_sku_list'] = $invalid_sku_list;

        return $this;
    }

    /**
     * Gets asin_prep_instructions_list.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\ASINPrepInstructionsList
     */
    public function getAsinPrepInstructionsList()
    {
        return $this->container['asin_prep_instructions_list'];
    }

    /**
     * Sets asin_prep_instructions_list.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\ASINPrepInstructionsList $asin_prep_instructions_list asin_prep_instructions_list
     *
     * @return $this
     */
    public function setAsinPrepInstructionsList($asin_prep_instructions_list)
    {
        $this->container['asin_prep_instructions_list'] = $asin_prep_instructions_list;

        return $this;
    }

    /**
     * Gets invalid_asin_list.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\InvalidASINList
     */
    public function getInvalidAsinList()
    {
        return $this->container['invalid_asin_list'];
    }

    /**
     * Sets invalid_asin_list.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\InvalidASINList $invalid_asin_list invalid_asin_list
     *
     * @return $this
     */
    public function setInvalidAsinList($invalid_asin_list)
    {
        $this->container['invalid_asin_list'] = $invalid_asin_list;

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
