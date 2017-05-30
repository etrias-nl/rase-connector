<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_ItemReservation EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Reservering:Reservering
 * @subpackage Enumerations
 */
class AxdEnum_ItemReservation
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Automatic'
     * @return string 'Automatic'
     */
    const VALUE_AUTOMATIC = 'Automatic';
    /**
     * Constant for value 'Explosion'
     * @return string 'Explosion'
     */
    const VALUE_EXPLOSION = 'Explosion';
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
     * @uses self::VALUE_AUTOMATIC
     * @uses self::VALUE_EXPLOSION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_AUTOMATIC,
            self::VALUE_EXPLOSION,
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
