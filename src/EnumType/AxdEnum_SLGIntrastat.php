<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_SLGIntrastat EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Intrastat:Intrastat
 * @subpackage Enumerations
 */
class AxdEnum_SLGIntrastat
{
    /**
     * Constant for value 'NotIncluded'
     * @return string 'NotIncluded'
     */
    const VALUE_NOT_INCLUDED = 'NotIncluded';
    /**
     * Constant for value 'EUTrade'
     * @return string 'EUTrade'
     */
    const VALUE_EUTRADE = 'EUTrade';
    /**
     * Constant for value 'Triangular'
     * @return string 'Triangular'
     */
    const VALUE_TRIANGULAR = 'Triangular';
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
     * @uses self::VALUE_NOT_INCLUDED
     * @uses self::VALUE_EUTRADE
     * @uses self::VALUE_TRIANGULAR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_INCLUDED,
            self::VALUE_EUTRADE,
            self::VALUE_TRIANGULAR,
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
