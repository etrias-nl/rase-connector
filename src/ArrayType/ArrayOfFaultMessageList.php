<?php

namespace RaseConnector\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFaultMessageList ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFaultMessageList
 * @subpackage Arrays
 */
class ArrayOfFaultMessageList extends AbstractStructArrayBase
{
    /**
     * The FaultMessageList
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \rase\StructType\FaultMessageList[]
     */
    public $FaultMessageList;
    /**
     * Constructor method for ArrayOfFaultMessageList
     * @uses ArrayOfFaultMessageList::setFaultMessageList()
     * @param \rase\StructType\FaultMessageList[] $faultMessageList
     */
    public function __construct(array $faultMessageList = array())
    {
        $this
            ->setFaultMessageList($faultMessageList);
    }
    /**
     * Get FaultMessageList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \rase\StructType\FaultMessageList[]|null
     */
    public function getFaultMessageList()
    {
        return isset($this->FaultMessageList) ? $this->FaultMessageList : null;
    }
    /**
     * Set FaultMessageList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \rase\StructType\FaultMessageList[] $faultMessageList
     * @return \rase\ArrayType\ArrayOfFaultMessageList
     */
    public function setFaultMessageList(array $faultMessageList = array())
    {
        foreach ($faultMessageList as $arrayOfFaultMessageListFaultMessageListItem) {
            // validation for constraint: itemType
            if (!$arrayOfFaultMessageListFaultMessageListItem instanceof \rase\StructType\FaultMessageList) {
                throw new \InvalidArgumentException(sprintf('The FaultMessageList property can only contain items of \rase\StructType\FaultMessageList, "%s" given', is_object($arrayOfFaultMessageListFaultMessageListItem) ? get_class($arrayOfFaultMessageListFaultMessageListItem) : gettype($arrayOfFaultMessageListFaultMessageListItem)), __LINE__);
            }
        }
        if (is_null($faultMessageList) || (is_array($faultMessageList) && empty($faultMessageList))) {
            unset($this->FaultMessageList);
        } else {
            $this->FaultMessageList = $faultMessageList;
        }
        return $this;
    }
    /**
     * Add item to FaultMessageList value
     * @throws \InvalidArgumentException
     * @param \rase\StructType\FaultMessageList $item
     * @return \rase\ArrayType\ArrayOfFaultMessageList
     */
    public function addToFaultMessageList(\rase\StructType\FaultMessageList $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \rase\StructType\FaultMessageList) {
            throw new \InvalidArgumentException(sprintf('The FaultMessageList property can only contain items of \rase\StructType\FaultMessageList, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FaultMessageList[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \rase\StructType\FaultMessageList|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \rase\StructType\FaultMessageList|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \rase\StructType\FaultMessageList|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \rase\StructType\FaultMessageList|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \rase\StructType\FaultMessageList|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FaultMessageList
     */
    public function getAttributeName()
    {
        return 'FaultMessageList';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \rase\ArrayType\ArrayOfFaultMessageList
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
