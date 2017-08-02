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

class AxdEntity_SalesLine
{
    /**
     * @var AxdExtType_ProjActivityNumber
     */
    protected $ActivityNumber = null;

    /**
     * @var AxdExtType_Backorder
     */
    protected $BackOrder = null;

    /**
     * @var AxdExtType_SalesBarCode
     */
    protected $BarCode = null;

    /**
     * @var AxdExtType_BarcodeSetupId
     */
    protected $BarCodeType = null;

    /**
     * @var AxdExtType_SalesBlanketRefTransId
     */
    protected $BlanketRefTransId = null;

    /**
     * @var AxdExtType_LineStopped
     */
    protected $Blocked = null;

    /**
     * @var AxdExtType_RFIDCaseTagging
     */
    protected $CaseTagging = null;

    /**
     * @var AxdExtType_LineComplete
     */
    protected $Complete = null;

    /**
     * @var AxdExtType_SalesShippingDate
     */
    protected $ConfirmedDlv = null;

    /**
     * @var AxdExtType_ReturnCostPrice
     */
    protected $CostPrice = null;

    /**
     * @var AxdUnion_AxdExtType_CustCurrencyCode_AxdType_ExtCodeValue
     */
    protected $CurrencyCode = null;

    /**
     * @var AxdUnion_AxdExtType_CustAccount_AxdType_ExtCodeValue
     */
    protected $CustAccount = null;

    /**
     * @var AxdExtType_CustGroupId
     */
    protected $CustGroup = null;

    /**
     * @var AxdExtType_CustLineNum
     */
    protected $CustomerLineNum = null;

    /**
     * @var AxdExtType_CustRefLine
     */
    protected $CustomerRef = null;

    /**
     * @var AxdExtType_SalesQty
     */
    protected $DeliveredIntotal = null;

    /**
     * @var AxdExtType_Addressing
     */
    protected $DeliveryAddress = null;

    /**
     * @var AxdExtType_AddressCity
     */
    protected $DeliveryCity = null;

    /**
     * @var AxdUnion_AxdExtType_AddressCountryRegionId_AxdType_ExtCodeValue
     */
    protected $DeliveryCountryRegionId = null;

    /**
     * @var AxdUnion_AxdExtType_AddressCountyId_AxdType_ExtCodeValue
     */
    protected $DeliveryCounty = null;

    /**
     * @var AxdEnum_SalesDeliveryDateControlType
     */
    protected $DeliveryDateControlType = null;

    /**
     * @var AxdExtType_CustName
     */
    protected $DeliveryName = null;

    /**
     * @var AxdUnion_AxdExtType_AddressStateId_AxdType_ExtCodeValue
     */
    protected $DeliveryState = null;

    /**
     * @var AxdExtType_AddressStreet
     */
    protected $DeliveryStreet = null;

    /**
     * @var AxdExtType_TradeLineDlvTypeId
     */
    protected $DeliveryType = null;

    /**
     * @var AxdUnion_AxdExtType_AddressZipCodeId_AxdType_ExtCodeValue
     */
    protected $DeliveryZipCode = null;

    /**
     * @var AxdArray_AxdExtType_Dimension
     */
    protected $Dimension = null;

    /**
     * @var AxdUnion_AxdExtType_DlvModeId_AxdType_ExtCodeValue
     */
    protected $DlvMode = null;

    /**
     * @var AxdExtType_EInvoiceAccountCode
     */
    protected $EInvoiceAccountCode = null;

    /**
     * @var AxdExtType_ReturnExpectedRetQty
     */
    protected $ExpectedRetQty = null;

    /**
     * @var AxdExtType_SalesExternalItemId
     */
    protected $ExternalItemId = null;

    /**
     * @var AxdExtType_InventQty
     */
    protected $InventDeliverNow = null;

    /**
     * @var AxdExtType_InventDimId
     */
    protected $InventDimId = null;

    /**
     * @var AxdExtType_InventRefId
     */
    protected $InventRefId = null;

    /**
     * @var AxdExtType_InventRefTransId
     */
    protected $InventRefTransId = null;

    /**
     * @var AxdEnum_InventRefType
     */
    protected $InventRefType = null;

    /**
     * @var AxdExtType_InventTransId
     */
    protected $InventTransId = null;

    /**
     * @var AxdExtType_InventTransIdReturn
     */
    protected $InventTransIdReturn = null;

    /**
     * @var AxdExtType_ItemBOMId
     */
    protected $ItemBOMId = null;

    /**
     * @var AxdUnion_AxdExtType_ItemIdSmall_AxdType_ExtCodeValue
     */
    protected $ItemId = null;

    /**
     * @var AxdExtType_ReturnItemReplaced
     */
    protected $itemReplaced = null;

    /**
     * @var AxdExtType_RFIDItemTagging
     */
    protected $ItemTagging = null;

    /**
     * @var AxdExtType_SalesLedgerAccount
     */
    protected $LedgerAccount = null;

    /**
     * @var AxdExtType_SalesLineAmount
     */
    protected $LineAmount = null;

    /**
     * @var AxdExtType_SalesLineDisc
     */
    protected $LineDisc = null;

