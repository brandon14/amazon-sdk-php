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
 * TaxRegistrationDetails.
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
 * Selling Partner API for Direct Fulfillment Shipping.
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
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

namespace TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model;

use TNT\Amazon\VendorDirectFulfillmentShipping\V1\ObjectSerializer;

/**
 * TaxRegistrationDetails Class Doc Comment.
 *
 * @category Class
 *
 * @description Tax registration details of the entity.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class TaxRegistrationDetails implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'TaxRegistrationDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'tax_registration_type' => 'string',
        'tax_registration_number' => 'string',
        'tax_registration_address' => '\TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\Address',
        'tax_registration_messages' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'tax_registration_type' => null,
        'tax_registration_number' => null,
        'tax_registration_address' => null,
        'tax_registration_messages' => null,
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
        'tax_registration_type' => 'taxRegistrationType',
        'tax_registration_number' => 'taxRegistrationNumber',
        'tax_registration_address' => 'taxRegistrationAddress',
        'tax_registration_messages' => 'taxRegistrationMessages',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'tax_registration_type' => 'setTaxRegistrationType',
        'tax_registration_number' => 'setTaxRegistrationNumber',
        'tax_registration_address' => 'setTaxRegistrationAddress',
        'tax_registration_messages' => 'setTaxRegistrationMessages',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_registration_type' => 'getTaxRegistrationType',
        'tax_registration_number' => 'getTaxRegistrationNumber',
        'tax_registration_address' => 'getTaxRegistrationAddress',
        'tax_registration_messages' => 'getTaxRegistrationMessages',
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

    public const TAX_REGISTRATION_TYPE_VAT = 'VAT';
    public const TAX_REGISTRATION_TYPE_GST = 'GST';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getTaxRegistrationTypeAllowableValues()
    {
        return [
            self::TAX_REGISTRATION_TYPE_VAT,
            self::TAX_REGISTRATION_TYPE_GST,
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
        $this->container['tax_registration_type'] = isset($data['tax_registration_type']) ? $data['tax_registration_type'] : null;
        $this->container['tax_registration_number'] = isset($data['tax_registration_number']) ? $data['tax_registration_number'] : null;
        $this->container['tax_registration_address'] = isset($data['tax_registration_address']) ? $data['tax_registration_address'] : null;
        $this->container['tax_registration_messages'] = isset($data['tax_registration_messages']) ? $data['tax_registration_messages'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTaxRegistrationTypeAllowableValues();

        if (null !== $this->container['tax_registration_type'] && ! \in_array($this->container['tax_registration_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tax_registration_type', must be one of '%s'",
                $this->container['tax_registration_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['tax_registration_number'] === null) {
            $invalidProperties[] = "'tax_registration_number' can't be null";
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
     * Gets tax_registration_type.
     *
     * @return string
     */
    public function getTaxRegistrationType()
    {
        return $this->container['tax_registration_type'];
    }

    /**
     * Sets tax_registration_type.
     *
     * @param string $tax_registration_type tax registration type for the entity
     *
     * @return $this
     */
    public function setTaxRegistrationType($tax_registration_type)
    {
        $allowedValues = $this->getTaxRegistrationTypeAllowableValues();
        if (null !== $tax_registration_type && ! \in_array($tax_registration_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'tax_registration_type', must be one of '%s'", $tax_registration_type, implode("', '", $allowedValues)));
        }
        $this->container['tax_registration_type'] = $tax_registration_type;

        return $this;
    }

    /**
     * Gets tax_registration_number.
     *
     * @return string
     */
    public function getTaxRegistrationNumber()
    {
        return $this->container['tax_registration_number'];
    }

    /**
     * Sets tax_registration_number.
     *
     * @param string $tax_registration_number Tax registration number for the party. For example, VAT ID.
     *
     * @return $this
     */
    public function setTaxRegistrationNumber($tax_registration_number)
    {
        $this->container['tax_registration_number'] = $tax_registration_number;

        return $this;
    }

    /**
     * Gets tax_registration_address.
     *
     * @return \TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\Address
     */
    public function getTaxRegistrationAddress()
    {
        return $this->container['tax_registration_address'];
    }

    /**
     * Sets tax_registration_address.
     *
     * @param \TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\Address $tax_registration_address address associated with the tax registration number
     *
     * @return $this
     */
    public function setTaxRegistrationAddress($tax_registration_address)
    {
        $this->container['tax_registration_address'] = $tax_registration_address;

        return $this;
    }

    /**
     * Gets tax_registration_messages.
     *
     * @return string
     */
    public function getTaxRegistrationMessages()
    {
        return $this->container['tax_registration_messages'];
    }

    /**
     * Sets tax_registration_messages.
     *
     * @param string $tax_registration_messages tax registration message that can be used for additional tax related details
     *
     * @return $this
     */
    public function setTaxRegistrationMessages($tax_registration_messages)
    {
        $this->container['tax_registration_messages'] = $tax_registration_messages;

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
