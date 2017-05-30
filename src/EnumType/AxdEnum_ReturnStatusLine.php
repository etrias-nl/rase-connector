<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_ReturnStatusLine EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Retourstatus:Retourstatus
 * @subpackage Enumerations
 */
class AxdEnum_ReturnStatusLine
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Awaiting'
     * @return string 'Awaiting'
     */
    const VALUE_AWAITING = 'Awaiting';
    /**
     * Constant for value 'Registered'
     * @return string 'Registered'
     */
    const VALUE_REGISTERED = 'Registered';
    /**
     * Constant for value 'Quarantine'
     * @return string 'Quarantine'
     */
    const VALUE_QUARANTINE = 'Quarantine';
    /**
     * Constant for value 'Received'
     * @return string 'Received'
     */
    const VALUE_RECEIVED = 'Received';
    /**
     * Constant for value 'Invoiced'
     * @return string 'Invoiced'
     */
    const VALUE_INVOICED = 'Invoiced';
    /**
     * Constant for value 'Canceled'
     * @return string 'Canceled'
     */
    const VALUE_CANCELED = 'Canceled';
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
     * @uses self::VALUE_AWAITING
     * @uses self::VALUE_REGISTERED
     * @uses self::VALUE_QUARANTINE
     * @uses self::VALUE_RECEIVED
     * @uses self::VALUE_INVOICED
     * @uses self::VALUE_CANCELED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_AWAITING,
            self::VALUE_REGISTERED,
            self::VALUE_QUARANTINE,
            self::VALUE_RECEIVED,
            self::VALUE_INVOICED,
            self::VALUE_CANCELED,
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