    /**
     * @var AxdExtType_LineHeader
     */
    protected $LineHeader = null;

    /**
     * @var AxdExtType_LineNum
     */
    protected $LineNum = null;

    /**
     * @var AxdExtType_SalesLinePercent
     */
    protected $LinePercent = null;

    /**
     * @var AxdExtType_SalesMultiLnDisc
     */
    protected $MultiLnDisc = null;

    /**
     * @var AxdExtType_SalesMultiLnPercent
     */
    protected $MultiLnPercent = null;

    /**
     * @var AxdExtType_ItemFreeTxt
     */
    protected $Name = null;

    /**
     * @var AxdExtType_SalesOverDeliveryPct
     */
    protected $OverDeliveryPct = null;

    /**
     * @var AxdUnion_AxdExtType_InventPackingUnit_AxdType_ExtCodeValue
     */
    protected $PackingUnit = null;

    /**
     * @var AxdExtType_InventPackingUnitQty
     */
    protected $PackingUnitQty = null;

    /**
     * @var AxdExtType_RFIDPalletTagging
     */
    protected $PalletTagging = null;

    /**
     * @var AxdExtType_IntrastatPortId
     */
    protected $Port = null;

    /**
     * @var AxdExtType_PriceUnit
     */
    protected $PriceUnit = null;

    /**
     * @var AxdExtType_ProjCategoryId
     */
    protected $ProjCategoryId = null;

    /**
     * @var AxdExtType_ProjId
     */
    protected $ProjId = null;

    /**
     * @var AxdExtType_ProjLinePropertyId
     */
    protected $ProjLinePropertyId = null;

    /**
     * @var AxdExtType_ProjItemTransId
     */
    protected $ProjTransId = null;

    /**
     * @var AxdExtType_CustPurchaseOrder
     */
    protected $PurchorderFormNum = null;

    /**
     * @var AxdExtType_InventQty
     */
    protected $QtyOrdered = null;

    /**
     * @var AxdExtType_SalesReceiptDateConfirmed
     */
    protected $ReceiptDateConfirmed = null;

    /**
     * @var AxdExtType_SalesReceiptDateRequested
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
     * @var AxdExtType_InventQty
     */
    protected $RemainInventFinancial = null;

    /**
     * @var AxdExtType_InventQty
     */
    protected $RemainInventPhysical = null;

    /**
     * @var AxdExtType_SalesQty
     */
    protected $RemainSalesFinancial = null;

    /**
     * @var AxdExtType_SalesQty
     */
    protected $RemainSalesPhysical = null;

    /**
     * @var AxdEnum_ItemReservation
     */
    protected $Reservation = null;

    /**
     * @var AxdExtType_ReturnAllowReservation
     */
    protected $ReturnAllowReservation = null;

    /**
     * @var AxdExtType_ReturnArrivalDate
     */
    protected $ReturnArrivalDate = null;

    /**
     * @var AxdExtType_ReturnClosedDate
     */
    protected $ReturnClosedDate = null;

    /**
     * @var AxdExtType_ReturnDeadline
     */
    protected $ReturnDeadLine = null;

    /**
     * @var AxdExtType_ReturnDispositionCodeId
     */
    protected $ReturnDispositionCodeId = null;

    /**
     * @var AxdEnum_ReturnStatusLine
     */
    protected $ReturnStatus = null;

    /**
     * @var AxdExtType_SalesQty
     */
    protected $SalesDeliverNow = null;

    /**
     * @var AxdExtType_CommissSalesGroup
     */
    protected $SalesGroup = null;

    /**
     * @var AxdExtType_SalesIdBase
     */
    protected $SalesId = null;

    /**
     * @var AxdExtType_SalesMarkup
     */
    protected $SalesMarkup = null;

    /**
     * @var AxdExtType_SalesPrice
     */
    protected $SalesPrice = null;

    /**
     * @var AxdExtType_SalesOrderedQty
     */
    protected $SalesQty = null;

    /**
     * @var AxdEnum_SalesStatus
     */
    protected $SalesStatus = null;

    /**
     * @var AxdEnum_bool
     */
    protected $SalesTableLineUpdate = null;

    /**
     * @var AxdEnum_SalesType
     */
    protected $SalesType = null;

    /**
     * @var AxdUnion_AxdExtType_SalesUnit_AxdType_ExtCodeValue
     */
    protected $SalesUnit = null;

    /**
     * @var AxdEnum_NoYes
     */
    protected $Scrap = null;

    /**
     * @var AxdExtType_ShipCarrierAccount
     */
    protected $ShipCarrierAccount = null;

    /**
     * @var AxdExtType_ShipCarrierAccountCode
     */
    protected $ShipCarrierAccountCode = null;

    /**
     * @var AxdEnum_ShipCarrierDlvType
     */
    protected $ShipCarrierDlvType = null;

    /**
     * @var AxdExtType_ShipCarrierId
     */
    protected $ShipCarrierID = null;

    /**
     * @var AxdExtType_SalesShippingDateConfirmed
     */
    protected $ShippingDateConfirmed = null;

