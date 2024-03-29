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
 * StandardFourImageTextModule.
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
 * StandardFourImageTextModule Class Doc Comment.
 *
 * @category Class
 *
 * @description Four standard images with text, presented across a single row.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class StandardFourImageTextModule implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'StandardFourImageTextModule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'headline' => '\TNT\Amazon\AplusContent\V20201101\Model\TextComponent',
        'block1' => '\TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock',
        'block2' => '\TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock',
        'block3' => '\TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock',
        'block4' => '\TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'headline' => null,
        'block1' => null,
        'block2' => null,
        'block3' => null,
        'block4' => null,
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
        'block1' => 'block1',
        'block2' => 'block2',
        'block3' => 'block3',
        'block4' => 'block4',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'headline' => 'setHeadline',
        'block1' => 'setBlock1',
        'block2' => 'setBlock2',
        'block3' => 'setBlock3',
        'block4' => 'setBlock4',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'headline' => 'getHeadline',
        'block1' => 'getBlock1',
        'block2' => 'getBlock2',
        'block3' => 'getBlock3',
        'block4' => 'getBlock4',
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
        $this->container['block1'] = isset($data['block1']) ? $data['block1'] : null;
        $this->container['block2'] = isset($data['block2']) ? $data['block2'] : null;
        $this->container['block3'] = isset($data['block3']) ? $data['block3'] : null;
        $this->container['block4'] = isset($data['block4']) ? $data['block4'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets block1.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock
     */
    public function getBlock1()
    {
        return $this->container['block1'];
    }

    /**
     * Sets block1.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock $block1 block1
     *
     * @return $this
     */
    public function setBlock1($block1)
    {
        $this->container['block1'] = $block1;

        return $this;
    }

    /**
     * Gets block2.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock
     */
    public function getBlock2()
    {
        return $this->container['block2'];
    }

    /**
     * Sets block2.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock $block2 block2
     *
     * @return $this
     */
    public function setBlock2($block2)
    {
        $this->container['block2'] = $block2;

        return $this;
    }

    /**
     * Gets block3.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock
     */
    public function getBlock3()
    {
        return $this->container['block3'];
    }

    /**
     * Sets block3.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock $block3 block3
     *
     * @return $this
     */
    public function setBlock3($block3)
    {
        $this->container['block3'] = $block3;

        return $this;
    }

    /**
     * Gets block4.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock
     */
    public function getBlock4()
    {
        return $this->container['block4'];
    }

    /**
     * Sets block4.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock $block4 block4
     *
     * @return $this
     */
    public function setBlock4($block4)
    {
        $this->container['block4'] = $block4;

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
