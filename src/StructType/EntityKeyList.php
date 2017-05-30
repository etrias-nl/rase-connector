<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntityKeyList StructType
 * Meta informations extracted from the WSDL
 * - type: EntityKeyList
 * @subpackage Structs
 */
class EntityKeyList extends AbstractStructBase
{
    /**
     * The EntityKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ek:EntityKey
     * @var \RaseConnector\StructType\EntityKey[]
     */
    public $EntityKey;
    /**
     * Constructor method for EntityKeyList
     * @uses EntityKeyList::setEntityKey()
     * @param \RaseConnector\StructType\EntityKey[] $entityKey
     */
    public function __construct(array $entityKey = array())
    {
        $this
            ->setEntityKey($entityKey);
    }
    /**
     * Get EntityKey value
     * @return \RaseConnector\StructType\EntityKey[]|null
     */
    public function getEntityKey()
    {
        return $this->EntityKey;
    }
    /**
     * Set EntityKey value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\EntityKey[] $entityKey
     * @return \RaseConnector\StructType\EntityKeyList
     */
    public function setEntityKey(array $entityKey = array())
    {
        foreach ($entityKey as $entityKeyListEntityKeyItem) {
            // validation for constraint: itemType
            if (!$entityKeyListEntityKeyItem instanceof \RaseConnector\StructType\EntityKey) {
                throw new \InvalidArgumentException(sprintf('The EntityKey property can only contain items of \RaseConnector\StructType\EntityKey, "%s" given', is_object($entityKeyListEntityKeyItem) ? get_class($entityKeyListEntityKeyItem) : gettype($entityKeyListEntityKeyItem)), __LINE__);
            }
        }
        $this->EntityKey = $entityKey;
        return $this;
    }
    /**
     * Add item to EntityKey value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\EntityKey $item
     * @return \RaseConnector\StructType\EntityKeyList
     */
    public function addToEntityKey(\RaseConnector\StructType\EntityKey $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RaseConnector\StructType\EntityKey) {
            throw new \InvalidArgumentException(sprintf('The EntityKey property can only contain items of \RaseConnector\StructType\EntityKey, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EntityKey[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RaseConnector\StructType\EntityKeyList
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
