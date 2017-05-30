<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntityKey StructType
 * Meta informations extracted from the WSDL
 * - type: EntityKey
 * @subpackage Structs
 */
class EntityKey extends AbstractStructBase
{
    /**
     * The KeyData
     * @var \RaseConnector\StructType\KeyData
     */
    public $KeyData;
    /**
     * Constructor method for EntityKey
     * @uses EntityKey::setKeyData()
     * @param \RaseConnector\StructType\KeyData $keyData
     */
    public function __construct(\RaseConnector\StructType\KeyData $keyData = null)
    {
        $this
            ->setKeyData($keyData);
    }
    /**
     * Get KeyData value
     * @return \RaseConnector\StructType\KeyData|null
     */
    public function getKeyData()
    {
        return $this->KeyData;
    }
    /**
     * Set KeyData value
     * @param \RaseConnector\StructType\KeyData $keyData
     * @return \RaseConnector\StructType\EntityKey
     */
    public function setKeyData(\RaseConnector\StructType\KeyData $keyData = null)
    {
        $this->KeyData = $keyData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RaseConnector\StructType\EntityKey
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
