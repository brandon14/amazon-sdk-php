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
 * DebtRecoveryEvent.
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
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace TNT\Amazon\Finances\V0\Model;

use ArrayAccess;
use TNT\Amazon\Finances\V0\ObjectSerializer;

/**
 * DebtRecoveryEvent Class Doc Comment.
 *
 * @category Class
 * @description A debt payment or debt adjustment.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class DebtRecoveryEvent implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'DebtRecoveryEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'debt_recovery_type' => 'string',
        'recovery_amount' => '\TNT\Amazon\Finances\V0\Model\Currency',
        'over_payment_credit' => '\TNT\Amazon\Finances\V0\Model\Currency',
        'debt_recovery_item_list' => '\TNT\Amazon\Finances\V0\Model\DebtRecoveryItemList',
        'charge_instrument_list' => '\TNT\Amazon\Finances\V0\Model\ChargeInstrumentList',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'debt_recovery_type' => null,
        'recovery_amount' => null,
        'over_payment_credit' => null,
        'debt_recovery_item_list' => null,
        'charge_instrument_list' => null,
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
        'debt_recovery_type' => 'DebtRecoveryType',
        'recovery_amount' => 'RecoveryAmount',
        'over_payment_credit' => 'OverPaymentCredit',
        'debt_recovery_item_list' => 'DebtRecoveryItemList',
        'charge_instrument_list' => 'ChargeInstrumentList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'debt_recovery_type' => 'setDebtRecoveryType',
        'recovery_amount' => 'setRecoveryAmount',
        'over_payment_credit' => 'setOverPaymentCredit',
        'debt_recovery_item_list' => 'setDebtRecoveryItemList',
        'charge_instrument_list' => 'setChargeInstrumentList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'debt_recovery_type' => 'getDebtRecoveryType',
        'recovery_amount' => 'getRecoveryAmount',
        'over_payment_credit' => 'getOverPaymentCredit',
        'debt_recovery_item_list' => 'getDebtRecoveryItemList',
        'charge_instrument_list' => 'getChargeInstrumentList',
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
        $this->container['debt_recovery_type'] = isset($data['debt_recovery_type']) ? $data['debt_recovery_type'] : null;
        $this->container['recovery_amount'] = isset($data['recovery_amount']) ? $data['recovery_amount'] : null;
        $this->container['over_payment_credit'] = isset($data['over_payment_credit']) ? $data['over_payment_credit'] : null;
        $this->container['debt_recovery_item_list'] = isset($data['debt_recovery_item_list']) ? $data['debt_recovery_item_list'] : null;
        $this->container['charge_instrument_list'] = isset($data['charge_instrument_list']) ? $data['charge_instrument_list'] : null;
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
     * Gets debt_recovery_type.
     *
     * @return string
     */
    public function getDebtRecoveryType()
    {
        return $this->container['debt_recovery_type'];
    }

    /**
     * Sets debt_recovery_type.
     *
     * @param string $debt_recovery_type The debt recovery type.  Possible values:  * DebtPayment  * DebtPaymentFailure  *DebtAdjustment
     *
     * @return $this
     */
    public function setDebtRecoveryType($debt_recovery_type)
    {
        $this->container['debt_recovery_type'] = $debt_recovery_type;

        return $this;
    }

    /**
     * Gets recovery_amount.
     *
     * @return \TNT\Amazon\Finances\V0\Model\Currency
     */
    public function getRecoveryAmount()
    {
        return $this->container['recovery_amount'];
    }

    /**
     * Sets recovery_amount.
     *
     * @param \TNT\Amazon\Finances\V0\Model\Currency $recovery_amount the amount applied for recovery
     *
     * @return $this
     */
    public function setRecoveryAmount($recovery_amount)
    {
        $this->container['recovery_amount'] = $recovery_amount;

        return $this;
    }

    /**
     * Gets over_payment_credit.
     *
     * @return \TNT\Amazon\Finances\V0\Model\Currency
     */
    public function getOverPaymentCredit()
    {
        return $this->container['over_payment_credit'];
    }

    /**
     * Sets over_payment_credit.
     *
     * @param \TNT\Amazon\Finances\V0\Model\Currency $over_payment_credit the amount returned for overpayment
     *
     * @return $this
     */
    public function setOverPaymentCredit($over_payment_credit)
    {
        $this->container['over_payment_credit'] = $over_payment_credit;

        return $this;
    }

    /**
     * Gets debt_recovery_item_list.
     *
     * @return \TNT\Amazon\Finances\V0\Model\DebtRecoveryItemList
     */
    public function getDebtRecoveryItemList()
    {
        return $this->container['debt_recovery_item_list'];
    }

    /**
     * Sets debt_recovery_item_list.
     *
     * @param \TNT\Amazon\Finances\V0\Model\DebtRecoveryItemList $debt_recovery_item_list debt_recovery_item_list
     *
     * @return $this
     */
    public function setDebtRecoveryItemList($debt_recovery_item_list)
    {
        $this->container['debt_recovery_item_list'] = $debt_recovery_item_list;

        return $this;
    }

    /**
     * Gets charge_instrument_list.
     *
     * @return \TNT\Amazon\Finances\V0\Model\ChargeInstrumentList
     */
    public function getChargeInstrumentList()
    {
        return $this->container['charge_instrument_list'];
    }

    /**
     * Sets charge_instrument_list.
     *
     * @param \TNT\Amazon\Finances\V0\Model\ChargeInstrumentList $charge_instrument_list charge_instrument_list
     *
     * @return $this
     */
    public function setChargeInstrumentList($charge_instrument_list)
    {
        $this->container['charge_instrument_list'] = $charge_instrument_list;

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
