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
 * ContentDocument.
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
 * ContentDocument Class Doc Comment.
 *
 * @category Class
 *
 * @description The A+ Content document. This is the enhanced content that is published to product detail pages.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ContentDocument implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ContentDocument';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'name' => 'string',
        'content_type' => '\TNT\Amazon\AplusContent\V20201101\Model\ContentType',
        'content_sub_type' => '\TNT\Amazon\AplusContent\V20201101\Model\ContentSubType',
        'locale' => '\TNT\Amazon\AplusContent\V20201101\Model\LanguageTag',
        'content_module_list' => '\TNT\Amazon\AplusContent\V20201101\Model\ContentModuleList',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'name' => null,
        'content_type' => null,
        'content_sub_type' => null,
        'locale' => null,
        'content_module_list' => null,
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
        'name' => 'name',
        'content_type' => 'contentType',
        'content_sub_type' => 'contentSubType',
        'locale' => 'locale',
        'content_module_list' => 'contentModuleList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'content_type' => 'setContentType',
        'content_sub_type' => 'setContentSubType',
        'locale' => 'setLocale',
        'content_module_list' => 'setContentModuleList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'content_type' => 'getContentType',
        'content_sub_type' => 'getContentSubType',
        'locale' => 'getLocale',
        'content_module_list' => 'getContentModuleList',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['content_sub_type'] = isset($data['content_sub_type']) ? $data['content_sub_type'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['content_module_list'] = isset($data['content_module_list']) ? $data['content_module_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (mb_strlen($this->container['name']) > 100) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if (mb_strlen($this->container['name']) < 1) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['content_type'] === null) {
            $invalidProperties[] = "'content_type' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ($this->container['content_module_list'] === null) {
            $invalidProperties[] = "'content_module_list' can't be null";
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
     * Gets name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name the A+ Content document name
     *
     * @return $this
     */
    public function setName($name)
    {
        if (mb_strlen($name) > 100) {
            throw new \InvalidArgumentException('invalid length for $name when calling ContentDocument., must be smaller than or equal to 100.');
        }
        if (mb_strlen($name) < 1) {
            throw new \InvalidArgumentException('invalid length for $name when calling ContentDocument., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets content_type.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\ContentType
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\ContentType $content_type content_type
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets content_sub_type.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\ContentSubType
     */
    public function getContentSubType()
    {
        return $this->container['content_sub_type'];
    }

    /**
     * Sets content_sub_type.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\ContentSubType $content_sub_type content_sub_type
     *
     * @return $this
     */
    public function setContentSubType($content_sub_type)
    {
        $this->container['content_sub_type'] = $content_sub_type;

        return $this;
    }

    /**
     * Gets locale.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\LanguageTag
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\LanguageTag $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets content_module_list.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\ContentModuleList
     */
    public function getContentModuleList()
    {
        return $this->container['content_module_list'];
    }

    /**
     * Sets content_module_list.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\ContentModuleList $content_module_list content_module_list
     *
     * @return $this
     */
    public function setContentModuleList($content_module_list)
    {
        $this->container['content_module_list'] = $content_module_list;

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
