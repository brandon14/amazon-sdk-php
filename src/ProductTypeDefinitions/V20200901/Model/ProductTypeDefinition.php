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
 * ProductTypeDefinition.
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
 * Selling Partner API for Product Type Definitions.
 *
 * The Selling Partner API for Product Type Definitions provides programmatic access to attribute and data requirements for product types in the Amazon catalog. Use this API to return the JSON Schema for a product type that you can then use with other Selling Partner APIs, such as the Selling Partner API for Listings Items, the Selling Partner API for Catalog Items, and the Selling Partner API for Feeds (for JSON-based listing feeds).  For more information, see the [Product Type Definitions API Use Case Guide](doc:product-type-api-use-case-guide).
 *
 * OpenAPI spec version: 2020-09-01
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TNT\Amazon\ProductTypeDefinitions\V20200901\Model;

use TNT\Amazon\ProductTypeDefinitions\V20200901\ObjectSerializer;

/**
 * ProductTypeDefinition Class Doc Comment.
 *
 * @category Class
 *
 * @description A product type definition represents the attributes and data requirements for a product type in the Amazon catalog. Product type definitions are used interchangeably between the Selling Partner API for Listings Items, Selling Partner API for Catalog Items, and JSON-based listings feeds in the Selling Partner API for Feeds.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ProductTypeDefinition implements ModelInterface, \ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ProductTypeDefinition';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'meta_schema' => '\TNT\Amazon\ProductTypeDefinitions\V20200901\Model\SchemaLink',
        'schema' => '\TNT\Amazon\ProductTypeDefinitions\V20200901\Model\SchemaLink',
        'requirements' => 'string',
        'requirements_enforced' => 'string',
        'property_groups' => 'map[string,\TNT\Amazon\ProductTypeDefinitions\V20200901\Model\PropertyGroup]',
        'locale' => 'string',
        'marketplace_ids' => 'string[]',
        'product_type' => 'string',
        'product_type_version' => '\TNT\Amazon\ProductTypeDefinitions\V20200901\Model\ProductTypeVersion',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'meta_schema' => null,
        'schema' => null,
        'requirements' => null,
        'requirements_enforced' => null,
        'property_groups' => null,
        'locale' => null,
        'marketplace_ids' => null,
        'product_type' => null,
        'product_type_version' => null,
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
        'meta_schema' => 'metaSchema',
        'schema' => 'schema',
        'requirements' => 'requirements',
        'requirements_enforced' => 'requirementsEnforced',
        'property_groups' => 'propertyGroups',
        'locale' => 'locale',
        'marketplace_ids' => 'marketplaceIds',
        'product_type' => 'productType',
        'product_type_version' => 'productTypeVersion',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'meta_schema' => 'setMetaSchema',
        'schema' => 'setSchema',
        'requirements' => 'setRequirements',
        'requirements_enforced' => 'setRequirementsEnforced',
        'property_groups' => 'setPropertyGroups',
        'locale' => 'setLocale',
        'marketplace_ids' => 'setMarketplaceIds',
        'product_type' => 'setProductType',
        'product_type_version' => 'setProductTypeVersion',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'meta_schema' => 'getMetaSchema',
        'schema' => 'getSchema',
        'requirements' => 'getRequirements',
        'requirements_enforced' => 'getRequirementsEnforced',
        'property_groups' => 'getPropertyGroups',
        'locale' => 'getLocale',
        'marketplace_ids' => 'getMarketplaceIds',
        'product_type' => 'getProductType',
        'product_type_version' => 'getProductTypeVersion',
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

    public const REQUIREMENTS_LISTING = 'LISTING';
    public const REQUIREMENTS_LISTING_PRODUCT_ONLY = 'LISTING_PRODUCT_ONLY';
    public const REQUIREMENTS_LISTING_OFFER_ONLY = 'LISTING_OFFER_ONLY';
    public const REQUIREMENTS_ENFORCED_ENFORCED = 'ENFORCED';
    public const REQUIREMENTS_ENFORCED_NOT_ENFORCED = 'NOT_ENFORCED';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getRequirementsAllowableValues()
    {
        return [
            self::REQUIREMENTS_LISTING,
            self::REQUIREMENTS_LISTING_PRODUCT_ONLY,
            self::REQUIREMENTS_LISTING_OFFER_ONLY,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getRequirementsEnforcedAllowableValues()
    {
        return [
            self::REQUIREMENTS_ENFORCED_ENFORCED,
            self::REQUIREMENTS_ENFORCED_NOT_ENFORCED,
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
        $this->container['meta_schema'] = isset($data['meta_schema']) ? $data['meta_schema'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['requirements'] = isset($data['requirements']) ? $data['requirements'] : null;
        $this->container['requirements_enforced'] = isset($data['requirements_enforced']) ? $data['requirements_enforced'] : null;
        $this->container['property_groups'] = isset($data['property_groups']) ? $data['property_groups'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['marketplace_ids'] = isset($data['marketplace_ids']) ? $data['marketplace_ids'] : null;
        $this->container['product_type'] = isset($data['product_type']) ? $data['product_type'] : null;
        $this->container['product_type_version'] = isset($data['product_type_version']) ? $data['product_type_version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
        }
        if ($this->container['requirements'] === null) {
            $invalidProperties[] = "'requirements' can't be null";
        }
        $allowedValues = $this->getRequirementsAllowableValues();

        if (null !== $this->container['requirements'] && ! \in_array($this->container['requirements'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'requirements', must be one of '%s'",
                $this->container['requirements'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['requirements_enforced'] === null) {
            $invalidProperties[] = "'requirements_enforced' can't be null";
        }
        $allowedValues = $this->getRequirementsEnforcedAllowableValues();

        if (null !== $this->container['requirements_enforced'] && ! \in_array($this->container['requirements_enforced'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'requirements_enforced', must be one of '%s'",
                $this->container['requirements_enforced'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['property_groups'] === null) {
            $invalidProperties[] = "'property_groups' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ($this->container['marketplace_ids'] === null) {
            $invalidProperties[] = "'marketplace_ids' can't be null";
        }
        if ($this->container['product_type'] === null) {
            $invalidProperties[] = "'product_type' can't be null";
        }
        if ($this->container['product_type_version'] === null) {
            $invalidProperties[] = "'product_type_version' can't be null";
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
     * Gets meta_schema.
     *
     * @return \TNT\Amazon\ProductTypeDefinitions\V20200901\Model\SchemaLink
     */
    public function getMetaSchema()
    {
        return $this->container['meta_schema'];
    }

    /**
     * Sets meta_schema.
     *
     * @param \TNT\Amazon\ProductTypeDefinitions\V20200901\Model\SchemaLink $meta_schema link to meta-schema describing the vocabulary used by the product type schema
     *
     * @return $this
     */
    public function setMetaSchema($meta_schema)
    {
        $this->container['meta_schema'] = $meta_schema;

        return $this;
    }

    /**
     * Gets schema.
     *
     * @return \TNT\Amazon\ProductTypeDefinitions\V20200901\Model\SchemaLink
     */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
     * Sets schema.
     *
     * @param \TNT\Amazon\ProductTypeDefinitions\V20200901\Model\SchemaLink $schema link to schema describing the attributes and requirements for the product type
     *
     * @return $this
     */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;

        return $this;
    }

    /**
     * Gets requirements.
     *
     * @return string
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements.
     *
     * @param string $requirements name of the requirements set represented in this product type definition
     *
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $allowedValues = $this->getRequirementsAllowableValues();
        if (! \in_array($requirements, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'requirements', must be one of '%s'", $requirements, implode("', '", $allowedValues)));
        }
        $this->container['requirements'] = $requirements;

        return $this;
    }

    /**
     * Gets requirements_enforced.
     *
     * @return string
     */
    public function getRequirementsEnforced()
    {
        return $this->container['requirements_enforced'];
    }

    /**
     * Sets requirements_enforced.
     *
     * @param string $requirements_enforced Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all of the required attributes being present (such as for partial updates).
     *
     * @return $this
     */
    public function setRequirementsEnforced($requirements_enforced)
    {
        $allowedValues = $this->getRequirementsEnforcedAllowableValues();
        if (! \in_array($requirements_enforced, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value '%s' for 'requirements_enforced', must be one of '%s'", $requirements_enforced, implode("', '", $allowedValues)));
        }
        $this->container['requirements_enforced'] = $requirements_enforced;

        return $this;
    }

    /**
     * Gets property_groups.
     *
     * @return map[string,\TNT\Amazon\ProductTypeDefinitions\V20200901\Model\PropertyGroup]
     */
    public function getPropertyGroups()
    {
        return $this->container['property_groups'];
    }

    /**
     * Sets property_groups.
     *
     * @param map[string,\TNT\Amazon\ProductTypeDefinitions\V20200901\Model\PropertyGroup] $property_groups Mapping of property group names to property groups. Property groups represent logical groupings of schema properties that can be used for display or informational purposes.
     *
     * @return $this
     */
    public function setPropertyGroups($property_groups)
    {
        $this->container['property_groups'] = $property_groups;

        return $this;
    }

    /**
     * Gets locale.
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale.
     *
     * @param string $locale locale of the display elements contained in the product type definition
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets marketplace_ids.
     *
     * @return string[]
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids.
     *
     * @param string[] $marketplace_ids amazon marketplace identifiers for which the product type definition is applicable
     *
     * @return $this
     */
    public function setMarketplaceIds($marketplace_ids)
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets product_type.
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type.
     *
     * @param string $product_type the name of the Amazon product type that this product type definition applies to
     *
     * @return $this
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets product_type_version.
     *
     * @return \TNT\Amazon\ProductTypeDefinitions\V20200901\Model\ProductTypeVersion
     */
    public function getProductTypeVersion()
    {
        return $this->container['product_type_version'];
    }

    /**
     * Sets product_type_version.
     *
     * @param \TNT\Amazon\ProductTypeDefinitions\V20200901\Model\ProductTypeVersion $product_type_version the version details for the Amazon product type
     *
     * @return $this
     */
    public function setProductTypeVersion($product_type_version)
    {
        $this->container['product_type_version'] = $product_type_version;

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
