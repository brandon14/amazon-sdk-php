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
 * ShippingService.
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
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace TNT\Amazon\MerchantFulfillment\V0\Model;

use ArrayAccess;
use TNT\Amazon\MerchantFulfillment\V0\ObjectSerializer;

/**
 * ShippingService Class Doc Comment.
 *
 * @category Class
 * @description A shipping service offer made by a carrier.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ShippingService implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShippingService';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipping_service_name' => 'string',
        'carrier_name' => 'string',
        'shipping_service_id' => '\TNT\Amazon\MerchantFulfillment\V0\Model\ShippingServiceIdentifier',
        'shipping_service_offer_id' => 'string',
        'ship_date' => '\TNT\Amazon\MerchantFulfillment\V0\Model\Timestamp',
        'earliest_estimated_delivery_date' => '\TNT\Amazon\MerchantFulfillment\V0\Model\Timestamp',
        'latest_estimated_delivery_date' => '\TNT\Amazon\MerchantFulfillment\V0\Model\Timestamp',
        'rate' => '\TNT\Amazon\MerchantFulfillment\V0\Model\CurrencyAmount',
        'shipping_service_options' => '\TNT\Amazon\MerchantFulfillment\V0\Model\ShippingServiceOptions',
        'available_shipping_service_options' => '\TNT\Amazon\MerchantFulfillment\V0\Model\AvailableShippingServiceOptions',
        'available_label_formats' => '\TNT\Amazon\MerchantFulfillment\V0\Model\LabelFormatList',
        'available_format_options_for_label' => '\TNT\Amazon\MerchantFulfillment\V0\Model\AvailableFormatOptionsForLabelList',
        'requires_additional_seller_inputs' => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipping_service_name' => null,
        'carrier_name' => null,
        'shipping_service_id' => null,
        'shipping_service_offer_id' => null,
        'ship_date' => null,
        'earliest_estimated_delivery_date' => null,
        'latest_estimated_delivery_date' => null,
        'rate' => null,
        'shipping_service_options' => null,
        'available_shipping_service_options' => null,
        'available_label_formats' => null,
        'available_format_options_for_label' => null,
        'requires_additional_seller_inputs' => null,
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
        'shipping_service_name' => 'ShippingServiceName',
        'carrier_name' => 'CarrierName',
        'shipping_service_id' => 'ShippingServiceId',
        'shipping_service_offer_id' => 'ShippingServiceOfferId',
        'ship_date' => 'ShipDate',
        'earliest_estimated_delivery_date' => 'EarliestEstimatedDeliveryDate',
        'latest_estimated_delivery_date' => 'LatestEstimatedDeliveryDate',
        'rate' => 'Rate',
        'shipping_service_options' => 'ShippingServiceOptions',
        'available_shipping_service_options' => 'AvailableShippingServiceOptions',
        'available_label_formats' => 'AvailableLabelFormats',
        'available_format_options_for_label' => 'AvailableFormatOptionsForLabel',
        'requires_additional_seller_inputs' => 'RequiresAdditionalSellerInputs',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_service_name' => 'setShippingServiceName',
        'carrier_name' => 'setCarrierName',
        'shipping_service_id' => 'setShippingServiceId',
        'shipping_service_offer_id' => 'setShippingServiceOfferId',
        'ship_date' => 'setShipDate',
        'earliest_estimated_delivery_date' => 'setEarliestEstimatedDeliveryDate',
        'latest_estimated_delivery_date' => 'setLatestEstimatedDeliveryDate',
        'rate' => 'setRate',
        'shipping_service_options' => 'setShippingServiceOptions',
        'available_shipping_service_options' => 'setAvailableShippingServiceOptions',
        'available_label_formats' => 'setAvailableLabelFormats',
        'available_format_options_for_label' => 'setAvailableFormatOptionsForLabel',
        'requires_additional_seller_inputs' => 'setRequiresAdditionalSellerInputs',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_service_name' => 'getShippingServiceName',
        'carrier_name' => 'getCarrierName',
        'shipping_service_id' => 'getShippingServiceId',
        'shipping_service_offer_id' => 'getShippingServiceOfferId',
        'ship_date' => 'getShipDate',
        'earliest_estimated_delivery_date' => 'getEarliestEstimatedDeliveryDate',
        'latest_estimated_delivery_date' => 'getLatestEstimatedDeliveryDate',
        'rate' => 'getRate',
        'shipping_service_options' => 'getShippingServiceOptions',
        'available_shipping_service_options' => 'getAvailableShippingServiceOptions',
        'available_label_formats' => 'getAvailableLabelFormats',
        'available_format_options_for_label' => 'getAvailableFormatOptionsForLabel',
        'requires_additional_seller_inputs' => 'getRequiresAdditionalSellerInputs',
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
        $this->container['shipping_service_name'] = isset($data['shipping_service_name']) ? $data['shipping_service_name'] : null;
        $this->container['carrier_name'] = isset($data['carrier_name']) ? $data['carrier_name'] : null;
        $this->container['shipping_service_id'] = isset($data['shipping_service_id']) ? $data['shipping_service_id'] : null;
        $this->container['shipping_service_offer_id'] = isset($data['shipping_service_offer_id']) ? $data['shipping_service_offer_id'] : null;
        $this->container['ship_date'] = isset($data['ship_date']) ? $data['ship_date'] : null;
        $this->container['earliest_estimated_delivery_date'] = isset($data['earliest_estimated_delivery_date']) ? $data['earliest_estimated_delivery_date'] : null;
        $this->container['latest_estimated_delivery_date'] = isset($data['latest_estimated_delivery_date']) ? $data['latest_estimated_delivery_date'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['shipping_service_options'] = isset($data['shipping_service_options']) ? $data['shipping_service_options'] : null;
        $this->container['available_shipping_service_options'] = isset($data['available_shipping_service_options']) ? $data['available_shipping_service_options'] : null;
        $this->container['available_label_formats'] = isset($data['available_label_formats']) ? $data['available_label_formats'] : null;
        $this->container['available_format_options_for_label'] = isset($data['available_format_options_for_label']) ? $data['available_format_options_for_label'] : null;
        $this->container['requires_additional_seller_inputs'] = isset($data['requires_additional_seller_inputs']) ? $data['requires_additional_seller_inputs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipping_service_name'] === null) {
            $invalidProperties[] = "'shipping_service_name' can't be null";
        }
        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }
        if ($this->container['shipping_service_id'] === null) {
            $invalidProperties[] = "'shipping_service_id' can't be null";
        }
        if ($this->container['shipping_service_offer_id'] === null) {
            $invalidProperties[] = "'shipping_service_offer_id' can't be null";
        }
        if ($this->container['ship_date'] === null) {
            $invalidProperties[] = "'ship_date' can't be null";
        }
        if ($this->container['rate'] === null) {
            $invalidProperties[] = "'rate' can't be null";
        }
        if ($this->container['shipping_service_options'] === null) {
            $invalidProperties[] = "'shipping_service_options' can't be null";
        }
        if ($this->container['requires_additional_seller_inputs'] === null) {
            $invalidProperties[] = "'requires_additional_seller_inputs' can't be null";
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
     * Gets shipping_service_name.
     *
     * @return string
     */
    public function getShippingServiceName()
    {
        return $this->container['shipping_service_name'];
    }

    /**
     * Sets shipping_service_name.
     *
     * @param string $shipping_service_name A plain text representation of a carrier's shipping service. For example, \"UPS Ground\" or \"FedEx Standard Overnight\".
     *
     * @return $this
     */
    public function setShippingServiceName($shipping_service_name)
    {
        $this->container['shipping_service_name'] = $shipping_service_name;

        return $this;
    }

    /**
     * Gets carrier_name.
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name.
     *
     * @param string $carrier_name the name of the carrier
     *
     * @return $this
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets shipping_service_id.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\ShippingServiceIdentifier
     */
    public function getShippingServiceId()
    {
        return $this->container['shipping_service_id'];
    }

    /**
     * Sets shipping_service_id.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\ShippingServiceIdentifier $shipping_service_id shipping_service_id
     *
     * @return $this
     */
    public function setShippingServiceId($shipping_service_id)
    {
        $this->container['shipping_service_id'] = $shipping_service_id;

        return $this;
    }

    /**
     * Gets shipping_service_offer_id.
     *
     * @return string
     */
    public function getShippingServiceOfferId()
    {
        return $this->container['shipping_service_offer_id'];
    }

    /**
     * Sets shipping_service_offer_id.
     *
     * @param string $shipping_service_offer_id an Amazon-defined shipping service offer identifier
     *
     * @return $this
     */
    public function setShippingServiceOfferId($shipping_service_offer_id)
    {
        $this->container['shipping_service_offer_id'] = $shipping_service_offer_id;

        return $this;
    }

    /**
     * Gets ship_date.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\Timestamp
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\Timestamp $ship_date the date that the carrier will ship the package
     *
     * @return $this
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets earliest_estimated_delivery_date.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\Timestamp
     */
    public function getEarliestEstimatedDeliveryDate()
    {
        return $this->container['earliest_estimated_delivery_date'];
    }

    /**
     * Sets earliest_estimated_delivery_date.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\Timestamp $earliest_estimated_delivery_date the earliest date by which the shipment will be delivered
     *
     * @return $this
     */
    public function setEarliestEstimatedDeliveryDate($earliest_estimated_delivery_date)
    {
        $this->container['earliest_estimated_delivery_date'] = $earliest_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets latest_estimated_delivery_date.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\Timestamp
     */
    public function getLatestEstimatedDeliveryDate()
    {
        return $this->container['latest_estimated_delivery_date'];
    }

    /**
     * Sets latest_estimated_delivery_date.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\Timestamp $latest_estimated_delivery_date the latest date by which the shipment will be delivered
     *
     * @return $this
     */
    public function setLatestEstimatedDeliveryDate($latest_estimated_delivery_date)
    {
        $this->container['latest_estimated_delivery_date'] = $latest_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets rate.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\CurrencyAmount
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\CurrencyAmount $rate the amount that the carrier will charge for the shipment
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets shipping_service_options.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\ShippingServiceOptions
     */
    public function getShippingServiceOptions()
    {
        return $this->container['shipping_service_options'];
    }

    /**
     * Sets shipping_service_options.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\ShippingServiceOptions $shipping_service_options extra services offered by the carrier
     *
     * @return $this
     */
    public function setShippingServiceOptions($shipping_service_options)
    {
        $this->container['shipping_service_options'] = $shipping_service_options;

        return $this;
    }

    /**
     * Gets available_shipping_service_options.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\AvailableShippingServiceOptions
     */
    public function getAvailableShippingServiceOptions()
    {
        return $this->container['available_shipping_service_options'];
    }

    /**
     * Sets available_shipping_service_options.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\AvailableShippingServiceOptions $available_shipping_service_options available_shipping_service_options
     *
     * @return $this
     */
    public function setAvailableShippingServiceOptions($available_shipping_service_options)
    {
        $this->container['available_shipping_service_options'] = $available_shipping_service_options;

        return $this;
    }

    /**
     * Gets available_label_formats.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\LabelFormatList
     */
    public function getAvailableLabelFormats()
    {
        return $this->container['available_label_formats'];
    }

    /**
     * Sets available_label_formats.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\LabelFormatList $available_label_formats available_label_formats
     *
     * @return $this
     */
    public function setAvailableLabelFormats($available_label_formats)
    {
        $this->container['available_label_formats'] = $available_label_formats;

        return $this;
    }

    /**
     * Gets available_format_options_for_label.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\AvailableFormatOptionsForLabelList
     */
    public function getAvailableFormatOptionsForLabel()
    {
        return $this->container['available_format_options_for_label'];
    }

    /**
     * Sets available_format_options_for_label.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\AvailableFormatOptionsForLabelList $available_format_options_for_label available_format_options_for_label
     *
     * @return $this
     */
    public function setAvailableFormatOptionsForLabel($available_format_options_for_label)
    {
        $this->container['available_format_options_for_label'] = $available_format_options_for_label;

        return $this;
    }

    /**
     * Gets requires_additional_seller_inputs.
     *
     * @return bool
     */
    public function getRequiresAdditionalSellerInputs()
    {
        return $this->container['requires_additional_seller_inputs'];
    }

    /**
     * Sets requires_additional_seller_inputs.
     *
     * @param bool $requires_additional_seller_inputs when true, additional seller inputs are required
     *
     * @return $this
     */
    public function setRequiresAdditionalSellerInputs($requires_additional_seller_inputs)
    {
        $this->container['requires_additional_seller_inputs'] = $requires_additional_seller_inputs;

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
