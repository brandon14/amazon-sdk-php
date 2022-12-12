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
 * StandardComparisonProductBlock.
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

use ArrayAccess;
use TNT\Amazon\AplusContent\V20201101\ObjectSerializer;

/**
 * StandardComparisonProductBlock Class Doc Comment.
 *
 * @category Class
 * @description The A+ Content standard comparison product block.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class StandardComparisonProductBlock implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'StandardComparisonProductBlock';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'position' => 'int',
        'image' => '\TNT\Amazon\AplusContent\V20201101\Model\ImageComponent',
        'title' => 'string',
        'asin' => '\TNT\Amazon\AplusContent\V20201101\Model\Asin',
        'highlight' => 'bool',
        'metrics' => '\TNT\Amazon\AplusContent\V20201101\Model\PlainTextItem[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'position' => null,
        'image' => null,
        'title' => null,
        'asin' => null,
        'highlight' => null,
        'metrics' => null,
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
        'position' => 'position',
        'image' => 'image',
        'title' => 'title',
        'asin' => 'asin',
        'highlight' => 'highlight',
        'metrics' => 'metrics',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'position' => 'setPosition',
        'image' => 'setImage',
        'title' => 'setTitle',
        'asin' => 'setAsin',
        'highlight' => 'setHighlight',
        'metrics' => 'setMetrics',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'position' => 'getPosition',
        'image' => 'getImage',
        'title' => 'getTitle',
        'asin' => 'getAsin',
        'highlight' => 'getHighlight',
        'metrics' => 'getMetrics',
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
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['highlight'] = isset($data['highlight']) ? $data['highlight'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if (($this->container['position'] > 6)) {
            $invalidProperties[] = "invalid value for 'position', must be smaller than or equal to 6.";
        }

        if (($this->container['position'] < 1)) {
            $invalidProperties[] = "invalid value for 'position', must be bigger than or equal to 1.";
        }

        if (null !== $this->container['title'] && (mb_strlen($this->container['title']) > 80)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 80.";
        }

        if (null !== $this->container['title'] && (mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
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
     * Gets position.
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position.
     *
     * @param int $position The rank or index of this comparison product block within the module. Different blocks cannot occupy the same position within a single module.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        if (($position > 6)) {
            throw new \InvalidArgumentException('invalid value for $position when calling StandardComparisonProductBlock., must be smaller than or equal to 6.');
        }
        if (($position < 1)) {
            throw new \InvalidArgumentException('invalid value for $position when calling StandardComparisonProductBlock., must be bigger than or equal to 1.');
        }

        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets image.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\ImageComponent
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\ImageComponent $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param string $title the comparison product title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        if (null !== $title && (mb_strlen($title) > 80)) {
            throw new \InvalidArgumentException('invalid length for $title when calling StandardComparisonProductBlock., must be smaller than or equal to 80.');
        }
        if (null !== $title && (mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling StandardComparisonProductBlock., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets asin.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\Asin
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\Asin $asin asin
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets highlight.
     *
     * @return bool
     */
    public function getHighlight()
    {
        return $this->container['highlight'];
    }

    /**
     * Sets highlight.
     *
     * @param bool $highlight determines whether this block of content is visually highlighted
     *
     * @return $this
     */
    public function setHighlight($highlight)
    {
        $this->container['highlight'] = $highlight;

        return $this;
    }

    /**
     * Gets metrics.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\PlainTextItem[]
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\PlainTextItem[] $metrics comparison metrics for the product
     *
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

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
