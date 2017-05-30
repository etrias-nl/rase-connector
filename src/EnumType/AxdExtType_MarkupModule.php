<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdExtType_MarkupModule EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Module:Geef op aan welke module de groep diverse toeslagen is gekoppeld.
 * @subpackage Enumerations
 */
class AxdExtType_MarkupModule
{
    /**
     * Constant for value 'Invent'
     * @return string 'Invent'
     */
    const VALUE_INVENT = 'Invent';
    /**
     * Constant for value 'Cust'
     * @return string 'Cust'
     */
    const VALUE_CUST = 'Cust';
    /**
     * Constant for value 'Vend'
     * @return string 'Vend'
     */
    const VALUE_VEND = 'Vend';
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
     * @uses self::VALUE_INVENT
     * @uses self::VALUE_CUST
     * @uses self::VALUE_VEND
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INVENT,
            self::VALUE_CUST,
            self::VALUE_VEND,
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
