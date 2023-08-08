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
 * RegulatedInformationField.
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
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
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

namespace TNT\Amazon\Orders\V0\Model;

use TNT\Amazon\Orders\V0\ObjectSerializer;

/**
 * RegulatedInformationField Class Doc Comment.
 *
 * @category Class
 *
 * @description A field collected from the regulatory form.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class RegulatedInformationField implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'RegulatedInformationField';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'field_id' => 'string',
        'field_label' => 'string',
        'field_type' => 'string',
        'field_value' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'field_id' => null,
        'field_label' => null,
        'field_type' => null,
        'field_value' => null,
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
        'field_id' => 'FieldId',
        'field_label' => 'FieldLabel',
        'field_type' => 'FieldType',
        'field_value' => 'FieldValue',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'field_id' => 'setFieldId',
        'field_label' => 'setFieldLabel',
        'field_type' => 'setFieldType',
        'field_value' => 'setFieldValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'field_id' => 'getFieldId',
        'field_label' => 'getFieldLabel',
        'field_type' => 'getFieldType',
        'field_value' => 'getFieldValue',
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

    public const FIELD_TYPE_TEXT = 'Text';
    public const FIELD_TYPE_FILE_ATTACHMENT = 'FileAttachment';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getFieldTypeAllowableValues()
    {
        return [
            self::FIELD_TYPE_TEXT,
            self::FIELD_TYPE_FILE_ATTACHMENT,
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
        $this->container['field_id'] = isset($data['field_id']) ? $data['field_id'] : null;
        $this->container['field_label'] = isset($data['field_label']) ? $data['field_label'] : null;
        $this->container['field_type'] = isset($data['field_type']) ? $data['field_type'] : null;
        $this->container['field_value'] = isset($data['field_value']) ? $data['field_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['field_id'] === null) {
            $invalidProperties[] = "'field_id' can't be null";
        }
        if ($this->container['field_label'] === null) {
            $invalidProperties[] = "'field_label' can't be null";
        }
        if ($this->container['field_type'] === null) {
            $invalidProperties[] = "'field_type' can't be null";
        }
        $allowedValues = $this->getFieldTypeAllowableValues();

        if (null !== $this->container['field_type'] && ! \in_array($this->container['field_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'field_type', must be one of '%s'",
                $this->container['field_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['field_value'] === null) {
            $invalidProperties[] = "'field_value' can't be null";
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
     * Gets field_id.
     *
     * @return string
     */
    public function getFieldId()
    {
        return $this->container['field_id'];
    }

    /**
     * Sets field_id.
     *
     * @param string $field_id the unique identifier for the field
     *
     * @return $this
     */
    public function setFieldId($field_id)
    {
        $this->container['field_id'] = $field_id;

        return $this;
    }

    /**
     * Gets field_label.
     *
     * @return string
     */
    public function getFieldLabel()
    {
        return $this->container['field_label'];
    }

    /**
     * Sets field_label.
     *
     * @param string $field_label the name for the field
     *
     * @return $this
     */
    public function setFieldLabel($field_label)
    {
        $this->container['field_label'] = $field_label;

        return $this;
    }

    /**
     * Gets field_type.
     *
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type.
     *
     * @param string $field_type the type of field
     *
     * @return $this
     */
    public function setFieldType($field_type)
    {
        $allowedValues = $this->getFieldTypeAllowableValues();
        if (! \in_array($field_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'field_type', must be one of '%s'", $field_type, implode("', '", $allowedValues)));
        }
        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets field_value.
     *
     * @return string
     */
    public function getFieldValue()
    {
        return $this->container['field_value'];
    }

    /**
     * Sets field_value.
     *
     * @param string $field_value The content of the field as collected in regulatory form. Note that FileAttachment type fields will contain a URL to download the attachment here.
     *
     * @return $this
     */
    public function setFieldValue($field_value)
    {
        $this->container['field_value'] = $field_value;

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
