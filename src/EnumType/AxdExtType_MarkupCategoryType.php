<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdExtType_MarkupCategoryType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Categorie:Categorie diverse toeslagen die geldt voor de regel
 * @subpackage Enumerations
 */
class AxdExtType_MarkupCategoryType
{
    /**
     * Constant for value 'Fixed'
     * @return string 'Fixed'
     */
    const VALUE_FIXED = 'Fixed';
    /**
     * Constant for value 'Pcs'
     * @return string 'Pcs'
     */
    const VALUE_PCS = 'Pcs';
    /**
     * Constant for value 'Percent'
     * @return string 'Percent'
     */
    const VALUE_PERCENT = 'Percent';
    /**
     * Constant for value 'InterCompanyPercent'
     * @return string 'InterCompanyPercent'
     */
    const VALUE_INTER_COMPANY_PERCENT = 'InterCompanyPercent';
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
     * @uses self::VALUE_FIXED
     * @uses self::VALUE_PCS
     * @uses self::VALUE_PERCENT
     * @uses self::VALUE_INTER_COMPANY_PERCENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FIXED,
            self::VALUE_PCS,
            self::VALUE_PERCENT,
            self::VALUE_INTER_COMPANY_PERCENT,
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
