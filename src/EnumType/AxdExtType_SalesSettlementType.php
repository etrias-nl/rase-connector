<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdExtType_SalesSettlementType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Vereffeningstype:Geef op of het boekstuk moet worden vereffend.
 * @subpackage Enumerations
 */
class AxdExtType_SalesSettlementType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'OpenTransact'
     * @return string 'OpenTransact'
     */
    const VALUE_OPEN_TRANSACT = 'OpenTransact';
    /**
     * Constant for value 'SelectedTransact'
     * @return string 'SelectedTransact'
     */
    const VALUE_SELECTED_TRANSACT = 'SelectedTransact';
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
     * @uses self::VALUE_OPEN_TRANSACT
     * @uses self::VALUE_SELECTED_TRANSACT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_OPEN_TRANSACT,
            self::VALUE_SELECTED_TRANSACT,
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
