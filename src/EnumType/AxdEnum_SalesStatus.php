<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_SalesStatus EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Status:Status
 * @subpackage Enumerations
 */
class AxdEnum_SalesStatus
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Backorder'
     * @return string 'Backorder'
     */
    const VALUE_BACKORDER = 'Backorder';
    /**
     * Constant for value 'Delivered'
     * @return string 'Delivered'
     */
    const VALUE_DELIVERED = 'Delivered';
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
     * @uses self::VALUE_BACKORDER
     * @uses self::VALUE_DELIVERED
     * @uses self::VALUE_INVOICED
     * @uses self::VALUE_CANCELED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_BACKORDER,
            self::VALUE_DELIVERED,
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
