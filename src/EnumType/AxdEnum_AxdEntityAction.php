<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_AxdEntityAction EnumType
 * Meta informations extracted from the WSDL
 * - documentation: AxdEntityAction:AxdEntityAction
 * @subpackage Enumerations
 */
class AxdEnum_AxdEntityAction
{
    /**
     * Constant for value 'create'
     * @return string 'create'
     */
    const VALUE_CREATE = 'create';
    /**
     * Constant for value 'update'
     * @return string 'update'
     */
    const VALUE_UPDATE = 'update';
    /**
     * Constant for value 'replace'
     * @return string 'replace'
     */
    const VALUE_REPLACE = 'replace';
    /**
     * Constant for value 'delete'
     * @return string 'delete'
     */
    const VALUE_DELETE = 'delete';
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
     * @uses self::VALUE_CREATE
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_REPLACE
     * @uses self::VALUE_DELETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CREATE,
            self::VALUE_UPDATE,
            self::VALUE_REPLACE,
            self::VALUE_DELETE,
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
