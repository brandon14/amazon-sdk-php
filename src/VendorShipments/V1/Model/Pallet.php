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
 * Pallet.
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

use TNT\Amazon\VendorShipments\V1\ObjectSerializer;

/**
 * Pallet Class Doc Comment.
 *
 * @category Class
 *
 * @description Details of the Pallet/Tare being shipped.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Pallet implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Pallet';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'pallet_identifiers' => '\TNT\Amazon\VendorShipments\V1\Model\ContainerIdentification[]',
        'tier' => 'int',
        'block' => 'int',
        'dimensions' => '\TNT\Amazon\VendorShipments\V1\Model\Dimensions',
        'weight' => '\TNT\Amazon\VendorShipments\V1\Model\Weight',
        'carton_reference_details' => '\TNT\Amazon\VendorShipments\V1\Model\CartonReferenceDetails',
        'items' => '\TNT\Amazon\VendorShipments\V1\Model\ContainerItem[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'pallet_identifiers' => null,
        'tier' => null,
        'block' => null,
        'dimensions' => null,
        'weight' => null,
        'carton_reference_details' => null,
        'items' => null,
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
        'pallet_identifiers' => 'palletIdentifiers',
        'tier' => 'tier',
        'block' => 'block',
        'dimensions' => 'dimensions',
        'weight' => 'weight',
        'carton_reference_details' => 'cartonReferenceDetails',
        'items' => 'items',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'pallet_identifiers' => 'setPalletIdentifiers',
        'tier' => 'setTier',
        'block' => 'setBlock',
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'carton_reference_details' => 'setCartonReferenceDetails',
        'items' => 'setItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'pallet_identifiers' => 'getPalletIdentifiers',
        'tier' => 'getTier',
        'block' => 'getBlock',
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'carton_reference_details' => 'getCartonReferenceDetails',
        'items' => 'getItems',
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
        $this->container['pallet_identifiers'] = isset($data['pallet_identifiers']) ? $data['pallet_identifiers'] : null;
        $this->container['tier'] = isset($data['tier']) ? $data['tier'] : null;
        $this->container['block'] = isset($data['block']) ? $data['block'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['carton_reference_details'] = isset($data['carton_reference_details']) ? $data['carton_reference_details'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pallet_identifiers'] === null) {
            $invalidProperties[] = "'pallet_identifiers' can't be null";
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
     * Gets pallet_identifiers.
     *
     * @return \TNT\Amazon\VendorShipments\V1\Model\ContainerIdentification[]
     */
    public function getPalletIdentifiers()
    {
        return $this->container['pallet_identifiers'];
    }

    /**
     * Sets pallet_identifiers.
     *
     * @param \TNT\Amazon\VendorShipments\V1\Model\ContainerIdentification[] $pallet_identifiers a list of pallet identifiers
     *
     * @return $this
     */
    public function setPalletIdentifiers($pallet_identifiers)
    {
        $this->container['pallet_identifiers'] = $pallet_identifiers;

        return $this;
    }

    /**
     * Gets tier.
     *
     * @return int
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier.
     *
     * @param int $tier number of layers per pallet
     *
     * @return $this
     */
    public function setTier($tier)
    {
        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets block.
     *
     * @return int
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block.
     *
     * @param int $block number of cartons per layer on the pallet
     *
     * @return $this
     */
    public function setBlock($block)
    {
        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets dimensions.
     *
     * @return \TNT\Amazon\VendorShipments\V1\Model\Dimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions.
     *
     * @param \TNT\Amazon\VendorShipments\V1\Model\Dimensions $dimensions dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets weight.
     *
     * @return \TNT\Amazon\VendorShipments\V1\Model\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight.
     *
     * @param \TNT\Amazon\VendorShipments\V1\Model\Weight $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets carton_reference_details.
     *
     * @return \TNT\Amazon\VendorShipments\V1\Model\CartonReferenceDetails
     */
    public function getCartonReferenceDetails()
    {
        return $this->container['carton_reference_details'];
    }

    /**
     * Sets carton_reference_details.
     *
     * @param \TNT\Amazon\VendorShipments\V1\Model\CartonReferenceDetails $carton_reference_details carton reference details
     *
     * @return $this
     */
    public function setCartonReferenceDetails($carton_reference_details)
    {
        $this->container['carton_reference_details'] = $carton_reference_details;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \TNT\Amazon\VendorShipments\V1\Model\ContainerItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \TNT\Amazon\VendorShipments\V1\Model\ContainerItem[] $items a list of container item details
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
