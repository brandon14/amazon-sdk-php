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
 * StandardImageSidebarModule.
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
 * StandardImageSidebarModule Class Doc Comment.
 *
 * @category Class
 *
 * @description Two images, two paragraphs, and two bulleted lists. One image is smaller and displayed in the sidebar.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class StandardImageSidebarModule implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'StandardImageSidebarModule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'headline' => '\TNT\Amazon\AplusContent\V20201101\Model\TextComponent',
        'image_caption_block' => '\TNT\Amazon\AplusContent\V20201101\Model\StandardImageCaptionBlock',
        'description_text_block' => '\TNT\Amazon\AplusContent\V20201101\Model\StandardTextBlock',
        'description_list_block' => '\TNT\Amazon\AplusContent\V20201101\Model\StandardTextListBlock',
        'sidebar_image_text_block' => '\TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock',
        'sidebar_list_block' => '\TNT\Amazon\AplusContent\V20201101\Model\StandardTextListBlock',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'headline' => null,
        'image_caption_block' => null,
        'description_text_block' => null,
        'description_list_block' => null,
        'sidebar_image_text_block' => null,
        'sidebar_list_block' => null,
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
        'image_caption_block' => 'imageCaptionBlock',
        'description_text_block' => 'descriptionTextBlock',
        'description_list_block' => 'descriptionListBlock',
        'sidebar_image_text_block' => 'sidebarImageTextBlock',
        'sidebar_list_block' => 'sidebarListBlock',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'headline' => 'setHeadline',
        'image_caption_block' => 'setImageCaptionBlock',
        'description_text_block' => 'setDescriptionTextBlock',
        'description_list_block' => 'setDescriptionListBlock',
        'sidebar_image_text_block' => 'setSidebarImageTextBlock',
        'sidebar_list_block' => 'setSidebarListBlock',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'headline' => 'getHeadline',
        'image_caption_block' => 'getImageCaptionBlock',
        'description_text_block' => 'getDescriptionTextBlock',
        'description_list_block' => 'getDescriptionListBlock',
        'sidebar_image_text_block' => 'getSidebarImageTextBlock',
        'sidebar_list_block' => 'getSidebarListBlock',
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
        $this->container['image_caption_block'] = isset($data['image_caption_block']) ? $data['image_caption_block'] : null;
        $this->container['description_text_block'] = isset($data['description_text_block']) ? $data['description_text_block'] : null;
        $this->container['description_list_block'] = isset($data['description_list_block']) ? $data['description_list_block'] : null;
        $this->container['sidebar_image_text_block'] = isset($data['sidebar_image_text_block']) ? $data['sidebar_image_text_block'] : null;
        $this->container['sidebar_list_block'] = isset($data['sidebar_list_block']) ? $data['sidebar_list_block'] : null;
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
     * Gets image_caption_block.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\StandardImageCaptionBlock
     */
    public function getImageCaptionBlock()
    {
        return $this->container['image_caption_block'];
    }

    /**
     * Sets image_caption_block.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\StandardImageCaptionBlock $image_caption_block image_caption_block
     *
     * @return $this
     */
    public function setImageCaptionBlock($image_caption_block)
    {
        $this->container['image_caption_block'] = $image_caption_block;

        return $this;
    }

    /**
     * Gets description_text_block.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\StandardTextBlock
     */
    public function getDescriptionTextBlock()
    {
        return $this->container['description_text_block'];
    }

    /**
     * Sets description_text_block.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\StandardTextBlock $description_text_block description_text_block
     *
     * @return $this
     */
    public function setDescriptionTextBlock($description_text_block)
    {
        $this->container['description_text_block'] = $description_text_block;

        return $this;
    }

    /**
     * Gets description_list_block.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\StandardTextListBlock
     */
    public function getDescriptionListBlock()
    {
        return $this->container['description_list_block'];
    }

    /**
     * Sets description_list_block.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\StandardTextListBlock $description_list_block description_list_block
     *
     * @return $this
     */
    public function setDescriptionListBlock($description_list_block)
    {
        $this->container['description_list_block'] = $description_list_block;

        return $this;
    }

    /**
     * Gets sidebar_image_text_block.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock
     */
    public function getSidebarImageTextBlock()
    {
        return $this->container['sidebar_image_text_block'];
    }

    /**
     * Sets sidebar_image_text_block.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\StandardImageTextBlock $sidebar_image_text_block sidebar_image_text_block
     *
     * @return $this
     */
    public function setSidebarImageTextBlock($sidebar_image_text_block)
    {
        $this->container['sidebar_image_text_block'] = $sidebar_image_text_block;

        return $this;
    }

    /**
     * Gets sidebar_list_block.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\StandardTextListBlock
     */
    public function getSidebarListBlock()
    {
        return $this->container['sidebar_list_block'];
    }

    /**
     * Sets sidebar_list_block.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\StandardTextListBlock $sidebar_list_block sidebar_list_block
     *
     * @return $this
     */
    public function setSidebarListBlock($sidebar_list_block)
    {
        $this->container['sidebar_list_block'] = $sidebar_list_block;

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
