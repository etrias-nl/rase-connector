<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_DocuRestriction EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Beperking:Beperking
 * @subpackage Enumerations
 */
class AxdEnum_DocuRestriction
{
    /**
     * Constant for value 'Internal'
     * @return string 'Internal'
     */
    const VALUE_INTERNAL = 'Internal';
    /**
     * Constant for value 'External'
     * @return string 'External'
     */
    const VALUE_EXTERNAL = 'External';
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
     * @uses self::VALUE_INTERNAL
     * @uses self::VALUE_EXTERNAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INTERNAL,
            self::VALUE_EXTERNAL,
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
