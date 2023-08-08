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
 * AsinMetadata.
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
 * AsinMetadata Class Doc Comment.
 *
 * @category Class
 *
 * @description The A+ Content ASIN with additional metadata for content management. If you don&#39;t include the &#x60;includedDataSet&#x60; parameter in a call to the listContentDocumentAsinRelations operation, the related ASINs are returned without metadata.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class AsinMetadata implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'AsinMetadata';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'asin' => '\TNT\Amazon\AplusContent\V20201101\Model\Asin',
        'badge_set' => '\TNT\Amazon\AplusContent\V20201101\Model\AsinBadgeSet',
        'parent' => '\TNT\Amazon\AplusContent\V20201101\Model\Asin',
        'title' => 'string',
        'image_url' => 'string',
        'content_reference_key_set' => '\TNT\Amazon\AplusContent\V20201101\Model\ContentReferenceKeySet',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'asin' => null,
        'badge_set' => null,
        'parent' => null,
        'title' => null,
        'image_url' => null,
        'content_reference_key_set' => null,
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
        'asin' => 'asin',
        'badge_set' => 'badgeSet',
        'parent' => 'parent',
        'title' => 'title',
        'image_url' => 'imageUrl',
        'content_reference_key_set' => 'contentReferenceKeySet',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'badge_set' => 'setBadgeSet',
        'parent' => 'setParent',
        'title' => 'setTitle',
        'image_url' => 'setImageUrl',
        'content_reference_key_set' => 'setContentReferenceKeySet',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'badge_set' => 'getBadgeSet',
        'parent' => 'getParent',
        'title' => 'getTitle',
        'image_url' => 'getImageUrl',
        'content_reference_key_set' => 'getContentReferenceKeySet',
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
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['badge_set'] = isset($data['badge_set']) ? $data['badge_set'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['content_reference_key_set'] = isset($data['content_reference_key_set']) ? $data['content_reference_key_set'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['asin'] === null) {
            $invalidProperties[] = "'asin' can't be null";
        }
        if (null !== $this->container['title'] && (mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if (null !== $this->container['image_url'] && (mb_strlen($this->container['image_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'image_url', the character length must be bigger than or equal to 1.";
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
     * Gets badge_set.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\AsinBadgeSet
     */
    public function getBadgeSet()
    {
        return $this->container['badge_set'];
    }

    /**
     * Sets badge_set.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\AsinBadgeSet $badge_set badge_set
     *
     * @return $this
     */
    public function setBadgeSet($badge_set)
    {
        $this->container['badge_set'] = $badge_set;

        return $this;
    }

    /**
     * Gets parent.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\Asin
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\Asin $parent parent
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

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
     * @param string $title the title for the ASIN in the Amazon catalog
     *
     * @return $this
     */
    public function setTitle($title)
    {
        if (null !== $title && (mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling AsinMetadata., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets image_url.
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url.
     *
     * @param string $image_url the default image for the ASIN in the Amazon catalog
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        if (null !== $image_url && (mb_strlen($image_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $image_url when calling AsinMetadata., must be bigger than or equal to 1.');
        }

        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets content_reference_key_set.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\ContentReferenceKeySet
     */
    public function getContentReferenceKeySet()
    {
        return $this->container['content_reference_key_set'];
    }

    /**
     * Sets content_reference_key_set.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\ContentReferenceKeySet $content_reference_key_set content_reference_key_set
     *
     * @return $this
     */
    public function setContentReferenceKeySet($content_reference_key_set)
    {
        $this->container['content_reference_key_set'] = $content_reference_key_set;

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
