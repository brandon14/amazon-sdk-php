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
 * StatusUpdateDetails.
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
 * Selling Partner API for Direct Fulfillment Shipping.
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
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

namespace TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model;

use TNT\Amazon\VendorDirectFulfillmentShipping\V1\ObjectSerializer;

/**
 * StatusUpdateDetails Class Doc Comment.
 *
 * @category Class
 *
 * @description Details for the shipment status update given by the vendor for the specific package.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class StatusUpdateDetails implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'StatusUpdateDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'tracking_number' => 'string',
        'status_code' => 'string',
        'reason_code' => 'string',
        'status_date_time' => '\DateTime',
        'status_location_address' => '\TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\Address',
        'shipment_schedule' => '\TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\StatusUpdateDetailsShipmentSchedule',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'tracking_number' => null,
        'status_code' => null,
        'reason_code' => null,
        'status_date_time' => 'date-time',
        'status_location_address' => null,
        'shipment_schedule' => null,
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
        'tracking_number' => 'trackingNumber',
        'status_code' => 'statusCode',
        'reason_code' => 'reasonCode',
        'status_date_time' => 'statusDateTime',
        'status_location_address' => 'statusLocationAddress',
        'shipment_schedule' => 'shipmentSchedule',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'tracking_number' => 'setTrackingNumber',
        'status_code' => 'setStatusCode',
        'reason_code' => 'setReasonCode',
        'status_date_time' => 'setStatusDateTime',
        'status_location_address' => 'setStatusLocationAddress',
        'shipment_schedule' => 'setShipmentSchedule',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'tracking_number' => 'getTrackingNumber',
        'status_code' => 'getStatusCode',
        'reason_code' => 'getReasonCode',
        'status_date_time' => 'getStatusDateTime',
        'status_location_address' => 'getStatusLocationAddress',
        'shipment_schedule' => 'getShipmentSchedule',
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
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
        $this->container['reason_code'] = isset($data['reason_code']) ? $data['reason_code'] : null;
        $this->container['status_date_time'] = isset($data['status_date_time']) ? $data['status_date_time'] : null;
        $this->container['status_location_address'] = isset($data['status_location_address']) ? $data['status_location_address'] : null;
        $this->container['shipment_schedule'] = isset($data['shipment_schedule']) ? $data['shipment_schedule'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tracking_number'] === null) {
            $invalidProperties[] = "'tracking_number' can't be null";
        }
        if ($this->container['status_code'] === null) {
            $invalidProperties[] = "'status_code' can't be null";
        }
        if ($this->container['reason_code'] === null) {
            $invalidProperties[] = "'reason_code' can't be null";
        }
        if ($this->container['status_date_time'] === null) {
            $invalidProperties[] = "'status_date_time' can't be null";
        }
        if ($this->container['status_location_address'] === null) {
            $invalidProperties[] = "'status_location_address' can't be null";
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
     * Gets tracking_number.
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number.
     *
     * @param string $tracking_number this is required to be provided for every package and should match with the trackingNumber sent for the shipment confirmation
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets status_code.
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code.
     *
     * @param string $status_code indicates the shipment status code of the package that provides transportation information for Amazon tracking systems and ultimately for the final customer
     *
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets reason_code.
     *
     * @return string
     */
    public function getReasonCode()
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code.
     *
     * @param string $reason_code provides a reason code for the status of the package that will provide additional information about the transportation status
     *
     * @return $this
     */
    public function setReasonCode($reason_code)
    {
        $this->container['reason_code'] = $reason_code;

        return $this;
    }

    /**
     * Gets status_date_time.
     *
     * @return \DateTime
     */
    public function getStatusDateTime()
    {
        return $this->container['status_date_time'];
    }

    /**
     * Sets status_date_time.
     *
     * @param \DateTime $status_date_time The date and time when the shipment status was updated. This field is expected to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00.
     *
     * @return $this
     */
    public function setStatusDateTime($status_date_time)
    {
        $this->container['status_date_time'] = $status_date_time;

        return $this;
    }

    /**
     * Gets status_location_address.
     *
     * @return \TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\Address
     */
    public function getStatusLocationAddress()
    {
        return $this->container['status_location_address'];
    }

    /**
     * Sets status_location_address.
     *
     * @param \TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\Address $status_location_address status_location_address
     *
     * @return $this
     */
    public function setStatusLocationAddress($status_location_address)
    {
        $this->container['status_location_address'] = $status_location_address;

        return $this;
    }

    /**
     * Gets shipment_schedule.
     *
     * @return \TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\StatusUpdateDetailsShipmentSchedule
     */
    public function getShipmentSchedule()
    {
        return $this->container['shipment_schedule'];
    }

    /**
     * Sets shipment_schedule.
     *
     * @param \TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\StatusUpdateDetailsShipmentSchedule $shipment_schedule shipment_schedule
     *
     * @return $this
     */
    public function setShipmentSchedule($shipment_schedule)
    {
        $this->container['shipment_schedule'] = $shipment_schedule;

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
