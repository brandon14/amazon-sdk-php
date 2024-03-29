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
 * Restriction.
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
 * Selling Partner API for Listings Restrictions.
 *
 * The Selling Partner API for Listings Restrictions provides programmatic access to restrictions on Amazon catalog listings.  For more information, see the [Listings Restrictions API Use Case Guide](doc:listings-restrictions-api-v2021-08-01-use-case-guide).
 *
 * OpenAPI spec version: 2021-08-01
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TNT\Amazon\ListingsRestrictions\V20210801\Model;

use TNT\Amazon\ListingsRestrictions\V20210801\ObjectSerializer;

/**
 * Restriction Class Doc Comment.
 *
 * @category Class
 *
 * @description A listing restriction, optionally qualified by a condition, with a list of reasons for the restriction.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Restriction implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Restriction';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
        'condition_type' => 'string',
        'reasons' => '\TNT\Amazon\ListingsRestrictions\V20210801\Model\Reason[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
        'condition_type' => null,
        'reasons' => null,
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
        'marketplace_id' => 'marketplaceId',
        'condition_type' => 'conditionType',
        'reasons' => 'reasons',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'condition_type' => 'setConditionType',
        'reasons' => 'setReasons',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'condition_type' => 'getConditionType',
        'reasons' => 'getReasons',
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

    public const CONDITION_TYPE_NEW_NEW = 'new_new';
    public const CONDITION_TYPE_NEW_OPEN_BOX = 'new_open_box';
    public const CONDITION_TYPE_NEW_OEM = 'new_oem';
    public const CONDITION_TYPE_REFURBISHED_REFURBISHED = 'refurbished_refurbished';
    public const CONDITION_TYPE_USED_LIKE_NEW = 'used_like_new';
    public const CONDITION_TYPE_USED_VERY_GOOD = 'used_very_good';
    public const CONDITION_TYPE_USED_GOOD = 'used_good';
    public const CONDITION_TYPE_USED_ACCEPTABLE = 'used_acceptable';
    public const CONDITION_TYPE_COLLECTIBLE_LIKE_NEW = 'collectible_like_new';
    public const CONDITION_TYPE_COLLECTIBLE_VERY_GOOD = 'collectible_very_good';
    public const CONDITION_TYPE_COLLECTIBLE_GOOD = 'collectible_good';
    public const CONDITION_TYPE_COLLECTIBLE_ACCEPTABLE = 'collectible_acceptable';
    public const CONDITION_TYPE_CLUB_CLUB = 'club_club';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getConditionTypeAllowableValues()
    {
        return [
            self::CONDITION_TYPE_NEW_NEW,
            self::CONDITION_TYPE_NEW_OPEN_BOX,
            self::CONDITION_TYPE_NEW_OEM,
            self::CONDITION_TYPE_REFURBISHED_REFURBISHED,
            self::CONDITION_TYPE_USED_LIKE_NEW,
            self::CONDITION_TYPE_USED_VERY_GOOD,
            self::CONDITION_TYPE_USED_GOOD,
            self::CONDITION_TYPE_USED_ACCEPTABLE,
            self::CONDITION_TYPE_COLLECTIBLE_LIKE_NEW,
            self::CONDITION_TYPE_COLLECTIBLE_VERY_GOOD,
            self::CONDITION_TYPE_COLLECTIBLE_GOOD,
            self::CONDITION_TYPE_COLLECTIBLE_ACCEPTABLE,
            self::CONDITION_TYPE_CLUB_CLUB,
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
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['condition_type'] = isset($data['condition_type']) ? $data['condition_type'] : null;
        $this->container['reasons'] = isset($data['reasons']) ? $data['reasons'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        $allowedValues = $this->getConditionTypeAllowableValues();

        if (null !== $this->container['condition_type'] && ! \in_array($this->container['condition_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'condition_type', must be one of '%s'",
                $this->container['condition_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets marketplace_id.
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id A marketplace identifier. Identifies the Amazon marketplace where the restriction is enforced.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets condition_type.
     *
     * @return string
     */
    public function getConditionType()
    {
        return $this->container['condition_type'];
    }

    /**
     * Sets condition_type.
     *
     * @param string $condition_type the condition that applies to the restriction
     *
     * @return $this
     */
    public function setConditionType($condition_type)
    {
        $allowedValues = $this->getConditionTypeAllowableValues();
        if (null !== $condition_type && ! \in_array($condition_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'condition_type', must be one of '%s'", $condition_type, implode("', '", $allowedValues)));
        }
        $this->container['condition_type'] = $condition_type;

        return $this;
    }

    /**
     * Gets reasons.
     *
     * @return \TNT\Amazon\ListingsRestrictions\V20210801\Model\Reason[]
     */
    public function getReasons()
    {
        return $this->container['reasons'];
    }

    /**
     * Sets reasons.
     *
     * @param \TNT\Amazon\ListingsRestrictions\V20210801\Model\Reason[] $reasons a list of reasons for the restriction
     *
     * @return $this
     */
    public function setReasons($reasons)
    {
        $this->container['reasons'] = $reasons;

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
