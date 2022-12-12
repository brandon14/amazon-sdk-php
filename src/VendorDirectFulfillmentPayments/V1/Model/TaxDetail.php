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
 * TaxDetail.
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
 * Selling Partner API for Direct Fulfillment Payments.
 *
 * The Selling Partner API for Direct Fulfillment Payments provides programmatic access to a direct fulfillment vendor's invoice data.
 *
 * OpenAPI spec version: v1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TNT\Amazon\VendorDirectFulfillmentPayments\V1\Model;

use TNT\Amazon\VendorDirectFulfillmentPayments\V1\ObjectSerializer;

/**
 * TaxDetail Class Doc Comment.
 *
 * @category Class
 *
 * @description Details of tax amount applied.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class TaxDetail implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'TaxDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'tax_type' => 'string',
        'tax_rate' => '\TNT\Amazon\VendorDirectFulfillmentPayments\V1\Model\Decimal',
        'tax_amount' => '\TNT\Amazon\VendorDirectFulfillmentPayments\V1\Model\Money',
        'taxable_amount' => '\TNT\Amazon\VendorDirectFulfillmentPayments\V1\Model\Money',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'tax_type' => null,
        'tax_rate' => null,
        'tax_amount' => null,
        'taxable_amount' => null,
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
        'tax_type' => 'taxType',
        'tax_rate' => 'taxRate',
        'tax_amount' => 'taxAmount',
        'taxable_amount' => 'taxableAmount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'tax_type' => 'setTaxType',
        'tax_rate' => 'setTaxRate',
        'tax_amount' => 'setTaxAmount',
        'taxable_amount' => 'setTaxableAmount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_type' => 'getTaxType',
        'tax_rate' => 'getTaxRate',
        'tax_amount' => 'getTaxAmount',
        'taxable_amount' => 'getTaxableAmount',
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

    public const TAX_TYPE_CGST = 'CGST';
    public const TAX_TYPE_SGST = 'SGST';
    public const TAX_TYPE_CESS = 'CESS';
    public const TAX_TYPE_UTGST = 'UTGST';
    public const TAX_TYPE_IGST = 'IGST';
    public const TAX_TYPE_MW_ST = 'MwSt.';
    public const TAX_TYPE_PST = 'PST';
    public const TAX_TYPE_TVA = 'TVA';
    public const TAX_TYPE_VAT = 'VAT';
    public const TAX_TYPE_GST = 'GST';
    public const TAX_TYPE_ST = 'ST';
    public const TAX_TYPE_CONSUMPTION = 'Consumption';
    public const TAX_TYPE_MUTUALLY_DEFINED = 'MutuallyDefined';
    public const TAX_TYPE_DOMESTIC_VAT = 'DomesticVAT';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getTaxTypeAllowableValues()
    {
        return [
            self::TAX_TYPE_CGST,
            self::TAX_TYPE_SGST,
            self::TAX_TYPE_CESS,
            self::TAX_TYPE_UTGST,
            self::TAX_TYPE_IGST,
            self::TAX_TYPE_MW_ST,
            self::TAX_TYPE_PST,
            self::TAX_TYPE_TVA,
            self::TAX_TYPE_VAT,
            self::TAX_TYPE_GST,
            self::TAX_TYPE_ST,
            self::TAX_TYPE_CONSUMPTION,
            self::TAX_TYPE_MUTUALLY_DEFINED,
            self::TAX_TYPE_DOMESTIC_VAT,
        ];
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
        $this->container['tax_type'] = isset($data['tax_type']) ? $data['tax_type'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['taxable_amount'] = isset($data['taxable_amount']) ? $data['taxable_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tax_type'] === null) {
            $invalidProperties[] = "'tax_type' can't be null";
        }
        $allowedValues = $this->getTaxTypeAllowableValues();

        if (null !== $this->container['tax_type'] && ! \in_array($this->container['tax_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tax_type', must be one of '%s'",
                $this->container['tax_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['tax_amount'] === null) {
            $invalidProperties[] = "'tax_amount' can't be null";
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
     * Gets tax_type.
     *
     * @return string
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type.
     *
     * @param string $tax_type type of the tax applied
     *
     * @return $this
     */
    public function setTaxType($tax_type)
    {
        $allowedValues = $this->getTaxTypeAllowableValues();
        if (! \in_array($tax_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'tax_type', must be one of '%s'", $tax_type, implode("', '", $allowedValues)));
        }
        $this->container['tax_type'] = $tax_type;

        return $this;
    }

    /**
     * Gets tax_rate.
     *
     * @return \TNT\Amazon\VendorDirectFulfillmentPayments\V1\Model\Decimal
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate.
     *
     * @param \TNT\Amazon\VendorDirectFulfillmentPayments\V1\Model\Decimal $tax_rate Tax percentage applied. Percentage must be expressed in decimal.
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets tax_amount.
     *
     * @return \TNT\Amazon\VendorDirectFulfillmentPayments\V1\Model\Money
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount.
     *
     * @param \TNT\Amazon\VendorDirectFulfillmentPayments\V1\Model\Money $tax_amount total tax amount applied on invoice total or an item total
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets taxable_amount.
     *
     * @return \TNT\Amazon\VendorDirectFulfillmentPayments\V1\Model\Money
     */
    public function getTaxableAmount()
    {
        return $this->container['taxable_amount'];
    }

    /**
     * Sets taxable_amount.
     *
     * @param \TNT\Amazon\VendorDirectFulfillmentPayments\V1\Model\Money $taxable_amount this field will contain the invoice amount that is taxable at the rate specified in the tax rate field
     *
     * @return $this
     */
    public function setTaxableAmount($taxable_amount)
    {
        $this->container['taxable_amount'] = $taxable_amount;

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
