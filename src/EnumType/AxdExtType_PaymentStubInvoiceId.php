<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdExtType_PaymentStubInvoiceId EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Bijlage met gekoppelde betaling bij verkoopfactuur:Bijlage met gekoppelde betaling afdrukken voor verkoopfactuur?
 * @subpackage Enumerations
 */
class AxdExtType_PaymentStubInvoiceId
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'FIK'
     * @return string 'FIK'
     */
    const VALUE_FIK = 'FIK';
    /**
     * Constant for value 'BBS'
     * @return string 'BBS'
     */
    const VALUE_BBS = 'BBS';
    /**
     * Constant for value 'ESR_blue_PTT'
     * @return string 'ESR_blue_PTT'
     */
    const VALUE_ESR_BLUE_PTT = 'ESR_blue_PTT';
    /**
     * Constant for value 'ESR_red_bank'
     * @return string 'ESR_red_bank'
     */
    const VALUE_ESR_RED_BANK = 'ESR_red_bank';
    /**
     * Constant for value 'FIK762'
     * @return string 'FIK762'
     */
    const VALUE_FIK_762 = 'FIK762';
    /**
     * Constant for value 'ESR_orange'
     * @return string 'ESR_orange'
     */
    const VALUE_ESR_ORANGE = 'ESR_orange';
    /**
     * Constant for value 'BelSMS101'
     * @return string 'BelSMS101'
     */
    const VALUE_BEL_SMS_101 = 'BelSMS101';
    /**
     * Constant for value 'BelSMS102'
     * @return string 'BelSMS102'
     */
    const VALUE_BEL_SMS_102 = 'BelSMS102';
    /**
     * Constant for value 'Finnish'
     * @return string 'Finnish'
     */
    const VALUE_FINNISH = 'Finnish';
    /**
     * Constant for value 'FIK751'
     * @return string 'FIK751'
     */
    const VALUE_FIK_751 = 'FIK751';
    /**
     * Constant for value 'FIK752'
     * @return string 'FIK752'
     */
    const VALUE_FIK_752 = 'FIK752';
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
     * @uses self::VALUE_FIK
     * @uses self::VALUE_BBS
     * @uses self::VALUE_ESR_BLUE_PTT
     * @uses self::VALUE_ESR_RED_BANK
     * @uses self::VALUE_FIK_762
     * @uses self::VALUE_ESR_ORANGE
     * @uses self::VALUE_BEL_SMS_101
     * @uses self::VALUE_BEL_SMS_102
     * @uses self::VALUE_FINNISH
     * @uses self::VALUE_FIK_751
     * @uses self::VALUE_FIK_752
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_FIK,
            self::VALUE_BBS,
            self::VALUE_ESR_BLUE_PTT,
            self::VALUE_ESR_RED_BANK,
            self::VALUE_FIK_762,
            self::VALUE_ESR_ORANGE,
            self::VALUE_BEL_SMS_101,
            self::VALUE_BEL_SMS_102,
            self::VALUE_FINNISH,
            self::VALUE_FIK_751,
            self::VALUE_FIK_752,
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
