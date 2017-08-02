<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\RaseConnector\SoapTypes;

class AxdEntity_SalesTable
{
    /**
     * @var string
     */
    protected $_DocumentHash = null;

    /**
     * @var AxdExtType_AmountExclTax
     */
    protected $AmountExclTax = null;

    /**
     * @var AxdExtType_Backorder
     */
    protected $BackOrder = null;

    /**
     * @var AxdExtType_RFIDCaseTagging
     */
    protected $CaseTagging = null;

    /**
     * @var AxdExtType_CustCashDiscCode
     */
    protected $CashDisc = null;

    /**
     * @var AxdExtType_DiscPct
     */
    protected $CashDiscPercent = null;

    /**
     * @var AxdExtType_CommissCustomerGroup
     */
    protected $CommissionGroup = null;

    /**
     * @var AxdExtType_LineComplete
     */
    protected $Complete = null;

    /**
     * @var AxdExtType_ContactPersonId
     */
    protected $ContactPersonId = null;

    /**
     * @var AxdExtType_CovStatus
     */
    protected $CovStatus = null;

    /**
     * @var AxdUnion_AxdExtType_CustCurrencyCode_AxdType_ExtCodeValue
     */
    protected $CurrencyCode = null;

    /**
     * @var string
     */
    protected $CustAccount = null;

    /**
     * @var AxdExtType_CustGroupId
     */
    protected $CustGroup = null;

    /**
     * @var AxdExtType_CustInvoiceId
     */
    protected $CustInvoiceId = null;

    /**
     * @var string
     */
    protected $CustomerRef = null;

    /**
     * @var AxdExtType_DateCreated
     */
    protected $DateCreated = null;

    /**
     * @var AxdExtType_SalesDeadline
     */
    protected $Deadline = null;

    /**
     * @var AxdExtType_Addressing
     */
    protected $DeliveryAddress = null;

    /**
     * @var string
     */
    protected $DeliveryCity = null;

    /**
     * @var string
     */
    protected $DeliveryCountryRegionId = null;

    /**
     * @var AxdUnion_AxdExtType_AddressCountyId_AxdType_ExtCodeValue
     */
    protected $DeliveryCounty = null;

    /**
     * @var \DateTime
     */
    protected $DeliveryDate = null;

    /**
     * @var AxdEnum_SalesDeliveryDateControlType
     */
    protected $DeliveryDateControlType = null;

    /**
     * @var string
     */
    protected $DeliveryName = null;

    /**
     * @var AxdUnion_AxdExtType_AddressStateId_AxdType_ExtCodeValue
     */
    protected $DeliveryState = null;

    /**
     * @var string
     */
    protected $DeliveryStreet = null;

    /**
     * @var string
     */
    protected $DeliveryZipCode = null;

    /**
     * @var AxdArray_AxdExtType_Dimension
     */
    protected $Dimension = null;

    /**
     * @var AxdExtType_CustDirectDebitMan\DateTimeRecId
     */
    protected $DirectDebitMandate = null;

    /**
     * @var AxdExtType_SalesEndDiscPct
     */
    protected $DiscPercent = null;

    /**
     * @var string
     */
    protected $DlvMode = null;

    /**
     * @var AxdExtType_DlvReasonId
     */
    protected $DlvReason = null;

    /**
     * @var AxdUnion_AxdExtType_CustDlvTermId_AxdType_ExtCodeValue
     */
    protected $DlvTerm = null;

    /**
     * @var AxdEnum_DocumentStatus
     */
    protected $DocumentStatus = null;

    /**
     * @var AxdExtType_EInvoiceAccountCode
     */
    protected $EInvoiceAccountCode = null;

    /**
     * @var AxdExtType_EInvoiceLineSpecific
     */
    protected $EInvoiceLineSpec = null;

    /**
     * @var string
     */
    protected $Email = null;

    /**
     * @var AxdExtType_CustEndDiscCode
     */
    protected $EndDisc = null;

    /**
     * @var AxdExtType_TaxEnterpriseNumber
     */
    protected $EnterpriseNumber = null;

    /**
     * @var AxdExtType_SalesEstimateGross
     */
    protected $Estimate = null;

    /**
     * @var AxdExtType_SalesExportReason
     */
    protected $ExportReason = null;

    /**
     * @var AxdExtType_SalesFixedDueDate
     */
    protected $FixedDueDate = null;

    /**
     * @var AxdExtType_SalesFixedExchRate
     */
    protected $FixedExchRate = null;

    /**
     * @var AxdExtType_CustFreightSlipType
     */
    protected $FreightSlipType = null;

    /**
     * @var AxdExtType_CustFreightZoneId
     */
    protected $FreightZone = null;

    /**
     * @var AxdExtType_PaymentStubInvoiceId
     */
    protected $GiroType = null;

    /**
     * @var string
     */
    protected $IgnoreMarkup = null;

    /**
     * @var string
     */
    protected $InclTax = null;

    /**
     * @var AxdExtType_InterCompanyOriginalCustAccount
     */
    protected $InterCompanyOriginalCustAccount = null;

    /**
     * @var AxdExtType_InterCompanyOriginalSalesId
     */
    protected $InterCompanyOriginalSalesId = null;

    /**
     * @var AxdExtType_SalesInventLocationId
     */
    protected $InventLocationId = null;

    /**
     * @var AxdExtType_InventLocationIdCollect
     */
    protected $InventLocationIdCollect = null;

    /**
     * @var AxdExtType_InventSiteId
     */
    protected $InventSiteId = null;

    /**
     * @var AxdUnion_AxdExtType_CustInvoiceAccount_AxdType_ExtCodeValue
     */
    protected $InvoiceAccount = null;

    /**
     * @var AxdUnion_AxdType_Str_AxdType_ExtCodeValue
     */
    protected $InvoiceFrequenceId = null;

    /**
     * @var AxdExtType_RFIDItemTagging
     */
    protected $ItemTagging = null;

    /**
     * @var AxdExtType_CustLanguageId
     */
    protected $LanguageId = null;

    /**
     * @var AxdExtType_CustLineDiscCode
     */
    protected $LineDisc = null;

    /**
     * @var AxdExtType_ListcodeId
     */
    protected $Listcode = null;

    /**
     * @var AxdExtType_CustMarkupGroupId
     */
    protected $MarkupGroup = null;

    /**
     * @var AxdExtType_CustMultiLineDiscCode
     */
    protected $MultiLineDisc = null;

    /**
     * @var AxdExtType_NoCheckCreditLimit
     */
    protected $NoCheckCreditLimit = null;

    /**
     * @var AxdExtType_NumberSequenceGroupId
     */
    protected $NumberSequenceGroup = null;

    /**
     * @var AxdExtType_OneTimeCustomer
     */
    protected $OneTimeCustomer = null;

    /**
     * @var AxdExtType_OrderComplete
     */
    protected $OrderComplete = null;

    /**
     * @var AxdExtType_RFIDPalletTagging
     */
    protected $PalletTagging = null;

    /**
     * @var AxdExtType_CustPaymTermId
     */
    protected $Payment = null;

    /**
     * @var AxdExtType_PaymSchedId
     */
    protected $PaymentSched = null;

    /**
     * @var AxdExtType_CustPaymMode
     */
    protected $PaymMode = null;

    /**
     * @var AxdExtType_CustPaymSpec
     */
    protected $PaymSpec = null;

    /**
     * @var AxdExtType_IntrastatPortId
     */
    protected $Port = null;

    /**
     * @var AxdExtType_CustPostingProfile
     */
    protected $PostingProfile = null;

    /**
     * @var AxdExtType_CustPriceGroup
     */
    protected $PriceGroupId = null;

    /**
     * @var AxdEnum_NoYes
     */
    protected $PrintPricesPackingSlip = null;

    /**
     * @var AxdExtType_ProjId
     */
    protected $ProjId = null;

    /**
     * @var AxdExtType_PurchId
     */
    protected $PurchId = null;

    /**
     * @var string
     */
    protected $PurchOrderFormNum = null;

    /**
     * @var AxdExtType_QuotationId
     */
    protected $QuotationId = null;

    /**
     * @var AxdExtType_SalesReceiptDateConfirmed
     */
    protected $ReceiptDateConfirmed = null;

    /**
     * @var \DateTime
     */
    protected $ReceiptDateRequested = null;

    /**
     * @var AxdExtType_recId
     */
    protected $RecId = null;

    /**
     * @var AxdExtType_recVersion
     */
    protected $RecVersion = null;

    /**
     * @var AxdEnum_ItemReservation
     */
    protected $Reservation = null;

