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
 * ShippingServiceOptions.
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
 * ShippingServiceOptions Class Doc Comment.
 *
 * @category Class
 * @description Extra services provided by a carrier.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ShippingServiceOptions implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShippingServiceOptions';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'delivery_experience' => '\TNT\Amazon\MerchantFulfillment\V0\Model\DeliveryExperienceType',
        'declared_value' => '\TNT\Amazon\MerchantFulfillment\V0\Model\CurrencyAmount',
        'carrier_will_pick_up' => 'bool',
        'carrier_will_pick_up_option' => '\TNT\Amazon\MerchantFulfillment\V0\Model\CarrierWillPickUpOption',
        'label_format' => '\TNT\Amazon\MerchantFulfillment\V0\Model\LabelFormat',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'delivery_experience' => null,
        'declared_value' => null,
        'carrier_will_pick_up' => null,
        'carrier_will_pick_up_option' => null,
        'label_format' => null,
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
        'delivery_experience' => 'DeliveryExperience',
        'declared_value' => 'DeclaredValue',
        'carrier_will_pick_up' => 'CarrierWillPickUp',
        'carrier_will_pick_up_option' => 'CarrierWillPickUpOption',
        'label_format' => 'LabelFormat',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_experience' => 'setDeliveryExperience',
        'declared_value' => 'setDeclaredValue',
        'carrier_will_pick_up' => 'setCarrierWillPickUp',
        'carrier_will_pick_up_option' => 'setCarrierWillPickUpOption',
        'label_format' => 'setLabelFormat',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_experience' => 'getDeliveryExperience',
        'declared_value' => 'getDeclaredValue',
        'carrier_will_pick_up' => 'getCarrierWillPickUp',
        'carrier_will_pick_up_option' => 'getCarrierWillPickUpOption',
        'label_format' => 'getLabelFormat',
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
        $this->container['delivery_experience'] = isset($data['delivery_experience']) ? $data['delivery_experience'] : null;
        $this->container['declared_value'] = isset($data['declared_value']) ? $data['declared_value'] : null;
        $this->container['carrier_will_pick_up'] = isset($data['carrier_will_pick_up']) ? $data['carrier_will_pick_up'] : null;
        $this->container['carrier_will_pick_up_option'] = isset($data['carrier_will_pick_up_option']) ? $data['carrier_will_pick_up_option'] : null;
        $this->container['label_format'] = isset($data['label_format']) ? $data['label_format'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['delivery_experience'] === null) {
            $invalidProperties[] = "'delivery_experience' can't be null";
        }
        if ($this->container['carrier_will_pick_up'] === null) {
            $invalidProperties[] = "'carrier_will_pick_up' can't be null";
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
     * Gets delivery_experience.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\DeliveryExperienceType
     */
    public function getDeliveryExperience()
    {
        return $this->container['delivery_experience'];
    }

    /**
     * Sets delivery_experience.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\DeliveryExperienceType $delivery_experience the delivery confirmation level
     *
     * @return $this
     */
    public function setDeliveryExperience($delivery_experience)
    {
        $this->container['delivery_experience'] = $delivery_experience;

        return $this;
    }

    /**
     * Gets declared_value.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\CurrencyAmount
     */
    public function getDeclaredValue()
    {
        return $this->container['declared_value'];
    }

    /**
     * Sets declared_value.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\CurrencyAmount $declared_value The declared value of the shipment. The carrier uses this value to determine the amount to use to insure the shipment. If DeclaredValue is greater than the carrier's minimum insurance amount, the seller is charged for the additional insurance as determined by the carrier. For information about optional insurance coverage, see the Seller Central Help [UK](https://sellercentral.amazon.co.uk/gp/help/200204080) [US](https://sellercentral.amazon.com/gp/help/200204080).
     *
     * @return $this
     */
    public function setDeclaredValue($declared_value)
    {
        $this->container['declared_value'] = $declared_value;

        return $this;
    }

    /**
     * Gets carrier_will_pick_up.
     *
     * @return bool
     */
    public function getCarrierWillPickUp()
    {
        return $this->container['carrier_will_pick_up'];
    }

    /**
     * Sets carrier_will_pick_up.
     *
     * @param bool $carrier_will_pick_up When true, the carrier will pick up the package.  Note: Scheduled carrier pickup is available only using Dynamex (US), DPD (UK), and Royal Mail (UK).
     *
     * @return $this
     */
    public function setCarrierWillPickUp($carrier_will_pick_up)
    {
        $this->container['carrier_will_pick_up'] = $carrier_will_pick_up;

        return $this;
    }

    /**
     * Gets carrier_will_pick_up_option.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\CarrierWillPickUpOption
     */
    public function getCarrierWillPickUpOption()
    {
        return $this->container['carrier_will_pick_up_option'];
    }

    /**
     * Sets carrier_will_pick_up_option.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\CarrierWillPickUpOption $carrier_will_pick_up_option carrier_will_pick_up_option
     *
     * @return $this
     */
    public function setCarrierWillPickUpOption($carrier_will_pick_up_option)
    {
        $this->container['carrier_will_pick_up_option'] = $carrier_will_pick_up_option;

        return $this;
    }

    /**
     * Gets label_format.
     *
     * @return \TNT\Amazon\MerchantFulfillment\V0\Model\LabelFormat
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format.
     *
     * @param \TNT\Amazon\MerchantFulfillment\V0\Model\LabelFormat $label_format the seller's preferred label format
     *
     * @return $this
     */
    public function setLabelFormat($label_format)
    {
        $this->container['label_format'] = $label_format;

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
