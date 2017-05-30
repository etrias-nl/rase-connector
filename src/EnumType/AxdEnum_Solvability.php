<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_Solvability EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Solvabiliteit:Solvabiliteit
 * @subpackage Enumerations
 */
class AxdEnum_Solvability
{
    /**
     * Constant for value 'Solvent'
     * @return string 'Solvent'
     */
    const VALUE_SOLVENT = 'Solvent';
    /**
     * Constant for value 'NotSolvent'
     * @return string 'NotSolvent'
     */
    const VALUE_NOT_SOLVENT = 'NotSolvent';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'NoPickDlvInvoice'
     * @return string 'NoPickDlvInvoice'
     */
    const VALUE_NO_PICK_DLV_INVOICE = 'NoPickDlvInvoice';
    /**
     * Constant for value 'AgreementAccounting'
     * @return string 'AgreementAccounting'
     */
    const VALUE_AGREEMENT_ACCOUNTING = 'AgreementAccounting';
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
     * @uses self::VALUE_SOLVENT
     * @uses self::VALUE_NOT_SOLVENT
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_NO_PICK_DLV_INVOICE
     * @uses self::VALUE_AGREEMENT_ACCOUNTING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SOLVENT,
            self::VALUE_NOT_SOLVENT,
            self::VALUE_CANCELLED,
            self::VALUE_NO_PICK_DLV_INVOICE,
            self::VALUE_AGREEMENT_ACCOUNTING,
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