    /**
     * @var AxdExtType_SalesShippingDateRequested
     */
    protected $ShippingDateRequested = null;

    /**
     * @var AxdExtType_IntrastatProcId
     */
    protected $StatProcId = null;

    /**
     * @var AxdExtType_IntrastatTriangularDeal
     */
    protected $StatTriangularDeal = null;

    /**
     * @var AxdExtType_TaxAutoGenerated
     */
    protected $TaxAutogenerated = null;

    /**
     * @var AxdExtType_TaxGroup
     */
    protected $TaxGroup = null;

    /**
     * @var AxdExtType_TaxItemGroup
     */
    protected $TaxItemGroup = null;

    /**
     * @var AxdExtType_IntrastatTransactionCodeId
     */
    protected $TransactionCode = null;

    /**
     * @var AxdExtType_IntrastatTransport
     */
    protected $Transport = null;

    /**
     * @var AxdExtType_SalesUnderDeliveryPct
     */
    protected $UnderDeliveryPct = null;

    /**
     * @var AxdEntity_InventDim[]
     */
    protected $InventDim = [];

    /**
     * @var AxdEntity_DocuRefLine
     */
    protected $DocuRefLine = null;

    /**
     * @var AxdEntity_MarkupTransLine
     */
    protected $MarkupTransLine = null;

    /**
     * @var string
     */
    protected $class = null;

    /**
     * @var AxdEnum_AxdEntityAction
     */
    protected $action = null;

    /**
     * Constructor.
     *
     * @param string $itemId
     * @param int    $salesQty
     * @param string $salesUnit
     */
    public function __construct($itemId, $salesQty, $salesUnit
    ) {
        $this->ItemId = $itemId;
        $this->SalesQty = $salesQty;
        $this->SalesUnit = $salesUnit;
        $this->class = 'entity';
    }

    /**
     * @return AxdExtType_ProjActivityNumber
     */
    public function getActivityNumber()
    {
        return $this->ActivityNumber;
    }

