<?php
/**
 * Index
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
 * Index Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Index implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Index';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'document_types' => 'int[]',
        'enabled' => 'bool',
        'id' => 'int',
        'instance_root' => '\OpenAPI\Client\Model\IndexInstanceNode',
        'label' => 'string',
        'node_templates' => '\OpenAPI\Client\Model\IndexTemplateNode[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'document_types' => null,
        'enabled' => null,
        'id' => null,
        'instance_root' => null,
        'label' => null,
        'node_templates' => null
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
        'document_types' => 'document_types',
        'enabled' => 'enabled',
        'id' => 'id',
        'instance_root' => 'instance_root',
        'label' => 'label',
        'node_templates' => 'node_templates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_types' => 'setDocumentTypes',
        'enabled' => 'setEnabled',
        'id' => 'setId',
        'instance_root' => 'setInstanceRoot',
        'label' => 'setLabel',
        'node_templates' => 'setNodeTemplates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_types' => 'getDocumentTypes',
        'enabled' => 'getEnabled',
        'id' => 'getId',
        'instance_root' => 'getInstanceRoot',
        'label' => 'getLabel',
        'node_templates' => 'getNodeTemplates'
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
        $this->container['document_types'] = isset($data['document_types']) ? $data['document_types'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instance_root'] = isset($data['instance_root']) ? $data['instance_root'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['node_templates'] = isset($data['node_templates']) ? $data['node_templates'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['document_types'] === null) {
            $invalidProperties[] = "'document_types' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ((mb_strlen($this->container['label']) > 128)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 128.";
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
     * Gets document_types
     *
     * @return int[]
     */
    public function getDocumentTypes()
    {
        return $this->container['document_types'];
    }

    /**
     * Sets document_types
     *
     * @param int[] $document_types document_types
     *
     * @return $this
     */
    public function setDocumentTypes($document_types)
    {
        $this->container['document_types'] = $document_types;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled Causes this index to be visible and updated when document data changes.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
     * Gets instance_root
     *
     * @return \OpenAPI\Client\Model\IndexInstanceNode|null
     */
    public function getInstanceRoot()
    {
        return $this->container['instance_root'];
    }

    /**
     * Sets instance_root
     *
     * @param \OpenAPI\Client\Model\IndexInstanceNode|null $instance_root instance_root
     *
     * @return $this
     */
    public function setInstanceRoot($instance_root)
    {
        $this->container['instance_root'] = $instance_root;

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
     * @param string $label Short description of this index.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        if ((mb_strlen($label) > 128)) {
            throw new \InvalidArgumentException('invalid length for $label when calling Index., must be smaller than or equal to 128.');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets node_templates
     *
     * @return \OpenAPI\Client\Model\IndexTemplateNode[]|null
     */
    public function getNodeTemplates()
    {
        return $this->container['node_templates'];
    }

    /**
     * Sets node_templates
     *
     * @param \OpenAPI\Client\Model\IndexTemplateNode[]|null $node_templates node_templates
     *
     * @return $this
     */
    public function setNodeTemplates($node_templates)
    {
        $this->container['node_templates'] = $node_templates;

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


