<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_ReturnStatusHeader EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Retourstatus:Retourstatus
 * @subpackage Enumerations
 */
class AxdEnum_ReturnStatusHeader
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Created'
     * @return string 'Created'
     */
    const VALUE_CREATED = 'Created';
    /**
     * Constant for value 'Open'
     * @return string 'Open'
     */
    const VALUE_OPEN = 'Open';
    /**
     * Constant for value 'Canceled'
     * @return string 'Canceled'
     */
    const VALUE_CANCELED = 'Canceled';
    /**
     * Constant for value 'Closed'
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
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
     * @uses self::VALUE_CREATED
     * @uses self::VALUE_OPEN
     * @uses self::VALUE_CANCELED
     * @uses self::VALUE_CLOSED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CREATED,
            self::VALUE_OPEN,
            self::VALUE_CANCELED,
            self::VALUE_CLOSED,
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
