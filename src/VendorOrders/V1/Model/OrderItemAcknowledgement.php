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
 * OrderItemAcknowledgement.
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
 * Selling Partner API for Retail Procurement Orders.
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
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

namespace TNT\Amazon\VendorOrders\V1\Model;

use TNT\Amazon\VendorOrders\V1\ObjectSerializer;

/**
 * OrderItemAcknowledgement Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class OrderItemAcknowledgement implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'OrderItemAcknowledgement';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'acknowledgement_code' => 'string',
        'acknowledged_quantity' => '\TNT\Amazon\VendorOrders\V1\Model\ItemQuantity',
        'scheduled_ship_date' => '\DateTime',
        'scheduled_delivery_date' => '\DateTime',
        'rejection_reason' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'acknowledgement_code' => null,
        'acknowledged_quantity' => null,
        'scheduled_ship_date' => 'date-time',
        'scheduled_delivery_date' => 'date-time',
        'rejection_reason' => null,
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
        'acknowledgement_code' => 'acknowledgementCode',
        'acknowledged_quantity' => 'acknowledgedQuantity',
        'scheduled_ship_date' => 'scheduledShipDate',
        'scheduled_delivery_date' => 'scheduledDeliveryDate',
        'rejection_reason' => 'rejectionReason',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'acknowledgement_code' => 'setAcknowledgementCode',
        'acknowledged_quantity' => 'setAcknowledgedQuantity',
        'scheduled_ship_date' => 'setScheduledShipDate',
        'scheduled_delivery_date' => 'setScheduledDeliveryDate',
        'rejection_reason' => 'setRejectionReason',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'acknowledgement_code' => 'getAcknowledgementCode',
        'acknowledged_quantity' => 'getAcknowledgedQuantity',
        'scheduled_ship_date' => 'getScheduledShipDate',
        'scheduled_delivery_date' => 'getScheduledDeliveryDate',
        'rejection_reason' => 'getRejectionReason',
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

    public const ACKNOWLEDGEMENT_CODE_ACCEPTED = 'Accepted';
    public const ACKNOWLEDGEMENT_CODE_BACKORDERED = 'Backordered';
    public const ACKNOWLEDGEMENT_CODE_REJECTED = 'Rejected';
    public const REJECTION_REASON_TEMPORARILY_UNAVAILABLE = 'TemporarilyUnavailable';
    public const REJECTION_REASON_INVALID_PRODUCT_IDENTIFIER = 'InvalidProductIdentifier';
    public const REJECTION_REASON_OBSOLETE_PRODUCT = 'ObsoleteProduct';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getAcknowledgementCodeAllowableValues()
    {
        return [
            self::ACKNOWLEDGEMENT_CODE_ACCEPTED,
            self::ACKNOWLEDGEMENT_CODE_BACKORDERED,
            self::ACKNOWLEDGEMENT_CODE_REJECTED,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getRejectionReasonAllowableValues()
    {
        return [
            self::REJECTION_REASON_TEMPORARILY_UNAVAILABLE,
            self::REJECTION_REASON_INVALID_PRODUCT_IDENTIFIER,
            self::REJECTION_REASON_OBSOLETE_PRODUCT,
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
        $this->container['acknowledgement_code'] = isset($data['acknowledgement_code']) ? $data['acknowledgement_code'] : null;
        $this->container['acknowledged_quantity'] = isset($data['acknowledged_quantity']) ? $data['acknowledged_quantity'] : null;
        $this->container['scheduled_ship_date'] = isset($data['scheduled_ship_date']) ? $data['scheduled_ship_date'] : null;
        $this->container['scheduled_delivery_date'] = isset($data['scheduled_delivery_date']) ? $data['scheduled_delivery_date'] : null;
        $this->container['rejection_reason'] = isset($data['rejection_reason']) ? $data['rejection_reason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['acknowledgement_code'] === null) {
            $invalidProperties[] = "'acknowledgement_code' can't be null";
        }
        $allowedValues = $this->getAcknowledgementCodeAllowableValues();

        if (null !== $this->container['acknowledgement_code'] && ! \in_array($this->container['acknowledgement_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'acknowledgement_code', must be one of '%s'",
                $this->container['acknowledgement_code'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['acknowledged_quantity'] === null) {
            $invalidProperties[] = "'acknowledged_quantity' can't be null";
        }
        $allowedValues = $this->getRejectionReasonAllowableValues();

        if (null !== $this->container['rejection_reason'] && ! \in_array($this->container['rejection_reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rejection_reason', must be one of '%s'",
                $this->container['rejection_reason'],
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
     * Gets acknowledgement_code.
     *
     * @return string
     */
    public function getAcknowledgementCode()
    {
        return $this->container['acknowledgement_code'];
    }

    /**
     * Sets acknowledgement_code.
     *
     * @param string $acknowledgement_code this indicates the acknowledgement code
     *
     * @return $this
     */
    public function setAcknowledgementCode($acknowledgement_code)
    {
        $allowedValues = $this->getAcknowledgementCodeAllowableValues();
        if (! \in_array($acknowledgement_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'acknowledgement_code', must be one of '%s'", $acknowledgement_code, implode("', '", $allowedValues)));
        }
        $this->container['acknowledgement_code'] = $acknowledgement_code;

        return $this;
    }

    /**
     * Gets acknowledged_quantity.
     *
     * @return \TNT\Amazon\VendorOrders\V1\Model\ItemQuantity
     */
    public function getAcknowledgedQuantity()
    {
        return $this->container['acknowledged_quantity'];
    }

    /**
     * Sets acknowledged_quantity.
     *
     * @param \TNT\Amazon\VendorOrders\V1\Model\ItemQuantity $acknowledged_quantity details of quantity acknowledged with the above acknowledgement code
     *
     * @return $this
     */
    public function setAcknowledgedQuantity($acknowledged_quantity)
    {
        $this->container['acknowledged_quantity'] = $acknowledged_quantity;

        return $this;
    }

    /**
     * Gets scheduled_ship_date.
     *
     * @return \DateTime
     */
    public function getScheduledShipDate()
    {
        return $this->container['scheduled_ship_date'];
    }

    /**
     * Sets scheduled_ship_date.
     *
     * @param \DateTime $scheduled_ship_date Estimated ship date per line item. Must be in ISO-8601 date/time format.
     *
     * @return $this
     */
    public function setScheduledShipDate($scheduled_ship_date)
    {
        $this->container['scheduled_ship_date'] = $scheduled_ship_date;

        return $this;
    }

    /**
     * Gets scheduled_delivery_date.
     *
     * @return \DateTime
     */
    public function getScheduledDeliveryDate()
    {
        return $this->container['scheduled_delivery_date'];
    }

    /**
     * Sets scheduled_delivery_date.
     *
     * @param \DateTime $scheduled_delivery_date Estimated delivery date per line item. Must be in ISO-8601 date/time format.
     *
     * @return $this
     */
    public function setScheduledDeliveryDate($scheduled_delivery_date)
    {
        $this->container['scheduled_delivery_date'] = $scheduled_delivery_date;

        return $this;
    }

    /**
     * Gets rejection_reason.
     *
     * @return string
     */
    public function getRejectionReason()
    {
        return $this->container['rejection_reason'];
    }

    /**
     * Sets rejection_reason.
     *
     * @param string $rejection_reason indicates the reason for rejection
     *
     * @return $this
     */
    public function setRejectionReason($rejection_reason)
    {
        $allowedValues = $this->getRejectionReasonAllowableValues();
        if (null !== $rejection_reason && ! \in_array($rejection_reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'rejection_reason', must be one of '%s'", $rejection_reason, implode("', '", $allowedValues)));
        }
        $this->container['rejection_reason'] = $rejection_reason;

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
