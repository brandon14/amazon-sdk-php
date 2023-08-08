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
 * ShipmentStatusUpdate.
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
 * ShipmentStatusUpdate Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentStatusUpdate implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShipmentStatusUpdate';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'purchase_order_number' => 'string',
        'selling_party' => '\TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\PartyIdentification',
        'ship_from_party' => '\TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\PartyIdentification',
        'status_update_details' => '\TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\StatusUpdateDetails',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'purchase_order_number' => null,
        'selling_party' => null,
        'ship_from_party' => null,
        'status_update_details' => null,
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
        'purchase_order_number' => 'purchaseOrderNumber',
        'selling_party' => 'sellingParty',
        'ship_from_party' => 'shipFromParty',
        'status_update_details' => 'statusUpdateDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'selling_party' => 'setSellingParty',
        'ship_from_party' => 'setShipFromParty',
        'status_update_details' => 'setStatusUpdateDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'selling_party' => 'getSellingParty',
        'ship_from_party' => 'getShipFromParty',
        'status_update_details' => 'getStatusUpdateDetails',
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
        $this->container['purchase_order_number'] = isset($data['purchase_order_number']) ? $data['purchase_order_number'] : null;
        $this->container['selling_party'] = isset($data['selling_party']) ? $data['selling_party'] : null;
        $this->container['ship_from_party'] = isset($data['ship_from_party']) ? $data['ship_from_party'] : null;
        $this->container['status_update_details'] = isset($data['status_update_details']) ? $data['status_update_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['purchase_order_number'] === null) {
            $invalidProperties[] = "'purchase_order_number' can't be null";
        }
        if (! preg_match('/^[a-zA-Z0-9]+$/', $this->container['purchase_order_number'])) {
            $invalidProperties[] = "invalid value for 'purchase_order_number', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['selling_party'] === null) {
            $invalidProperties[] = "'selling_party' can't be null";
        }
        if ($this->container['ship_from_party'] === null) {
            $invalidProperties[] = "'ship_from_party' can't be null";
        }
        if ($this->container['status_update_details'] === null) {
            $invalidProperties[] = "'status_update_details' can't be null";
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
     * Gets purchase_order_number.
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number.
     *
     * @param string $purchase_order_number purchase order number of the shipment for which to update the shipment status
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        if (! preg_match('/^[a-zA-Z0-9]+$/', $purchase_order_number)) {
            throw new \InvalidArgumentException("invalid value for $purchase_order_number when calling ShipmentStatusUpdate., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets selling_party.
     *
     * @return \TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\PartyIdentification
     */
    public function getSellingParty()
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party.
     *
     * @param \TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\PartyIdentification $selling_party ID of the selling party or vendor
     *
     * @return $this
     */
    public function setSellingParty($selling_party)
    {
        $this->container['selling_party'] = $selling_party;

        return $this;
    }

    /**
     * Gets ship_from_party.
     *
     * @return \TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party.
     *
     * @param \TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\PartyIdentification $ship_from_party warehouse code of vendor
     *
     * @return $this
     */
    public function setShipFromParty($ship_from_party)
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }

    /**
     * Gets status_update_details.
     *
     * @return \TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\StatusUpdateDetails
     */
    public function getStatusUpdateDetails()
    {
        return $this->container['status_update_details'];
    }

    /**
     * Sets status_update_details.
     *
     * @param \TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\StatusUpdateDetails $status_update_details provide the details about the status of the shipment at that particular point of time
     *
     * @return $this
     */
    public function setStatusUpdateDetails($status_update_details)
    {
        $this->container['status_update_details'] = $status_update_details;

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
