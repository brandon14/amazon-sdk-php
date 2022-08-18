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
 * OrderItemStatusAcknowledgementStatus.
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

use ArrayAccess;
use TNT\Amazon\VendorOrders\V1\ObjectSerializer;

/**
 * OrderItemStatusAcknowledgementStatus Class Doc Comment.
 *
 * @category Class
 * @description Acknowledgement status information.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class OrderItemStatusAcknowledgementStatus implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'OrderItemStatus_acknowledgementStatus';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'confirmation_status' => 'string',
        'accepted_quantity' => '\TNT\Amazon\VendorOrders\V1\Model\ItemQuantity',
        'rejected_quantity' => '\TNT\Amazon\VendorOrders\V1\Model\ItemQuantity',
        'acknowledgement_status_details' => '\TNT\Amazon\VendorOrders\V1\Model\AcknowledgementStatusDetails[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'confirmation_status' => null,
        'accepted_quantity' => null,
        'rejected_quantity' => null,
        'acknowledgement_status_details' => null,
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
        'confirmation_status' => 'confirmationStatus',
        'accepted_quantity' => 'acceptedQuantity',
        'rejected_quantity' => 'rejectedQuantity',
        'acknowledgement_status_details' => 'acknowledgementStatusDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'confirmation_status' => 'setConfirmationStatus',
        'accepted_quantity' => 'setAcceptedQuantity',
        'rejected_quantity' => 'setRejectedQuantity',
        'acknowledgement_status_details' => 'setAcknowledgementStatusDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'confirmation_status' => 'getConfirmationStatus',
        'accepted_quantity' => 'getAcceptedQuantity',
        'rejected_quantity' => 'getRejectedQuantity',
        'acknowledgement_status_details' => 'getAcknowledgementStatusDetails',
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

    public const CONFIRMATION_STATUS_ACCEPTED = 'ACCEPTED';
    public const CONFIRMATION_STATUS_PARTIALLY_ACCEPTED = 'PARTIALLY_ACCEPTED';
    public const CONFIRMATION_STATUS_REJECTED = 'REJECTED';
    public const CONFIRMATION_STATUS_UNCONFIRMED = 'UNCONFIRMED';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getConfirmationStatusAllowableValues()
    {
        return [
            self::CONFIRMATION_STATUS_ACCEPTED,
            self::CONFIRMATION_STATUS_PARTIALLY_ACCEPTED,
            self::CONFIRMATION_STATUS_REJECTED,
            self::CONFIRMATION_STATUS_UNCONFIRMED,
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
        $this->container['confirmation_status'] = isset($data['confirmation_status']) ? $data['confirmation_status'] : null;
        $this->container['accepted_quantity'] = isset($data['accepted_quantity']) ? $data['accepted_quantity'] : null;
        $this->container['rejected_quantity'] = isset($data['rejected_quantity']) ? $data['rejected_quantity'] : null;
        $this->container['acknowledgement_status_details'] = isset($data['acknowledgement_status_details']) ? $data['acknowledgement_status_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getConfirmationStatusAllowableValues();

        if (null !== $this->container['confirmation_status'] && ! \in_array($this->container['confirmation_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'confirmation_status', must be one of '%s'",
                $this->container['confirmation_status'],
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
     * Gets confirmation_status.
     *
     * @return string
     */
    public function getConfirmationStatus()
    {
        return $this->container['confirmation_status'];
    }

    /**
     * Sets confirmation_status.
     *
     * @param string $confirmation_status confirmation status of line item
     *
     * @return $this
     */
    public function setConfirmationStatus($confirmation_status)
    {
        $allowedValues = $this->getConfirmationStatusAllowableValues();
        if (null !== $confirmation_status && ! \in_array($confirmation_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'confirmation_status', must be one of '%s'", $confirmation_status, implode("', '", $allowedValues)));
        }
        $this->container['confirmation_status'] = $confirmation_status;

        return $this;
    }

    /**
     * Gets accepted_quantity.
     *
     * @return \TNT\Amazon\VendorOrders\V1\Model\ItemQuantity
     */
    public function getAcceptedQuantity()
    {
        return $this->container['accepted_quantity'];
    }

    /**
     * Sets accepted_quantity.
     *
     * @param \TNT\Amazon\VendorOrders\V1\Model\ItemQuantity $accepted_quantity item quantities accepted by vendor to be shipped
     *
     * @return $this
     */
    public function setAcceptedQuantity($accepted_quantity)
    {
        $this->container['accepted_quantity'] = $accepted_quantity;

        return $this;
    }

    /**
     * Gets rejected_quantity.
     *
     * @return \TNT\Amazon\VendorOrders\V1\Model\ItemQuantity
     */
    public function getRejectedQuantity()
    {
        return $this->container['rejected_quantity'];
    }

    /**
     * Sets rejected_quantity.
     *
     * @param \TNT\Amazon\VendorOrders\V1\Model\ItemQuantity $rejected_quantity item quantities rejected by vendor
     *
     * @return $this
     */
    public function setRejectedQuantity($rejected_quantity)
    {
        $this->container['rejected_quantity'] = $rejected_quantity;

        return $this;
    }

    /**
     * Gets acknowledgement_status_details.
     *
     * @return \TNT\Amazon\VendorOrders\V1\Model\AcknowledgementStatusDetails[]
     */
    public function getAcknowledgementStatusDetails()
    {
        return $this->container['acknowledgement_status_details'];
    }

    /**
     * Sets acknowledgement_status_details.
     *
     * @param \TNT\Amazon\VendorOrders\V1\Model\AcknowledgementStatusDetails[] $acknowledgement_status_details details of item quantity confirmed
     *
     * @return $this
     */
    public function setAcknowledgementStatusDetails($acknowledgement_status_details)
    {
        $this->container['acknowledgement_status_details'] = $acknowledgement_status_details;

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
