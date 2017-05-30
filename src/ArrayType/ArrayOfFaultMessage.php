<?php

namespace RaseConnector\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFaultMessage ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFaultMessage
 * @subpackage Arrays
 */
class ArrayOfFaultMessage extends AbstractStructArrayBase
{
    /**
     * The FaultMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \rase\StructType\FaultMessage[]
     */
    public $FaultMessage;
    /**
     * Constructor method for ArrayOfFaultMessage
     * @uses ArrayOfFaultMessage::setFaultMessage()
     * @param \rase\StructType\FaultMessage[] $faultMessage
     */
    public function __construct(array $faultMessage = array())
    {
        $this
            ->setFaultMessage($faultMessage);
    }
    /**
     * Get FaultMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \rase\StructType\FaultMessage[]|null
     */
    public function getFaultMessage()
    {
        return isset($this->FaultMessage) ? $this->FaultMessage : null;
    }
    /**
     * Set FaultMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \rase\StructType\FaultMessage[] $faultMessage
     * @return \rase\ArrayType\ArrayOfFaultMessage
     */
    public function setFaultMessage(array $faultMessage = array())
    {
        foreach ($faultMessage as $arrayOfFaultMessageFaultMessageItem) {
            // validation for constraint: itemType
            if (!$arrayOfFaultMessageFaultMessageItem instanceof \rase\StructType\FaultMessage) {
                throw new \InvalidArgumentException(sprintf('The FaultMessage property can only contain items of \rase\StructType\FaultMessage, "%s" given', is_object($arrayOfFaultMessageFaultMessageItem) ? get_class($arrayOfFaultMessageFaultMessageItem) : gettype($arrayOfFaultMessageFaultMessageItem)), __LINE__);
            }
        }
        if (is_null($faultMessage) || (is_array($faultMessage) && empty($faultMessage))) {
            unset($this->FaultMessage);
        } else {
            $this->FaultMessage = $faultMessage;
        }
        return $this;
    }
    /**
     * Add item to FaultMessage value
     * @throws \InvalidArgumentException
     * @param \rase\StructType\FaultMessage $item
     * @return \rase\ArrayType\ArrayOfFaultMessage
     */
    public function addToFaultMessage(\rase\StructType\FaultMessage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \rase\StructType\FaultMessage) {
            throw new \InvalidArgumentException(sprintf('The FaultMessage property can only contain items of \rase\StructType\FaultMessage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FaultMessage[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \rase\StructType\FaultMessage|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \rase\StructType\FaultMessage|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \rase\StructType\FaultMessage|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \rase\StructType\FaultMessage|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \rase\StructType\FaultMessage|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FaultMessage
     */
    public function getAttributeName()
    {
        return 'FaultMessage';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \rase\ArrayType\ArrayOfFaultMessage
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
