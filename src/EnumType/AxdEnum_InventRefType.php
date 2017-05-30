<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_InventRefType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Verwijzingstype:Verwijzingstype
 * @subpackage Enumerations
 */
class AxdEnum_InventRefType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Sales'
     * @return string 'Sales'
     */
    const VALUE_SALES = 'Sales';
    /**
     * Constant for value 'Purch'
     * @return string 'Purch'
     */
    const VALUE_PURCH = 'Purch';
    /**
     * Constant for value 'Production'
     * @return string 'Production'
     */
    const VALUE_PRODUCTION = 'Production';
    /**
     * Constant for value 'ProdLine'
     * @return string 'ProdLine'
     */
    const VALUE_PROD_LINE = 'ProdLine';
    /**
     * Constant for value 'InventJournal'
     * @return string 'InventJournal'
     */
    const VALUE_INVENT_JOURNAL = 'InventJournal';
    /**
     * Constant for value 'CRMQuotation'
     * @return string 'CRMQuotation'
     */
    const VALUE_CRMQUOTATION = 'CRMQuotation';
    /**
     * Constant for value 'InventTransfer'
     * @return string 'InventTransfer'
     */
    const VALUE_INVENT_TRANSFER = 'InventTransfer';
    /**
     * Constant for value 'FixedAsset'
     * @return string 'FixedAsset'
     */
    const VALUE_FIXED_ASSET = 'FixedAsset';
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
     * @uses self::VALUE_SALES
     * @uses self::VALUE_PURCH
     * @uses self::VALUE_PRODUCTION
     * @uses self::VALUE_PROD_LINE
     * @uses self::VALUE_INVENT_JOURNAL
     * @uses self::VALUE_CRMQUOTATION
     * @uses self::VALUE_INVENT_TRANSFER
     * @uses self::VALUE_FIXED_ASSET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SALES,
            self::VALUE_PURCH,
            self::VALUE_PRODUCTION,
            self::VALUE_PROD_LINE,
            self::VALUE_INVENT_JOURNAL,
            self::VALUE_CRMQUOTATION,
            self::VALUE_INVENT_TRANSFER,
            self::VALUE_FIXED_ASSET,
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
