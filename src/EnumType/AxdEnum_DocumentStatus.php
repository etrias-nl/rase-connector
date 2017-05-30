<?php

namespace RaseConnector\EnumType;

/**
 * This class stands for AxdEnum_DocumentStatus EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Documentstatus:Documentstatus
 * @subpackage Enumerations
 */
class AxdEnum_DocumentStatus
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Quotation'
     * @return string 'Quotation'
     */
    const VALUE_QUOTATION = 'Quotation';
    /**
     * Constant for value 'PurchaseOrder'
     * @return string 'PurchaseOrder'
     */
    const VALUE_PURCHASE_ORDER = 'PurchaseOrder';
    /**
     * Constant for value 'Confirmation'
     * @return string 'Confirmation'
     */
    const VALUE_CONFIRMATION = 'Confirmation';
    /**
     * Constant for value 'PickingList'
     * @return string 'PickingList'
     */
    const VALUE_PICKING_LIST = 'PickingList';
    /**
     * Constant for value 'PackingSlip'
     * @return string 'PackingSlip'
     */
    const VALUE_PACKING_SLIP = 'PackingSlip';
    /**
     * Constant for value 'ReceiptsList'
     * @return string 'ReceiptsList'
     */
    const VALUE_RECEIPTS_LIST = 'ReceiptsList';
    /**
     * Constant for value 'Invoice'
     * @return string 'Invoice'
     */
    const VALUE_INVOICE = 'Invoice';
    /**
     * Constant for value 'ApproveJournal'
     * @return string 'ApproveJournal'
     */
    const VALUE_APPROVE_JOURNAL = 'ApproveJournal';
    /**
     * Constant for value 'ProjectInvoice'
     * @return string 'ProjectInvoice'
     */
    const VALUE_PROJECT_INVOICE = 'ProjectInvoice';
    /**
     * Constant for value 'ProjectPackingSlip'
     * @return string 'ProjectPackingSlip'
     */
    const VALUE_PROJECT_PACKING_SLIP = 'ProjectPackingSlip';
    /**
     * Constant for value 'CRMQuotation'
     * @return string 'CRMQuotation'
     */
    const VALUE_CRMQUOTATION = 'CRMQuotation';
    /**
     * Constant for value 'Lost'
     * @return string 'Lost'
     */
    const VALUE_LOST = 'Lost';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'FreeTextInvoice'
     * @return string 'FreeTextInvoice'
     */
    const VALUE_FREE_TEXT_INVOICE = 'FreeTextInvoice';
    /**
     * Constant for value 'RFQ'
     * @return string 'RFQ'
     */
    const VALUE_RFQ = 'RFQ';
    /**
     * Constant for value 'RFQAccept'
     * @return string 'RFQAccept'
     */
    const VALUE_RFQACCEPT = 'RFQAccept';
    /**
     * Constant for value 'RFQReject'
     * @return string 'RFQReject'
     */
    const VALUE_RFQREJECT = 'RFQReject';
    /**
     * Constant for value 'PurchReq'
     * @return string 'PurchReq'
     */
    const VALUE_PURCH_REQ = 'PurchReq';
    /**
     * Constant for value 'SalesZeroInvoice'
     * @return string 'SalesZeroInvoice'
     */
    const VALUE_SALES_ZERO_INVOICE = 'SalesZeroInvoice';
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
     * @uses self::VALUE_QUOTATION
     * @uses self::VALUE_PURCHASE_ORDER
     * @uses self::VALUE_CONFIRMATION
     * @uses self::VALUE_PICKING_LIST
     * @uses self::VALUE_PACKING_SLIP
     * @uses self::VALUE_RECEIPTS_LIST
     * @uses self::VALUE_INVOICE
     * @uses self::VALUE_APPROVE_JOURNAL
     * @uses self::VALUE_PROJECT_INVOICE
     * @uses self::VALUE_PROJECT_PACKING_SLIP
     * @uses self::VALUE_CRMQUOTATION
     * @uses self::VALUE_LOST
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_FREE_TEXT_INVOICE
     * @uses self::VALUE_RFQ
     * @uses self::VALUE_RFQACCEPT
     * @uses self::VALUE_RFQREJECT
     * @uses self::VALUE_PURCH_REQ
     * @uses self::VALUE_SALES_ZERO_INVOICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_QUOTATION,
            self::VALUE_PURCHASE_ORDER,
            self::VALUE_CONFIRMATION,
            self::VALUE_PICKING_LIST,
            self::VALUE_PACKING_SLIP,
            self::VALUE_RECEIPTS_LIST,
            self::VALUE_INVOICE,
            self::VALUE_APPROVE_JOURNAL,
            self::VALUE_PROJECT_INVOICE,
            self::VALUE_PROJECT_PACKING_SLIP,
            self::VALUE_CRMQUOTATION,
            self::VALUE_LOST,
            self::VALUE_CANCELLED,
            self::VALUE_FREE_TEXT_INVOICE,
            self::VALUE_RFQ,
            self::VALUE_RFQACCEPT,
            self::VALUE_RFQREJECT,
            self::VALUE_PURCH_REQ,
            self::VALUE_SALES_ZERO_INVOICE,
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
