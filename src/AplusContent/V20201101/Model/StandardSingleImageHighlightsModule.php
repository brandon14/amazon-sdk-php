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
 * StandardSingleImageHighlightsModule.
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
 * StandardSingleImageHighlightsModule Class Doc Comment.
 *
 * @category Class
 * @description A standard image with several paragraphs and a bulleted list.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class StandardSingleImageHighlightsModule implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'StandardSingleImageHighlightsModule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'image' => '\TNT\Amazon\AplusContent\V20201101\Model\ImageComponent',
        'headline' => '\TNT\Amazon\AplusContent\V20201101\Model\TextComponent',
        'text_block1' => '\TNT\Amazon\AplusContent\V20201101\Model\StandardTextBlock',
        'text_block2' => '\TNT\Amazon\AplusContent\V20201101\Model\StandardTextBlock',
        'text_block3' => '\TNT\Amazon\AplusContent\V20201101\Model\StandardTextBlock',
        'bulleted_list_block' => '\TNT\Amazon\AplusContent\V20201101\Model\StandardHeaderTextListBlock',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'image' => null,
        'headline' => null,
        'text_block1' => null,
        'text_block2' => null,
        'text_block3' => null,
        'bulleted_list_block' => null,
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
        'image' => 'image',
        'headline' => 'headline',
        'text_block1' => 'textBlock1',
        'text_block2' => 'textBlock2',
        'text_block3' => 'textBlock3',
        'bulleted_list_block' => 'bulletedListBlock',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'image' => 'setImage',
        'headline' => 'setHeadline',
        'text_block1' => 'setTextBlock1',
        'text_block2' => 'setTextBlock2',
        'text_block3' => 'setTextBlock3',
        'bulleted_list_block' => 'setBulletedListBlock',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'image' => 'getImage',
        'headline' => 'getHeadline',
        'text_block1' => 'getTextBlock1',
        'text_block2' => 'getTextBlock2',
        'text_block3' => 'getTextBlock3',
        'bulleted_list_block' => 'getBulletedListBlock',
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
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['headline'] = isset($data['headline']) ? $data['headline'] : null;
        $this->container['text_block1'] = isset($data['text_block1']) ? $data['text_block1'] : null;
        $this->container['text_block2'] = isset($data['text_block2']) ? $data['text_block2'] : null;
        $this->container['text_block3'] = isset($data['text_block3']) ? $data['text_block3'] : null;
        $this->container['bulleted_list_block'] = isset($data['bulleted_list_block']) ? $data['bulleted_list_block'] : null;
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
     * Gets text_block1.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\StandardTextBlock
     */
    public function getTextBlock1()
    {
        return $this->container['text_block1'];
    }

    /**
     * Sets text_block1.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\StandardTextBlock $text_block1 text_block1
     *
     * @return $this
     */
    public function setTextBlock1($text_block1)
    {
        $this->container['text_block1'] = $text_block1;

        return $this;
    }

    /**
     * Gets text_block2.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\StandardTextBlock
     */
    public function getTextBlock2()
    {
        return $this->container['text_block2'];
    }

    /**
     * Sets text_block2.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\StandardTextBlock $text_block2 text_block2
     *
     * @return $this
     */
    public function setTextBlock2($text_block2)
    {
        $this->container['text_block2'] = $text_block2;

        return $this;
    }

    /**
     * Gets text_block3.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\StandardTextBlock
     */
    public function getTextBlock3()
    {
        return $this->container['text_block3'];
    }

    /**
     * Sets text_block3.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\StandardTextBlock $text_block3 text_block3
     *
     * @return $this
     */
    public function setTextBlock3($text_block3)
    {
        $this->container['text_block3'] = $text_block3;

        return $this;
    }

    /**
     * Gets bulleted_list_block.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\StandardHeaderTextListBlock
     */
    public function getBulletedListBlock()
    {
        return $this->container['bulleted_list_block'];
    }

    /**
     * Sets bulleted_list_block.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\StandardHeaderTextListBlock $bulleted_list_block bulleted_list_block
     *
     * @return $this
     */
    public function setBulletedListBlock($bulleted_list_block)
    {
        $this->container['bulleted_list_block'] = $bulleted_list_block;

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