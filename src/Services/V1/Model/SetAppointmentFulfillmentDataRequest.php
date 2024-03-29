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
 * SetAppointmentFulfillmentDataRequest.
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
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
 *
 * OpenAPI spec version: v1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TNT\Amazon\Services\V1\Model;

use TNT\Amazon\Services\V1\ObjectSerializer;

/**
 * SetAppointmentFulfillmentDataRequest Class Doc Comment.
 *
 * @category Class
 *
 * @description Input for set appointment fulfillment data operation.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class SetAppointmentFulfillmentDataRequest implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'SetAppointmentFulfillmentDataRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fulfillment_time' => '\TNT\Amazon\Services\V1\Model\FulfillmentTime',
        'appointment_resources' => '\TNT\Amazon\Services\V1\Model\AppointmentResources',
        'fulfillment_documents' => '\TNT\Amazon\Services\V1\Model\FulfillmentDocuments',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fulfillment_time' => null,
        'appointment_resources' => null,
        'fulfillment_documents' => null,
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
        'fulfillment_time' => 'fulfillmentTime',
        'appointment_resources' => 'appointmentResources',
        'fulfillment_documents' => 'fulfillmentDocuments',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfillment_time' => 'setFulfillmentTime',
        'appointment_resources' => 'setAppointmentResources',
        'fulfillment_documents' => 'setFulfillmentDocuments',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfillment_time' => 'getFulfillmentTime',
        'appointment_resources' => 'getAppointmentResources',
        'fulfillment_documents' => 'getFulfillmentDocuments',
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
        $this->container['fulfillment_time'] = isset($data['fulfillment_time']) ? $data['fulfillment_time'] : null;
        $this->container['appointment_resources'] = isset($data['appointment_resources']) ? $data['appointment_resources'] : null;
        $this->container['fulfillment_documents'] = isset($data['fulfillment_documents']) ? $data['fulfillment_documents'] : null;
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
     * Gets fulfillment_time.
     *
     * @return \TNT\Amazon\Services\V1\Model\FulfillmentTime
     */
    public function getFulfillmentTime()
    {
        return $this->container['fulfillment_time'];
    }

    /**
     * Sets fulfillment_time.
     *
     * @param \TNT\Amazon\Services\V1\Model\FulfillmentTime $fulfillment_time input appointment time details
     *
     * @return $this
     */
    public function setFulfillmentTime($fulfillment_time)
    {
        $this->container['fulfillment_time'] = $fulfillment_time;

        return $this;
    }

    /**
     * Gets appointment_resources.
     *
     * @return \TNT\Amazon\Services\V1\Model\AppointmentResources
     */
    public function getAppointmentResources()
    {
        return $this->container['appointment_resources'];
    }

    /**
     * Sets appointment_resources.
     *
     * @param \TNT\Amazon\Services\V1\Model\AppointmentResources $appointment_resources resources involved in appointment fulfillment
     *
     * @return $this
     */
    public function setAppointmentResources($appointment_resources)
    {
        $this->container['appointment_resources'] = $appointment_resources;

        return $this;
    }

    /**
     * Gets fulfillment_documents.
     *
     * @return \TNT\Amazon\Services\V1\Model\FulfillmentDocuments
     */
    public function getFulfillmentDocuments()
    {
        return $this->container['fulfillment_documents'];
    }

    /**
     * Sets fulfillment_documents.
     *
     * @param \TNT\Amazon\Services\V1\Model\FulfillmentDocuments $fulfillment_documents documents specific to appointment fulfillment
     *
     * @return $this
     */
    public function setFulfillmentDocuments($fulfillment_documents)
    {
        $this->container['fulfillment_documents'] = $fulfillment_documents;

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
