<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_XMLDocPurpose EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Doel:Doel
 * @subpackage Enumerations
 */
class AxdEnum_XMLDocPurpose
{
    /**
     * Constant for value 'Original'
     * @return string 'Original'
     */
    const VALUE_ORIGINAL = 'Original';
    /**
     * Constant for value 'Duplicate'
     * @return string 'Duplicate'
     */
    const VALUE_DUPLICATE = 'Duplicate';
    /**
     * Constant for value 'Proforma'
     * @return string 'Proforma'
     */
    const VALUE_PROFORMA = 'Proforma';
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
     * @uses self::VALUE_ORIGINAL
     * @uses self::VALUE_DUPLICATE
     * @uses self::VALUE_PROFORMA
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ORIGINAL,
            self::VALUE_DUPLICATE,
            self::VALUE_PROFORMA,
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
