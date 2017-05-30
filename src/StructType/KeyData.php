<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyData StructType
 * @subpackage Structs
 */
class KeyData extends AbstractStructBase
{
    /**
     * The KeyField
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \RaseConnector\StructType\KeyField[]
     */
    public $KeyField;
    /**
     * Constructor method for KeyData
     * @uses KeyData::setKeyField()
     * @param \RaseConnector\StructType\KeyField[] $keyField
     */
    public function __construct(array $keyField = array())
    {
        $this
            ->setKeyField($keyField);
    }
    /**
     * Get KeyField value
     * @return \RaseConnector\StructType\KeyField[]|null
     */
    public function getKeyField()
    {
        return $this->KeyField;
    }
    /**
     * Set KeyField value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\KeyField[] $keyField
     * @return \RaseConnector\StructType\KeyData
     */
    public function setKeyField(array $keyField = array())
    {
        foreach ($keyField as $keyDataKeyFieldItem) {
            // validation for constraint: itemType
            if (!$keyDataKeyFieldItem instanceof \RaseConnector\StructType\KeyField) {
                throw new \InvalidArgumentException(sprintf('The KeyField property can only contain items of \RaseConnector\StructType\KeyField, "%s" given', is_object($keyDataKeyFieldItem) ? get_class($keyDataKeyFieldItem) : gettype($keyDataKeyFieldItem)), __LINE__);
            }
        }
        $this->KeyField = $keyField;
        return $this;
    }
    /**
     * Add item to KeyField value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\KeyField $item
     * @return \RaseConnector\StructType\KeyData
     */
    public function addToKeyField(\RaseConnector\StructType\KeyField $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RaseConnector\StructType\KeyField) {
            throw new \InvalidArgumentException(sprintf('The KeyField property can only contain items of \RaseConnector\StructType\KeyField, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->KeyField[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RaseConnector\StructType\KeyData
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
