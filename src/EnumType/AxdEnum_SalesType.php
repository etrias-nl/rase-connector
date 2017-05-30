<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_SalesType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Ordertype:Ordertype
 * @subpackage Enumerations
 */
class AxdEnum_SalesType
{
    /**
     * Constant for value 'Journal'
     * @return string 'Journal'
     */
    const VALUE_JOURNAL = 'Journal';
    /**
     * Constant for value 'Del_Quotation'
     * @return string 'Del_Quotation'
     */
    const VALUE_DEL_QUOTATION = 'Del_Quotation';
    /**
     * Constant for value 'Subscription'
     * @return string 'Subscription'
     */
    const VALUE_SUBSCRIPTION = 'Subscription';
    /**
     * Constant for value 'Sales'
     * @return string 'Sales'
     */
    const VALUE_SALES = 'Sales';
    /**
     * Constant for value 'ReturnItem'
     * @return string 'ReturnItem'
     */
    const VALUE_RETURN_ITEM = 'ReturnItem';
    /**
     * Constant for value 'Blanket'
     * @return string 'Blanket'
     */
    const VALUE_BLANKET = 'Blanket';
    /**
     * Constant for value 'ItemReq'
     * @return string 'ItemReq'
     */
    const VALUE_ITEM_REQ = 'ItemReq';
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
     * @uses self::VALUE_JOURNAL
     * @uses self::VALUE_DEL_QUOTATION
     * @uses self::VALUE_SUBSCRIPTION
     * @uses self::VALUE_SALES
     * @uses self::VALUE_RETURN_ITEM
     * @uses self::VALUE_BLANKET
     * @uses self::VALUE_ITEM_REQ
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_JOURNAL,
            self::VALUE_DEL_QUOTATION,
            self::VALUE_SUBSCRIPTION,
            self::VALUE_SALES,
            self::VALUE_RETURN_ITEM,
            self::VALUE_BLANKET,
            self::VALUE_ITEM_REQ,
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