    /**
     * @var AxdExtType_ReturnDeadline
     */
    protected $ReturnDeadline = null;

    /**
     * @var AxdExtType_SalesReturnItemNum
     */
    protected $ReturnItemNum = null;

    /**
     * @var AxdExtType_ReturnReasonCodeId
     */
    protected $ReturnReasonCodeId = null;

    /**
     * @var AxdExtType_ReturnReplacementCreated
     */
    protected $ReturnReplacementCreated = null;

    /**
     * @var AxdExtType_ReturnReplacementId
     */
    protected $ReturnReplacementId = null;

    /**
     * @var AxdEnum_ReturnStatusHeader
     */
    protected $ReturnStatus = null;

    /**
     * @var AxdExtType_CommissSalesGroup
     */
    protected $SalesGroup = null;

    /**
     * @var AxdExtType_SalesIdBase
     */
    protected $SalesId = null;

    /**
     * @var AxdExtType_SalesName
     */
    protected $SalesName = null;

    /**
     * @var string
     */
    protected $SalesOriginId = null;

    /**
     * @var string
     */
    protected $SalesPoolId = null;

    /**
     * @var AxdExtType_EmplId
     */
    protected $SalesResponsible = null;

    /**
     * @var AxdEnum_SalesStatus
     */
    protected $SalesStatus = null;

    /**
     * @var string
     */
    protected $SalesTaker = null;

    /**
     * @var string
     */
    protected $SalesType = null;

    /**
     * @var AxdExtType_smmSalesUnitId
     */
    protected $SalesUnitId = null;

    /**
     * @var AxdExtType_SalesSettlementType
     */
    protected $SettleVoucher = null;

    /**
     * @var AxdExtType_ShipCarrierAccount
     */
    protected $ShipCarrierAccount = null;

    /**
     * @var AxdExtType_ShipCarrierAccountCode
     */
    protected $ShipCarrierAccountCode = null;

    /**
     * @var AxdExtType_ShipCarrierBlindShipment
     */
    protected $ShipCarrierBlindShipment = null;

    /**
     * @var AxdExtType_Name
     */
    protected $ShipCarrierDeliveryContact = null;

    /**
     * @var AxdEnum_ShipCarrierDlvType
     */
    protected $ShipCarrierDlvType = null;

    /**
     * @var AxdExtType_ShipCarrierExpeditedShipment
     */
    protected $ShipCarrierExpeditedShipment = null;

    /**
     * @var AxdExtType_ShipCarrierFuelSurcharge
     */
    protected $ShipCarrierFuelSurcharge = null;

    /**
     * @var AxdExtType_ShipCarrierId
     */
    protected $ShipCarrierID = null;

    /**
     * @var AxdExtType_ShipCarrierResidentialDest
     */
    protected $ShipCarrierResidential = null;

    /**
     * @var AxdExtType_SalesShippingDateConfirmed
     */
    protected $ShippingDateConfirmed = null;

    /**
     * @var AxdExtType_SalesShippingDateRequested
     */
    protected $ShippingDateRequested = null;

    /**
     * @var AxdExtType_SLGFinancialDataAreaId
     */
    protected $SLGFinancialCompany = null;

    /**
     * @var AxdEnum_SLGIntrastat
     */
    protected $SLGIntrastat = null;

    /**
     * @var AxdExtType_Addressing
     */
    protected $SLGTaxRepresentativeAddress = null;

    /**
     * @var AxdExtType_AddressCity
     */
    protected $SLGTaxRepresentativeCity = null;

    /**
     * @var AxdUnion_AxdExtType_AddressCountryRegionId_AxdType_ExtCodeValue
     */
    protected $SLGTaxRepresentativeCountryId = null;

    /**
     * @var AxdExtType_AddressStreet
     */
    protected $SLGTaxRepresentativeStreet = null;

    /**
     * @var AxdExtType_VATNum
     */
    protected $SLGTaxRepresentativeVATNum = null;

    /**
     * @var AxdUnion_AxdExtType_AddressZipCodeId_AxdType_ExtCodeValue
     */
    protected $SLGTaxRepresentativeZipCodeId = null;

    /**
     * @var AxdExtType_smmCampaignId
     */
    protected $smmCampaignId = null;

    /**
     * @var AxdExtType_smmSalesAmountTotal
     */
    protected $smmSalesAmountTotal = null;

    /**
     * @var AxdEnum_Solvability
     */
    protected $Solvability = null;

    /**
     * @var AxdExtType_IntrastatProcId
     */
    protected $StatProcId = null;

    /**
     * @var AxdExtType_TaxGroup
     */
    protected $TaxGroup = null;

    /**
     * @var AxdExtType_AmountCur
     */
    protected $totalBalance = null;

    /**
     * @var AxdExtType_DiscAmount
     */
    protected $TotalCashDiscount = null;

    /**
     * @var AxdExtType_AmountCur
     */
    protected $TotalInvoice = null;

    /**
     * @var AxdExtType_MarkupAmount
     */
    protected $TotalMiscCharges = null;

    /**
     * @var AxdExtType_TaxAmountCur
     */
    protected $TotalSalesTax = null;

    /**
     * @var AxdExtType_IntrastatTransactionCodeId
     */
    protected $TransactionCode = null;

    /**
     * @var AxdExtType_IntrastatTransport
     */
    protected $Transport = null;

    /**
     * @var AxdExtType_URL
     */
    protected $URL = null;

    /**
     * @var AxdExtType_VATNumJournal
     */
    protected $VATNum = null;

    /**
     * @var AxdExtType_WMSIsRush
     */
    protected $WMSIsRush = null;

    /**
     * @var AxdEntity_SalesLine[]
     */
    protected $SalesLine = [];

    /**
     * @var AxdEntity_DocuRefHeader
     */
    protected $DocuRefHeader = null;

    /**
     * @var AxdEntity_MarkupTransHeader
     */
    protected $MarkupTransHeader = null;

    /**
     * @var string
     */
    protected $class = null;

    /**
     * @var AxdEnum_AxdEntityAction
     */
    protected $action = null;

    public function __construct()
    {
        $this->setClass('entity');
    }

    /**
     * @return string
     */
    public function get_DocumentHash()
    {
        return $this->_DocumentHash;
    }

    /**
     * @param string $_DocumentHash
     *
     * @return $this
     */
    public function set_DocumentHash($_DocumentHash)
    {
        $this->_DocumentHash = $_DocumentHash;

        return $this;
    }

    /**
     * @return AxdExtType_AmountExclTax
     */
    public function getAmountExclTax()
    {
        return $this->AmountExclTax;
    }

    /**
     * @param AxdExtType_AmountExclTax $AmountExclTax
     *
     * @return $this
     */
    public function setAmountExclTax($AmountExclTax)
    {
        $this->AmountExclTax = $AmountExclTax;

        return $this;
    }

    /**
     * @return AxdExtType_Backorder
     */
    public function getBackOrder()
    {
        return $this->BackOrder;
    }

    /**
     * @param AxdExtType_Backorder $BackOrder
     *
     * @return $this
     */
    public function setBackOrder($BackOrder)
    {
        $this->BackOrder = $BackOrder;

        return $this;
    }

    /**
     * @return AxdExtType_RFIDCaseTagging
     */
    public function getCaseTagging()
    {
        return $this->CaseTagging;
    }

    /**
     * @param AxdExtType_RFIDCaseTagging $CaseTagging
     *
     * @return $this
     */
    public function setCaseTagging($CaseTagging)
    {
        $this->CaseTagging = $CaseTagging;

        return $this;
    }

    /**
     * @return AxdExtType_CustCashDiscCode
     */
    public function getCashDisc()
    {
        return $this->CashDisc;
    }

    /**
     * @param AxdExtType_CustCashDiscCode $CashDisc
     *
     * @return $this
     */
    public function setCashDisc($CashDisc)
    {
        $this->CashDisc = $CashDisc;

        return $this;
    }

    /**
     * @return AxdExtType_DiscPct
     */
    public function getCashDiscPercent()
    {
        return $this->CashDiscPercent;
    }

    /**
     * @param AxdExtType_DiscPct $CashDiscPercent
     *
     * @return $this
     */
    public function setCashDiscPercent($CashDiscPercent)
    {
        $this->CashDiscPercent = $CashDiscPercent;

        return $this;
    }

    /**
     * @return AxdExtType_CommissCustomerGroup
     */
    public function getCommissionGroup()
    {
        return $this->CommissionGroup;
    }

    /**
     * @param AxdExtType_CommissCustomerGroup $CommissionGroup
     *
     * @return $this
     */
    public function setCommissionGroup($CommissionGroup)
    {
        $this->CommissionGroup = $CommissionGroup;

        return $this;
    }

