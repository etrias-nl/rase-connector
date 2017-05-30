<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyField StructType
 * @subpackage Structs
 */
class KeyField extends AbstractStructBase
{
    /**
     * The Field
     * @var string
     */
    public $Field;
    /**
     * The Value
     * @var string
     */
    public $Value;
    /**
     * Constructor method for KeyField
     * @uses KeyField::setField()
     * @uses KeyField::setValue()
     * @param string $field
     * @param string $value
     */
    public function __construct($field = null, $value = null)
    {
        $this
            ->setField($field)
            ->setValue($value);
    }
    /**
     * Get Field value
     * @return string|null
     */
    public function getField()
    {
        return $this->Field;
    }
    /**
     * Set Field value
     * @param string $field
     * @return \RaseConnector\StructType\KeyField
     */
    public function setField($field = null)
    {
        // validation for constraint: string
        if (!is_null($field) && !is_string($field)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($field)), __LINE__);
        }
        $this->Field = $field;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \RaseConnector\StructType\KeyField
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RaseConnector\StructType\KeyField
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
