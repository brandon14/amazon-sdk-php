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
 * TaxWithholdingEvent.
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
 * TaxWithholdingEvent Class Doc Comment.
 *
 * @category Class
 *
 * @description A TaxWithholding event on seller&#39;s account.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class TaxWithholdingEvent implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'TaxWithholdingEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'posted_date' => '\TNT\Amazon\Finances\V0\Model\\DateTime',
        'base_amount' => '\TNT\Amazon\Finances\V0\Model\Currency',
        'withheld_amount' => '\TNT\Amazon\Finances\V0\Model\Currency',
        'tax_withholding_period' => '\TNT\Amazon\Finances\V0\Model\TaxWithholdingPeriod',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'posted_date' => null,
        'base_amount' => null,
        'withheld_amount' => null,
        'tax_withholding_period' => null,
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
        'posted_date' => 'PostedDate',
        'base_amount' => 'BaseAmount',
        'withheld_amount' => 'WithheldAmount',
        'tax_withholding_period' => 'TaxWithholdingPeriod',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'posted_date' => 'setPostedDate',
        'base_amount' => 'setBaseAmount',
        'withheld_amount' => 'setWithheldAmount',
        'tax_withholding_period' => 'setTaxWithholdingPeriod',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'posted_date' => 'getPostedDate',
        'base_amount' => 'getBaseAmount',
        'withheld_amount' => 'getWithheldAmount',
        'tax_withholding_period' => 'getTaxWithholdingPeriod',
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
        $this->container['posted_date'] = isset($data['posted_date']) ? $data['posted_date'] : null;
        $this->container['base_amount'] = isset($data['base_amount']) ? $data['base_amount'] : null;
        $this->container['withheld_amount'] = isset($data['withheld_amount']) ? $data['withheld_amount'] : null;
        $this->container['tax_withholding_period'] = isset($data['tax_withholding_period']) ? $data['tax_withholding_period'] : null;
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
     * Gets posted_date.
     *
     * @return \TNT\Amazon\Finances\V0\Model\DateTime
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param \TNT\Amazon\Finances\V0\Model\DateTime $posted_date the date and time when the financial event was posted
     *
     * @return $this
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets base_amount.
     *
     * @return \TNT\Amazon\Finances\V0\Model\Currency
     */
    public function getBaseAmount()
    {
        return $this->container['base_amount'];
    }

    /**
     * Sets base_amount.
     *
     * @param \TNT\Amazon\Finances\V0\Model\Currency $base_amount the amount which tax was withheld against
     *
     * @return $this
     */
    public function setBaseAmount($base_amount)
    {
        $this->container['base_amount'] = $base_amount;

        return $this;
    }

    /**
     * Gets withheld_amount.
     *
     * @return \TNT\Amazon\Finances\V0\Model\Currency
     */
    public function getWithheldAmount()
    {
        return $this->container['withheld_amount'];
    }

    /**
     * Sets withheld_amount.
     *
     * @param \TNT\Amazon\Finances\V0\Model\Currency $withheld_amount the amount of the tax withholding deducted from seller's account
     *
     * @return $this
     */
    public function setWithheldAmount($withheld_amount)
    {
        $this->container['withheld_amount'] = $withheld_amount;

        return $this;
    }

    /**
     * Gets tax_withholding_period.
     *
     * @return \TNT\Amazon\Finances\V0\Model\TaxWithholdingPeriod
     */
    public function getTaxWithholdingPeriod()
    {
        return $this->container['tax_withholding_period'];
    }

    /**
     * Sets tax_withholding_period.
     *
     * @param \TNT\Amazon\Finances\V0\Model\TaxWithholdingPeriod $tax_withholding_period time period for which tax is withheld
     *
     * @return $this
     */
    public function setTaxWithholdingPeriod($tax_withholding_period)
    {
        $this->container['tax_withholding_period'] = $tax_withholding_period;

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
