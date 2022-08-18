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
 * ContentMetadata.
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
 * ContentMetadata Class Doc Comment.
 *
 * @category Class
 * @description The metadata of an A+ Content document.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ContentMetadata implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ContentMetadata';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'name' => 'string',
        'marketplace_id' => '\TNT\Amazon\AplusContent\V20201101\Model\MarketplaceId',
        'status' => '\TNT\Amazon\AplusContent\V20201101\Model\ContentStatus',
        'badge_set' => '\TNT\Amazon\AplusContent\V20201101\Model\ContentBadgeSet',
        'update_time' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'name' => null,
        'marketplace_id' => null,
        'status' => null,
        'badge_set' => null,
        'update_time' => 'date-time',
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
        'marketplace_id' => 'marketplaceId',
        'status' => 'status',
        'badge_set' => 'badgeSet',
        'update_time' => 'updateTime',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'marketplace_id' => 'setMarketplaceId',
        'status' => 'setStatus',
        'badge_set' => 'setBadgeSet',
        'update_time' => 'setUpdateTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'marketplace_id' => 'getMarketplaceId',
        'status' => 'getStatus',
        'badge_set' => 'getBadgeSet',
        'update_time' => 'getUpdateTime',
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
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['badge_set'] = isset($data['badge_set']) ? $data['badge_set'] : null;
        $this->container['update_time'] = isset($data['update_time']) ? $data['update_time'] : null;
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

        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['badge_set'] === null) {
            $invalidProperties[] = "'badge_set' can't be null";
        }
        if ($this->container['update_time'] === null) {
            $invalidProperties[] = "'update_time' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $name when calling ContentMetadata., must be smaller than or equal to 100.');
        }
        if (mb_strlen($name) < 1) {
            throw new \InvalidArgumentException('invalid length for $name when calling ContentMetadata., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets marketplace_id.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\MarketplaceId
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\MarketplaceId $marketplace_id marketplace_id
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\ContentStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\ContentStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets badge_set.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\ContentBadgeSet
     */
    public function getBadgeSet()
    {
        return $this->container['badge_set'];
    }

    /**
     * Sets badge_set.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\ContentBadgeSet $badge_set badge_set
     *
     * @return $this
     */
    public function setBadgeSet($badge_set)
    {
        $this->container['badge_set'] = $badge_set;

        return $this;
    }

    /**
     * Gets update_time.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time.
     *
     * @param \DateTime $update_time the approximate age of the A+ Content document and metadata
     *
     * @return $this
     */
    public function setUpdateTime($update_time)
    {
        $this->container['update_time'] = $update_time;

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