    /**
     * @return AxdExtType_LineComplete
     */
    public function getComplete()
    {
        return $this->Complete;
    }

    /**
     * @param AxdExtType_LineComplete $Complete
     *
     * @return $this
     */
    public function setComplete($Complete)
    {
        $this->Complete = $Complete;

        return $this;
    }

    /**
     * @return AxdExtType_ContactPersonId
     */
    public function getContactPersonId()
    {
        return $this->ContactPersonId;
    }

    /**
     * @param AxdExtType_ContactPersonId $ContactPersonId
     *
     * @return $this
     */
    public function setContactPersonId($ContactPersonId)
    {
        $this->ContactPersonId = $ContactPersonId;

        return $this;
    }

    /**
     * @return AxdExtType_CovStatus
     */
    public function getCovStatus()
    {
        return $this->CovStatus;
    }

    /**
     * @param AxdExtType_CovStatus $CovStatus
     *
     * @return $this
     */
    public function setCovStatus($CovStatus)
    {
        $this->CovStatus = $CovStatus;

        return $this;
    }

    /**
     * @return AxdUnion_AxdExtType_CustCurrencyCode_AxdType_ExtCodeValue
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * @param AxdUnion_AxdExtType_CustCurrencyCode_AxdType_ExtCodeValue $CurrencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($CurrencyCode)
    {
        $this->CurrencyCode = $CurrencyCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustAccount()
    {
        return $this->CustAccount;
    }

    /**
     * @param string $CustAccount
     *
     * @return $this
     */
    public function setCustAccount($CustAccount)
    {
        $this->CustAccount = $CustAccount;

        return $this;
    }

    /**
     * @return AxdExtType_CustGroupId
     */
    public function getCustGroup()
    {
        return $this->CustGroup;
    }

    /**
     * @param AxdExtType_CustGroupId $CustGroup
     *
     * @return $this
     */
    public function setCustGroup($CustGroup)
    {
        $this->CustGroup = $CustGroup;

        return $this;
    }

    /**
     * @return AxdExtType_CustInvoiceId
     */
    public function getCustInvoiceId()
    {
        return $this->CustInvoiceId;
    }

