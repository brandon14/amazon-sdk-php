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
 * StandardTechSpecsModule.
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
 * Selling Partner API for A+ Content Management.
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * OpenAPI spec version: 2020-11-01
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TNT\Amazon\AplusContent\V20201101\Model;

use TNT\Amazon\AplusContent\V20201101\ObjectSerializer;

/**
 * StandardTechSpecsModule Class Doc Comment.
 *
 * @category Class
 *
 * @description The standard table of technical feature names and definitions.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class StandardTechSpecsModule implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'StandardTechSpecsModule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'headline' => '\TNT\Amazon\AplusContent\V20201101\Model\TextComponent',
        'specification_list' => '\TNT\Amazon\AplusContent\V20201101\Model\StandardTextPairBlock[]',
        'table_count' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'headline' => null,
        'specification_list' => null,
        'table_count' => null,
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
        'headline' => 'headline',
        'specification_list' => 'specificationList',
        'table_count' => 'tableCount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'headline' => 'setHeadline',
        'specification_list' => 'setSpecificationList',
        'table_count' => 'setTableCount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'headline' => 'getHeadline',
        'specification_list' => 'getSpecificationList',
        'table_count' => 'getTableCount',
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
        $this->container['headline'] = isset($data['headline']) ? $data['headline'] : null;
        $this->container['specification_list'] = isset($data['specification_list']) ? $data['specification_list'] : null;
        $this->container['table_count'] = isset($data['table_count']) ? $data['table_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['specification_list'] === null) {
            $invalidProperties[] = "'specification_list' can't be null";
        }
        if (null !== $this->container['table_count'] && ($this->container['table_count'] > 2)) {
            $invalidProperties[] = "invalid value for 'table_count', must be smaller than or equal to 2.";
        }

        if (null !== $this->container['table_count'] && ($this->container['table_count'] < 1)) {
            $invalidProperties[] = "invalid value for 'table_count', must be bigger than or equal to 1.";
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
     * Gets headline.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\TextComponent
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\TextComponent $headline headline
     *
     * @return $this
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets specification_list.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\StandardTextPairBlock[]
     */
    public function getSpecificationList()
    {
        return $this->container['specification_list'];
    }

    /**
     * Sets specification_list.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\StandardTextPairBlock[] $specification_list the specification list
     *
     * @return $this
     */
    public function setSpecificationList($specification_list)
    {
        $this->container['specification_list'] = $specification_list;

        return $this;
    }

    /**
     * Gets table_count.
     *
     * @return int
     */
    public function getTableCount()
    {
        return $this->container['table_count'];
    }

    /**
     * Sets table_count.
     *
     * @param int $table_count The number of tables to present. Features are evenly divided between the tables.
     *
     * @return $this
     */
    public function setTableCount($table_count)
    {
        if (null !== $table_count && ($table_count > 2)) {
            throw new \InvalidArgumentException('invalid value for $table_count when calling StandardTechSpecsModule., must be smaller than or equal to 2.');
        }
        if (null !== $table_count && ($table_count < 1)) {
            throw new \InvalidArgumentException('invalid value for $table_count when calling StandardTechSpecsModule., must be bigger than or equal to 1.');
        }

        $this->container['table_count'] = $table_count;

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
