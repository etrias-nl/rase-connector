<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_SalesDeliveryDateControlType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Controle leveringsdatum:Controle leveringsdatum
 * @subpackage Enumerations
 */
class AxdEnum_SalesDeliveryDateControlType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'SalesLeadTime'
     * @return string 'SalesLeadTime'
     */
    const VALUE_SALES_LEAD_TIME = 'SalesLeadTime';
    /**
     * Constant for value 'ATP'
     * @return string 'ATP'
     */
    const VALUE_ATP = 'ATP';
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
     * @uses self::VALUE_SALES_LEAD_TIME
     * @uses self::VALUE_ATP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SALES_LEAD_TIME,
            self::VALUE_ATP,
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
