<?php

namespace RaseConnector\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for AxdArray_AxdExtType_Dimension ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Business Unit:Business UnitLand:LandPersoon:Persoon
 * @subpackage Arrays
 */
class AxdArray_AxdExtType_Dimension extends AbstractStructArrayBase
{
    /**
     * The element
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 3
     * - maxLength: 10
     * - minLength: 0
     * @var string[]
     */
    public $element;
    /**
     * Constructor method for AxdArray_AxdExtType_Dimension
     * @uses AxdArray_AxdExtType_Dimension::setElement()
     * @param string[] $element
     */
    public function __construct(array $element = array())
    {
        $this
            ->setElement($element);
    }
    /**
     * Get element value
     * @return string[]
     */
    public function getElement()
    {
        return $this->element;
    }
    /**
     * Set element value
     * @throws \InvalidArgumentException
     * @param string[] $element
     * @return \RaseConnector\ArrayType\AxdArray_AxdExtType_Dimension
     */
    public function setElement(array $element = array())
    {
        // validation for constraint: maxLength
        if ((is_scalar($element) && strlen($element) > 10) || (is_array($element) && count($element) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($element) ? strlen($element) : count($element)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($element) && strlen($element) < 0) || (is_array($element) && count($element) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        foreach ($element as $axdArray_AxdExtType_DimensionElementItem) {
            // validation for constraint: itemType
            if (!is_string($axdArray_AxdExtType_DimensionElementItem)) {
                throw new \InvalidArgumentException(sprintf('The element property can only contain items of string, "%s" given', is_object($axdArray_AxdExtType_DimensionElementItem) ? get_class($axdArray_AxdExtType_DimensionElementItem) : gettype($axdArray_AxdExtType_DimensionElementItem)), __LINE__);
            }
        }
        $this->element = $element;
        return $this;
    }
    /**
     * Add item to element value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \RaseConnector\ArrayType\AxdArray_AxdExtType_Dimension
     */
    public function addToElement($item)
    {
        // validation for constraint: maxLength
        if ((is_scalar($item) && strlen($item) > 10) || (is_array($item) && count($item) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($item) ? strlen($item) : count($item)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($item) && strlen($item) < 0) || (is_array($item) && count($item) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The element property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->element[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string element
     */
    public function getAttributeName()
    {
        return 'element';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \RaseConnector\ArrayType\AxdArray_AxdExtType_Dimension
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