    /**
     * @param AxdExtType_CustInvoiceId $CustInvoiceId
     *
     * @return $this
     */
    public function setCustInvoiceId($CustInvoiceId)
    {
        $this->CustInvoiceId = $CustInvoiceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerRef()
    {
        return $this->CustomerRef;
    }

    /**
     * @param string $CustomerRef
     *
     * @return $this
     */
    public function setCustomerRef($CustomerRef)
    {
        $this->CustomerRef = $CustomerRef;

        return $this;
    }

    /**
     * @return AxdExtType_DateCreated
     */
    public function getDateCreated()
    {
        return $this->DateCreated;
    }

    /**
     * @param AxdExtType_DateCreated $DateCreated
     *
     * @return $this
     */
    public function setDateCreated($DateCreated)
    {
        $this->DateCreated = $DateCreated;

        return $this;
    }

    /**
     * @return AxdExtType_SalesDeadline
     */
    public function getDeadline()
    {
        return $this->Deadline;
    }

    /**
     * @param AxdExtType_SalesDeadline $Deadline
     *
     * @return $this
     */
    public function setDeadline($Deadline)
    {
        $this->Deadline = $Deadline;

        return $this;
    }

    /**
     * @return AxdExtType_Addressing
     */
    public function getDeliveryAddress()
    {
        return $this->DeliveryAddress;
    }

    /**
     * @param AxdExtType_Addressing $DeliveryAddress
     *
     * @return $this
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
        $this->DeliveryAddress = $DeliveryAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryCity()
    {
        return $this->DeliveryCity;
    }

    /**
     * @param string $DeliveryCity
     *
     * @return $this
     */
    public function setDeliveryCity($DeliveryCity)
    {
        $this->DeliveryCity = $DeliveryCity;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryCountryRegionId()
    {
        return $this->DeliveryCountryRegionId;
    }

    /**
     * @param string
     * $DeliveryCountryRegionId
     *
     * @return $this
     */
    public function setDeliveryCountryRegionId($DeliveryCountryRegionId)
    {
        $this->DeliveryCountryRegionId = $DeliveryCountryRegionId;

        return $this;
    }

    /**
     * @return AxdUnion_AxdExtType_AddressCountyId_AxdType_ExtCodeValue
     */
    public function getDeliveryCounty()
    {
        return $this->DeliveryCounty;
    }

    /**
     * @param AxdUnion_AxdExtType_AddressCountyId_AxdType_ExtCodeValue $DeliveryCounty
     *
     * @return $this
     */
    public function setDeliveryCounty($DeliveryCounty)
    {
        $this->DeliveryCounty = $DeliveryCounty;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * @param \DateTime $DeliveryDate
     *
     * @return $this
     */
    public function setDeliveryDate($DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate;

        return $this;
    }

    /**
     * @return AxdEnum_SalesDeliveryDateControlType
     */
    public function getDeliveryDateControlType()
    {
        return $this->DeliveryDateControlType;
    }

    /**
     * @param AxdEnum_SalesDeliveryDateControlType $DeliveryDateControlType
     *
     * @return $this
     */
    public function setDeliveryDateControlType($DeliveryDateControlType)
    {
        $this->DeliveryDateControlType = $DeliveryDateControlType;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryName()
    {
        return $this->DeliveryName;
    }

    /**
     * @param string $DeliveryName
     *
     * @return $this
     */
    public function setDeliveryName($DeliveryName)
    {
        $this->DeliveryName = $DeliveryName;

        return $this;
    }

    /**
     * @return AxdUnion_AxdExtType_AddressStateId_AxdType_ExtCodeValue
     */
    public function getDeliveryState()
    {
        return $this->DeliveryState;
    }

    /**
     * @param AxdUnion_AxdExtType_AddressStateId_AxdType_ExtCodeValue $DeliveryState
     *
     * @return $this
     */
    public function setDeliveryState($DeliveryState)
    {
        $this->DeliveryState = $DeliveryState;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryStreet()
    {
        return $this->DeliveryStreet;
    }

    /**
     * @param string $DeliveryStreet
     *
     * @return $this
     */
    public function setDeliveryStreet($DeliveryStreet)
    {
        $this->DeliveryStreet = $DeliveryStreet;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryZipCode()
    {
        return $this->DeliveryZipCode;
    }

    /**
     * @param string
     * $DeliveryZipCode
     *
     * @return $this
     */
    public function setDeliveryZipCode($DeliveryZipCode)
    {
        $this->DeliveryZipCode = $DeliveryZipCode;

        return $this;
    }

    /**
     * @return AxdArray_AxdExtType_Dimension
     */
    public function getDimension()
    {
        return $this->Dimension;
    }

    /**
     * @param AxdArray_AxdExtType_Dimension $Dimension
     *
     * @return $this
     */
    public function setDimension($Dimension)
    {
        $this->Dimension = $Dimension;

        return $this;
    }

    /**
     * @return AxdExtType_CustDirectDebitMan\DateTimeRecId
     */
    public function getDirectDebitMandate()
    {
        return $this->DirectDebitMandate;
    }

    /**
     * @param AxdExtType_CustDirectDebitMan\DateTimeRecId $DirectDebitMandate
     *
     * @return $this
     */
    public function setDirectDebitMandate($DirectDebitMandate)
    {
        $this->DirectDebitMandate = $DirectDebitMandate;

        return $this;
    }

    /**
     * @return AxdExtType_SalesEndDiscPct
     */
    public function getDiscPercent()
    {
        return $this->DiscPercent;
    }

    /**
     * @param AxdExtType_SalesEndDiscPct $DiscPercent
     *
     * @return $this
     */
    public function setDiscPercent($DiscPercent)
    {
        $this->DiscPercent = $DiscPercent;

        return $this;
    }

    /**
     * @return string
     */
    public function getDlvMode()
    {
        return $this->DlvMode;
    }

    /**
     * @param string $DlvMode
     *
     * @return $this
     */
    public function setDlvMode($DlvMode)
    {
        $this->DlvMode = $DlvMode;

        return $this;
    }

    /**
     * @return AxdExtType_DlvReasonId
     */
    public function getDlvReason()
    {
        return $this->DlvReason;
    }

    /**
     * @param AxdExtType_DlvReasonId $DlvReason
     *
     * @return $this
     */
    public function setDlvReason($DlvReason)
    {
        $this->DlvReason = $DlvReason;

        return $this;
    }

    /**
     * @return AxdUnion_AxdExtType_CustDlvTermId_AxdType_ExtCodeValue
     */
    public function getDlvTerm()
    {
        return $this->DlvTerm;
    }

    /**
     * @param AxdUnion_AxdExtType_CustDlvTermId_AxdType_ExtCodeValue $DlvTerm
     *
     * @return $this
     */
    public function setDlvTerm($DlvTerm)
    {
        $this->DlvTerm = $DlvTerm;

        return $this;
    }

    /**
     * @return AxdEnum_DocumentStatus
     */
    public function getDocumentStatus()
    {
        return $this->DocumentStatus;
    }

    /**
     * @param AxdEnum_DocumentStatus $DocumentStatus
     *
     * @return $this
     */
    public function setDocumentStatus($DocumentStatus)
    {
        $this->DocumentStatus = $DocumentStatus;

        return $this;
    }

    /**
     * @return AxdExtType_EInvoiceAccountCode
     */
    public function getEInvoiceAccountCode()
    {
        return $this->EInvoiceAccountCode;
    }

    /**
     * @param AxdExtType_EInvoiceAccountCode $EInvoiceAccountCode
     *
     * @return $this
     */
    public function setEInvoiceAccountCode($EInvoiceAccountCode)
    {
        $this->EInvoiceAccountCode = $EInvoiceAccountCode;

        return $this;
    }

    /**
     * @return AxdExtType_EInvoiceLineSpecific
     */
    public function getEInvoiceLineSpec()
    {
        return $this->EInvoiceLineSpec;
    }

    /**
     * @param AxdExtType_EInvoiceLineSpecific $EInvoiceLineSpec
     *
     * @return $this
     */
    public function setEInvoiceLineSpec($EInvoiceLineSpec)
    {
        $this->EInvoiceLineSpec = $EInvoiceLineSpec;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     *
     * @return $this
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * @return AxdExtType_CustEndDiscCode
     */
    public function getEndDisc()
    {
        return $this->EndDisc;
    }

    /**
     * @param AxdExtType_CustEndDiscCode $EndDisc
     *
     * @return $this
     */
    public function setEndDisc($EndDisc)
    {
        $this->EndDisc = $EndDisc;

        return $this;
    }

    /**
     * @return AxdExtType_TaxEnterpriseNumber
     */
    public function getEnterpriseNumber()
    {
        return $this->EnterpriseNumber;
    }

    /**
     * @param AxdExtType_TaxEnterpriseNumber $EnterpriseNumber
     *
     * @return $this
     */
    public function setEnterpriseNumber($EnterpriseNumber)
    {
        $this->EnterpriseNumber = $EnterpriseNumber;

        return $this;
    }

    /**
     * @return AxdExtType_SalesEstimateGross
     */
    public function getEstimate()
    {
        return $this->Estimate;
    }

    /**
     * @param AxdExtType_SalesEstimateGross $Estimate
     *
     * @return $this
     */
    public function setEstimate($Estimate)
    {
        $this->Estimate = $Estimate;

        return $this;
    }

    /**
     * @return AxdExtType_SalesExportReason
     */
    public function getExportReason()
    {
        return $this->ExportReason;
    }

    /**
     * @param AxdExtType_SalesExportReason $ExportReason
     *
     * @return $this
     */
    public function setExportReason($ExportReason)
    {
        $this->ExportReason = $ExportReason;

        return $this;
    }

    /**
     * @return AxdExtType_SalesFixedDueDate
     */
    public function getFixedDueDate()
    {
        return $this->FixedDueDate;
    }

    /**
     * @param AxdExtType_SalesFixedDueDate $FixedDueDate
     *
     * @return $this
     */
    public function setFixedDueDate($FixedDueDate)
    {
        $this->FixedDueDate = $FixedDueDate;

        return $this;
    }

    /**
     * @return AxdExtType_SalesFixedExchRate
     */
    public function getFixedExchRate()
    {
        return $this->FixedExchRate;
    }

    /**
     * @param AxdExtType_SalesFixedExchRate $FixedExchRate
     *
     * @return $this
     */
    public function setFixedExchRate($FixedExchRate)
    {
        $this->FixedExchRate = $FixedExchRate;

        return $this;
    }

    /**
     * @return AxdExtType_CustFreightSlipType
     */
    public function getFreightSlipType()
    {
        return $this->FreightSlipType;
    }

    /**
     * @param AxdExtType_CustFreightSlipType $FreightSlipType
     *
     * @return $this
     */
    public function setFreightSlipType($FreightSlipType)
    {
        $this->FreightSlipType = $FreightSlipType;

        return $this;
    }

    /**
     * @return AxdExtType_CustFreightZoneId
     */
    public function getFreightZone()
    {
        return $this->FreightZone;
    }

    /**
     * @param AxdExtType_CustFreightZoneId $FreightZone
     *
     * @return $this
     */
    public function setFreightZone($FreightZone)
    {
        $this->FreightZone = $FreightZone;

        return $this;
    }

    /**
     * @return AxdExtType_PaymentStubInvoiceId
     */
    public function getGiroType()
    {
        return $this->GiroType;
    }

    /**
     * @param AxdExtType_PaymentStubInvoiceId $GiroType
     *
     * @return $this
     */
    public function setGiroType($GiroType)
    {
        $this->GiroType = $GiroType;

        return $this;
    }

    /**
     * @return string
     */
    public function getIgnoreMarkup()
    {
        return $this->IgnoreMarkup;
    }

    /**
     * @param string $IgnoreMarkup
     *
     * @return $this
     */
    public function setIgnoreMarkup($IgnoreMarkup)
    {
        $this->IgnoreMarkup = $IgnoreMarkup;

        return $this;
    }

    /**
     * @return string
     */
    public function getInclTax()
    {
        return $this->InclTax;
    }

    /**
     * @param string $InclTax
     *
     * @return $this
     */
    public function setInclTax($InclTax)
    {
        $this->InclTax = $InclTax;

        return $this;
    }

    /**
     * @return AxdExtType_InterCompanyOriginalCustAccount
     */
    public function getInterCompanyOriginalCustAccount()
    {
        return $this->InterCompanyOriginalCustAccount;
    }

    /**
     * @param AxdExtType_InterCompanyOriginalCustAccount
     * $InterCompanyOriginalCustAccount
     *
     * @return $this
     */
    public function setInterCompanyOriginalCustAccount($InterCompanyOriginalCustAccount)
    {
        $this->InterCompanyOriginalCustAccount = $InterCompanyOriginalCustAccount;

        return $this;
    }

    /**
     * @return AxdExtType_InterCompanyOriginalSalesId
     */
    public function getInterCompanyOriginalSalesId()
    {
        return $this->InterCompanyOriginalSalesId;
    }

    /**
     * @param AxdExtType_InterCompanyOriginalSalesId $InterCompanyOriginalSalesId
     *
     * @return $this
     */
    public function setInterCompanyOriginalSalesId($InterCompanyOriginalSalesId)
    {
        $this->InterCompanyOriginalSalesId = $InterCompanyOriginalSalesId;

        return $this;
    }

    /**
     * @return AxdExtType_SalesInventLocationId
     */
    public function getInventLocationId()
    {
        return $this->InventLocationId;
    }

    /**
     * @param AxdExtType_SalesInventLocationId $InventLocationId
     *
     * @return $this
     */
    public function setInventLocationId($InventLocationId)
    {
        $this->InventLocationId = $InventLocationId;

        return $this;
    }

    /**
     * @return AxdExtType_InventLocationIdCollect
     */
    public function getInventLocationIdCollect()
    {
        return $this->InventLocationIdCollect;
    }

    /**
     * @param AxdExtType_InventLocationIdCollect $InventLocationIdCollect
     *
     * @return $this
     */
    public function setInventLocationIdCollect($InventLocationIdCollect)
    {
        $this->InventLocationIdCollect = $InventLocationIdCollect;

        return $this;
    }

    /**
     * @return AxdExtType_InventSiteId
     */
    public function getInventSiteId()
    {
        return $this->InventSiteId;
    }

    /**
     * @param AxdExtType_InventSiteId $InventSiteId
     *
     * @return $this
     */
    public function setInventSiteId($InventSiteId)
    {
        $this->InventSiteId = $InventSiteId;

        return $this;
    }

    /**
     * @return AxdUnion_AxdExtType_CustInvoiceAccount_AxdType_ExtCodeValue
     */
    public function getInvoiceAccount()
    {
        return $this->InvoiceAccount;
    }

    /**
     * @param AxdUnion_AxdExtType_CustInvoiceAccount_AxdType_ExtCodeValue
     * $InvoiceAccount
     *
     * @return $this
     */
    public function setInvoiceAccount($InvoiceAccount)
    {
        $this->InvoiceAccount = $InvoiceAccount;

        return $this;
    }

    /**
     * @return AxdUnion_AxdType_Str_AxdType_ExtCodeValue
     */
    public function getInvoiceFrequenceId()
    {
        return $this->InvoiceFrequenceId;
    }

    /**
     * @param AxdUnion_AxdType_Str_AxdType_ExtCodeValue $InvoiceFrequenceId
     *
     * @return $this
     */
    public function setInvoiceFrequenceId($InvoiceFrequenceId)
    {
        $this->InvoiceFrequenceId = $InvoiceFrequenceId;

        return $this;
    }

    /**
     * @return AxdExtType_RFIDItemTagging
     */
    public function getItemTagging()
    {
        return $this->ItemTagging;
    }

    /**
     * @param AxdExtType_RFIDItemTagging $ItemTagging
     *
     * @return $this
     */
    public function setItemTagging($ItemTagging)
    {
        $this->ItemTagging = $ItemTagging;

        return $this;
    }

    /**
     * @return AxdExtType_CustLanguageId
     */
    public function getLanguageId()
    {
        return $this->LanguageId;
    }

    /**
     * @param AxdExtType_CustLanguageId $LanguageId
     *
     * @return $this
     */
    public function setLanguageId($LanguageId)
    {
        $this->LanguageId = $LanguageId;

        return $this;
    }

    /**
     * @return AxdExtType_CustLineDiscCode
     */
    public function getLineDisc()
    {
        return $this->LineDisc;
    }

    /**
     * @param AxdExtType_CustLineDiscCode $LineDisc
     *
     * @return $this
     */
    public function setLineDisc($LineDisc)
    {
        $this->LineDisc = $LineDisc;

        return $this;
    }

    /**
     * @return AxdExtType_ListcodeId
     */
    public function getListcode()
    {
        return $this->Listcode;
    }

    /**
     * @param AxdExtType_ListcodeId $Listcode
     *
     * @return $this
     */
    public function setListcode($Listcode)
    {
        $this->Listcode = $Listcode;

        return $this;
    }

    /**
     * @return AxdExtType_CustMarkupGroupId
     */
    public function getMarkupGroup()
    {
        return $this->MarkupGroup;
    }

    /**
     * @param AxdExtType_CustMarkupGroupId $MarkupGroup
     *
     * @return $this
     */
    public function setMarkupGroup($MarkupGroup)
    {
        $this->MarkupGroup = $MarkupGroup;

        return $this;
    }

    /**
     * @return AxdExtType_CustMultiLineDiscCode
     */
    public function getMultiLineDisc()
    {
        return $this->MultiLineDisc;
    }

    /**
     * @param AxdExtType_CustMultiLineDiscCode $MultiLineDisc
     *
     * @return $this
     */
    public function setMultiLineDisc($MultiLineDisc)
    {
        $this->MultiLineDisc = $MultiLineDisc;

        return $this;
    }

    /**
     * @return AxdExtType_NoCheckCreditLimit
     */
    public function getNoCheckCreditLimit()
    {
        return $this->NoCheckCreditLimit;
    }

    /**
     * @param AxdExtType_NoCheckCreditLimit $NoCheckCreditLimit
     *
     * @return $this
     */
    public function setNoCheckCreditLimit($NoCheckCreditLimit)
    {
        $this->NoCheckCreditLimit = $NoCheckCreditLimit;

        return $this;
    }

    /**
     * @return AxdExtType_NumberSequenceGroupId
     */
    public function getNumberSequenceGroup()
    {
        return $this->NumberSequenceGroup;
    }

    /**
     * @param AxdExtType_NumberSequenceGroupId $NumberSequenceGroup
     *
     * @return $this
     */
    public function setNumberSequenceGroup($NumberSequenceGroup)
    {
        $this->NumberSequenceGroup = $NumberSequenceGroup;

        return $this;
    }

    /**
     * @return AxdExtType_OneTimeCustomer
     */
    public function getOneTimeCustomer()
    {
        return $this->OneTimeCustomer;
    }

    /**
     * @param AxdExtType_OneTimeCustomer $OneTimeCustomer
     *
     * @return $this
     */
    public function setOneTimeCustomer($OneTimeCustomer)
    {
        $this->OneTimeCustomer = $OneTimeCustomer;

        return $this;
    }

    /**
     * @return AxdExtType_OrderComplete
     */
    public function getOrderComplete()
    {
        return $this->OrderComplete;
    }

    /**
     * @param AxdExtType_OrderComplete $OrderComplete
     *
     * @return $this
     */
    public function setOrderComplete($OrderComplete)
    {
        $this->OrderComplete = $OrderComplete;

        return $this;
    }

    /**
     * @return AxdExtType_RFIDPalletTagging
     */
    public function getPalletTagging()
    {
        return $this->PalletTagging;
    }

    /**
     * @param AxdExtType_RFIDPalletTagging $PalletTagging
     *
     * @return $this
     */
    public function setPalletTagging($PalletTagging)
    {
        $this->PalletTagging = $PalletTagging;

        return $this;
    }

    /**
     * @return AxdExtType_CustPaymTermId
     */
    public function getPayment()
    {
        return $this->Payment;
    }

    /**
     * @param AxdExtType_CustPaymTermId $Payment
     *
     * @return $this
     */
    public function setPayment($Payment)
    {
        $this->Payment = $Payment;

        return $this;
    }

    /**
     * @return AxdExtType_PaymSchedId
     */
    public function getPaymentSched()
    {
        return $this->PaymentSched;
    }

    /**
     * @param AxdExtType_PaymSchedId $PaymentSched
     *
     * @return $this
     */
    public function setPaymentSched($PaymentSched)
    {
        $this->PaymentSched = $PaymentSched;

        return $this;
    }

    /**
     * @return AxdExtType_CustPaymMode
     */
    public function getPaymMode()
    {
        return $this->PaymMode;
    }

    /**
     * @param AxdExtType_CustPaymMode $PaymMode
     *
     * @return $this
     */
    public function setPaymMode($PaymMode)
    {
        $this->PaymMode = $PaymMode;

        return $this;
    }

    /**
     * @return AxdExtType_CustPaymSpec
     */
    public function getPaymSpec()
    {
        return $this->PaymSpec;
    }

    /**
     * @param AxdExtType_CustPaymSpec $PaymSpec
     *
     * @return $this
     */
    public function setPaymSpec($PaymSpec)
    {
        $this->PaymSpec = $PaymSpec;

        return $this;
    }

    /**
     * @return AxdExtType_IntrastatPortId
     */
    public function getPort()
    {
        return $this->Port;
    }

    /**
     * @param AxdExtType_IntrastatPortId $Port
     *
     * @return $this
     */
    public function setPort($Port)
    {
        $this->Port = $Port;

        return $this;
    }

    /**
     * @return AxdExtType_CustPostingProfile
     */
    public function getPostingProfile()
    {
        return $this->PostingProfile;
    }

    /**
     * @param AxdExtType_CustPostingProfile $PostingProfile
     *
     * @return $this
     */
    public function setPostingProfile($PostingProfile)
    {
        $this->PostingProfile = $PostingProfile;

        return $this;
    }

    /**
     * @return AxdExtType_CustPriceGroup
     */
    public function getPriceGroupId()
    {
        return $this->PriceGroupId;
    }

    /**
     * @param AxdExtType_CustPriceGroup $PriceGroupId
     *
     * @return $this
     */
    public function setPriceGroupId($PriceGroupId)
    {
        $this->PriceGroupId = $PriceGroupId;

        return $this;
    }

    /**
     * @return AxdEnum_NoYes
     */
    public function getPrintPricesPackingSlip()
    {
        return $this->PrintPricesPackingSlip;
    }

    /**
     * @param AxdEnum_NoYes $PrintPricesPackingSlip
     *
     * @return $this
     */
    public function setPrintPricesPackingSlip($PrintPricesPackingSlip)
    {
        $this->PrintPricesPackingSlip = $PrintPricesPackingSlip;

        return $this;
    }

    /**
     * @return AxdExtType_ProjId
     */
    public function getProjId()
    {
        return $this->ProjId;
    }

    /**
     * @param AxdExtType_ProjId $ProjId
     *
     * @return $this
     */
    public function setProjId($ProjId)
    {
        $this->ProjId = $ProjId;

        return $this;
    }

    /**
     * @return AxdExtType_PurchId
     */
    public function getPurchId()
    {
        return $this->PurchId;
    }

    /**
     * @param AxdExtType_PurchId $PurchId
     *
     * @return $this
     */
    public function setPurchId($PurchId)
    {
        $this->PurchId = $PurchId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchOrderFormNum()
    {
        return $this->PurchOrderFormNum;
    }

    /**
     * @param string $PurchOrderFormNum
     *
     * @return $this
     */
    public function setPurchOrderFormNum($PurchOrderFormNum)
    {
        $this->PurchOrderFormNum = $PurchOrderFormNum;

        return $this;
    }

    /**
     * @return AxdExtType_QuotationId
     */
    public function getQuotationId()
    {
        return $this->QuotationId;
    }

    /**
     * @param AxdExtType_QuotationId $QuotationId
     *
     * @return $this
     */
    public function setQuotationId($QuotationId)
    {
        $this->QuotationId = $QuotationId;

        return $this;
    }

    /**
     * @return AxdExtType_SalesReceiptDateConfirmed
     */
    public function getReceiptDateConfirmed()
    {
        return $this->ReceiptDateConfirmed;
    }

    /**
     * @param AxdExtType_SalesReceiptDateConfirmed $ReceiptDateConfirmed
     *
     * @return $this
     */
    public function setReceiptDateConfirmed($ReceiptDateConfirmed)
    {
        $this->ReceiptDateConfirmed = $ReceiptDateConfirmed;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReceiptDateRequested()
    {
        return $this->ReceiptDateRequested;
    }

    /**
     * @param \DateTime $ReceiptDateRequested
     *
     * @return $this
     */
    public function setReceiptDateRequested($ReceiptDateRequested)
    {
        $this->ReceiptDateRequested = $ReceiptDateRequested;

        return $this;
    }

    /**
     * @return AxdExtType_recId
     */
    public function getRecId()
    {
        return $this->RecId;
    }

    /**
     * @param AxdExtType_recId $RecId
     *
     * @return $this
     */
    public function setRecId($RecId)
    {
        $this->RecId = $RecId;

        return $this;
    }

    /**
     * @return AxdExtType_recVersion
     */
    public function getRecVersion()
    {
        return $this->RecVersion;
    }

    /**
     * @param AxdExtType_recVersion $RecVersion
     *
     * @return $this
     */
    public function setRecVersion($RecVersion)
    {
        $this->RecVersion = $RecVersion;

        return $this;
    }

    /**
     * @return AxdEnum_ItemReservation
     */
    public function getReservation()
    {
        return $this->Reservation;
    }

    /**
     * @param AxdEnum_ItemReservation $Reservation
     *
     * @return $this
     */
    public function setReservation($Reservation)
    {
        $this->Reservation = $Reservation;

        return $this;
    }

    /**
     * @return AxdExtType_ReturnDeadline
     */
    public function getReturnDeadline()
    {
        return $this->ReturnDeadline;
    }

    /**
     * @param AxdExtType_ReturnDeadline $ReturnDeadline
     *
     * @return $this
     */
    public function setReturnDeadline($ReturnDeadline)
    {
        $this->ReturnDeadline = $ReturnDeadline;

        return $this;
    }

    /**
     * @return AxdExtType_SalesReturnItemNum
     */
    public function getReturnItemNum()
    {
        return $this->ReturnItemNum;
    }

    /**
     * @param AxdExtType_SalesReturnItemNum $ReturnItemNum
     *
     * @return $this
     */
    public function setReturnItemNum($ReturnItemNum)
    {
        $this->ReturnItemNum = $ReturnItemNum;

        return $this;
    }

    /**
     * @return AxdExtType_ReturnReasonCodeId
     */
    public function getReturnReasonCodeId()
    {
        return $this->ReturnReasonCodeId;
    }

    /**
     * @param AxdExtType_ReturnReasonCodeId $ReturnReasonCodeId
     *
     * @return $this
     */
    public function setReturnReasonCodeId($ReturnReasonCodeId)
    {
        $this->ReturnReasonCodeId = $ReturnReasonCodeId;

        return $this;
    }

    /**
     * @return AxdExtType_ReturnReplacementCreated
     */
    public function getReturnReplacementCreated()
    {
        return $this->ReturnReplacementCreated;
    }

    /**
     * @param AxdExtType_ReturnReplacementCreated $ReturnReplacementCreated
     *
     * @return $this
     */
    public function setReturnReplacementCreated($ReturnReplacementCreated)
    {
        $this->ReturnReplacementCreated = $ReturnReplacementCreated;

        return $this;
    }

    /**
     * @return AxdExtType_ReturnReplacementId
     */
    public function getReturnReplacementId()
    {
        return $this->ReturnReplacementId;
    }

    /**
     * @param AxdExtType_ReturnReplacementId $ReturnReplacementId
     *
     * @return $this
     */
    public function setReturnReplacementId($ReturnReplacementId)
    {
        $this->ReturnReplacementId = $ReturnReplacementId;

        return $this;
    }

    /**
     * @return AxdEnum_ReturnStatusHeader
     */
    public function getReturnStatus()
    {
        return $this->ReturnStatus;
    }

    /**
     * @param AxdEnum_ReturnStatusHeader $ReturnStatus
     *
     * @return $this
     */
    public function setReturnStatus($ReturnStatus)
    {
        $this->ReturnStatus = $ReturnStatus;

        return $this;
    }

    /**
     * @return AxdExtType_CommissSalesGroup
     */
    public function getSalesGroup()
    {
        return $this->SalesGroup;
    }

    /**
     * @param AxdExtType_CommissSalesGroup $SalesGroup
     *
     * @return $this
     */
    public function setSalesGroup($SalesGroup)
    {
        $this->SalesGroup = $SalesGroup;

        return $this;
    }

    /**
     * @return AxdExtType_SalesIdBase
     */
    public function getSalesId()
    {
        return $this->SalesId;
    }

    /**
     * @param AxdExtType_SalesIdBase $SalesId
     *
     * @return $this
     */
    public function setSalesId($SalesId)
    {
        $this->SalesId = $SalesId;

        return $this;
    }

    /**
     * @return AxdExtType_SalesName
     */
    public function getSalesName()
    {
        return $this->SalesName;
    }

    /**
     * @param AxdExtType_SalesName $SalesName
     *
     * @return $this
     */
    public function setSalesName($SalesName)
    {
        $this->SalesName = $SalesName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalesOriginId()
    {
        return $this->SalesOriginId;
    }

    /**
     * @param string $SalesOriginId
     *
     * @return $this
     */
    public function setSalesOriginId($SalesOriginId)
    {
        $this->SalesOriginId = $SalesOriginId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalesPoolId()
    {
        return $this->SalesPoolId;
    }

    /**
     * @param string $SalesPoolId
     *
     * @return $this
     */
    public function setSalesPoolId($SalesPoolId)
    {
        $this->SalesPoolId = $SalesPoolId;

        return $this;
    }

    /**
     * @return AxdExtType_EmplId
     */
    public function getSalesResponsible()
    {
        return $this->SalesResponsible;
    }

    /**
     * @param AxdExtType_EmplId $SalesResponsible
     *
     * @return $this
     */
    public function setSalesResponsible($SalesResponsible)
    {
        $this->SalesResponsible = $SalesResponsible;

        return $this;
    }

    /**
     * @return AxdEnum_SalesStatus
     */
    public function getSalesStatus()
    {
        return $this->SalesStatus;
    }

    /**
     * @param AxdEnum_SalesStatus $SalesStatus
     *
     * @return $this
     */
    public function setSalesStatus($SalesStatus)
    {
        $this->SalesStatus = $SalesStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalesTaker()
    {
        return $this->SalesTaker;
    }

    /**
     * @param string $SalesTaker
     *
     * @return $this
     */
    public function setSalesTaker($SalesTaker)
    {
        $this->SalesTaker = $SalesTaker;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalesType()
    {
        return $this->SalesType;
    }

    /**
     * @param string $SalesType
     *
     * @return $this
     */
    public function setSalesType($SalesType)
    {
        $this->SalesType = $SalesType;

        return $this;
    }

    /**
     * @return AxdExtType_smmSalesUnitId
     */
    public function getSalesUnitId()
    {
        return $this->SalesUnitId;
    }

    /**
     * @param AxdExtType_smmSalesUnitId $SalesUnitId
     *
     * @return $this
     */
    public function setSalesUnitId($SalesUnitId)
    {
        $this->SalesUnitId = $SalesUnitId;

        return $this;
    }

    /**
     * @return AxdExtType_SalesSettlementType
     */
    public function getSettleVoucher()
    {
        return $this->SettleVoucher;
    }

    /**
     * @param AxdExtType_SalesSettlementType $SettleVoucher
     *
     * @return $this
     */
    public function setSettleVoucher($SettleVoucher)
    {
        $this->SettleVoucher = $SettleVoucher;

        return $this;
    }

    /**
     * @return AxdExtType_ShipCarrierAccount
     */
    public function getShipCarrierAccount()
    {
        return $this->ShipCarrierAccount;
    }

    /**
     * @param AxdExtType_ShipCarrierAccount $ShipCarrierAccount
     *
     * @return $this
     */
    public function setShipCarrierAccount($ShipCarrierAccount)
    {
        $this->ShipCarrierAccount = $ShipCarrierAccount;

        return $this;
    }

    /**
     * @return AxdExtType_ShipCarrierAccountCode
     */
    public function getShipCarrierAccountCode()
    {
        return $this->ShipCarrierAccountCode;
    }

    /**
     * @param AxdExtType_ShipCarrierAccountCode $ShipCarrierAccountCode
     *
     * @return $this
     */
    public function setShipCarrierAccountCode($ShipCarrierAccountCode)
    {
        $this->ShipCarrierAccountCode = $ShipCarrierAccountCode;

        return $this;
    }

    /**
     * @return AxdExtType_ShipCarrierBlindShipment
     */
    public function getShipCarrierBlindShipment()
    {
        return $this->ShipCarrierBlindShipment;
    }

    /**
     * @param AxdExtType_ShipCarrierBlindShipment $ShipCarrierBlindShipment
     *
     * @return $this
     */
    public function setShipCarrierBlindShipment($ShipCarrierBlindShipment)
    {
        $this->ShipCarrierBlindShipment = $ShipCarrierBlindShipment;

        return $this;
    }

    /**
     * @return AxdExtType_Name
     */
    public function getShipCarrierDeliveryContact()
    {
        return $this->ShipCarrierDeliveryContact;
    }

    /**
     * @param AxdExtType_Name $ShipCarrierDeliveryContact
     *
     * @return $this
     */
    public function setShipCarrierDeliveryContact($ShipCarrierDeliveryContact)
    {
        $this->ShipCarrierDeliveryContact = $ShipCarrierDeliveryContact;

        return $this;
    }

    /**
     * @return AxdEnum_ShipCarrierDlvType
     */
    public function getShipCarrierDlvType()
    {
        return $this->ShipCarrierDlvType;
    }

    /**
     * @param AxdEnum_ShipCarrierDlvType $ShipCarrierDlvType
     *
     * @return $this
     */
    public function setShipCarrierDlvType($ShipCarrierDlvType)
    {
        $this->ShipCarrierDlvType = $ShipCarrierDlvType;

        return $this;
    }

    /**
     * @return AxdExtType_ShipCarrierExpeditedShipment
     */
    public function getShipCarrierExpeditedShipment()
    {
        return $this->ShipCarrierExpeditedShipment;
    }

    /**
     * @param AxdExtType_ShipCarrierExpeditedShipment $ShipCarrierExpeditedShipment
     *
     * @return $this
     */
    public function setShipCarrierExpeditedShipment($ShipCarrierExpeditedShipment)
    {
        $this->ShipCarrierExpeditedShipment = $ShipCarrierExpeditedShipment;

        return $this;
    }

    /**
     * @return AxdExtType_ShipCarrierFuelSurcharge
     */
    public function getShipCarrierFuelSurcharge()
    {
        return $this->ShipCarrierFuelSurcharge;
    }

    /**
     * @param AxdExtType_ShipCarrierFuelSurcharge $ShipCarrierFuelSurcharge
     *
     * @return $this
     */
    public function setShipCarrierFuelSurcharge($ShipCarrierFuelSurcharge)
    {
        $this->ShipCarrierFuelSurcharge = $ShipCarrierFuelSurcharge;

        return $this;
    }

    /**
     * @return AxdExtType_ShipCarrierId
     */
    public function getShipCarrierID()
    {
        return $this->ShipCarrierID;
    }

    /**
     * @param AxdExtType_ShipCarrierId $ShipCarrierID
     *
     * @return $this
     */
    public function setShipCarrierID($ShipCarrierID)
    {
        $this->ShipCarrierID = $ShipCarrierID;

        return $this;
    }

    /**
     * @return AxdExtType_ShipCarrierResidentialDest
     */
    public function getShipCarrierResidential()
    {
        return $this->ShipCarrierResidential;
    }

    /**
     * @param AxdExtType_ShipCarrierResidentialDest $ShipCarrierResidential
     *
     * @return $this
     */
    public function setShipCarrierResidential($ShipCarrierResidential)
    {
        $this->ShipCarrierResidential = $ShipCarrierResidential;

        return $this;
    }

    /**
     * @return AxdExtType_SalesShippingDateConfirmed
     */
    public function getShippingDateConfirmed()
    {
        return $this->ShippingDateConfirmed;
    }

    /**
     * @param AxdExtType_SalesShippingDateConfirmed $ShippingDateConfirmed
     *
     * @return $this
     */
    public function setShippingDateConfirmed($ShippingDateConfirmed)
    {
        $this->ShippingDateConfirmed = $ShippingDateConfirmed;

        return $this;
    }

    /**
     * @return AxdExtType_SalesShippingDateRequested
     */
    public function getShippingDateRequested()
    {
        return $this->ShippingDateRequested;
    }

    /**
     * @param AxdExtType_SalesShippingDateRequested $ShippingDateRequested
     *
     * @return $this
     */
    public function setShippingDateRequested($ShippingDateRequested)
    {
        $this->ShippingDateRequested = $ShippingDateRequested;

        return $this;
    }

    /**
     * @return AxdExtType_SLGFinancialDataAreaId
     */
    public function getSLGFinancialCompany()
    {
        return $this->SLGFinancialCompany;
    }

    /**
     * @param AxdExtType_SLGFinancialDataAreaId $SLGFinancialCompany
     *
     * @return $this
     */
    public function setSLGFinancialCompany($SLGFinancialCompany)
    {
        $this->SLGFinancialCompany = $SLGFinancialCompany;

        return $this;
    }

    /**
     * @return AxdEnum_SLGIntrastat
     */
    public function getSLGIntrastat()
    {
        return $this->SLGIntrastat;
    }

    /**
     * @param AxdEnum_SLGIntrastat $SLGIntrastat
     *
     * @return $this
     */
    public function setSLGIntrastat($SLGIntrastat)
    {
        $this->SLGIntrastat = $SLGIntrastat;

        return $this;
    }

    /**
     * @return AxdExtType_Addressing
     */
    public function getSLGTaxRepresentativeAddress()
    {
        return $this->SLGTaxRepresentativeAddress;
    }

    /**
     * @param AxdExtType_Addressing $SLGTaxRepresentativeAddress
     *
     * @return $this
     */
    public function setSLGTaxRepresentativeAddress($SLGTaxRepresentativeAddress)
    {
        $this->SLGTaxRepresentativeAddress = $SLGTaxRepresentativeAddress;

        return $this;
    }

    /**
     * @return AxdExtType_AddressCity
     */
    public function getSLGTaxRepresentativeCity()
    {
        return $this->SLGTaxRepresentativeCity;
    }

    /**
     * @param AxdExtType_AddressCity $SLGTaxRepresentativeCity
     *
     * @return $this
     */
    public function setSLGTaxRepresentativeCity($SLGTaxRepresentativeCity)
    {
        $this->SLGTaxRepresentativeCity = $SLGTaxRepresentativeCity;

        return $this;
    }

    /**
     * @return AxdUnion_AxdExtType_AddressCountryRegionId_AxdType_ExtCodeValue
     */
    public function getSLGTaxRepresentativeCountryId()
    {
        return $this->SLGTaxRepresentativeCountryId;
    }

    /**
     * @param AxdUnion_AxdExtType_AddressCountryRegionId_AxdType_ExtCodeValue
     * $SLGTaxRepresentativeCountryId
     *
     * @return $this
     */
    public function setSLGTaxRepresentativeCountryId($SLGTaxRepresentativeCountryId)
    {
        $this->SLGTaxRepresentativeCountryId = $SLGTaxRepresentativeCountryId;

        return $this;
    }

    /**
     * @return AxdExtType_AddressStreet
     */
    public function getSLGTaxRepresentativeStreet()
    {
        return $this->SLGTaxRepresentativeStreet;
    }

    /**
     * @param AxdExtType_AddressStreet $SLGTaxRepresentativeStreet
     *
     * @return $this
     */
    public function setSLGTaxRepresentativeStreet($SLGTaxRepresentativeStreet)
    {
        $this->SLGTaxRepresentativeStreet = $SLGTaxRepresentativeStreet;

        return $this;
    }

    /**
     * @return AxdExtType_VATNum
     */
    public function getSLGTaxRepresentativeVATNum()
    {
        return $this->SLGTaxRepresentativeVATNum;
    }

    /**
     * @param AxdExtType_VATNum $SLGTaxRepresentativeVATNum
     *
     * @return $this
     */
    public function setSLGTaxRepresentativeVATNum($SLGTaxRepresentativeVATNum)
    {
        $this->SLGTaxRepresentativeVATNum = $SLGTaxRepresentativeVATNum;

        return $this;
    }

    /**
     * @return AxdUnion_AxdExtType_AddressZipCodeId_AxdType_ExtCodeValue
     */
    public function getSLGTaxRepresentativeZipCodeId()
    {
        return $this->SLGTaxRepresentativeZipCodeId;
    }

    /**
     * @param AxdUnion_AxdExtType_AddressZipCodeId_AxdType_ExtCodeValue
     * $SLGTaxRepresentativeZipCodeId
     *
     * @return $this
     */
    public function setSLGTaxRepresentativeZipCodeId($SLGTaxRepresentativeZipCodeId)
    {
        $this->SLGTaxRepresentativeZipCodeId = $SLGTaxRepresentativeZipCodeId;

        return $this;
    }

    /**
     * @return AxdExtType_smmCampaignId
     */
    public function getSmmCampaignId()
    {
        return $this->smmCampaignId;
    }

    /**
     * @param AxdExtType_smmCampaignId $smmCampaignId
     *
     * @return $this
     */
    public function setSmmCampaignId($smmCampaignId)
    {
        $this->smmCampaignId = $smmCampaignId;

        return $this;
    }

    /**
     * @return AxdExtType_smmSalesAmountTotal
     */
    public function getSmmSalesAmountTotal()
    {
        return $this->smmSalesAmountTotal;
    }

    /**
     * @param AxdExtType_smmSalesAmountTotal $smmSalesAmountTotal
     *
     * @return $this
     */
    public function setSmmSalesAmountTotal($smmSalesAmountTotal)
    {
        $this->smmSalesAmountTotal = $smmSalesAmountTotal;

        return $this;
    }

    /**
     * @return AxdEnum_Solvability
     */
    public function getSolvability()
    {
        return $this->Solvability;
    }

    /**
     * @param AxdEnum_Solvability $Solvability
     *
     * @return $this
     */
    public function setSolvability($Solvability)
    {
        $this->Solvability = $Solvability;

        return $this;
    }

    /**
     * @return AxdExtType_IntrastatProcId
     */
    public function getStatProcId()
    {
        return $this->StatProcId;
    }

    /**
     * @param AxdExtType_IntrastatProcId $StatProcId
     *
     * @return $this
     */
    public function setStatProcId($StatProcId)
    {
        $this->StatProcId = $StatProcId;

        return $this;
    }

    /**
     * @return AxdExtType_TaxGroup
     */
    public function getTaxGroup()
    {
        return $this->TaxGroup;
    }

    /**
     * @param AxdExtType_TaxGroup $TaxGroup
     *
     * @return $this
     */
    public function setTaxGroup($TaxGroup)
    {
        $this->TaxGroup = $TaxGroup;

        return $this;
    }

    /**
     * @return AxdExtType_AmountCur
     */
    public function getTotalBalance()
    {
        return $this->totalBalance;
    }

    /**
     * @param AxdExtType_AmountCur $totalBalance
     *
     * @return $this
     */
    public function setTotalBalance($totalBalance)
    {
        $this->totalBalance = $totalBalance;

        return $this;
    }

    /**
     * @return AxdExtType_DiscAmount
     */
    public function getTotalCashDiscount()
    {
        return $this->TotalCashDiscount;
    }

    /**
     * @param AxdExtType_DiscAmount $TotalCashDiscount
     *
     * @return $this
     */
    public function setTotalCashDiscount($TotalCashDiscount)
    {
        $this->TotalCashDiscount = $TotalCashDiscount;

        return $this;
    }

    /**
     * @return AxdExtType_AmountCur
     */
    public function getTotalInvoice()
    {
        return $this->TotalInvoice;
    }

    /**
     * @param AxdExtType_AmountCur $TotalInvoice
     *
     * @return $this
     */
    public function setTotalInvoice($TotalInvoice)
    {
        $this->TotalInvoice = $TotalInvoice;

        return $this;
    }

    /**
     * @return AxdExtType_MarkupAmount
     */
    public function getTotalMiscCharges()
    {
        return $this->TotalMiscCharges;
    }

    /**
     * @param AxdExtType_MarkupAmount $TotalMiscCharges
     *
     * @return $this
     */
    public function setTotalMiscCharges($TotalMiscCharges)
    {
        $this->TotalMiscCharges = $TotalMiscCharges;

        return $this;
    }

    /**
     * @return AxdExtType_TaxAmountCur
     */
    public function getTotalSalesTax()
    {
        return $this->TotalSalesTax;
    }

    /**
     * @param AxdExtType_TaxAmountCur $TotalSalesTax
     *
     * @return $this
     */
    public function setTotalSalesTax($TotalSalesTax)
    {
        $this->TotalSalesTax = $TotalSalesTax;

        return $this;
    }

    /**
     * @return AxdExtType_IntrastatTransactionCodeId
     */
    public function getTransactionCode()
    {
        return $this->TransactionCode;
    }

    /**
     * @param AxdExtType_IntrastatTransactionCodeId $TransactionCode
     *
     * @return $this
     */
    public function setTransactionCode($TransactionCode)
    {
        $this->TransactionCode = $TransactionCode;

        return $this;
    }

    /**
     * @return AxdExtType_IntrastatTransport
     */
    public function getTransport()
    {
        return $this->Transport;
    }

    /**
     * @param AxdExtType_IntrastatTransport $Transport
     *
     * @return $this
     */
    public function setTransport($Transport)
    {
        $this->Transport = $Transport;

        return $this;
    }

    /**
     * @return AxdExtType_URL
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * @param AxdExtType_URL $URL
     *
     * @return $this
     */
    public function setURL($URL)
    {
        $this->URL = $URL;

        return $this;
    }

    /**
     * @return AxdExtType_VATNumJournal
     */
    public function getVATNum()
    {
        return $this->VATNum;
    }

    /**
     * @param AxdExtType_VATNumJournal $VATNum
     *
     * @return $this
     */
    public function setVATNum($VATNum)
    {
        $this->VATNum = $VATNum;

        return $this;
    }

    /**
     * @return AxdExtType_WMSIsRush
     */
    public function getWMSIsRush()
    {
        return $this->WMSIsRush;
    }

    /**
     * @param AxdExtType_WMSIsRush $WMSIsRush
     *
     * @return $this
     */
    public function setWMSIsRush($WMSIsRush)
    {
        $this->WMSIsRush = $WMSIsRush;

        return $this;
    }

    /**
     * @return AxdEntity_SalesLine[]
     */
    public function getSalesLines()
    {
        return $this->SalesLine;
    }

    /**
     * @param AxdEntity_SalesLine[] $SalesLines
     *
     * @return $this
     */
    public function setSalesLine(array $SalesLines)
    {
        $this->SalesLine = $SalesLines;

        return $this;
    }

    public function addSalesLine(AxdEntity_SalesLine $salesLine)
    {
        $this->SalesLine[] = $salesLine;
    }

    /**
     * @return AxdEntity_DocuRefHeader
     */
    public function getDocuRefHeader()
    {
        return $this->DocuRefHeader;
    }

    /**
     * @param AxdEntity_DocuRefHeader $DocuRefHeader
     *
     * @return $this
     */
    public function setDocuRefHeader($DocuRefHeader)
    {
        $this->DocuRefHeader = $DocuRefHeader;

        return $this;
    }

    /**
     * @return AxdEntity_MarkupTransHeader
     */
    public function getMarkupTransHeader()
    {
        return $this->MarkupTransHeader;
    }

    /**
     * @param AxdEntity_MarkupTransHeader $MarkupTransHeader
     *
     * @return $this
     */
    public function setMarkupTransHeader($MarkupTransHeader)
    {
        $this->MarkupTransHeader = $MarkupTransHeader;

        return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param string $class
     *
     * @return $this
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * @return AxdEnum_AxdEntityAction
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param AxdEnum_AxdEntityAction $action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }
}
