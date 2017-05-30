<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdExtType_ListcodeId EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Lijstcode:Lijstcode voor gebruik met de ICL-lijst.
 * @subpackage Enumerations
 */
class AxdExtType_ListcodeId
{
    /**
     * Constant for value 'IncludeNot'
     * @return string 'IncludeNot'
     */
    const VALUE_INCLUDE_NOT = 'IncludeNot';
    /**
     * Constant for value 'EUTrade'
     * @return string 'EUTrade'
     */
    const VALUE_EUTRADE = 'EUTrade';
    /**
     * Constant for value 'ProductionOnToll'
     * @return string 'ProductionOnToll'
     */
    const VALUE_PRODUCTION_ON_TOLL = 'ProductionOnToll';
    /**
     * Constant for value 'TriangularEUTrade'
     * @return string 'TriangularEUTrade'
     */
    const VALUE_TRIANGULAR_EUTRADE = 'TriangularEUTrade';
    /**
     * Constant for value 'TriangularProductionOnToll'
     * @return string 'TriangularProductionOnToll'
     */
    const VALUE_TRIANGULAR_PRODUCTION_ON_TOLL = 'TriangularProductionOnToll';
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
     * @uses self::VALUE_INCLUDE_NOT
     * @uses self::VALUE_EUTRADE
     * @uses self::VALUE_PRODUCTION_ON_TOLL
     * @uses self::VALUE_TRIANGULAR_EUTRADE
     * @uses self::VALUE_TRIANGULAR_PRODUCTION_ON_TOLL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INCLUDE_NOT,
            self::VALUE_EUTRADE,
            self::VALUE_PRODUCTION_ON_TOLL,
            self::VALUE_TRIANGULAR_EUTRADE,
            self::VALUE_TRIANGULAR_PRODUCTION_ON_TOLL,
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
