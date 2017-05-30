<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_boolean EnumType
 * Meta informations extracted from the WSDL
 * - documentation: :
 * @subpackage Enumerations
 */
class AxdEnum_boolean
{
    /**
     * Constant for value 'false'
     * @return string 'false'
     */
    const VALUE_FALSE = 'false';
    /**
     * Constant for value 'true'
     * @return string 'true'
     */
    const VALUE_TRUE = 'true';
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
     * @uses self::VALUE_FALSE
     * @uses self::VALUE_TRUE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FALSE,
            self::VALUE_TRUE,
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
