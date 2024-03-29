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
 * EncryptionDetails.
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
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
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

namespace TNT\Amazon\Services\V1\Model;

use TNT\Amazon\Services\V1\ObjectSerializer;

/**
 * EncryptionDetails Class Doc Comment.
 *
 * @category Class
 *
 * @description Encryption details for required client-side encryption and decryption of document contents.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class EncryptionDetails implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'EncryptionDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'standard' => 'string',
        'initialization_vector' => 'string',
        'key' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'standard' => null,
        'initialization_vector' => null,
        'key' => null,
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
        'standard' => 'standard',
        'initialization_vector' => 'initializationVector',
        'key' => 'key',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'standard' => 'setStandard',
        'initialization_vector' => 'setInitializationVector',
        'key' => 'setKey',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'standard' => 'getStandard',
        'initialization_vector' => 'getInitializationVector',
        'key' => 'getKey',
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

    public const STANDARD_AES = 'AES';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getStandardAllowableValues()
    {
        return [
            self::STANDARD_AES,
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
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['initialization_vector'] = isset($data['initialization_vector']) ? $data['initialization_vector'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['standard'] === null) {
            $invalidProperties[] = "'standard' can't be null";
        }
        $allowedValues = $this->getStandardAllowableValues();

        if (null !== $this->container['standard'] && ! \in_array($this->container['standard'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'standard', must be one of '%s'",
                $this->container['standard'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['initialization_vector'] === null) {
            $invalidProperties[] = "'initialization_vector' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
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
     * Gets standard.
     *
     * @return string
     */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
     * Sets standard.
     *
     * @param string $standard the encryption standard required to encrypt or decrypt the document contents
     *
     * @return $this
     */
    public function setStandard($standard)
    {
        $allowedValues = $this->getStandardAllowableValues();
        if (! \in_array($standard, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'standard', must be one of '%s'", $standard, implode("', '", $allowedValues)));
        }
        $this->container['standard'] = $standard;

        return $this;
    }

    /**
     * Gets initialization_vector.
     *
     * @return string
     */
    public function getInitializationVector()
    {
        return $this->container['initialization_vector'];
    }

    /**
     * Sets initialization_vector.
     *
     * @param string $initialization_vector the vector to encrypt or decrypt the document contents using Cipher Block Chaining (CBC)
     *
     * @return $this
     */
    public function setInitializationVector($initialization_vector)
    {
        $this->container['initialization_vector'] = $initialization_vector;

        return $this;
    }

    /**
     * Gets key.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key.
     *
     * @param string $key the encryption key used to encrypt or decrypt the document contents
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

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
