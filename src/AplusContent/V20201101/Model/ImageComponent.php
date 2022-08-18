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
 * ImageComponent.
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
 * ImageComponent Class Doc Comment.
 *
 * @category Class
 * @description A reference to an image, hosted in the A+ Content media library.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ImageComponent implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ImageComponent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'upload_destination_id' => 'string',
        'image_crop_specification' => '\TNT\Amazon\AplusContent\V20201101\Model\ImageCropSpecification',
        'alt_text' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'upload_destination_id' => null,
        'image_crop_specification' => null,
        'alt_text' => null,
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
        'upload_destination_id' => 'uploadDestinationId',
        'image_crop_specification' => 'imageCropSpecification',
        'alt_text' => 'altText',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'upload_destination_id' => 'setUploadDestinationId',
        'image_crop_specification' => 'setImageCropSpecification',
        'alt_text' => 'setAltText',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'upload_destination_id' => 'getUploadDestinationId',
        'image_crop_specification' => 'getImageCropSpecification',
        'alt_text' => 'getAltText',
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
        $this->container['upload_destination_id'] = isset($data['upload_destination_id']) ? $data['upload_destination_id'] : null;
        $this->container['image_crop_specification'] = isset($data['image_crop_specification']) ? $data['image_crop_specification'] : null;
        $this->container['alt_text'] = isset($data['alt_text']) ? $data['alt_text'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['upload_destination_id'] === null) {
            $invalidProperties[] = "'upload_destination_id' can't be null";
        }
        if (mb_strlen($this->container['upload_destination_id']) < 1) {
            $invalidProperties[] = "invalid value for 'upload_destination_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['image_crop_specification'] === null) {
            $invalidProperties[] = "'image_crop_specification' can't be null";
        }
        if ($this->container['alt_text'] === null) {
            $invalidProperties[] = "'alt_text' can't be null";
        }
        if (mb_strlen($this->container['alt_text']) > 100) {
            $invalidProperties[] = "invalid value for 'alt_text', the character length must be smaller than or equal to 100.";
        }

        if (mb_strlen($this->container['alt_text']) < 1) {
            $invalidProperties[] = "invalid value for 'alt_text', the character length must be bigger than or equal to 1.";
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
     * Gets upload_destination_id.
     *
     * @return string
     */
    public function getUploadDestinationId()
    {
        return $this->container['upload_destination_id'];
    }

    /**
     * Sets upload_destination_id.
     *
     * @param string $upload_destination_id this identifier is provided by the Selling Partner API for Uploads
     *
     * @return $this
     */
    public function setUploadDestinationId($upload_destination_id)
    {
        if (mb_strlen($upload_destination_id) < 1) {
            throw new \InvalidArgumentException('invalid length for $upload_destination_id when calling ImageComponent., must be bigger than or equal to 1.');
        }

        $this->container['upload_destination_id'] = $upload_destination_id;

        return $this;
    }

    /**
     * Gets image_crop_specification.
     *
     * @return \TNT\Amazon\AplusContent\V20201101\Model\ImageCropSpecification
     */
    public function getImageCropSpecification()
    {
        return $this->container['image_crop_specification'];
    }

    /**
     * Sets image_crop_specification.
     *
     * @param \TNT\Amazon\AplusContent\V20201101\Model\ImageCropSpecification $image_crop_specification image_crop_specification
     *
     * @return $this
     */
    public function setImageCropSpecification($image_crop_specification)
    {
        $this->container['image_crop_specification'] = $image_crop_specification;

        return $this;
    }

    /**
     * Gets alt_text.
     *
     * @return string
     */
    public function getAltText()
    {
        return $this->container['alt_text'];
    }

    /**
     * Sets alt_text.
     *
     * @param string $alt_text the alternative text for the image
     *
     * @return $this
     */
    public function setAltText($alt_text)
    {
        if (mb_strlen($alt_text) > 100) {
            throw new \InvalidArgumentException('invalid length for $alt_text when calling ImageComponent., must be smaller than or equal to 100.');
        }
        if (mb_strlen($alt_text) < 1) {
            throw new \InvalidArgumentException('invalid length for $alt_text when calling ImageComponent., must be bigger than or equal to 1.');
        }

        $this->container['alt_text'] = $alt_text;

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
