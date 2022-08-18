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
 * Poa.
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

use ArrayAccess;
use TNT\Amazon\Services\V1\ObjectSerializer;

/**
 * Poa Class Doc Comment.
 *
 * @category Class
 * @description Proof of Appointment (POA) details.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Poa implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Poa';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'appointment_time' => '\TNT\Amazon\Services\V1\Model\AppointmentTime',
        'technicians' => '\TNT\Amazon\Services\V1\Model\Technician[]',
        'uploading_technician' => 'string',
        'upload_time' => '\DateTime',
        'poa_type' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'appointment_time' => null,
        'technicians' => null,
        'uploading_technician' => null,
        'upload_time' => 'date-time',
        'poa_type' => null,
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
        'appointment_time' => 'appointmentTime',
        'technicians' => 'technicians',
        'uploading_technician' => 'uploadingTechnician',
        'upload_time' => 'uploadTime',
        'poa_type' => 'poaType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'appointment_time' => 'setAppointmentTime',
        'technicians' => 'setTechnicians',
        'uploading_technician' => 'setUploadingTechnician',
        'upload_time' => 'setUploadTime',
        'poa_type' => 'setPoaType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'appointment_time' => 'getAppointmentTime',
        'technicians' => 'getTechnicians',
        'uploading_technician' => 'getUploadingTechnician',
        'upload_time' => 'getUploadTime',
        'poa_type' => 'getPoaType',
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

    public const POA_TYPE_NO_SIGNATURE_DUMMY_POS = 'NO_SIGNATURE_DUMMY_POS';
    public const POA_TYPE_CUSTOMER_SIGNATURE = 'CUSTOMER_SIGNATURE';
    public const POA_TYPE_DUMMY_RECEIPT = 'DUMMY_RECEIPT';
    public const POA_TYPE_POA_RECEIPT = 'POA_RECEIPT';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getPoaTypeAllowableValues()
    {
        return [
            self::POA_TYPE_NO_SIGNATURE_DUMMY_POS,
            self::POA_TYPE_CUSTOMER_SIGNATURE,
            self::POA_TYPE_DUMMY_RECEIPT,
            self::POA_TYPE_POA_RECEIPT,
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
        $this->container['appointment_time'] = isset($data['appointment_time']) ? $data['appointment_time'] : null;
        $this->container['technicians'] = isset($data['technicians']) ? $data['technicians'] : null;
        $this->container['uploading_technician'] = isset($data['uploading_technician']) ? $data['uploading_technician'] : null;
        $this->container['upload_time'] = isset($data['upload_time']) ? $data['upload_time'] : null;
        $this->container['poa_type'] = isset($data['poa_type']) ? $data['poa_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null !== $this->container['uploading_technician'] && ! preg_match('/^[A-Z0-9]*$/', $this->container['uploading_technician'])) {
            $invalidProperties[] = "invalid value for 'uploading_technician', must be conform to the pattern /^[A-Z0-9]*$/.";
        }

        $allowedValues = $this->getPoaTypeAllowableValues();

        if (null !== $this->container['poa_type'] && ! \in_array($this->container['poa_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'poa_type', must be one of '%s'",
                $this->container['poa_type'],
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
     * Gets appointment_time.
     *
     * @return \TNT\Amazon\Services\V1\Model\AppointmentTime
     */
    public function getAppointmentTime()
    {
        return $this->container['appointment_time'];
    }

    /**
     * Sets appointment_time.
     *
     * @param \TNT\Amazon\Services\V1\Model\AppointmentTime $appointment_time the time of the appointment window
     *
     * @return $this
     */
    public function setAppointmentTime($appointment_time)
    {
        $this->container['appointment_time'] = $appointment_time;

        return $this;
    }

    /**
     * Gets technicians.
     *
     * @return \TNT\Amazon\Services\V1\Model\Technician[]
     */
    public function getTechnicians()
    {
        return $this->container['technicians'];
    }

    /**
     * Sets technicians.
     *
     * @param \TNT\Amazon\Services\V1\Model\Technician[] $technicians a list of technicians
     *
     * @return $this
     */
    public function setTechnicians($technicians)
    {
        $this->container['technicians'] = $technicians;

        return $this;
    }

    /**
     * Gets uploading_technician.
     *
     * @return string
     */
    public function getUploadingTechnician()
    {
        return $this->container['uploading_technician'];
    }

    /**
     * Sets uploading_technician.
     *
     * @param string $uploading_technician the identifier of the technician who uploaded the POA
     *
     * @return $this
     */
    public function setUploadingTechnician($uploading_technician)
    {
        if (null !== $uploading_technician && (! preg_match('/^[A-Z0-9]*$/', $uploading_technician))) {
            throw new \InvalidArgumentException("invalid value for $uploading_technician when calling Poa., must conform to the pattern /^[A-Z0-9]*$/.");
        }

        $this->container['uploading_technician'] = $uploading_technician;

        return $this;
    }

    /**
     * Gets upload_time.
     *
     * @return \DateTime
     */
    public function getUploadTime()
    {
        return $this->container['upload_time'];
    }

    /**
     * Sets upload_time.
     *
     * @param \DateTime $upload_time the date and time when the POA was uploaded in ISO 8601 format
     *
     * @return $this
     */
    public function setUploadTime($upload_time)
    {
        $this->container['upload_time'] = $upload_time;

        return $this;
    }

    /**
     * Gets poa_type.
     *
     * @return string
     */
    public function getPoaType()
    {
        return $this->container['poa_type'];
    }

    /**
     * Sets poa_type.
     *
     * @param string $poa_type the type of POA uploaded
     *
     * @return $this
     */
    public function setPoaType($poa_type)
    {
        $allowedValues = $this->getPoaTypeAllowableValues();
        if (null !== $poa_type && ! \in_array($poa_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'poa_type', must be one of '%s'", $poa_type, implode("', '", $allowedValues)));
        }
        $this->container['poa_type'] = $poa_type;

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