    /**
     * @param AxdExtType_ProjActivityNumber $ActivityNumber
     *
     * @return $this
     */
    public function setActivityNumber($ActivityNumber)
    {
        $this->ActivityNumber = $ActivityNumber;

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
     * @return AxdExtType_SalesBarCode
     */
    public function getBarCode()
    {
        return $this->BarCode;
    }

    /**
     * @param AxdExtType_SalesBarCode $BarCode
     *
     * @return $this
     */
    public function setBarCode($BarCode)
    {
        $this->BarCode = $BarCode;

        return $this;
    }

    /**
     * @return AxdExtType_BarcodeSetupId
     */
    public function getBarCodeType()
    {
        return $this->BarCodeType;
    }

    /**
     * @param AxdExtType_BarcodeSetupId $BarCodeType
     *
     * @return $this
     */
    public function setBarCodeType($BarCodeType)
    {
        $this->BarCodeType = $BarCodeType;

        return $this;
    }

    /**
     * @return AxdExtType_SalesBlanketRefTransId
     */
    public function getBlanketRefTransId()
    {
        return $this->BlanketRefTransId;
    }

    /**
     * @param AxdExtType_SalesBlanketRefTransId $BlanketRefTransId
     *
     * @return $this
     */
    public function setBlanketRefTransId($BlanketRefTransId)
    {
        $this->BlanketRefTransId = $BlanketRefTransId;

        return $this;
    }

    /**
     * @return AxdExtType_LineStopped
     */
    public function getBlocked()
    {
        return $this->Blocked;
    }

    /**
     * @param AxdExtType_LineStopped $Blocked
     *
     * @return $this
     */
    public function setBlocked($Blocked)
    {
        $this->Blocked = $Blocked;

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
     * @return AxdExtType_SalesShippingDate
     */
    public function getConfirmedDlv()
    {
        return $this->ConfirmedDlv;
    }

    /**
     * @param AxdExtType_SalesShippingDate $ConfirmedDlv
     *
     * @return $this
     */
    public function setConfirmedDlv($ConfirmedDlv)
    {
        $this->ConfirmedDlv = $ConfirmedDlv;

        return $this;
    }

    /**
     * @return AxdExtType_ReturnCostPrice
     */
    public function getCostPrice()
    {
        return $this->CostPrice;
    }

    /**
     * @param AxdExtType_ReturnCostPrice $CostPrice
     *
     * @return $this
     */
    public function setCostPrice($CostPrice)
    {
        $this->CostPrice = $CostPrice;

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
     * @return AxdUnion_AxdExtType_CustAccount_AxdType_ExtCodeValue
     */
    public function getCustAccount()
    {
        return $this->CustAccount;
    }

    /**
     * @param AxdUnion_AxdExtType_CustAccount_AxdType_ExtCodeValue $CustAccount
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
     * @return AxdExtType_CustLineNum
     */
    public function getCustomerLineNum()
    {
        return $this->CustomerLineNum;
    }

    /**
     * @param AxdExtType_CustLineNum $CustomerLineNum
     *
     * @return $this
     */
    public function setCustomerLineNum($CustomerLineNum)
    {
        $this->CustomerLineNum = $CustomerLineNum;

        return $this;
    }

    /**
     * @return AxdExtType_CustRefLine
     */
    public function getCustomerRef()
    {
        return $this->CustomerRef;
    }

    /**
     * @param AxdExtType_CustRefLine $CustomerRef
     *
     * @return $this
     */
    public function setCustomerRef($CustomerRef)
    {
        $this->CustomerRef = $CustomerRef;

        return $this;
    }

    /**
     * @return AxdExtType_SalesQty
     */
    public function getDeliveredIntotal()
    {
        return $this->DeliveredIntotal;
    }

    /**
     * @param AxdExtType_SalesQty $DeliveredIntotal
     *
     * @return $this
     */
    public function setDeliveredIntotal($DeliveredIntotal)
    {
        $this->DeliveredIntotal = $DeliveredIntotal;

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
     * @return AxdExtType_AddressCity
     */
    public function getDeliveryCity()
    {
        return $this->DeliveryCity;
    }

    /**
     * @param AxdExtType_AddressCity $DeliveryCity
     *
     * @return $this
     */
    public function setDeliveryCity($DeliveryCity)
    {
        $this->DeliveryCity = $DeliveryCity;

        return $this;
    }

    /**
     * @return AxdUnion_AxdExtType_AddressCountryRegionId_AxdType_ExtCodeValue
     */
    public function getDeliveryCountryRegionId()
    {
        return $this->DeliveryCountryRegionId;
    }

    /**
     * @param AxdUnion_AxdExtType_AddressCountryRegionId_AxdType_ExtCodeValue
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
     * @return AxdExtType_CustName
     */
    public function getDeliveryName()
    {
        return $this->DeliveryName;
    }

    /**
     * @param AxdExtType_CustName $DeliveryName
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
     * @return AxdExtType_AddressStreet
     */
    public function getDeliveryStreet()
    {
        return $this->DeliveryStreet;
    }

    /**
     * @param AxdExtType_AddressStreet $DeliveryStreet
     *
     * @return $this
     */
    public function setDeliveryStreet($DeliveryStreet)
    {
        $this->DeliveryStreet = $DeliveryStreet;

        return $this;
    }

    /**
     * @return AxdExtType_TradeLineDlvTypeId
     */
    public function getDeliveryType()
    {
        return $this->DeliveryType;
    }

    /**
     * @param AxdExtType_TradeLineDlvTypeId $DeliveryType
     *
     * @return $this
     */
    public function setDeliveryType($DeliveryType)
    {
        $this->DeliveryType = $DeliveryType;

        return $this;
    }

    /**
     * @return AxdUnion_AxdExtType_AddressZipCodeId_AxdType_ExtCodeValue
     */
    public function getDeliveryZipCode()
    {
        return $this->DeliveryZipCode;
    }

    /**
     * @param AxdUnion_AxdExtType_AddressZipCodeId_AxdType_ExtCodeValue
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
     * @return AxdUnion_AxdExtType_DlvModeId_AxdType_ExtCodeValue
     */
    public function getDlvMode()
    {
        return $this->DlvMode;
    }

    /**
     * @param AxdUnion_AxdExtType_DlvModeId_AxdType_ExtCodeValue $DlvMode
     *
     * @return $this
     */
    public function setDlvMode($DlvMode)
    {
        $this->DlvMode = $DlvMode;

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
     * @return AxdExtType_ReturnExpectedRetQty
     */
    public function getExpectedRetQty()
    {
        return $this->ExpectedRetQty;
    }

    /**
     * @param AxdExtType_ReturnExpectedRetQty $ExpectedRetQty
     *
     * @return $this
     */
    public function setExpectedRetQty($ExpectedRetQty)
    {
        $this->ExpectedRetQty = $ExpectedRetQty;

        return $this;
    }

    /**
     * @return AxdExtType_SalesExternalItemId
     */
    public function getExternalItemId()
    {
        return $this->ExternalItemId;
    }

    /**
     * @param AxdExtType_SalesExternalItemId $ExternalItemId
     *
     * @return $this
     */
    public function setExternalItemId($ExternalItemId)
    {
        $this->ExternalItemId = $ExternalItemId;

        return $this;
    }

    /**
     * @return AxdExtType_InventQty
     */
    public function getInventDeliverNow()
    {
        return $this->InventDeliverNow;
    }

    /**
     * @param AxdExtType_InventQty $InventDeliverNow
     *
     * @return $this
     */
    public function setInventDeliverNow($InventDeliverNow)
    {
        $this->InventDeliverNow = $InventDeliverNow;

        return $this;
    }

    /**
     * @return AxdExtType_InventDimId
     */
    public function getInventDimId()
    {
        return $this->InventDimId;
    }

    /**
     * @param AxdExtType_InventDimId $InventDimId
     *
     * @return $this
     */
    public function setInventDimId($InventDimId)
    {
        $this->InventDimId = $InventDimId;

        return $this;
    }

    /**
     * @return AxdExtType_InventRefId
     */
    public function getInventRefId()
    {
        return $this->InventRefId;
    }

    /**
     * @param AxdExtType_InventRefId $InventRefId
     *
     * @return $this
     */
    public function setInventRefId($InventRefId)
    {
        $this->InventRefId = $InventRefId;

        return $this;
    }

    /**
     * @return AxdExtType_InventRefTransId
     */
    public function getInventRefTransId()
    {
        return $this->InventRefTransId;
    }

    /**
     * @param AxdExtType_InventRefTransId $InventRefTransId
     *
     * @return $this
     */
    public function setInventRefTransId($InventRefTransId)
    {
        $this->InventRefTransId = $InventRefTransId;

        return $this;
    }

    /**
     * @return AxdEnum_InventRefType
     */
    public function getInventRefType()
    {
        return $this->InventRefType;
    }

    /**
     * @param AxdEnum_InventRefType $InventRefType
     *
     * @return $this
     */
    public function setInventRefType($InventRefType)
    {
        $this->InventRefType = $InventRefType;

        return $this;
    }

    /**
     * @return AxdExtType_InventTransId
     */
    public function getInventTransId()
    {
        return $this->InventTransId;
    }

    /**
     * @param AxdExtType_InventTransId $InventTransId
     *
     * @return $this
     */
    public function setInventTransId($InventTransId)
    {
        $this->InventTransId = $InventTransId;

        return $this;
    }

    /**
     * @return AxdExtType_InventTransIdReturn
     */
    public function getInventTransIdReturn()
    {
        return $this->InventTransIdReturn;
    }

    /**
     * @param AxdExtType_InventTransIdReturn $InventTransIdReturn
     *
     * @return $this
     */
    public function setInventTransIdReturn($InventTransIdReturn)
    {
        $this->InventTransIdReturn = $InventTransIdReturn;

        return $this;
    }

    /**
     * @return AxdExtType_ItemBOMId
     */
    public function getItemBOMId()
    {
        return $this->ItemBOMId;
    }

    /**
     * @param AxdExtType_ItemBOMId $ItemBOMId
     *
     * @return $this
     */
    public function setItemBOMId($ItemBOMId)
    {
        $this->ItemBOMId = $ItemBOMId;

        return $this;
    }

    /**
     * @return AxdUnion_AxdExtType_ItemIdSmall_AxdType_ExtCodeValue
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param AxdUnion_AxdExtType_ItemIdSmall_AxdType_ExtCodeValue $ItemId
     *
     * @return $this
     */
    public function setItemId($ItemId)
    {
        $this->ItemId = $ItemId;

        return $this;
    }

    /**
     * @return AxdExtType_ReturnItemReplaced
     */
    public function getItemReplaced()
    {
        return $this->itemReplaced;
    }

    /**
     * @param AxdExtType_ReturnItemReplaced $itemReplaced
     *
     * @return $this
     */
    public function setItemReplaced($itemReplaced)
    {
        $this->itemReplaced = $itemReplaced;

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
     * @return AxdExtType_SalesLedgerAccount
     */
    public function getLedgerAccount()
    {
        return $this->LedgerAccount;
    }

    /**
     * @param AxdExtType_SalesLedgerAccount $LedgerAccount
     *
     * @return $this
     */
    public function setLedgerAccount($LedgerAccount)
    {
        $this->LedgerAccount = $LedgerAccount;

        return $this;
    }

    /**
     * @return AxdExtType_SalesLineAmount
     */
    public function getLineAmount()
    {
        return $this->LineAmount;
    }

    /**
     * @param AxdExtType_SalesLineAmount $LineAmount
     *
     * @return $this
     */
    public function setLineAmount($LineAmount)
    {
        $this->LineAmount = $LineAmount;

        return $this;
    }

    /**
     * @return AxdExtType_SalesLineDisc
     */
    public function getLineDisc()
    {
        return $this->LineDisc;
    }

    /**
     * @param AxdExtType_SalesLineDisc $LineDisc
     *
     * @return $this
     */
    public function setLineDisc($LineDisc)
    {
        $this->LineDisc = $LineDisc;

        return $this;
    }

    /**
     * @return AxdExtType_LineHeader
     */
    public function getLineHeader()
    {
        return $this->LineHeader;
    }

    /**
     * @param AxdExtType_LineHeader $LineHeader
     *
     * @return $this
     */
    public function setLineHeader($LineHeader)
    {
        $this->LineHeader = $LineHeader;

        return $this;
    }

    /**
     * @return AxdExtType_LineNum
     */
    public function getLineNum()
    {
        return $this->LineNum;
    }

    /**
     * @param AxdExtType_LineNum $LineNum
     *
     * @return $this
     */
    public function setLineNum($LineNum)
    {
        $this->LineNum = $LineNum;

        return $this;
    }

    /**
     * @return AxdExtType_SalesLinePercent
     */
    public function getLinePercent()
    {
        return $this->LinePercent;
    }

    /**
     * @param AxdExtType_SalesLinePercent $LinePercent
     *
     * @return $this
     */
    public function setLinePercent($LinePercent)
    {
        $this->LinePercent = $LinePercent;

        return $this;
    }

    /**
     * @return AxdExtType_SalesMultiLnDisc
     */
    public function getMultiLnDisc()
    {
        return $this->MultiLnDisc;
    }

    /**
     * @param AxdExtType_SalesMultiLnDisc $MultiLnDisc
     *
     * @return $this
     */
    public function setMultiLnDisc($MultiLnDisc)
    {
        $this->MultiLnDisc = $MultiLnDisc;

        return $this;
    }

    /**
     * @return AxdExtType_SalesMultiLnPercent
     */
    public function getMultiLnPercent()
    {
        return $this->MultiLnPercent;
    }

    /**
     * @param AxdExtType_SalesMultiLnPercent $MultiLnPercent
     *
     * @return $this
     */
    public function setMultiLnPercent($MultiLnPercent)
    {
        $this->MultiLnPercent = $MultiLnPercent;

        return $this;
    }

    /**
     * @return AxdExtType_ItemFreeTxt
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param AxdExtType_ItemFreeTxt $Name
     *
     * @return $this
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * @return AxdExtType_SalesOverDeliveryPct
     */
    public function getOverDeliveryPct()
    {
        return $this->OverDeliveryPct;
    }

    /**
     * @param AxdExtType_SalesOverDeliveryPct $OverDeliveryPct
     *
     * @return $this
     */
    public function setOverDeliveryPct($OverDeliveryPct)
    {
        $this->OverDeliveryPct = $OverDeliveryPct;

        return $this;
    }

    /**
     * @return AxdUnion_AxdExtType_InventPackingUnit_AxdType_ExtCodeValue
     */
    public function getPackingUnit()
    {
        return $this->PackingUnit;
    }

    /**
     * @param AxdUnion_AxdExtType_InventPackingUnit_AxdType_ExtCodeValue $PackingUnit
     *
     * @return $this
     */
    public function setPackingUnit($PackingUnit)
    {
        $this->PackingUnit = $PackingUnit;

        return $this;
    }

    /**
     * @return AxdExtType_InventPackingUnitQty
     */
    public function getPackingUnitQty()
    {
        return $this->PackingUnitQty;
    }

    /**
     * @param AxdExtType_InventPackingUnitQty $PackingUnitQty
     *
     * @return $this
     */
    public function setPackingUnitQty($PackingUnitQty)
    {
        $this->PackingUnitQty = $PackingUnitQty;

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
     * @return AxdExtType_PriceUnit
     */
    public function getPriceUnit()
    {
        return $this->PriceUnit;
    }

    /**
     * @param AxdExtType_PriceUnit $PriceUnit
     *
     * @return $this
     */
    public function setPriceUnit($PriceUnit)
    {
        $this->PriceUnit = $PriceUnit;

        return $this;
    }

    /**
     * @return AxdExtType_ProjCategoryId
     */
    public function getProjCategoryId()
    {
        return $this->ProjCategoryId;
    }

    /**
     * @param AxdExtType_ProjCategoryId $ProjCategoryId
     *
     * @return $this
     */
    public function setProjCategoryId($ProjCategoryId)
    {
        $this->ProjCategoryId = $ProjCategoryId;

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
     * @return AxdExtType_ProjLinePropertyId
     */
    public function getProjLinePropertyId()
    {
        return $this->ProjLinePropertyId;
    }

    /**
     * @param AxdExtType_ProjLinePropertyId $ProjLinePropertyId
     *
     * @return $this
     */
    public function setProjLinePropertyId($ProjLinePropertyId)
    {
        $this->ProjLinePropertyId = $ProjLinePropertyId;

        return $this;
    }

    /**
     * @return AxdExtType_ProjItemTransId
     */
    public function getProjTransId()
    {
        return $this->ProjTransId;
    }

    /**
     * @param AxdExtType_ProjItemTransId $ProjTransId
     *
     * @return $this
     */
    public function setProjTransId($ProjTransId)
    {
        $this->ProjTransId = $ProjTransId;

        return $this;
    }

    /**
     * @return AxdExtType_CustPurchaseOrder
     */
    public function getPurchorderFormNum()
    {
        return $this->PurchorderFormNum;
    }

    /**
     * @param AxdExtType_CustPurchaseOrder $PurchorderFormNum
     *
     * @return $this
     */
    public function setPurchorderFormNum($PurchorderFormNum)
    {
        $this->PurchorderFormNum = $PurchorderFormNum;

        return $this;
    }

    /**
     * @return AxdExtType_InventQty
     */
    public function getQtyOrdered()
    {
        return $this->QtyOrdered;
    }

    /**
     * @param AxdExtType_InventQty $QtyOrdered
     *
     * @return $this
     */
    public function setQtyOrdered($QtyOrdered)
    {
        $this->QtyOrdered = $QtyOrdered;

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
     * @return AxdExtType_SalesReceiptDateRequested
     */
    public function getReceiptDateRequested()
    {
        return $this->ReceiptDateRequested;
    }

    /**
     * @param AxdExtType_SalesReceiptDateRequested $ReceiptDateRequested
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
     * @return AxdExtType_InventQty
     */
    public function getRemainInventFinancial()
    {
        return $this->RemainInventFinancial;
    }

    /**
     * @param AxdExtType_InventQty $RemainInventFinancial
     *
     * @return $this
     */
    public function setRemainInventFinancial($RemainInventFinancial)
    {
        $this->RemainInventFinancial = $RemainInventFinancial;

        return $this;
    }

    /**
     * @return AxdExtType_InventQty
     */
    public function getRemainInventPhysical()
    {
        return $this->RemainInventPhysical;
    }

    /**
     * @param AxdExtType_InventQty $RemainInventPhysical
     *
     * @return $this
     */
    public function setRemainInventPhysical($RemainInventPhysical)
    {
        $this->RemainInventPhysical = $RemainInventPhysical;

        return $this;
    }

    /**
     * @return AxdExtType_SalesQty
     */
    public function getRemainSalesFinancial()
    {
        return $this->RemainSalesFinancial;
    }

    /**
     * @param AxdExtType_SalesQty $RemainSalesFinancial
     *
     * @return $this
     */
    public function setRemainSalesFinancial($RemainSalesFinancial)
    {
        $this->RemainSalesFinancial = $RemainSalesFinancial;

        return $this;
    }

    /**
     * @return AxdExtType_SalesQty
     */
    public function getRemainSalesPhysical()
    {
        return $this->RemainSalesPhysical;
    }

    /**
     * @param AxdExtType_SalesQty $RemainSalesPhysical
     *
     * @return $this
     */
    public function setRemainSalesPhysical($RemainSalesPhysical)
    {
        $this->RemainSalesPhysical = $RemainSalesPhysical;

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
     * @return AxdExtType_ReturnAllowReservation
     */
    public function getReturnAllowReservation()
    {
        return $this->ReturnAllowReservation;
    }

    /**
     * @param AxdExtType_ReturnAllowReservation $ReturnAllowReservation
     *
     * @return $this
     */
    public function setReturnAllowReservation($ReturnAllowReservation)
    {
        $this->ReturnAllowReservation = $ReturnAllowReservation;

        return $this;
    }

    /**
     * @return AxdExtType_ReturnArrivalDate
     */
    public function getReturnArrivalDate()
    {
        return $this->ReturnArrivalDate;
    }

    /**
     * @param AxdExtType_ReturnArrivalDate $ReturnArrivalDate
     *
     * @return $this
     */
    public function setReturnArrivalDate($ReturnArrivalDate)
    {
        $this->ReturnArrivalDate = $ReturnArrivalDate;

        return $this;
    }

    /**
     * @return AxdExtType_ReturnClosedDate
     */
    public function getReturnClosedDate()
    {
        return $this->ReturnClosedDate;
    }

    /**
     * @param AxdExtType_ReturnClosedDate $ReturnClosedDate
     *
     * @return $this
     */
    public function setReturnClosedDate($ReturnClosedDate)
    {
        $this->ReturnClosedDate = $ReturnClosedDate;

        return $this;
    }

    /**
     * @return AxdExtType_ReturnDeadline
     */
    public function getReturnDeadLine()
    {
        return $this->ReturnDeadLine;
    }

    /**
     * @param AxdExtType_ReturnDeadline $ReturnDeadLine
     *
     * @return $this
     */
    public function setReturnDeadLine($ReturnDeadLine)
    {
        $this->ReturnDeadLine = $ReturnDeadLine;

        return $this;
    }

    /**
     * @return AxdExtType_ReturnDispositionCodeId
     */
    public function getReturnDispositionCodeId()
    {
        return $this->ReturnDispositionCodeId;
    }

    /**
     * @param AxdExtType_ReturnDispositionCodeId $ReturnDispositionCodeId
     *
     * @return $this
     */
    public function setReturnDispositionCodeId($ReturnDispositionCodeId)
    {
        $this->ReturnDispositionCodeId = $ReturnDispositionCodeId;

        return $this;
    }

    /**
     * @return AxdEnum_ReturnStatusLine
     */
    public function getReturnStatus()
    {
        return $this->ReturnStatus;
    }

    /**
     * @param AxdEnum_ReturnStatusLine $ReturnStatus
     *
     * @return $this
     */
    public function setReturnStatus($ReturnStatus)
    {
        $this->ReturnStatus = $ReturnStatus;

        return $this;
    }

    /**
     * @return AxdExtType_SalesQty
     */
    public function getSalesDeliverNow()
    {
        return $this->SalesDeliverNow;
    }

    /**
     * @param AxdExtType_SalesQty $SalesDeliverNow
     *
     * @return $this
     */
    public function setSalesDeliverNow($SalesDeliverNow)
    {
        $this->SalesDeliverNow = $SalesDeliverNow;

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
     * @return AxdExtType_SalesMarkup
     */
    public function getSalesMarkup()
    {
        return $this->SalesMarkup;
    }

    /**
     * @param AxdExtType_SalesMarkup $SalesMarkup
     *
     * @return $this
     */
    public function setSalesMarkup($SalesMarkup)
    {
        $this->SalesMarkup = $SalesMarkup;

        return $this;
    }

    /**
     * @return AxdExtType_SalesPrice
     */
    public function getSalesPrice()
    {
        return $this->SalesPrice;
    }

    /**
     * @param AxdExtType_SalesPrice $SalesPrice
     *
     * @return $this
     */
    public function setSalesPrice($SalesPrice)
    {
        $this->SalesPrice = $SalesPrice;

        return $this;
    }

    /**
     * @return AxdExtType_SalesOrderedQty
     */
    public function getSalesQty()
    {
        return $this->SalesQty;
    }

    /**
     * @param AxdExtType_SalesOrderedQty $SalesQty
     *
     * @return $this
     */
    public function setSalesQty($SalesQty)
    {
        $this->SalesQty = $SalesQty;

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
     * @return AxdEnum_bool
     */
    public function getSalesTableLineUpdate()
    {
        return $this->SalesTableLineUpdate;
    }

    /**
     * @param AxdEnum_bool $SalesTableLineUpdate
     *
     * @return $this
     */
    public function setSalesTableLineUpdate($SalesTableLineUpdate)
    {
        $this->SalesTableLineUpdate = $SalesTableLineUpdate;

        return $this;
    }

    /**
     * @return AxdEnum_SalesType
     */
    public function getSalesType()
    {
        return $this->SalesType;
    }

    /**
     * @param AxdEnum_SalesType $SalesType
     *
     * @return $this
     */
    public function setSalesType($SalesType)
    {
        $this->SalesType = $SalesType;

        return $this;
    }

    /**
     * @return AxdUnion_AxdExtType_SalesUnit_AxdType_ExtCodeValue
     */
    public function getSalesUnit()
    {
        return $this->SalesUnit;
    }

    /**
     * @param AxdUnion_AxdExtType_SalesUnit_AxdType_ExtCodeValue $SalesUnit
     *
     * @return $this
     */
    public function setSalesUnit($SalesUnit)
    {
        $this->SalesUnit = $SalesUnit;

        return $this;
    }

    /**
     * @return AxdEnum_NoYes
     */
    public function getScrap()
    {
        return $this->Scrap;
    }

    /**
     * @param AxdEnum_NoYes $Scrap
     *
     * @return $this
     */
    public function setScrap($Scrap)
    {
        $this->Scrap = $Scrap;

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
     * @return AxdExtType_IntrastatTriangularDeal
     */
    public function getStatTriangularDeal()
    {
        return $this->StatTriangularDeal;
    }

    /**
     * @param AxdExtType_IntrastatTriangularDeal $StatTriangularDeal
     *
     * @return $this
     */
    public function setStatTriangularDeal($StatTriangularDeal)
    {
        $this->StatTriangularDeal = $StatTriangularDeal;

        return $this;
    }

    /**
     * @return AxdExtType_TaxAutoGenerated
     */
    public function getTaxAutogenerated()
    {
        return $this->TaxAutogenerated;
    }

    /**
     * @param AxdExtType_TaxAutoGenerated $TaxAutogenerated
     *
     * @return $this
     */
    public function setTaxAutogenerated($TaxAutogenerated)
    {
        $this->TaxAutogenerated = $TaxAutogenerated;

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
     * @return AxdExtType_TaxItemGroup
     */
    public function getTaxItemGroup()
    {
        return $this->TaxItemGroup;
    }

    /**
     * @param AxdExtType_TaxItemGroup $TaxItemGroup
     *
     * @return $this
     */
    public function setTaxItemGroup($TaxItemGroup)
    {
        $this->TaxItemGroup = $TaxItemGroup;

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
     * @return AxdExtType_SalesUnderDeliveryPct
     */
    public function getUnderDeliveryPct()
    {
        return $this->UnderDeliveryPct;
    }

    /**
     * @param AxdExtType_SalesUnderDeliveryPct $UnderDeliveryPct
     *
     * @return $this
     */
    public function setUnderDeliveryPct($UnderDeliveryPct)
    {
        $this->UnderDeliveryPct = $UnderDeliveryPct;

        return $this;
    }

    /**
     * @return AxdEntity_InventDim[]
     */
    public function getInventDim()
    {
        return $this->InventDim;
    }

    /**
     * @param AxdEntity_InventDim[] $InventDim
     *
     * @return $this
     */
    public function setInventDim($InventDim)
    {
        $this->InventDim = $InventDim;

        return $this;
    }

    /**
     * @param AxdEntity_InventDim $inventDim
     */
    public function addInventDim(AxdEntity_InventDim $inventDim)
    {
        $this->InventDim[] = $inventDim;
    }

    /**
     * @return AxdEntity_DocuRefLine
     */
    public function getDocuRefLine()
    {
        return $this->DocuRefLine;
    }

    /**
     * @param AxdEntity_DocuRefLine $DocuRefLine
     *
     * @return $this
     */
    public function setDocuRefLine($DocuRefLine)
    {
        $this->DocuRefLine = $DocuRefLine;

        return $this;
    }

    /**
     * @return AxdEntity_MarkupTransLine
     */
    public function getMarkupTransLine()
    {
        return $this->MarkupTransLine;
    }

    /**
     * @param AxdEntity_MarkupTransLine $MarkupTransLine
     *
     * @return $this
     */
    public function setMarkupTransLine($MarkupTransLine)
    {
        $this->MarkupTransLine = $MarkupTransLine;

        return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param UNKNOWN $class
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
