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
 * Invoice.
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
 * Selling Partner API for Retail Procurement Payments.
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
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

namespace TNT\Amazon\VendorInvoices\V1\Model;

use TNT\Amazon\VendorInvoices\V1\ObjectSerializer;

/**
 * Invoice Class Doc Comment.
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Invoice implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Invoice';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'invoice_type' => 'string',
        'id' => 'string',
        'reference_number' => 'string',
        'date' => '\TNT\Amazon\VendorInvoices\V1\Model\\DateTime',
        'remit_to_party' => '\TNT\Amazon\VendorInvoices\V1\Model\PartyIdentification',
        'ship_to_party' => '\TNT\Amazon\VendorInvoices\V1\Model\PartyIdentification',
        'ship_from_party' => '\TNT\Amazon\VendorInvoices\V1\Model\PartyIdentification',
        'bill_to_party' => '\TNT\Amazon\VendorInvoices\V1\Model\PartyIdentification',
        'payment_terms' => '\TNT\Amazon\VendorInvoices\V1\Model\PaymentTerms',
        'invoice_total' => '\TNT\Amazon\VendorInvoices\V1\Model\Money',
        'tax_details' => '\TNT\Amazon\VendorInvoices\V1\Model\TaxDetails[]',
        'additional_details' => '\TNT\Amazon\VendorInvoices\V1\Model\AdditionalDetails[]',
        'charge_details' => '\TNT\Amazon\VendorInvoices\V1\Model\ChargeDetails[]',
        'allowance_details' => '\TNT\Amazon\VendorInvoices\V1\Model\AllowanceDetails[]',
        'items' => '\TNT\Amazon\VendorInvoices\V1\Model\InvoiceItem[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'invoice_type' => null,
        'id' => null,
        'reference_number' => null,
        'date' => null,
        'remit_to_party' => null,
        'ship_to_party' => null,
        'ship_from_party' => null,
        'bill_to_party' => null,
        'payment_terms' => null,
        'invoice_total' => null,
        'tax_details' => null,
        'additional_details' => null,
        'charge_details' => null,
        'allowance_details' => null,
        'items' => null,
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
        'invoice_type' => 'invoiceType',
        'id' => 'id',
        'reference_number' => 'referenceNumber',
        'date' => 'date',
        'remit_to_party' => 'remitToParty',
        'ship_to_party' => 'shipToParty',
        'ship_from_party' => 'shipFromParty',
        'bill_to_party' => 'billToParty',
        'payment_terms' => 'paymentTerms',
        'invoice_total' => 'invoiceTotal',
        'tax_details' => 'taxDetails',
        'additional_details' => 'additionalDetails',
        'charge_details' => 'chargeDetails',
        'allowance_details' => 'allowanceDetails',
        'items' => 'items',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_type' => 'setInvoiceType',
        'id' => 'setId',
        'reference_number' => 'setReferenceNumber',
        'date' => 'setDate',
        'remit_to_party' => 'setRemitToParty',
        'ship_to_party' => 'setShipToParty',
        'ship_from_party' => 'setShipFromParty',
        'bill_to_party' => 'setBillToParty',
        'payment_terms' => 'setPaymentTerms',
        'invoice_total' => 'setInvoiceTotal',
        'tax_details' => 'setTaxDetails',
        'additional_details' => 'setAdditionalDetails',
        'charge_details' => 'setChargeDetails',
        'allowance_details' => 'setAllowanceDetails',
        'items' => 'setItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_type' => 'getInvoiceType',
        'id' => 'getId',
        'reference_number' => 'getReferenceNumber',
        'date' => 'getDate',
        'remit_to_party' => 'getRemitToParty',
        'ship_to_party' => 'getShipToParty',
        'ship_from_party' => 'getShipFromParty',
        'bill_to_party' => 'getBillToParty',
        'payment_terms' => 'getPaymentTerms',
        'invoice_total' => 'getInvoiceTotal',
        'tax_details' => 'getTaxDetails',
        'additional_details' => 'getAdditionalDetails',
        'charge_details' => 'getChargeDetails',
        'allowance_details' => 'getAllowanceDetails',
        'items' => 'getItems',
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

    public const INVOICE_TYPE_INVOICE = 'Invoice';
    public const INVOICE_TYPE_CREDIT_NOTE = 'CreditNote';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getInvoiceTypeAllowableValues()
    {
        return [
            self::INVOICE_TYPE_INVOICE,
            self::INVOICE_TYPE_CREDIT_NOTE,
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
        $this->container['invoice_type'] = isset($data['invoice_type']) ? $data['invoice_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['remit_to_party'] = isset($data['remit_to_party']) ? $data['remit_to_party'] : null;
        $this->container['ship_to_party'] = isset($data['ship_to_party']) ? $data['ship_to_party'] : null;
        $this->container['ship_from_party'] = isset($data['ship_from_party']) ? $data['ship_from_party'] : null;
        $this->container['bill_to_party'] = isset($data['bill_to_party']) ? $data['bill_to_party'] : null;
        $this->container['payment_terms'] = isset($data['payment_terms']) ? $data['payment_terms'] : null;
        $this->container['invoice_total'] = isset($data['invoice_total']) ? $data['invoice_total'] : null;
        $this->container['tax_details'] = isset($data['tax_details']) ? $data['tax_details'] : null;
        $this->container['additional_details'] = isset($data['additional_details']) ? $data['additional_details'] : null;
        $this->container['charge_details'] = isset($data['charge_details']) ? $data['charge_details'] : null;
        $this->container['allowance_details'] = isset($data['allowance_details']) ? $data['allowance_details'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['invoice_type'] === null) {
            $invalidProperties[] = "'invoice_type' can't be null";
        }
        $allowedValues = $this->getInvoiceTypeAllowableValues();

        if (null !== $this->container['invoice_type'] && ! \in_array($this->container['invoice_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'invoice_type', must be one of '%s'",
                $this->container['invoice_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['remit_to_party'] === null) {
            $invalidProperties[] = "'remit_to_party' can't be null";
        }
        if ($this->container['invoice_total'] === null) {
            $invalidProperties[] = "'invoice_total' can't be null";
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
     * Gets invoice_type.
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->container['invoice_type'];
    }

    /**
     * Sets invoice_type.
     *
     * @param string $invoice_type identifies the type of invoice
     *
     * @return $this
     */
    public function setInvoiceType($invoice_type)
    {
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (! \in_array($invoice_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'invoice_type', must be one of '%s'", $invoice_type, implode("', '", $allowedValues)));
        }
        $this->container['invoice_type'] = $invoice_type;

        return $this;
    }

    /**
     * Gets id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id.
     *
     * @param string $id Unique number relating to the charges defined in this document. This will be invoice number if the document type is Invoice or CreditNote number if the document type is Credit Note. Failure to provide this reference will result in a rejection.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets reference_number.
     *
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number.
     *
     * @param string $reference_number an additional unique reference number used for regulatory or other purposes
     *
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets date.
     *
     * @return \TNT\Amazon\VendorInvoices\V1\Model\DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date.
     *
     * @param \TNT\Amazon\VendorInvoices\V1\Model\DateTime $date Date when the invoice/credit note information was generated in the origin's accounting system. The invoice date should be on or after the purchase order creation date.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets remit_to_party.
     *
     * @return \TNT\Amazon\VendorInvoices\V1\Model\PartyIdentification
     */
    public function getRemitToParty()
    {
        return $this->container['remit_to_party'];
    }

    /**
     * Sets remit_to_party.
     *
     * @param \TNT\Amazon\VendorInvoices\V1\Model\PartyIdentification $remit_to_party name, address and tax details of the party receiving the payment of this invoice
     *
     * @return $this
     */
    public function setRemitToParty($remit_to_party)
    {
        $this->container['remit_to_party'] = $remit_to_party;

        return $this;
    }

    /**
     * Gets ship_to_party.
     *
     * @return \TNT\Amazon\VendorInvoices\V1\Model\PartyIdentification
     */
    public function getShipToParty()
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party.
     *
     * @param \TNT\Amazon\VendorInvoices\V1\Model\PartyIdentification $ship_to_party name, address and tax details of the party receiving a shipment of products
     *
     * @return $this
     */
    public function setShipToParty($ship_to_party)
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }

    /**
     * Gets ship_from_party.
     *
     * @return \TNT\Amazon\VendorInvoices\V1\Model\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party.
     *
     * @param \TNT\Amazon\VendorInvoices\V1\Model\PartyIdentification $ship_from_party name, address and tax details of the party sending a shipment of products
     *
     * @return $this
     */
    public function setShipFromParty($ship_from_party)
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }

    /**
     * Gets bill_to_party.
     *
     * @return \TNT\Amazon\VendorInvoices\V1\Model\PartyIdentification
     */
    public function getBillToParty()
    {
        return $this->container['bill_to_party'];
    }

    /**
     * Sets bill_to_party.
     *
     * @param \TNT\Amazon\VendorInvoices\V1\Model\PartyIdentification $bill_to_party name, address and tax details of the party to whom this invoice is issued
     *
     * @return $this
     */
    public function setBillToParty($bill_to_party)
    {
        $this->container['bill_to_party'] = $bill_to_party;

        return $this;
    }

    /**
     * Gets payment_terms.
     *
     * @return \TNT\Amazon\VendorInvoices\V1\Model\PaymentTerms
     */
    public function getPaymentTerms()
    {
        return $this->container['payment_terms'];
    }

    /**
     * Sets payment_terms.
     *
     * @param \TNT\Amazon\VendorInvoices\V1\Model\PaymentTerms $payment_terms the payment terms for the invoice
     *
     * @return $this
     */
    public function setPaymentTerms($payment_terms)
    {
        $this->container['payment_terms'] = $payment_terms;

        return $this;
    }

    /**
     * Gets invoice_total.
     *
     * @return \TNT\Amazon\VendorInvoices\V1\Model\Money
     */
    public function getInvoiceTotal()
    {
        return $this->container['invoice_total'];
    }

    /**
     * Sets invoice_total.
     *
     * @param \TNT\Amazon\VendorInvoices\V1\Model\Money $invoice_total Total monetary amount charged in the invoice or full value of credit note to be paid including all relevant taxes. It is the total amount of invoice (including charges, less allowances) before terms discount (if discount is applicable).
     *
     * @return $this
     */
    public function setInvoiceTotal($invoice_total)
    {
        $this->container['invoice_total'] = $invoice_total;

        return $this;
    }

    /**
     * Gets tax_details.
     *
     * @return \TNT\Amazon\VendorInvoices\V1\Model\TaxDetails[]
     */
    public function getTaxDetails()
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details.
     *
     * @param \TNT\Amazon\VendorInvoices\V1\Model\TaxDetails[] $tax_details total tax amount details for all line items
     *
     * @return $this
     */
    public function setTaxDetails($tax_details)
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Gets additional_details.
     *
     * @return \TNT\Amazon\VendorInvoices\V1\Model\AdditionalDetails[]
     */
    public function getAdditionalDetails()
    {
        return $this->container['additional_details'];
    }

    /**
     * Sets additional_details.
     *
     * @param \TNT\Amazon\VendorInvoices\V1\Model\AdditionalDetails[] $additional_details additional details provided by the selling party, for tax related or other purposes
     *
     * @return $this
     */
    public function setAdditionalDetails($additional_details)
    {
        $this->container['additional_details'] = $additional_details;

        return $this;
    }

    /**
     * Gets charge_details.
     *
     * @return \TNT\Amazon\VendorInvoices\V1\Model\ChargeDetails[]
     */
    public function getChargeDetails()
    {
        return $this->container['charge_details'];
    }

    /**
     * Sets charge_details.
     *
     * @param \TNT\Amazon\VendorInvoices\V1\Model\ChargeDetails[] $charge_details total charge amount details for all line items
     *
     * @return $this
     */
    public function setChargeDetails($charge_details)
    {
        $this->container['charge_details'] = $charge_details;

        return $this;
    }

    /**
     * Gets allowance_details.
     *
     * @return \TNT\Amazon\VendorInvoices\V1\Model\AllowanceDetails[]
     */
    public function getAllowanceDetails()
    {
        return $this->container['allowance_details'];
    }

    /**
     * Sets allowance_details.
     *
     * @param \TNT\Amazon\VendorInvoices\V1\Model\AllowanceDetails[] $allowance_details total allowance amount details for all line items
     *
     * @return $this
     */
    public function setAllowanceDetails($allowance_details)
    {
        $this->container['allowance_details'] = $allowance_details;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \TNT\Amazon\VendorInvoices\V1\Model\InvoiceItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \TNT\Amazon\VendorInvoices\V1\Model\InvoiceItem[] $items the list of invoice items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
