<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdExtType_TradeLineDlvTypeId EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Type levering:Leveringstype van de huidige orderregel.
 * @subpackage Enumerations
 */
class AxdExtType_TradeLineDlvTypeId
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'DropShip'
     * @return string 'DropShip'
     */
    const VALUE_DROP_SHIP = 'DropShip';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_DROP_SHIP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_DROP_SHIP,
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
