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
 * ItemDetails.
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
 * Selling Partner API for Retail Procurement Shipments.
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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

namespace TNT\Amazon\VendorShipments\V1\Model;

use ArrayAccess;
use TNT\Amazon\VendorShipments\V1\ObjectSerializer;

/**
 * ItemDetails Class Doc Comment.
 *
 * @category Class
 * @description Item details for be provided for every item in shipment at either the item or carton or pallet level, whichever is appropriate.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ItemDetails implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'purchase_order_number' => 'string',
        'lot_number' => 'string',
        'expiry' => '\TNT\Amazon\VendorShipments\V1\Model\Expiry',
        'maximum_retail_price' => '\TNT\Amazon\VendorShipments\V1\Model\Money',
        'handling_code' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'purchase_order_number' => null,
        'lot_number' => null,
        'expiry' => null,
        'maximum_retail_price' => null,
        'handling_code' => null,
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
        'purchase_order_number' => 'purchaseOrderNumber',
        'lot_number' => 'lotNumber',
        'expiry' => 'expiry',
        'maximum_retail_price' => 'maximumRetailPrice',
        'handling_code' => 'handlingCode',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'lot_number' => 'setLotNumber',
        'expiry' => 'setExpiry',
        'maximum_retail_price' => 'setMaximumRetailPrice',
        'handling_code' => 'setHandlingCode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'lot_number' => 'getLotNumber',
        'expiry' => 'getExpiry',
        'maximum_retail_price' => 'getMaximumRetailPrice',
        'handling_code' => 'getHandlingCode',
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

    public const HANDLING_CODE_OVERSIZED = 'Oversized';
    public const HANDLING_CODE_FRAGILE = 'Fragile';
    public const HANDLING_CODE_FOOD = 'Food';
    public const HANDLING_CODE_HANDLE_WITH_CARE = 'HandleWithCare';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getHandlingCodeAllowableValues()
    {
        return [
            self::HANDLING_CODE_OVERSIZED,
            self::HANDLING_CODE_FRAGILE,
            self::HANDLING_CODE_FOOD,
            self::HANDLING_CODE_HANDLE_WITH_CARE,
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
        $this->container['purchase_order_number'] = isset($data['purchase_order_number']) ? $data['purchase_order_number'] : null;
        $this->container['lot_number'] = isset($data['lot_number']) ? $data['lot_number'] : null;
        $this->container['expiry'] = isset($data['expiry']) ? $data['expiry'] : null;
        $this->container['maximum_retail_price'] = isset($data['maximum_retail_price']) ? $data['maximum_retail_price'] : null;
        $this->container['handling_code'] = isset($data['handling_code']) ? $data['handling_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getHandlingCodeAllowableValues();

        if (null !== $this->container['handling_code'] && ! \in_array($this->container['handling_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'handling_code', must be one of '%s'",
                $this->container['handling_code'],
                implode("', '", $allowedValues)
            );
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
     * Gets purchase_order_number.
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number.
     *
     * @param string $purchase_order_number The Amazon purchase order number for the shipment being confirmed. If the items in this shipment belong to multiple purchase order numbers that are in particular carton or pallet within the shipment, then provide the purchaseOrderNumber at the appropriate carton or pallet level. Formatting Notes: 8-character alpha-numeric code.
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets lot_number.
     *
     * @return string
     */
    public function getLotNumber()
    {
        return $this->container['lot_number'];
    }

    /**
     * Sets lot_number.
     *
     * @param string $lot_number The batch or lot number associates an item with information the manufacturer considers relevant for traceability of the trade item to which the Element String is applied. The data may refer to the trade item itself or to items contained. This field is mandatory for all perishable items.
     *
     * @return $this
     */
    public function setLotNumber($lot_number)
    {
        $this->container['lot_number'] = $lot_number;

        return $this;
    }

    /**
     * Gets expiry.
     *
     * @return \TNT\Amazon\VendorShipments\V1\Model\Expiry
     */
    public function getExpiry()
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry.
     *
     * @param \TNT\Amazon\VendorShipments\V1\Model\Expiry $expiry either expiryDate or mfgDate and expiryAfterDuration are mandatory for perishable items
     *
     * @return $this
     */
    public function setExpiry($expiry)
    {
        $this->container['expiry'] = $expiry;

        return $this;
    }

    /**
     * Gets maximum_retail_price.
     *
     * @return \TNT\Amazon\VendorShipments\V1\Model\Money
     */
    public function getMaximumRetailPrice()
    {
        return $this->container['maximum_retail_price'];
    }

    /**
     * Sets maximum_retail_price.
     *
     * @param \TNT\Amazon\VendorShipments\V1\Model\Money $maximum_retail_price maximum retail price of the item being shipped
     *
     * @return $this
     */
    public function setMaximumRetailPrice($maximum_retail_price)
    {
        $this->container['maximum_retail_price'] = $maximum_retail_price;

        return $this;
    }

    /**
     * Gets handling_code.
     *
     * @return string
     */
    public function getHandlingCode()
    {
        return $this->container['handling_code'];
    }

    /**
     * Sets handling_code.
     *
     * @param string $handling_code identification of the instructions on how specified item/carton/pallet should be handled
     *
     * @return $this
     */
    public function setHandlingCode($handling_code)
    {
        $allowedValues = $this->getHandlingCodeAllowableValues();
        if (null !== $handling_code && ! \in_array($handling_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'handling_code', must be one of '%s'", $handling_code, implode("', '", $allowedValues)));
        }
        $this->container['handling_code'] = $handling_code;

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
