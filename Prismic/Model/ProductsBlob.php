<?php
/**
 * ProductsBlob
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Prismic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Prismic lib
 *
 * Prismic
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Prismic\Model;

use \ArrayAccess;
use \Prismic\ObjectSerializer;

/**
 * ProductsBlob Class Doc Comment
 *
 * @category Class
 * @package  Prismic
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductsBlob implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'products_blob';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'uid' => 'string',
        'brand' => 'string',
        'has_variants' => 'string',
        'sku' => 'string',
        'name' => 'string',
        'slug' => 'string',
        'product_link_type' => 'string',
        'stock_status' => 'string',
        'discount_max' => 'string',
        'discount_min' => 'string',
        'labels' => 'string',
        'regular_price' => 'string',
        'price_max' => 'string',
        'price_min' => 'string',
        'image' => '\Prismic\Model\ProductsBlobImage'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'uid' => null,
        'brand' => null,
        'has_variants' => null,
        'sku' => null,
        'name' => null,
        'slug' => null,
        'product_link_type' => null,
        'stock_status' => null,
        'discount_max' => null,
        'discount_min' => null,
        'labels' => null,
        'regular_price' => null,
        'price_max' => null,
        'price_min' => null,
        'image' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uid' => 'uid',
        'brand' => 'brand',
        'has_variants' => 'hasVariants',
        'sku' => 'sku',
        'name' => 'name',
        'slug' => 'slug',
        'product_link_type' => 'productLinkType',
        'stock_status' => 'stockStatus',
        'discount_max' => 'discountMax',
        'discount_min' => 'discountMin',
        'labels' => 'labels',
        'regular_price' => 'regularPrice',
        'price_max' => 'priceMax',
        'price_min' => 'priceMin',
        'image' => 'image'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
        'brand' => 'setBrand',
        'has_variants' => 'setHasVariants',
        'sku' => 'setSku',
        'name' => 'setName',
        'slug' => 'setSlug',
        'product_link_type' => 'setProductLinkType',
        'stock_status' => 'setStockStatus',
        'discount_max' => 'setDiscountMax',
        'discount_min' => 'setdiscountMin',
        'labels' => 'setLabels',
        'regular_price' => 'setRegularPrice',
        'price_max' => 'setPriceMax',
        'price_min' => 'setPriceMin',
        'image' => 'setImage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
        'brand' => 'getBrand',
        'has_variants' => 'getHasVariants',
        'sku' => 'getSku',
        'name' => 'getName',
        'slug' => 'getSlug',
        'product_link_type' => 'getProductLinkType',
        'stock_status' => 'getStockStatus',
        'discount_max' => 'getDiscountMax',
        'discount_min' => 'getdiscountMin',
        'labels' => 'getLabels',
        'regular_price' => 'getRegularPrice',
        'price_max' => 'getPriceMax',
        'price_min' => 'getPriceMin',
        'image' => 'getImage'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
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
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['uid'] = $data['uid'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['has_variants'] = $data['has_variants'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['slug'] = $data['slug'] ?? null;
        $this->container['product_link_type'] = $data['product_link_type'] ?? null;
        $this->container['stock_status'] = $data['stock_status'] ?? null;
        $this->container['discount_max'] = $data['discount_max'] ?? null;
        $this->container['discount_min'] = $data['discount_min'] ?? null;
        $this->container['labels'] = $data['labels'] ?? null;
        $this->container['regular_price'] = $data['regular_price'] ?? null;
        $this->container['price_max'] = $data['price_max'] ?? null;
        $this->container['price_min'] = $data['price_min'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
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
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets uid
     *
     * @return string|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string|null $uid uid
     *
     * @return self
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand brand
     *
     * @return self
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets has_variants
     *
     * @return string|null
     */
    public function getHasVariants()
    {
        return $this->container['has_variants'];
    }

    /**
     * Sets has_variants
     *
     * @param string|null $has_variants has_variants
     *
     * @return self
     */
    public function setHasVariants($has_variants)
    {
        $this->container['has_variants'] = $has_variants;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku sku
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string|null $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets product_link_type
     *
     * @return string|null
     */
    public function getProductLinkType()
    {
        return $this->container['product_link_type'];
    }

    /**
     * Sets product_link_type
     *
     * @param string|null $product_link_type product_link_type
     *
     * @return self
     */
    public function setProductLinkType($product_link_type)
    {
        $this->container['product_link_type'] = $product_link_type;

        return $this;
    }

    /**
     * Gets stock_status
     *
     * @return string|null
     */
    public function getStockStatus()
    {
        return $this->container['stock_status'];
    }

    /**
     * Sets stock_status
     *
     * @param string|null $stock_status stock_status
     *
     * @return self
     */
    public function setStockStatus($stock_status)
    {
        $this->container['stock_status'] = $stock_status;

        return $this;
    }

    /**
     * Gets discount_max
     *
     * @return string|null
     */
    public function getDiscountMax()
    {
        return $this->container['discount_max'];
    }

    /**
     * Sets discount_max
     *
     * @param string|null $discount_max discount_max
     *
     * @return self
     */
    public function setDiscountMax($discount_max)
    {
        $this->container['discount_max'] = $discount_max;

        return $this;
    }

    /**
     * Gets discount_min
     *
     * @return string|null
     */
    public function getdiscountMin()
    {
        return $this->container['discount_min'];
    }

    /**
     * Sets discount_min
     *
     * @param string|null $discount_min discount_min
     *
     * @return self
     */
    public function setDiscountMin($discount_min)
    {
        $this->container['discount_min'] = $discount_min;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return string|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param string|null $labels labels
     *
     * @return self
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets regular_price
     *
     * @return string|null
     */
    public function getRegularPrice()
    {
        return $this->container['regular_price'];
    }

    /**
     * Sets regular_price
     *
     * @param string|null $regular_price regular_price
     *
     * @return self
     */
    public function setRegularPrice($regular_price)
    {
        $this->container['regular_price'] = $regular_price;

        return $this;
    }

    /**
     * Gets price_max
     *
     * @return string|null
     */
    public function getPriceMax()
    {
        return $this->container['price_max'];
    }

    /**
     * Sets price_max
     *
     * @param string|null $price_max price_max
     *
     * @return self
     */
    public function setPriceMax($price_max)
    {
        $this->container['price_max'] = $price_max;

        return $this;
    }

    /**
     * Gets price_min
     *
     * @return string|null
     */
    public function getPriceMin()
    {
        return $this->container['price_min'];
    }

    /**
     * Sets price_min
     *
     * @param string|null $price_min price_min
     *
     * @return self
     */
    public function setPriceMin($price_min)
    {
        $this->container['price_min'] = $price_min;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \Prismic\Model\ProductsBlobImage|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Prismic\Model\ProductsBlobImage|null $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
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
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


