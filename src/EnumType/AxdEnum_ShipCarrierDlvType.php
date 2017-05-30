<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_ShipCarrierDlvType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Service:Service
 * @subpackage Enumerations
 */
class AxdEnum_ShipCarrierDlvType
{
    /**
     * Constant for value 'Misc'
     * @return string 'Misc'
     */
    const VALUE_MISC = 'Misc';
    /**
     * Constant for value 'Ground'
     * @return string 'Ground'
     */
    const VALUE_GROUND = 'Ground';
    /**
     * Constant for value 'Air'
     * @return string 'Air'
     */
    const VALUE_AIR = 'Air';
    /**
     * Constant for value 'PickUp'
     * @return string 'PickUp'
     */
    const VALUE_PICK_UP = 'PickUp';
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
     * @uses self::VALUE_MISC
     * @uses self::VALUE_GROUND
     * @uses self::VALUE_AIR
     * @uses self::VALUE_PICK_UP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MISC,
            self::VALUE_GROUND,
            self::VALUE_AIR,
            self::VALUE_PICK_UP,
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
