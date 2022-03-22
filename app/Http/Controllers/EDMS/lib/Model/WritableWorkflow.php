<?php
/**
 * WritableWorkflow
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Mayan EDMS API
 *
 * Free Open Source Electronic Document Management System
 *
 * The version of the OpenAPI document: v2
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * WritableWorkflow Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WritableWorkflow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WritableWorkflow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'document_types_pk_list' => 'string',
        'label' => 'string',
        'id' => 'int',
        'internal_name' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'document_types_pk_list' => null,
        'label' => null,
        'id' => null,
        'internal_name' => null,
        'url' => 'uri'
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
        'document_types_pk_list' => 'document_types_pk_list',
        'label' => 'label',
        'id' => 'id',
        'internal_name' => 'internal_name',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_types_pk_list' => 'setDocumentTypesPkList',
        'label' => 'setLabel',
        'id' => 'setId',
        'internal_name' => 'setInternalName',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_types_pk_list' => 'getDocumentTypesPkList',
        'label' => 'getLabel',
        'id' => 'getId',
        'internal_name' => 'getInternalName',
        'url' => 'getUrl'
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
        $this->container['document_types_pk_list'] = isset($data['document_types_pk_list']) ? $data['document_types_pk_list'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['internal_name'] = isset($data['internal_name']) ? $data['internal_name'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ((mb_strlen($this->container['label']) > 255)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['internal_name'] === null) {
            $invalidProperties[] = "'internal_name' can't be null";
        }
        if ((mb_strlen($this->container['internal_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'internal_name', the character length must be smaller than or equal to 255.";
        }

        if (!preg_match("/^[a-zA-Z0-9_]+$/", $this->container['internal_name'])) {
            $invalidProperties[] = "invalid value for 'internal_name', must be conform to the pattern /^[a-zA-Z0-9_]+$/.";
        }

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
     * Gets document_types_pk_list
     *
     * @return string|null
     */
    public function getDocumentTypesPkList()
    {
        return $this->container['document_types_pk_list'];
    }

    /**
     * Sets document_types_pk_list
     *
     * @param string|null $document_types_pk_list Comma separated list of document type primary keys to which this workflow will be attached.
     *
     * @return $this
     */
    public function setDocumentTypesPkList($document_types_pk_list)
    {
        $this->container['document_types_pk_list'] = $document_types_pk_list;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label A short text to describe the workflow.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        if ((mb_strlen($label) > 255)) {
            throw new \InvalidArgumentException('invalid length for $label when calling WritableWorkflow., must be smaller than or equal to 255.');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets internal_name
     *
     * @return string
     */
    public function getInternalName()
    {
        return $this->container['internal_name'];
    }

    /**
     * Sets internal_name
     *
     * @param string $internal_name This value will be used by other apps to reference this workflow. Can only contain letters, numbers, and underscores.
     *
     * @return $this
     */
    public function setInternalName($internal_name)
    {
        if ((mb_strlen($internal_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $internal_name when calling WritableWorkflow., must be smaller than or equal to 255.');
        }
        if ((!preg_match("/^[a-zA-Z0-9_]+$/", $internal_name))) {
            throw new \InvalidArgumentException("invalid value for $internal_name when calling WritableWorkflow., must conform to the pattern /^[a-zA-Z0-9_]+$/.");
        }

        $this->container['internal_name'] = $internal_name;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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

    //DISME - Added getter for container for Laravel response purposes in controller
    public function getContainer(){

        return $this->container;

    }

}


