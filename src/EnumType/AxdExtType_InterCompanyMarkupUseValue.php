<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdExtType_InterCompanyMarkupUseValue EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Gebruikswaarde:Bedrag diverse toeslagen berekenen van bedrag diverse toeslagen intercompany.
 * @subpackage Enumerations
 */
class AxdExtType_InterCompanyMarkupUseValue
{
    /**
     * Constant for value 'No'
     * @return string 'No'
     */
    const VALUE_NO = 'No';
    /**
     * Constant for value 'Yes'
     * @return string 'Yes'
     */
    const VALUE_YES = 'Yes';
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
     * @uses self::VALUE_NO
     * @uses self::VALUE_YES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO,
            self::VALUE_YES,
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
