<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for Operator EnumType
 * @subpackage Enumerations
 */
class Operator
{
    /**
     * Constant for value 'Equal'
     * @return string 'Equal'
     */
    const VALUE_EQUAL = 'Equal';
    /**
     * Constant for value 'NotEqual'
     * @return string 'NotEqual'
     */
    const VALUE_NOT_EQUAL = 'NotEqual';
    /**
     * Constant for value 'Greater'
     * @return string 'Greater'
     */
    const VALUE_GREATER = 'Greater';
    /**
     * Constant for value 'GreaterOrEqual'
     * @return string 'GreaterOrEqual'
     */
    const VALUE_GREATER_OR_EQUAL = 'GreaterOrEqual';
    /**
     * Constant for value 'Less'
     * @return string 'Less'
     */
    const VALUE_LESS = 'Less';
    /**
     * Constant for value 'LessOrEqual'
     * @return string 'LessOrEqual'
     */
    const VALUE_LESS_OR_EQUAL = 'LessOrEqual';
    /**
     * Constant for value 'Range'
     * @return string 'Range'
     */
    const VALUE_RANGE = 'Range';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_EQUAL
     * @uses self::VALUE_NOT_EQUAL
     * @uses self::VALUE_GREATER
     * @uses self::VALUE_GREATER_OR_EQUAL
     * @uses self::VALUE_LESS
     * @uses self::VALUE_LESS_OR_EQUAL
     * @uses self::VALUE_RANGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EQUAL,
            self::VALUE_NOT_EQUAL,
            self::VALUE_GREATER,
            self::VALUE_GREATER_OR_EQUAL,
            self::VALUE_LESS,
            self::VALUE_LESS_OR_EQUAL,
            self::VALUE_RANGE,
        );
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
