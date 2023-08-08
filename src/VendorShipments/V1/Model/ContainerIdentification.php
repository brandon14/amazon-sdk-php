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
 * ContainerIdentification.
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
 * ContainerIdentification Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ContainerIdentification implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ContainerIdentification';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'container_identification_type' => 'string',
        'container_identification_number' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'container_identification_type' => null,
        'container_identification_number' => null,
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
        'container_identification_type' => 'containerIdentificationType',
        'container_identification_number' => 'containerIdentificationNumber',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'container_identification_type' => 'setContainerIdentificationType',
        'container_identification_number' => 'setContainerIdentificationNumber',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'container_identification_type' => 'getContainerIdentificationType',
        'container_identification_number' => 'getContainerIdentificationNumber',
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

    public const CONTAINER_IDENTIFICATION_TYPE_SSCC = 'SSCC';
    public const CONTAINER_IDENTIFICATION_TYPE_AMZNCC = 'AMZNCC';
    public const CONTAINER_IDENTIFICATION_TYPE_GTIN = 'GTIN';
    public const CONTAINER_IDENTIFICATION_TYPE_BPS = 'BPS';
    public const CONTAINER_IDENTIFICATION_TYPE_CID = 'CID';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getContainerIdentificationTypeAllowableValues()
    {
        return [
            self::CONTAINER_IDENTIFICATION_TYPE_SSCC,
            self::CONTAINER_IDENTIFICATION_TYPE_AMZNCC,
            self::CONTAINER_IDENTIFICATION_TYPE_GTIN,
            self::CONTAINER_IDENTIFICATION_TYPE_BPS,
            self::CONTAINER_IDENTIFICATION_TYPE_CID,
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
        $this->container['container_identification_type'] = isset($data['container_identification_type']) ? $data['container_identification_type'] : null;
        $this->container['container_identification_number'] = isset($data['container_identification_number']) ? $data['container_identification_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['container_identification_type'] === null) {
            $invalidProperties[] = "'container_identification_type' can't be null";
        }
        $allowedValues = $this->getContainerIdentificationTypeAllowableValues();

        if (null !== $this->container['container_identification_type'] && ! \in_array($this->container['container_identification_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'container_identification_type', must be one of '%s'",
                $this->container['container_identification_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['container_identification_number'] === null) {
            $invalidProperties[] = "'container_identification_number' can't be null";
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
     * Gets container_identification_type.
     *
     * @return string
     */
    public function getContainerIdentificationType()
    {
        return $this->container['container_identification_type'];
    }

    /**
     * Sets container_identification_type.
     *
     * @param string $container_identification_type the container identification type
     *
     * @return $this
     */
    public function setContainerIdentificationType($container_identification_type)
    {
        $allowedValues = $this->getContainerIdentificationTypeAllowableValues();
        if (! \in_array($container_identification_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'container_identification_type', must be one of '%s'", $container_identification_type, implode("', '", $allowedValues)));
        }
        $this->container['container_identification_type'] = $container_identification_type;

        return $this;
    }

    /**
     * Gets container_identification_number.
     *
     * @return string
     */
    public function getContainerIdentificationNumber()
    {
        return $this->container['container_identification_number'];
    }

    /**
     * Sets container_identification_number.
     *
     * @param string $container_identification_number container identification number that adheres to the definition of the container identification type
     *
     * @return $this
     */
    public function setContainerIdentificationNumber($container_identification_number)
    {
        $this->container['container_identification_number'] = $container_identification_number;

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
