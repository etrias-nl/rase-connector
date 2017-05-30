<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdExtType_MarkupModuleCategory EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Categorie:Categorie in module (koptekst, regel)
 * @subpackage Enumerations
 */
class AxdExtType_MarkupModuleCategory
{
    /**
     * Constant for value 'Heading'
     * @return string 'Heading'
     */
    const VALUE_HEADING = 'Heading';
    /**
     * Constant for value 'Linie'
     * @return string 'Linie'
     */
    const VALUE_LINIE = 'Linie';
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
     * @uses self::VALUE_HEADING
     * @uses self::VALUE_LINIE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HEADING,
            self::VALUE_LINIE,
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
