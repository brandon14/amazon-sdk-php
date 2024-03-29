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
 * AffordabilityExpenseEvent.
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
 * AffordabilityExpenseEvent Class Doc Comment.
 *
 * @category Class
 *
 * @description An expense related to an affordability promotion.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class AffordabilityExpenseEvent implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'AffordabilityExpenseEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'amazon_order_id' => 'string',
        'posted_date' => '\TNT\Amazon\Finances\V0\Model\\DateTime',
        'marketplace_id' => 'string',
        'transaction_type' => 'string',
        'base_expense' => '\TNT\Amazon\Finances\V0\Model\Currency',
        'tax_type_cgst' => '\TNT\Amazon\Finances\V0\Model\Currency',
        'tax_type_sgst' => '\TNT\Amazon\Finances\V0\Model\Currency',
        'tax_type_igst' => '\TNT\Amazon\Finances\V0\Model\Currency',
        'total_expense' => '\TNT\Amazon\Finances\V0\Model\Currency',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'amazon_order_id' => null,
        'posted_date' => null,
        'marketplace_id' => null,
        'transaction_type' => null,
        'base_expense' => null,
        'tax_type_cgst' => null,
        'tax_type_sgst' => null,
        'tax_type_igst' => null,
        'total_expense' => null,
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
        'amazon_order_id' => 'AmazonOrderId',
        'posted_date' => 'PostedDate',
        'marketplace_id' => 'MarketplaceId',
        'transaction_type' => 'TransactionType',
        'base_expense' => 'BaseExpense',
        'tax_type_cgst' => 'TaxTypeCGST',
        'tax_type_sgst' => 'TaxTypeSGST',
        'tax_type_igst' => 'TaxTypeIGST',
        'total_expense' => 'TotalExpense',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
        'posted_date' => 'setPostedDate',
        'marketplace_id' => 'setMarketplaceId',
        'transaction_type' => 'setTransactionType',
        'base_expense' => 'setBaseExpense',
        'tax_type_cgst' => 'setTaxTypeCgst',
        'tax_type_sgst' => 'setTaxTypeSgst',
        'tax_type_igst' => 'setTaxTypeIgst',
        'total_expense' => 'setTotalExpense',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'posted_date' => 'getPostedDate',
        'marketplace_id' => 'getMarketplaceId',
        'transaction_type' => 'getTransactionType',
        'base_expense' => 'getBaseExpense',
        'tax_type_cgst' => 'getTaxTypeCgst',
        'tax_type_sgst' => 'getTaxTypeSgst',
        'tax_type_igst' => 'getTaxTypeIgst',
        'total_expense' => 'getTotalExpense',
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
        $this->container['amazon_order_id'] = isset($data['amazon_order_id']) ? $data['amazon_order_id'] : null;
        $this->container['posted_date'] = isset($data['posted_date']) ? $data['posted_date'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['base_expense'] = isset($data['base_expense']) ? $data['base_expense'] : null;
        $this->container['tax_type_cgst'] = isset($data['tax_type_cgst']) ? $data['tax_type_cgst'] : null;
        $this->container['tax_type_sgst'] = isset($data['tax_type_sgst']) ? $data['tax_type_sgst'] : null;
        $this->container['tax_type_igst'] = isset($data['tax_type_igst']) ? $data['tax_type_igst'] : null;
        $this->container['total_expense'] = isset($data['total_expense']) ? $data['total_expense'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tax_type_cgst'] === null) {
            $invalidProperties[] = "'tax_type_cgst' can't be null";
        }
        if ($this->container['tax_type_sgst'] === null) {
            $invalidProperties[] = "'tax_type_sgst' can't be null";
        }
        if ($this->container['tax_type_igst'] === null) {
            $invalidProperties[] = "'tax_type_igst' can't be null";
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
     * @param string $amazon_order_id an Amazon-defined identifier for an order
     *
     * @return $this
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
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
     * @param \TNT\Amazon\Finances\V0\Model\DateTime $posted_date the date and time when the financial event was created
     *
     * @return $this
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

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
     * @param string $marketplace_id an encrypted, Amazon-defined marketplace identifier
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets transaction_type.
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type.
     *
     * @param string $transaction_type Indicates the type of transaction.   Possible values:  * Charge - For an affordability promotion expense.  * Refund - For an affordability promotion expense reversal.
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets base_expense.
     *
     * @return \TNT\Amazon\Finances\V0\Model\Currency
     */
    public function getBaseExpense()
    {
        return $this->container['base_expense'];
    }

    /**
     * Sets base_expense.
     *
     * @param \TNT\Amazon\Finances\V0\Model\Currency $base_expense the amount charged for clicks incurred under the Sponsored Products program
     *
     * @return $this
     */
    public function setBaseExpense($base_expense)
    {
        $this->container['base_expense'] = $base_expense;

        return $this;
    }

    /**
     * Gets tax_type_cgst.
     *
     * @return \TNT\Amazon\Finances\V0\Model\Currency
     */
    public function getTaxTypeCgst()
    {
        return $this->container['tax_type_cgst'];
    }

    /**
     * Sets tax_type_cgst.
     *
     * @param \TNT\Amazon\Finances\V0\Model\Currency $tax_type_cgst central Goods and Service Tax, charged and collected by the central government
     *
     * @return $this
     */
    public function setTaxTypeCgst($tax_type_cgst)
    {
        $this->container['tax_type_cgst'] = $tax_type_cgst;

        return $this;
    }

    /**
     * Gets tax_type_sgst.
     *
     * @return \TNT\Amazon\Finances\V0\Model\Currency
     */
    public function getTaxTypeSgst()
    {
        return $this->container['tax_type_sgst'];
    }

    /**
     * Sets tax_type_sgst.
     *
     * @param \TNT\Amazon\Finances\V0\Model\Currency $tax_type_sgst state Goods and Service Tax, charged and collected by the state government
     *
     * @return $this
     */
    public function setTaxTypeSgst($tax_type_sgst)
    {
        $this->container['tax_type_sgst'] = $tax_type_sgst;

        return $this;
    }

    /**
     * Gets tax_type_igst.
     *
     * @return \TNT\Amazon\Finances\V0\Model\Currency
     */
    public function getTaxTypeIgst()
    {
        return $this->container['tax_type_igst'];
    }

    /**
     * Sets tax_type_igst.
     *
     * @param \TNT\Amazon\Finances\V0\Model\Currency $tax_type_igst integrated Goods and Service Tax, charged and collected by the central government
     *
     * @return $this
     */
    public function setTaxTypeIgst($tax_type_igst)
    {
        $this->container['tax_type_igst'] = $tax_type_igst;

        return $this;
    }

    /**
     * Gets total_expense.
     *
     * @return \TNT\Amazon\Finances\V0\Model\Currency
     */
    public function getTotalExpense()
    {
        return $this->container['total_expense'];
    }

    /**
     * Sets total_expense.
     *
     * @param \TNT\Amazon\Finances\V0\Model\Currency $total_expense The total amount charged to the seller. TotalExpense = BaseExpense + TaxTypeIGST + TaxTypeCGST + TaxTypeSGST.
     *
     * @return $this
     */
    public function setTotalExpense($total_expense)
    {
        $this->container['total_expense'] = $total_expense;

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
