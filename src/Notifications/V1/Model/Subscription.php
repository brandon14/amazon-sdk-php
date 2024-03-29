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
 * Subscription.
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
 * Selling Partner API for Notifications.
 *
 * The Selling Partner API for Notifications lets you subscribe to notifications that are relevant to a selling partner's business. Using this API you can create a destination to receive notifications, subscribe to notifications, delete notification subscriptions, and more.  For more information, see the [Notifications Use Case Guide](doc:notifications-api-v1-use-case-guide).
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

namespace TNT\Amazon\Notifications\V1\Model;

use TNT\Amazon\Notifications\V1\ObjectSerializer;

/**
 * Subscription Class Doc Comment.
 *
 * @category Class
 *
 * @description Represents a subscription to receive notifications.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Subscription implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Subscription';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'subscription_id' => 'string',
        'payload_version' => 'string',
        'destination_id' => 'string',
        'processing_directive' => '\TNT\Amazon\Notifications\V1\Model\ProcessingDirective',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'subscription_id' => null,
        'payload_version' => null,
        'destination_id' => null,
        'processing_directive' => null,
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
        'subscription_id' => 'subscriptionId',
        'payload_version' => 'payloadVersion',
        'destination_id' => 'destinationId',
        'processing_directive' => 'processingDirective',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'subscription_id' => 'setSubscriptionId',
        'payload_version' => 'setPayloadVersion',
        'destination_id' => 'setDestinationId',
        'processing_directive' => 'setProcessingDirective',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'subscription_id' => 'getSubscriptionId',
        'payload_version' => 'getPayloadVersion',
        'destination_id' => 'getDestinationId',
        'processing_directive' => 'getProcessingDirective',
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
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
        $this->container['payload_version'] = isset($data['payload_version']) ? $data['payload_version'] : null;
        $this->container['destination_id'] = isset($data['destination_id']) ? $data['destination_id'] : null;
        $this->container['processing_directive'] = isset($data['processing_directive']) ? $data['processing_directive'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['subscription_id'] === null) {
            $invalidProperties[] = "'subscription_id' can't be null";
        }
        if ($this->container['payload_version'] === null) {
            $invalidProperties[] = "'payload_version' can't be null";
        }
        if ($this->container['destination_id'] === null) {
            $invalidProperties[] = "'destination_id' can't be null";
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
     * Gets subscription_id.
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id.
     *
     * @param string $subscription_id the subscription identifier generated when the subscription is created
     *
     * @return $this
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets payload_version.
     *
     * @return string
     */
    public function getPayloadVersion()
    {
        return $this->container['payload_version'];
    }

    /**
     * Sets payload_version.
     *
     * @param string $payload_version the version of the payload object to be used in the notification
     *
     * @return $this
     */
    public function setPayloadVersion($payload_version)
    {
        $this->container['payload_version'] = $payload_version;

        return $this;
    }

    /**
     * Gets destination_id.
     *
     * @return string
     */
    public function getDestinationId()
    {
        return $this->container['destination_id'];
    }

    /**
     * Sets destination_id.
     *
     * @param string $destination_id the identifier for the destination where notifications will be delivered
     *
     * @return $this
     */
    public function setDestinationId($destination_id)
    {
        $this->container['destination_id'] = $destination_id;

        return $this;
    }

    /**
     * Gets processing_directive.
     *
     * @return \TNT\Amazon\Notifications\V1\Model\ProcessingDirective
     */
    public function getProcessingDirective()
    {
        return $this->container['processing_directive'];
    }

    /**
     * Sets processing_directive.
     *
     * @param \TNT\Amazon\Notifications\V1\Model\ProcessingDirective $processing_directive processing_directive
     *
     * @return $this
     */
    public function setProcessingDirective($processing_directive)
    {
        $this->container['processing_directive'] = $processing_directive;

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
