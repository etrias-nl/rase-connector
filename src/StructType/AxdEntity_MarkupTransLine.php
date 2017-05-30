<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AxdEntity_MarkupTransLine StructType
 * @subpackage Structs
 */
class AxdEntity_MarkupTransLine extends AbstractStructBase
{
    /**
     * The MarkupCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - union: AxdExtType_MarkupCode | AxdType_ExtCodeValue
     * @var string
     */
    public $MarkupCode;
    /**
     * The class
     * Meta informations extracted from the WSDL
     * - fixed: entity
     * - use: required
     * @var string
     */
    public $class;
    /**
     * The CalculatedAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Bedrag in valuta:Bedrag in valuta.
     * - fractionDigits: 2
     * @var float
     */
    public $CalculatedAmount;
    /**
     * The ChargeIndicatorEinvoice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ChargeIndicatorEinvoice;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdExtType_CurrencyCode | AxdType_ExtCodeValue
     * @var string
     */
    public $CurrencyCode;
    /**
     * The DocumentStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DocumentStatus;
    /**
     * The InterCompanyInvoiceId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Intercompany-factuurnummer:Nummer van de factuur die is ontvangen van het intercompany-bedrijf
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $InterCompanyInvoiceId;
    /**
     * The InterCompanyMarkupUseValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InterCompanyMarkupUseValue;
    /**
     * The InterCompanyMarkupValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Waarde:Berekende waarde van de intercompany-verkooporder
     * - fractionDigits: 2
     * @var float
     */
    public $InterCompanyMarkupValue;
    /**
     * The InterCompanyRefRecId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Verwijzing:Verwijzingsveld in een andere tabel.
     * - maxInclusive: 9223372036854775807
     * - minInclusive: -9223372036854775808
     * @var int
     */
    public $InterCompanyRefRecId;
    /**
     * The Keep
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Keep;
    /**
     * The LineNum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Regelnummer:Identificatie van regel.
     * - fractionDigits: 10
     * @var float
     */
    public $LineNum;
    /**
     * The MarkupCategory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MarkupCategory;
    /**
     * The ModuleCategory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ModuleCategory;
    /**
     * The ModuleType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ModuleType;
    /**
     * The OrigRecId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Record-ID:Unieke ID voor de record in de database
     * - maxInclusive: 9223372036854775807
     * - minInclusive: -9223372036854775808
     * @var int
     */
    public $OrigRecId;
    /**
     * The OrigTableId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Tabel:ID voor de tabel
     * - maxInclusive: 2147483647
     * - minInclusive: -2147483648
     * @var int
     */
    public $OrigTableId;
    /**
     * The Posted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Bedrag in valuta:Bedrag in valuta.
     * - fractionDigits: 2
     * @var float
     */
    public $Posted;
    /**
     * The RecId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Record-ID:Unieke ID voor de record in de database
     * - maxInclusive: 9223372036854775807
     * - minInclusive: -9223372036854775808
     * @var int
     */
    public $RecId;
    /**
     * The RecVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Recordversie:Versie van het record in de database
     * - maxInclusive: 2147483647
     * - minInclusive: -2147483648
     * @var int
     */
    public $RecVersion;
    /**
     * The TaxAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Btw-bedrag:Berekend btw-bedrag in de btw-vereffeningsvaluta
     * - fractionDigits: 2
     * @var float
     */
    public $TaxAmount;
    /**
     * The TaxAutogenerated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TaxAutogenerated;
    /**
     * The TaxGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Btw-groep:Groep van btw-codes die voor inkoop en verkoop kunnen worden berekend.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $TaxGroup;
    /**
     * The TaxItemGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Btw-groep voor artikel:Groep van btw-codes die voor een artikel kunnen worden berekend.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $TaxItemGroup;
    /**
     * The TaxWriteCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Code afdrukken:Op het boekstuk afgedrukte code.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $TaxWriteCode;
    /**
     * The TransDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Datum:Transactiedatum.
     * @var string
     */
    public $TransDate;
    /**
     * The TransRecId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Record-ID:Unieke ID voor de record in de database
     * - maxInclusive: 9223372036854775807
     * - minInclusive: -9223372036854775808
     * @var int
     */
    public $TransRecId;
    /**
     * The TransTableId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Tabel:ID voor de tabel
     * - maxInclusive: 2147483647
     * - minInclusive: -2147483648
     * @var int
     */
    public $TransTableId;
    /**
     * The Txt
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Transactietekst:Tekst die de transactie omschrijft.
     * - maxLength: 60
     * - minLength: 0
     * @var string
     */
    public $Txt;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Waarde van diverse toeslagen:Waarde gekoppeld aan de categorie van diverse toeslagen
     * - fractionDigits: 2
     * @var float
     */
    public $Value;
    /**
     * The Voucher
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Boekstuk:Boekstuknummer in grootboek.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $Voucher;
    /**
     * The action
     * @var string
     */
    public $action;
    /**
     * Constructor method for AxdEntity_MarkupTransLine
     * @uses AxdEntity_MarkupTransLine::setMarkupCode()
     * @uses AxdEntity_MarkupTransLine::setClass()
     * @uses AxdEntity_MarkupTransLine::setCalculatedAmount()
     * @uses AxdEntity_MarkupTransLine::setChargeIndicatorEinvoice()
     * @uses AxdEntity_MarkupTransLine::setCurrencyCode()
     * @uses AxdEntity_MarkupTransLine::setDocumentStatus()
     * @uses AxdEntity_MarkupTransLine::setInterCompanyInvoiceId()
     * @uses AxdEntity_MarkupTransLine::setInterCompanyMarkupUseValue()
     * @uses AxdEntity_MarkupTransLine::setInterCompanyMarkupValue()
     * @uses AxdEntity_MarkupTransLine::setInterCompanyRefRecId()
     * @uses AxdEntity_MarkupTransLine::setKeep()
     * @uses AxdEntity_MarkupTransLine::setLineNum()
     * @uses AxdEntity_MarkupTransLine::setMarkupCategory()
     * @uses AxdEntity_MarkupTransLine::setModuleCategory()
     * @uses AxdEntity_MarkupTransLine::setModuleType()
     * @uses AxdEntity_MarkupTransLine::setOrigRecId()
     * @uses AxdEntity_MarkupTransLine::setOrigTableId()
     * @uses AxdEntity_MarkupTransLine::setPosted()
     * @uses AxdEntity_MarkupTransLine::setRecId()
     * @uses AxdEntity_MarkupTransLine::setRecVersion()
     * @uses AxdEntity_MarkupTransLine::setTaxAmount()
     * @uses AxdEntity_MarkupTransLine::setTaxAutogenerated()
     * @uses AxdEntity_MarkupTransLine::setTaxGroup()
     * @uses AxdEntity_MarkupTransLine::setTaxItemGroup()
     * @uses AxdEntity_MarkupTransLine::setTaxWriteCode()
     * @uses AxdEntity_MarkupTransLine::setTransDate()
     * @uses AxdEntity_MarkupTransLine::setTransRecId()
     * @uses AxdEntity_MarkupTransLine::setTransTableId()
     * @uses AxdEntity_MarkupTransLine::setTxt()
     * @uses AxdEntity_MarkupTransLine::setValue()
     * @uses AxdEntity_MarkupTransLine::setVoucher()
     * @uses AxdEntity_MarkupTransLine::setAction()
     * @param string $markupCode
     * @param string $class
     * @param float $calculatedAmount
     * @param string $chargeIndicatorEinvoice
     * @param string $currencyCode
     * @param string $documentStatus
     * @param string $interCompanyInvoiceId
     * @param string $interCompanyMarkupUseValue
     * @param float $interCompanyMarkupValue
     * @param int $interCompanyRefRecId
     * @param string $keep
     * @param float $lineNum
     * @param string $markupCategory
     * @param string $moduleCategory
     * @param string $moduleType
     * @param int $origRecId
     * @param int $origTableId
     * @param float $posted
     * @param int $recId
     * @param int $recVersion
     * @param float $taxAmount
     * @param string $taxAutogenerated
     * @param string $taxGroup
     * @param string $taxItemGroup
     * @param string $taxWriteCode
     * @param string $transDate
     * @param int $transRecId
     * @param int $transTableId
     * @param string $txt
     * @param float $value
     * @param string $voucher
     * @param string $action
     */
    public function __construct($markupCode = null, $class = null, $calculatedAmount = null, $chargeIndicatorEinvoice = null, $currencyCode = null, $documentStatus = null, $interCompanyInvoiceId = null, $interCompanyMarkupUseValue = null, $interCompanyMarkupValue = null, $interCompanyRefRecId = null, $keep = null, $lineNum = null, $markupCategory = null, $moduleCategory = null, $moduleType = null, $origRecId = null, $origTableId = null, $posted = null, $recId = null, $recVersion = null, $taxAmount = null, $taxAutogenerated = null, $taxGroup = null, $taxItemGroup = null, $taxWriteCode = null, $transDate = null, $transRecId = null, $transTableId = null, $txt = null, $value = null, $voucher = null, $action = null)
    {
        $this
            ->setMarkupCode($markupCode)
            ->setClass($class)
            ->setCalculatedAmount($calculatedAmount)
            ->setChargeIndicatorEinvoice($chargeIndicatorEinvoice)
            ->setCurrencyCode($currencyCode)
            ->setDocumentStatus($documentStatus)
            ->setInterCompanyInvoiceId($interCompanyInvoiceId)
            ->setInterCompanyMarkupUseValue($interCompanyMarkupUseValue)
            ->setInterCompanyMarkupValue($interCompanyMarkupValue)
            ->setInterCompanyRefRecId($interCompanyRefRecId)
            ->setKeep($keep)
            ->setLineNum($lineNum)
            ->setMarkupCategory($markupCategory)
            ->setModuleCategory($moduleCategory)
            ->setModuleType($moduleType)
            ->setOrigRecId($origRecId)
            ->setOrigTableId($origTableId)
            ->setPosted($posted)
            ->setRecId($recId)
            ->setRecVersion($recVersion)
            ->setTaxAmount($taxAmount)
            ->setTaxAutogenerated($taxAutogenerated)
            ->setTaxGroup($taxGroup)
            ->setTaxItemGroup($taxItemGroup)
            ->setTaxWriteCode($taxWriteCode)
            ->setTransDate($transDate)
            ->setTransRecId($transRecId)
            ->setTransTableId($transTableId)
            ->setTxt($txt)
            ->setValue($value)
            ->setVoucher($voucher)
            ->setAction($action);
    }
    /**
     * Get MarkupCode value
     * @return string
     */
    public function getMarkupCode()
    {
        return $this->MarkupCode;
    }
    /**
     * Set MarkupCode value
     * @param string $markupCode
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setMarkupCode($markupCode = null)
    {
        // validation for constraint: string
        if (!is_null($markupCode) && !is_string($markupCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($markupCode)), __LINE__);
        }
        $this->MarkupCode = $markupCode;
        return $this;
    }
    /**
     * Get class value
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }
    /**
     * Set class value
     * @param string $class
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setClass($class = null)
    {
        // validation for constraint: string
        if (!is_null($class) && !is_string($class)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($class)), __LINE__);
        }
        $this->class = $class;
        return $this;
    }
    /**
     * Get CalculatedAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getCalculatedAmount()
    {
        return isset($this->CalculatedAmount) ? $this->CalculatedAmount : null;
    }
    /**
     * Set CalculatedAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $calculatedAmount
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setCalculatedAmount($calculatedAmount = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($calculatedAmount) && strlen(substr($calculatedAmount, strpos($calculatedAmount, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($calculatedAmount, strpos($calculatedAmount, '.')))), __LINE__);
        }
        if (is_null($calculatedAmount) || (is_array($calculatedAmount) && empty($calculatedAmount))) {
            unset($this->CalculatedAmount);
        } else {
            $this->CalculatedAmount = $calculatedAmount;
        }
        return $this;
    }
    /**
     * Get ChargeIndicatorEinvoice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getChargeIndicatorEinvoice()
    {
        return isset($this->ChargeIndicatorEinvoice) ? $this->ChargeIndicatorEinvoice : null;
    }
    /**
     * Set ChargeIndicatorEinvoice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $chargeIndicatorEinvoice
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setChargeIndicatorEinvoice($chargeIndicatorEinvoice = null)
    {
        // validation for constraint: string
        if (!is_null($chargeIndicatorEinvoice) && !is_string($chargeIndicatorEinvoice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeIndicatorEinvoice)), __LINE__);
        }
        if (is_null($chargeIndicatorEinvoice) || (is_array($chargeIndicatorEinvoice) && empty($chargeIndicatorEinvoice))) {
            unset($this->ChargeIndicatorEinvoice);
        } else {
            $this->ChargeIndicatorEinvoice = $chargeIndicatorEinvoice;
        }
        return $this;
    }
    /**
     * Get CurrencyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return isset($this->CurrencyCode) ? $this->CurrencyCode : null;
    }
    /**
     * Set CurrencyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currencyCode
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        if (is_null($currencyCode) || (is_array($currencyCode) && empty($currencyCode))) {
            unset($this->CurrencyCode);
        } else {
            $this->CurrencyCode = $currencyCode;
        }
        return $this;
    }
    /**
     * Get DocumentStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentStatus()
    {
        return isset($this->DocumentStatus) ? $this->DocumentStatus : null;
    }
    /**
     * Set DocumentStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_DocumentStatus::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_DocumentStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentStatus
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setDocumentStatus($documentStatus = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_DocumentStatus::valueIsValid($documentStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentStatus, implode(', ', \RaseConnector\EnumType\AxdEnum_DocumentStatus::getValidValues())), __LINE__);
        }
        if (is_null($documentStatus) || (is_array($documentStatus) && empty($documentStatus))) {
            unset($this->DocumentStatus);
        } else {
            $this->DocumentStatus = $documentStatus;
        }
        return $this;
    }
    /**
     * Get InterCompanyInvoiceId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInterCompanyInvoiceId()
    {
        return isset($this->InterCompanyInvoiceId) ? $this->InterCompanyInvoiceId : null;
    }
    /**
     * Set InterCompanyInvoiceId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $interCompanyInvoiceId
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setInterCompanyInvoiceId($interCompanyInvoiceId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($interCompanyInvoiceId) && strlen($interCompanyInvoiceId) > 20) || (is_array($interCompanyInvoiceId) && count($interCompanyInvoiceId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($interCompanyInvoiceId) ? strlen($interCompanyInvoiceId) : count($interCompanyInvoiceId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($interCompanyInvoiceId) && strlen($interCompanyInvoiceId) < 0) || (is_array($interCompanyInvoiceId) && count($interCompanyInvoiceId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($interCompanyInvoiceId) && !is_string($interCompanyInvoiceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($interCompanyInvoiceId)), __LINE__);
        }
        if (is_null($interCompanyInvoiceId) || (is_array($interCompanyInvoiceId) && empty($interCompanyInvoiceId))) {
            unset($this->InterCompanyInvoiceId);
        } else {
            $this->InterCompanyInvoiceId = $interCompanyInvoiceId;
        }
        return $this;
    }
    /**
     * Get InterCompanyMarkupUseValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInterCompanyMarkupUseValue()
    {
        return isset($this->InterCompanyMarkupUseValue) ? $this->InterCompanyMarkupUseValue : null;
    }
    /**
     * Set InterCompanyMarkupUseValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_InterCompanyMarkupUseValue::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_InterCompanyMarkupUseValue::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $interCompanyMarkupUseValue
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setInterCompanyMarkupUseValue($interCompanyMarkupUseValue = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_InterCompanyMarkupUseValue::valueIsValid($interCompanyMarkupUseValue)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $interCompanyMarkupUseValue, implode(', ', \RaseConnector\EnumType\AxdExtType_InterCompanyMarkupUseValue::getValidValues())), __LINE__);
        }
        if (is_null($interCompanyMarkupUseValue) || (is_array($interCompanyMarkupUseValue) && empty($interCompanyMarkupUseValue))) {
            unset($this->InterCompanyMarkupUseValue);
        } else {
            $this->InterCompanyMarkupUseValue = $interCompanyMarkupUseValue;
        }
        return $this;
    }
    /**
     * Get InterCompanyMarkupValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getInterCompanyMarkupValue()
    {
        return isset($this->InterCompanyMarkupValue) ? $this->InterCompanyMarkupValue : null;
    }
    /**
     * Set InterCompanyMarkupValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $interCompanyMarkupValue
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setInterCompanyMarkupValue($interCompanyMarkupValue = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($interCompanyMarkupValue) && strlen(substr($interCompanyMarkupValue, strpos($interCompanyMarkupValue, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($interCompanyMarkupValue, strpos($interCompanyMarkupValue, '.')))), __LINE__);
        }
        if (is_null($interCompanyMarkupValue) || (is_array($interCompanyMarkupValue) && empty($interCompanyMarkupValue))) {
            unset($this->InterCompanyMarkupValue);
        } else {
            $this->InterCompanyMarkupValue = $interCompanyMarkupValue;
        }
        return $this;
    }
    /**
     * Get InterCompanyRefRecId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getInterCompanyRefRecId()
    {
        return isset($this->InterCompanyRefRecId) ? $this->InterCompanyRefRecId : null;
    }
    /**
     * Set InterCompanyRefRecId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $interCompanyRefRecId
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setInterCompanyRefRecId($interCompanyRefRecId = null)
    {
        // validation for constraint: int
        if (!is_null($interCompanyRefRecId) && !is_numeric($interCompanyRefRecId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($interCompanyRefRecId)), __LINE__);
        }
        if (is_null($interCompanyRefRecId) || (is_array($interCompanyRefRecId) && empty($interCompanyRefRecId))) {
            unset($this->InterCompanyRefRecId);
        } else {
            $this->InterCompanyRefRecId = $interCompanyRefRecId;
        }
        return $this;
    }
    /**
     * Get Keep value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKeep()
    {
        return isset($this->Keep) ? $this->Keep : null;
    }
    /**
     * Set Keep value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_MarkupKeep::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_MarkupKeep::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $keep
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setKeep($keep = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_MarkupKeep::valueIsValid($keep)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $keep, implode(', ', \RaseConnector\EnumType\AxdExtType_MarkupKeep::getValidValues())), __LINE__);
        }
        if (is_null($keep) || (is_array($keep) && empty($keep))) {
            unset($this->Keep);
        } else {
            $this->Keep = $keep;
        }
        return $this;
    }
    /**
     * Get LineNum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getLineNum()
    {
        return isset($this->LineNum) ? $this->LineNum : null;
    }
    /**
     * Set LineNum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $lineNum
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setLineNum($lineNum = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($lineNum) && strlen(substr($lineNum, strpos($lineNum, '.'))) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 10 fraction digits, "%d" given', strlen(substr($lineNum, strpos($lineNum, '.')))), __LINE__);
        }
        if (is_null($lineNum) || (is_array($lineNum) && empty($lineNum))) {
            unset($this->LineNum);
        } else {
            $this->LineNum = $lineNum;
        }
        return $this;
    }
    /**
     * Get MarkupCategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMarkupCategory()
    {
        return isset($this->MarkupCategory) ? $this->MarkupCategory : null;
    }
    /**
     * Set MarkupCategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_MarkupCategoryType::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_MarkupCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $markupCategory
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setMarkupCategory($markupCategory = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_MarkupCategoryType::valueIsValid($markupCategory)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $markupCategory, implode(', ', \RaseConnector\EnumType\AxdExtType_MarkupCategoryType::getValidValues())), __LINE__);
        }
        if (is_null($markupCategory) || (is_array($markupCategory) && empty($markupCategory))) {
            unset($this->MarkupCategory);
        } else {
            $this->MarkupCategory = $markupCategory;
        }
        return $this;
    }
    /**
     * Get ModuleCategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModuleCategory()
    {
        return isset($this->ModuleCategory) ? $this->ModuleCategory : null;
    }
    /**
     * Set ModuleCategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_MarkupModuleCategory::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_MarkupModuleCategory::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $moduleCategory
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setModuleCategory($moduleCategory = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_MarkupModuleCategory::valueIsValid($moduleCategory)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $moduleCategory, implode(', ', \RaseConnector\EnumType\AxdExtType_MarkupModuleCategory::getValidValues())), __LINE__);
        }
        if (is_null($moduleCategory) || (is_array($moduleCategory) && empty($moduleCategory))) {
            unset($this->ModuleCategory);
        } else {
            $this->ModuleCategory = $moduleCategory;
        }
        return $this;
    }
    /**
     * Get ModuleType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModuleType()
    {
        return isset($this->ModuleType) ? $this->ModuleType : null;
    }
    /**
     * Set ModuleType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_MarkupModule::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_MarkupModule::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $moduleType
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setModuleType($moduleType = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_MarkupModule::valueIsValid($moduleType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $moduleType, implode(', ', \RaseConnector\EnumType\AxdExtType_MarkupModule::getValidValues())), __LINE__);
        }
        if (is_null($moduleType) || (is_array($moduleType) && empty($moduleType))) {
            unset($this->ModuleType);
        } else {
            $this->ModuleType = $moduleType;
        }
        return $this;
    }
    /**
     * Get OrigRecId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOrigRecId()
    {
        return isset($this->OrigRecId) ? $this->OrigRecId : null;
    }
    /**
     * Set OrigRecId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $origRecId
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setOrigRecId($origRecId = null)
    {
        // validation for constraint: int
        if (!is_null($origRecId) && !is_numeric($origRecId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($origRecId)), __LINE__);
        }
        if (is_null($origRecId) || (is_array($origRecId) && empty($origRecId))) {
            unset($this->OrigRecId);
        } else {
            $this->OrigRecId = $origRecId;
        }
        return $this;
    }
    /**
     * Get OrigTableId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOrigTableId()
    {
        return isset($this->OrigTableId) ? $this->OrigTableId : null;
    }
    /**
     * Set OrigTableId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $origTableId
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setOrigTableId($origTableId = null)
    {
        // validation for constraint: int
        if (!is_null($origTableId) && !is_numeric($origTableId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($origTableId)), __LINE__);
        }
        if (is_null($origTableId) || (is_array($origTableId) && empty($origTableId))) {
            unset($this->OrigTableId);
        } else {
            $this->OrigTableId = $origTableId;
        }
        return $this;
    }
    /**
     * Get Posted value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPosted()
    {
        return isset($this->Posted) ? $this->Posted : null;
    }
    /**
     * Set Posted value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $posted
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setPosted($posted = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($posted) && strlen(substr($posted, strpos($posted, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($posted, strpos($posted, '.')))), __LINE__);
        }
        if (is_null($posted) || (is_array($posted) && empty($posted))) {
            unset($this->Posted);
        } else {
            $this->Posted = $posted;
        }
        return $this;
    }
    /**
     * Get RecId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getRecId()
    {
        return isset($this->RecId) ? $this->RecId : null;
    }
    /**
     * Set RecId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $recId
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setRecId($recId = null)
    {
        // validation for constraint: int
        if (!is_null($recId) && !is_numeric($recId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($recId)), __LINE__);
        }
        if (is_null($recId) || (is_array($recId) && empty($recId))) {
            unset($this->RecId);
        } else {
            $this->RecId = $recId;
        }
        return $this;
    }
    /**
     * Get RecVersion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getRecVersion()
    {
        return isset($this->RecVersion) ? $this->RecVersion : null;
    }
    /**
     * Set RecVersion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $recVersion
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setRecVersion($recVersion = null)
    {
        // validation for constraint: int
        if (!is_null($recVersion) && !is_numeric($recVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($recVersion)), __LINE__);
        }
        if (is_null($recVersion) || (is_array($recVersion) && empty($recVersion))) {
            unset($this->RecVersion);
        } else {
            $this->RecVersion = $recVersion;
        }
        return $this;
    }
    /**
     * Get TaxAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getTaxAmount()
    {
        return isset($this->TaxAmount) ? $this->TaxAmount : null;
    }
    /**
     * Set TaxAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $taxAmount
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setTaxAmount($taxAmount = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($taxAmount) && strlen(substr($taxAmount, strpos($taxAmount, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($taxAmount, strpos($taxAmount, '.')))), __LINE__);
        }
        if (is_null($taxAmount) || (is_array($taxAmount) && empty($taxAmount))) {
            unset($this->TaxAmount);
        } else {
            $this->TaxAmount = $taxAmount;
        }
        return $this;
    }
    /**
     * Get TaxAutogenerated value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTaxAutogenerated()
    {
        return isset($this->TaxAutogenerated) ? $this->TaxAutogenerated : null;
    }
    /**
     * Set TaxAutogenerated value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_TaxAutoGenerated::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_TaxAutoGenerated::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $taxAutogenerated
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setTaxAutogenerated($taxAutogenerated = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_TaxAutoGenerated::valueIsValid($taxAutogenerated)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $taxAutogenerated, implode(', ', \RaseConnector\EnumType\AxdExtType_TaxAutoGenerated::getValidValues())), __LINE__);
        }
        if (is_null($taxAutogenerated) || (is_array($taxAutogenerated) && empty($taxAutogenerated))) {
            unset($this->TaxAutogenerated);
        } else {
            $this->TaxAutogenerated = $taxAutogenerated;
        }
        return $this;
    }
    /**
     * Get TaxGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTaxGroup()
    {
        return isset($this->TaxGroup) ? $this->TaxGroup : null;
    }
    /**
     * Set TaxGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $taxGroup
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setTaxGroup($taxGroup = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($taxGroup) && strlen($taxGroup) > 10) || (is_array($taxGroup) && count($taxGroup) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($taxGroup) ? strlen($taxGroup) : count($taxGroup)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($taxGroup) && strlen($taxGroup) < 0) || (is_array($taxGroup) && count($taxGroup) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($taxGroup) && !is_string($taxGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxGroup)), __LINE__);
        }
        if (is_null($taxGroup) || (is_array($taxGroup) && empty($taxGroup))) {
            unset($this->TaxGroup);
        } else {
            $this->TaxGroup = $taxGroup;
        }
        return $this;
    }
    /**
     * Get TaxItemGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTaxItemGroup()
    {
        return isset($this->TaxItemGroup) ? $this->TaxItemGroup : null;
    }
    /**
     * Set TaxItemGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $taxItemGroup
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setTaxItemGroup($taxItemGroup = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($taxItemGroup) && strlen($taxItemGroup) > 10) || (is_array($taxItemGroup) && count($taxItemGroup) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($taxItemGroup) ? strlen($taxItemGroup) : count($taxItemGroup)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($taxItemGroup) && strlen($taxItemGroup) < 0) || (is_array($taxItemGroup) && count($taxItemGroup) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($taxItemGroup) && !is_string($taxItemGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxItemGroup)), __LINE__);
        }
        if (is_null($taxItemGroup) || (is_array($taxItemGroup) && empty($taxItemGroup))) {
            unset($this->TaxItemGroup);
        } else {
            $this->TaxItemGroup = $taxItemGroup;
        }
        return $this;
    }
    /**
     * Get TaxWriteCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTaxWriteCode()
    {
        return isset($this->TaxWriteCode) ? $this->TaxWriteCode : null;
    }
    /**
     * Set TaxWriteCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $taxWriteCode
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setTaxWriteCode($taxWriteCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($taxWriteCode) && strlen($taxWriteCode) > 10) || (is_array($taxWriteCode) && count($taxWriteCode) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($taxWriteCode) ? strlen($taxWriteCode) : count($taxWriteCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($taxWriteCode) && strlen($taxWriteCode) < 0) || (is_array($taxWriteCode) && count($taxWriteCode) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($taxWriteCode) && !is_string($taxWriteCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxWriteCode)), __LINE__);
        }
        if (is_null($taxWriteCode) || (is_array($taxWriteCode) && empty($taxWriteCode))) {
            unset($this->TaxWriteCode);
        } else {
            $this->TaxWriteCode = $taxWriteCode;
        }
        return $this;
    }
    /**
     * Get TransDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransDate()
    {
        return isset($this->TransDate) ? $this->TransDate : null;
    }
    /**
     * Set TransDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transDate
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setTransDate($transDate = null)
    {
        // validation for constraint: string
        if (!is_null($transDate) && !is_string($transDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transDate)), __LINE__);
        }
        if (is_null($transDate) || (is_array($transDate) && empty($transDate))) {
            unset($this->TransDate);
        } else {
            $this->TransDate = $transDate;
        }
        return $this;
    }
    /**
     * Get TransRecId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTransRecId()
    {
        return isset($this->TransRecId) ? $this->TransRecId : null;
    }
    /**
     * Set TransRecId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $transRecId
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setTransRecId($transRecId = null)
    {
        // validation for constraint: int
        if (!is_null($transRecId) && !is_numeric($transRecId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($transRecId)), __LINE__);
        }
        if (is_null($transRecId) || (is_array($transRecId) && empty($transRecId))) {
            unset($this->TransRecId);
        } else {
            $this->TransRecId = $transRecId;
        }
        return $this;
    }
    /**
     * Get TransTableId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTransTableId()
    {
        return isset($this->TransTableId) ? $this->TransTableId : null;
    }
    /**
     * Set TransTableId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $transTableId
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setTransTableId($transTableId = null)
    {
        // validation for constraint: int
        if (!is_null($transTableId) && !is_numeric($transTableId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($transTableId)), __LINE__);
        }
        if (is_null($transTableId) || (is_array($transTableId) && empty($transTableId))) {
            unset($this->TransTableId);
        } else {
            $this->TransTableId = $transTableId;
        }
        return $this;
    }
    /**
     * Get Txt value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTxt()
    {
        return isset($this->Txt) ? $this->Txt : null;
    }
    /**
     * Set Txt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $txt
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setTxt($txt = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($txt) && strlen($txt) > 60) || (is_array($txt) && count($txt) > 60)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 60 element(s) or a scalar of 60 character(s) at most, "%d" length given', is_scalar($txt) ? strlen($txt) : count($txt)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($txt) && strlen($txt) < 0) || (is_array($txt) && count($txt) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($txt) && !is_string($txt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($txt)), __LINE__);
        }
        if (is_null($txt) || (is_array($txt) && empty($txt))) {
            unset($this->Txt);
        } else {
            $this->Txt = $txt;
        }
        return $this;
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getValue()
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $value
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setValue($value = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($value) && strlen(substr($value, strpos($value, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($value, strpos($value, '.')))), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        return $this;
    }
    /**
     * Get Voucher value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVoucher()
    {
        return isset($this->Voucher) ? $this->Voucher : null;
    }
    /**
     * Set Voucher value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $voucher
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setVoucher($voucher = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($voucher) && strlen($voucher) > 20) || (is_array($voucher) && count($voucher) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($voucher) ? strlen($voucher) : count($voucher)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($voucher) && strlen($voucher) < 0) || (is_array($voucher) && count($voucher) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($voucher) && !is_string($voucher)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voucher)), __LINE__);
        }
        if (is_null($voucher) || (is_array($voucher) && empty($voucher))) {
            unset($this->Voucher);
        } else {
            $this->Voucher = $voucher;
        }
        return $this;
    }
    /**
     * Get action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * Set action value
     * @uses \RaseConnector\EnumType\AxdEnum_AxdEntityAction::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_AxdEntityAction::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_AxdEntityAction::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \RaseConnector\EnumType\AxdEnum_AxdEntityAction::getValidValues())), __LINE__);
        }
        $this->action = $action;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
