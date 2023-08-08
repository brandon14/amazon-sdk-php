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
 * InboundShipmentHeader.
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
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TNT\Amazon\FulfillmentInbound\V0\Model;

use TNT\Amazon\FulfillmentInbound\V0\ObjectSerializer;

/**
 * InboundShipmentHeader Class Doc Comment.
 *
 * @category Class
 *
 * @description Inbound shipment information used to create and update inbound shipments.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class InboundShipmentHeader implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'InboundShipmentHeader';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipment_name' => 'string',
        'ship_from_address' => '\TNT\Amazon\FulfillmentInbound\V0\Model\Address',
        'destination_fulfillment_center_id' => 'string',
        'are_cases_required' => 'bool',
        'shipment_status' => '\TNT\Amazon\FulfillmentInbound\V0\Model\ShipmentStatus',
        'label_prep_preference' => '\TNT\Amazon\FulfillmentInbound\V0\Model\LabelPrepPreference',
        'intended_box_contents_source' => '\TNT\Amazon\FulfillmentInbound\V0\Model\IntendedBoxContentsSource',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipment_name' => null,
        'ship_from_address' => null,
        'destination_fulfillment_center_id' => null,
        'are_cases_required' => null,
        'shipment_status' => null,
        'label_prep_preference' => null,
        'intended_box_contents_source' => null,
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
        'shipment_name' => 'ShipmentName',
        'ship_from_address' => 'ShipFromAddress',
        'destination_fulfillment_center_id' => 'DestinationFulfillmentCenterId',
        'are_cases_required' => 'AreCasesRequired',
        'shipment_status' => 'ShipmentStatus',
        'label_prep_preference' => 'LabelPrepPreference',
        'intended_box_contents_source' => 'IntendedBoxContentsSource',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_name' => 'setShipmentName',
        'ship_from_address' => 'setShipFromAddress',
        'destination_fulfillment_center_id' => 'setDestinationFulfillmentCenterId',
        'are_cases_required' => 'setAreCasesRequired',
        'shipment_status' => 'setShipmentStatus',
        'label_prep_preference' => 'setLabelPrepPreference',
        'intended_box_contents_source' => 'setIntendedBoxContentsSource',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_name' => 'getShipmentName',
        'ship_from_address' => 'getShipFromAddress',
        'destination_fulfillment_center_id' => 'getDestinationFulfillmentCenterId',
        'are_cases_required' => 'getAreCasesRequired',
        'shipment_status' => 'getShipmentStatus',
        'label_prep_preference' => 'getLabelPrepPreference',
        'intended_box_contents_source' => 'getIntendedBoxContentsSource',
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
        $this->container['shipment_name'] = isset($data['shipment_name']) ? $data['shipment_name'] : null;
        $this->container['ship_from_address'] = isset($data['ship_from_address']) ? $data['ship_from_address'] : null;
        $this->container['destination_fulfillment_center_id'] = isset($data['destination_fulfillment_center_id']) ? $data['destination_fulfillment_center_id'] : null;
        $this->container['are_cases_required'] = isset($data['are_cases_required']) ? $data['are_cases_required'] : null;
        $this->container['shipment_status'] = isset($data['shipment_status']) ? $data['shipment_status'] : null;
        $this->container['label_prep_preference'] = isset($data['label_prep_preference']) ? $data['label_prep_preference'] : null;
        $this->container['intended_box_contents_source'] = isset($data['intended_box_contents_source']) ? $data['intended_box_contents_source'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipment_name'] === null) {
            $invalidProperties[] = "'shipment_name' can't be null";
        }
        if ($this->container['ship_from_address'] === null) {
            $invalidProperties[] = "'ship_from_address' can't be null";
        }
        if ($this->container['destination_fulfillment_center_id'] === null) {
            $invalidProperties[] = "'destination_fulfillment_center_id' can't be null";
        }
        if ($this->container['shipment_status'] === null) {
            $invalidProperties[] = "'shipment_status' can't be null";
        }
        if ($this->container['label_prep_preference'] === null) {
            $invalidProperties[] = "'label_prep_preference' can't be null";
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
     * Gets shipment_name.
     *
     * @return string
     */
    public function getShipmentName()
    {
        return $this->container['shipment_name'];
    }

    /**
     * Sets shipment_name.
     *
     * @param string $shipment_name The name for the shipment. Use a naming convention that helps distinguish between shipments over time, such as the date the shipment was created.
     *
     * @return $this
     */
    public function setShipmentName($shipment_name)
    {
        $this->container['shipment_name'] = $shipment_name;

        return $this;
    }

    /**
     * Gets ship_from_address.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\Address
     */
    public function getShipFromAddress()
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\Address $ship_from_address the return address
     *
     * @return $this
     */
    public function setShipFromAddress($ship_from_address)
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }

    /**
     * Gets destination_fulfillment_center_id.
     *
     * @return string
     */
    public function getDestinationFulfillmentCenterId()
    {
        return $this->container['destination_fulfillment_center_id'];
    }

    /**
     * Sets destination_fulfillment_center_id.
     *
     * @param string $destination_fulfillment_center_id The identifier for the fulfillment center to which the shipment will be shipped. Get this value from the InboundShipmentPlan object in the response returned by the createInboundShipmentPlan operation.
     *
     * @return $this
     */
    public function setDestinationFulfillmentCenterId($destination_fulfillment_center_id)
    {
        $this->container['destination_fulfillment_center_id'] = $destination_fulfillment_center_id;

        return $this;
    }

    /**
     * Gets are_cases_required.
     *
     * @return bool
     */
    public function getAreCasesRequired()
    {
        return $this->container['are_cases_required'];
    }

    /**
     * Sets are_cases_required.
     *
     * @param bool $are_cases_required Indicates whether or not an inbound shipment contains case-packed boxes. Note: A shipment must contain either all case-packed boxes or all individually packed boxes.  Possible values:  true - All boxes in the shipment must be case packed.  false - All boxes in the shipment must be individually packed.  Note: If AreCasesRequired = true for an inbound shipment, then the value of QuantityInCase must be greater than zero for every item in the shipment. Otherwise the service returns an error.
     *
     * @return $this
     */
    public function setAreCasesRequired($are_cases_required)
    {
        $this->container['are_cases_required'] = $are_cases_required;

        return $this;
    }

    /**
     * Gets shipment_status.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\ShipmentStatus
     */
    public function getShipmentStatus()
    {
        return $this->container['shipment_status'];
    }

    /**
     * Sets shipment_status.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\ShipmentStatus $shipment_status shipment_status
     *
     * @return $this
     */
    public function setShipmentStatus($shipment_status)
    {
        $this->container['shipment_status'] = $shipment_status;

        return $this;
    }

    /**
     * Gets label_prep_preference.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\LabelPrepPreference
     */
    public function getLabelPrepPreference()
    {
        return $this->container['label_prep_preference'];
    }

    /**
     * Sets label_prep_preference.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\LabelPrepPreference $label_prep_preference the preference for label preparation for an inbound shipment
     *
     * @return $this
     */
    public function setLabelPrepPreference($label_prep_preference)
    {
        $this->container['label_prep_preference'] = $label_prep_preference;

        return $this;
    }

    /**
     * Gets intended_box_contents_source.
     *
     * @return \TNT\Amazon\FulfillmentInbound\V0\Model\IntendedBoxContentsSource
     */
    public function getIntendedBoxContentsSource()
    {
        return $this->container['intended_box_contents_source'];
    }

    /**
     * Sets intended_box_contents_source.
     *
     * @param \TNT\Amazon\FulfillmentInbound\V0\Model\IntendedBoxContentsSource $intended_box_contents_source intended_box_contents_source
     *
     * @return $this
     */
    public function setIntendedBoxContentsSource($intended_box_contents_source)
    {
        $this->container['intended_box_contents_source'] = $intended_box_contents_source;

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
