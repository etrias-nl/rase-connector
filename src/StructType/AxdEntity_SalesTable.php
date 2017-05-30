<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AxdEntity_SalesTable StructType
 * @subpackage Structs
 */
class AxdEntity_SalesTable extends AbstractStructBase
{
    /**
     * The DeliveryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - documentation: Verzenddatum:Bevestigde verzenddatum indien aanwezig, zo niet gewenste verzenddatum
     * @var string
     */
    public $DeliveryDate;
    /**
     * The PurchOrderFormNum
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - documentation: Bestelopdracht van klant:Nummer bestelopdracht van klant
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $PurchOrderFormNum;
    /**
     * The SalesOriginId
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - documentation: Verkoopoorsprong:Code voor orderoorsprong
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $SalesOriginId;
    /**
     * The SalesTaker
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - documentation: Werknemer:Werknemernummer.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $SalesTaker;
    /**
     * The class
     * Meta informations extracted from the WSDL
     * - fixed: entity
     * - use: required
     * @var string
     */
    public $class;
    /**
     * The _DocumentHash
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $_DocumentHash;
    /**
     * The AmountExclTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Ordertotaal excl. BTW:Bedrag in standaardvaluta.
     * - fractionDigits: 2
     * @var float
     */
    public $AmountExclTax;
    /**
     * The BackOrder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BackOrder;
    /**
     * The CaseTagging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CaseTagging;
    /**
     * The CashDisc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Contantkorting:Code voor contantkorting voor volgende goedkeuring.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $CashDisc;
    /**
     * The CashDiscPercent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Kortingspercentage:Procentuele korting.
     * - fractionDigits: 2
     * @var float
     */
    public $CashDiscPercent;
    /**
     * The CommissionGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Provisieklantengroep:Identificatie van de provisieklantengroep
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $CommissionGroup;
    /**
     * The Complete
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Complete;
    /**
     * The ContactPersonId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Contact-ID:Identificatie van het contact.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $ContactPersonId;
    /**
     * The CovStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Status cashflowprognose:Status van cashflowprognose voor de huidige transactie.
     * - maxInclusive: 2147483647
     * - minInclusive: -2147483648
     * @var int
     */
    public $CovStatus;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdExtType_CustCurrencyCode | AxdType_ExtCodeValue
     * @var string
     */
    public $CurrencyCode;
    /**
     * The CustAccount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdExtType_CustAccount | AxdType_ExtCodeValue
     * @var string
     */
    public $CustAccount;
    /**
     * The CustGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Klantengroep:Klantengroep.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $CustGroup;
    /**
     * The CustInvoiceId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Factuur:Identificatie van de factuur.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $CustInvoiceId;
    /**
     * The CustomerRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Klantverwijzing:Referentie van klant
     * - maxLength: 60
     * - minLength: 0
     * @var string
     */
    public $CustomerRef;
    /**
     * The DateCreated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Orderdatum:Transactiedatum.
     * @var string
     */
    public $DateCreated;
    /**
     * The Deadline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Uiterste datum:Laatste datum voor acceptatie van de order
     * @var string
     */
    public $Deadline;
    /**
     * The DeliveryAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Adres:Geadresseerde - Voer adres en postcode in. De overige gegevens worden ingevoegd als de postcode voorkomt in de tabel met postcodes.
     * - maxLength: 250
     * - minLength: 0
     * @var string
     */
    public $DeliveryAddress;
    /**
     * The DeliveryCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Plaats:Plaats voor postcode.
     * - maxLength: 60
     * - minLength: 0
     * @var string
     */
    public $DeliveryCity;
    /**
     * The DeliveryCountryRegionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdExtType_AddressCountryRegionId | AxdType_ExtCodeValue
     * @var string
     */
    public $DeliveryCountryRegionId;
    /**
     * The DeliveryCounty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdExtType_AddressCountyId | AxdType_ExtCodeValue
     * @var string
     */
    public $DeliveryCounty;
    /**
     * The DeliveryDateControlType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DeliveryDateControlType;
    /**
     * The DeliveryName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Naam:Klantnaam.
     * - maxLength: 60
     * - minLength: 0
     * @var string
     */
    public $DeliveryName;
    /**
     * The DeliveryState
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdExtType_AddressStateId | AxdType_ExtCodeValue
     * @var string
     */
    public $DeliveryState;
    /**
     * The DeliveryStreet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Straatnaam:Voer de straatnaam van het adres in.
     * - maxLength: 250
     * - minLength: 0
     * @var string
     */
    public $DeliveryStreet;
    /**
     * The DeliveryZipCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdExtType_AddressZipCodeId | AxdType_ExtCodeValue
     * @var string
     */
    public $DeliveryZipCode;
    /**
     * The Dimension
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \RaseConnector\ArrayType\AxdArray_AxdExtType_Dimension
     */
    public $Dimension;
    /**
     * The DirectDebitMandate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Mandaat-ID voor automatische afschrijving:De referentie voor de ontvanger van het mandaat voor automatische afschrijving selecteren
     * - maxInclusive: 9223372036854775807
     * - minInclusive: -9223372036854775808
     * @var int
     */
    public $DirectDebitMandate;
    /**
     * The DiscPercent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Eindkortingspercentage:Eindkorting op de verkooporder in percenten.
     * - fractionDigits: 2
     * @var float
     */
    public $DiscPercent;
    /**
     * The DlvMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdExtType_CustDlvModeId | AxdType_ExtCodeValue
     * @var string
     */
    public $DlvMode;
    /**
     * The DlvReason
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Leveringsreden:Unieke identificatie van leveringsredenen
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $DlvReason;
    /**
     * The DlvTerm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdExtType_CustDlvTermId | AxdType_ExtCodeValue
     * @var string
     */
    public $DlvTerm;
    /**
     * The DocumentStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DocumentStatus;
    /**
     * The EInvoiceAccountCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Dimensierekening:Bij betaling aan een organisatie in de publieke sector is het mogelijk een dimensierekeningcode op te geven.
     * - maxLength: 35
     * - minLength: 0
     * @var string
     */
    public $EInvoiceAccountCode;
    /**
     * The EInvoiceLineSpec
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EInvoiceLineSpec;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: E-mail:E-mailadres via het internet.
     * - maxLength: 80
     * - minLength: 0
     * @var string
     */
    public $Email;
    /**
     * The EndDisc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Eindkorting:Geeft de eindkortingsgroep van klant/order aan.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $EndDisc;
    /**
     * The EnterpriseNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Ondernemingsnummer:Ondernemingsnummer identificeert Belgische ondernemingen.
     * - maxLength: 50
     * - minLength: 0
     * @var string
     */
    public $EnterpriseNumber;
    /**
     * The Estimate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Geraamd bedrag:Bedrag in valuta.
     * - fractionDigits: 2
     * @var float
     */
    public $Estimate;
    /**
     * The ExportReason
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Reden voor export:De reden waarom de goederen worden geëxporteerd
     * - maxLength: 30
     * - minLength: 0
     * @var string
     */
    public $ExportReason;
    /**
     * The FixedDueDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Vervaldatum:Vervaldatum onafhankelijk van betalingstermijn.
     * @var string
     */
    public $FixedDueDate;
    /**
     * The FixedExchRate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Vaste wisselkoers:Vaste wisselkoers voor deze order. Als het veld Koers leeg is, wordt de koers van de valutacode gebruikt.
     * - fractionDigits: 12
     * @var float
     */
    public $FixedExchRate;
    /**
     * The FreightSlipType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FreightSlipType;
    /**
     * The FreightZone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: UPS-zone:Identificatie van UPS-zone.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $FreightZone;
    /**
     * The GiroType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GiroType;
    /**
     * The IgnoreMarkup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IgnoreMarkup;
    /**
     * The InclTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InclTax;
    /**
     * The InterCompanyOriginalCustAccount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Oorspronkelijke klant:Het rekeningnummer van de klant op de oorspronkelijke verkooporder
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $InterCompanyOriginalCustAccount;
    /**
     * The InterCompanyOriginalSalesId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Verkooporder:De oorspronkelijke verkooporder op basis waarvan de intercompany-inkooporder of intercompany-verkooporder is gemaakt
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $InterCompanyOriginalSalesId;
    /**
     * The InventLocationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Magazijn:Identificeer het magazijn.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $InventLocationId;
    /**
     * The InventLocationIdCollect
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Afgehaald in magazijn:Identificeer het magazijn.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $InventLocationIdCollect;
    /**
     * The InventSiteId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Site:De site bepalen
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $InventSiteId;
    /**
     * The InvoiceAccount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdExtType_CustInvoiceAccount | AxdType_ExtCodeValue
     * @var string
     */
    public $InvoiceAccount;
    /**
     * The InvoiceFrequenceId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdType_Str | AxdType_ExtCodeValue
     * @var string
     */
    public $InvoiceFrequenceId;
    /**
     * The ItemTagging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ItemTagging;
    /**
     * The LanguageId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Taal:Selecteer de taal voor de huidige tekst.
     * - maxLength: 7
     * - minLength: 0
     * @var string
     */
    public $LanguageId;
    /**
     * The LineDisc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Regelkorting:Unieke identificatie van de regelkorting
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $LineDisc;
    /**
     * The Listcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Listcode;
    /**
     * The MarkupGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Groep diverse toeslagen:Groep diverse toeslagen waaraan de klant is gekoppeld.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $MarkupGroup;
    /**
     * The MultiLineDisc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Meerregelkorting:Geeft meerregelkortingsgroep voor klant/verkooporder.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $MultiLineDisc;
    /**
     * The NoCheckCreditLimit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NoCheckCreditLimit;
    /**
     * The NumberSequenceGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Nummerreeksgroep:Groep voor toewijzing van verschillende nummerreeksen aan verschillende klanten/leveranciers.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $NumberSequenceGroup;
    /**
     * The OneTimeCustomer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OneTimeCustomer;
    /**
     * The OrderComplete
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OrderComplete;
    /**
     * The PalletTagging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PalletTagging;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Betalingstermijn:Code voor de betalingstermijn.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $Payment;
    /**
     * The PaymentSched
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Betalingsschema:Bij de facturering te gebruiken betalingsschema.
     * - maxLength: 30
     * - minLength: 0
     * @var string
     */
    public $PaymentSched;
    /**
     * The PaymMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Betalingsmethode:Identificatie voor de betalingsmethode voor klanten.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $PaymMode;
    /**
     * The PaymSpec
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Betalingsspecificatie:Geef de verwerking van de betaling voor de huidige betalingsmethode op.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $PaymSpec;
    /**
     * The Port
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Haven:Laadhaven van de huidige levering.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $Port;
    /**
     * The PostingProfile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Boekingsprofiel:Boekingsprofiel dat wordt verwerkt.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $PostingProfile;
    /**
     * The PriceGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Prijsgroep:Geeft prijsgroep van klant/verkooporder op.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $PriceGroupId;
    /**
     * The PrintPricesPackingSlip
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PrintPricesPackingSlip;
    /**
     * The ProjId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Project:Projectidentificatie.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $ProjId;
    /**
     * The PurchId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Inkooporder:Identificatie van de inkoop.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $PurchId;
    /**
     * The QuotationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Offerte:Identificeert de offerte.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $QuotationId;
    /**
     * The ReceiptDateConfirmed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Bevestigde ontvangstdatum:De verkopende partij bevestigt dat de klant de order op deze datum kan ontvangen.
     * @var string
     */
    public $ReceiptDateConfirmed;
    /**
     * The ReceiptDateRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Gevraagde ontvangstdatum:De dag waarop de klant de order oorspronkelijk wilde ontvangen
     * @var string
     */
    public $ReceiptDateRequested;
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
     * The Reservation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Reservation;
    /**
     * The ReturnDeadline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Uiterste datum:Uiterste datum voor retourneren van het artikel.
     * @var string
     */
    public $ReturnDeadline;
    /**
     * The ReturnItemNum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: RMA-nummer:ID-nummer van de huidige retourlevering
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $ReturnItemNum;
    /**
     * The ReturnReasonCodeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Redencode retour:De reden van de klant voor het retourneren van het artikel
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $ReturnReasonCodeId;
    /**
     * The ReturnReplacementCreated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ReturnReplacementCreated;
    /**
     * The ReturnReplacementId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Verwijzing vervanging:Identificatie van de order.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $ReturnReplacementId;
    /**
     * The ReturnStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ReturnStatus;
    /**
     * The SalesGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Verkoopgroep:Provisieverkoopgroep
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $SalesGroup;
    /**
     * The SalesId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Verkooporder:Identificatie van de order.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $SalesId;
    /**
     * The SalesName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Naam:Omschrijf de order
     * - maxLength: 60
     * - minLength: 0
     * @var string
     */
    public $SalesName;
    /**
     * The SalesPoolId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Pool:Identificatie van de verkooporderpool
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $SalesPoolId;
    /**
     * The SalesResponsible
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Werknemer:Werknemernummer.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $SalesResponsible;
    /**
     * The SalesStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SalesStatus;
    /**
     * The SalesType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SalesType;
    /**
     * The SalesUnitId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Verkoopeenheid:Team verkopers verantwoordelijk voor een gemeenschappelijk verkoopdoel.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $SalesUnitId;
    /**
     * The SettleVoucher
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SettleVoucher;
    /**
     * The ShipCarrierAccount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Rekeningnummer vervoerder:Rekeningnummer dat wordt gefactureerd door de vervoerder
     * - maxLength: 25
     * - minLength: 0
     * @var string
     */
    public $ShipCarrierAccount;
    /**
     * The ShipCarrierAccountCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Rekeningcode:Rekeningcode waarmee wordt aangegeven welk rekeningnummer van de vervoerder wordt gebruikt om het bedrijf te factureren
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $ShipCarrierAccountCode;
    /**
     * The ShipCarrierBlindShipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShipCarrierBlindShipment;
    /**
     * The ShipCarrierDeliveryContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Naam:Naam.
     * - maxLength: 60
     * - minLength: 0
     * @var string
     */
    public $ShipCarrierDeliveryContact;
    /**
     * The ShipCarrierDlvType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShipCarrierDlvType;
    /**
     * The ShipCarrierExpeditedShipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShipCarrierExpeditedShipment;
    /**
     * The ShipCarrierFuelSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShipCarrierFuelSurcharge;
    /**
     * The ShipCarrierID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Vervoerders-ID:Identificatie van de vervoerder, toegewezen door de vervoerder
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $ShipCarrierID;
    /**
     * The ShipCarrierResidential
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShipCarrierResidential;
    /**
     * The ShippingDateConfirmed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Bevestigde verzenddatum:De verkopende partij bevestigt dat de order op deze datum wordt verzonden.
     * @var string
     */
    public $ShippingDateConfirmed;
    /**
     * The ShippingDateRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Gewenste verzenddatum:De dag waarop de verkopende partij het artikel moet verzenden om de gevraagde ontvangstdatum van de klant te halen.
     * @var string
     */
    public $ShippingDateRequested;
    /**
     * The SLGFinancialCompany
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Financiëel bedrijf:Bedrijf-ID komt overeen met de beginletters van de bedrijfsrekening.
     * - maxLength: 4
     * - minLength: 0
     * @var string
     */
    public $SLGFinancialCompany;
    /**
     * The SLGIntrastat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SLGIntrastat;
    /**
     * The SLGTaxRepresentativeAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Adres:Geadresseerde - Voer adres en postcode in. De overige gegevens worden ingevoegd als de postcode voorkomt in de tabel met postcodes.
     * - maxLength: 250
     * - minLength: 0
     * @var string
     */
    public $SLGTaxRepresentativeAddress;
    /**
     * The SLGTaxRepresentativeCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Plaats:Plaats voor postcode.
     * - maxLength: 60
     * - minLength: 0
     * @var string
     */
    public $SLGTaxRepresentativeCity;
    /**
     * The SLGTaxRepresentativeCountryId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdExtType_AddressCountryRegionId | AxdType_ExtCodeValue
     * @var string
     */
    public $SLGTaxRepresentativeCountryId;
    /**
     * The SLGTaxRepresentativeStreet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Straatnaam:Voer de straatnaam van het adres in.
     * - maxLength: 250
     * - minLength: 0
     * @var string
     */
    public $SLGTaxRepresentativeStreet;
    /**
     * The SLGTaxRepresentativeVATNum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Btw-nummer:Btw-nummer voor statistieken.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $SLGTaxRepresentativeVATNum;
    /**
     * The SLGTaxRepresentativeZipCodeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdExtType_AddressZipCodeId | AxdType_ExtCodeValue
     * @var string
     */
    public $SLGTaxRepresentativeZipCodeId;
    /**
     * The smmCampaignId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Campagne-ID:Unieke ID voor de campagne.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $smmCampaignId;
    /**
     * The smmSalesAmountTotal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Totaalbedrag:Berekende totaalbedrag voor de verkooporder.
     * - fractionDigits: 2
     * @var float
     */
    public $smmSalesAmountTotal;
    /**
     * The Solvability
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Solvability;
    /**
     * The StatProcId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Statistiekprocedure:Code voor de huidige statistiekprocedure.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $StatProcId;
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
     * The totalBalance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Bedrag in valuta:Bedrag in valuta.
     * - fractionDigits: 2
     * @var float
     */
    public $totalBalance;
    /**
     * The TotalCashDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Kortingsbedrag:Bedrag in valuta.
     * - fractionDigits: 2
     * @var float
     */
    public $TotalCashDiscount;
    /**
     * The TotalInvoice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Bedrag in valuta:Bedrag in valuta.
     * - fractionDigits: 2
     * @var float
     */
    public $TotalInvoice;
    /**
     * The TotalMiscCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Bedrag van diverse toeslagen:Bedrag in valuta.
     * - fractionDigits: 2
     * @var float
     */
    public $TotalMiscCharges;
    /**
     * The TotalSalesTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Btw-bedrag:Berekend btw-bedrag in de btw-vereffeningsvaluta
     * - fractionDigits: 2
     * @var float
     */
    public $TotalSalesTax;
    /**
     * The TransactionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Transactiecode:Code voor de huidige transactiecode.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $TransactionCode;
    /**
     * The Transport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Transport:Geef het transportmiddel voor de huidige order op.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $Transport;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Internetadres:Webadres voor internet-welkomstpagina.
     * - maxLength: 255
     * - minLength: 0
     * @var string
     */
    public $URL;
    /**
     * The VATNum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Btw-nummer:Btw-nummer voor statistieken.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $VATNum;
    /**
     * The WMSIsRush
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WMSIsRush;
    /**
     * The SalesLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RaseConnector\StructType\AxdEntity_SalesLine[]
     */
    public $SalesLine;
    /**
     * The DocuRefHeader
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RaseConnector\StructType\AxdEntity_DocuRefHeader[]
     */
    public $DocuRefHeader;
    /**
     * The MarkupTransHeader
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RaseConnector\StructType\AxdEntity_MarkupTransHeader[]
     */
    public $MarkupTransHeader;
    /**
     * The action
     * @var string
     */
    public $action;
    /**
     * Constructor method for AxdEntity_SalesTable
     * @uses AxdEntity_SalesTable::setDeliveryDate()
     * @uses AxdEntity_SalesTable::setPurchOrderFormNum()
     * @uses AxdEntity_SalesTable::setSalesOriginId()
     * @uses AxdEntity_SalesTable::setSalesTaker()
     * @uses AxdEntity_SalesTable::setClass()
     * @uses AxdEntity_SalesTable::set_DocumentHash()
     * @uses AxdEntity_SalesTable::setAmountExclTax()
     * @uses AxdEntity_SalesTable::setBackOrder()
     * @uses AxdEntity_SalesTable::setCaseTagging()
     * @uses AxdEntity_SalesTable::setCashDisc()
     * @uses AxdEntity_SalesTable::setCashDiscPercent()
     * @uses AxdEntity_SalesTable::setCommissionGroup()
     * @uses AxdEntity_SalesTable::setComplete()
     * @uses AxdEntity_SalesTable::setContactPersonId()
     * @uses AxdEntity_SalesTable::setCovStatus()
     * @uses AxdEntity_SalesTable::setCurrencyCode()
     * @uses AxdEntity_SalesTable::setCustAccount()
     * @uses AxdEntity_SalesTable::setCustGroup()
     * @uses AxdEntity_SalesTable::setCustInvoiceId()
     * @uses AxdEntity_SalesTable::setCustomerRef()
     * @uses AxdEntity_SalesTable::setDateCreated()
     * @uses AxdEntity_SalesTable::setDeadline()
     * @uses AxdEntity_SalesTable::setDeliveryAddress()
     * @uses AxdEntity_SalesTable::setDeliveryCity()
     * @uses AxdEntity_SalesTable::setDeliveryCountryRegionId()
     * @uses AxdEntity_SalesTable::setDeliveryCounty()
     * @uses AxdEntity_SalesTable::setDeliveryDateControlType()
     * @uses AxdEntity_SalesTable::setDeliveryName()
     * @uses AxdEntity_SalesTable::setDeliveryState()
     * @uses AxdEntity_SalesTable::setDeliveryStreet()
     * @uses AxdEntity_SalesTable::setDeliveryZipCode()
     * @uses AxdEntity_SalesTable::setDimension()
     * @uses AxdEntity_SalesTable::setDirectDebitMandate()
     * @uses AxdEntity_SalesTable::setDiscPercent()
     * @uses AxdEntity_SalesTable::setDlvMode()
     * @uses AxdEntity_SalesTable::setDlvReason()
     * @uses AxdEntity_SalesTable::setDlvTerm()
     * @uses AxdEntity_SalesTable::setDocumentStatus()
     * @uses AxdEntity_SalesTable::setEInvoiceAccountCode()
     * @uses AxdEntity_SalesTable::setEInvoiceLineSpec()
     * @uses AxdEntity_SalesTable::setEmail()
     * @uses AxdEntity_SalesTable::setEndDisc()
     * @uses AxdEntity_SalesTable::setEnterpriseNumber()
     * @uses AxdEntity_SalesTable::setEstimate()
     * @uses AxdEntity_SalesTable::setExportReason()
     * @uses AxdEntity_SalesTable::setFixedDueDate()
     * @uses AxdEntity_SalesTable::setFixedExchRate()
     * @uses AxdEntity_SalesTable::setFreightSlipType()
     * @uses AxdEntity_SalesTable::setFreightZone()
     * @uses AxdEntity_SalesTable::setGiroType()
     * @uses AxdEntity_SalesTable::setIgnoreMarkup()
     * @uses AxdEntity_SalesTable::setInclTax()
     * @uses AxdEntity_SalesTable::setInterCompanyOriginalCustAccount()
     * @uses AxdEntity_SalesTable::setInterCompanyOriginalSalesId()
     * @uses AxdEntity_SalesTable::setInventLocationId()
     * @uses AxdEntity_SalesTable::setInventLocationIdCollect()
     * @uses AxdEntity_SalesTable::setInventSiteId()
     * @uses AxdEntity_SalesTable::setInvoiceAccount()
     * @uses AxdEntity_SalesTable::setInvoiceFrequenceId()
     * @uses AxdEntity_SalesTable::setItemTagging()
     * @uses AxdEntity_SalesTable::setLanguageId()
     * @uses AxdEntity_SalesTable::setLineDisc()
     * @uses AxdEntity_SalesTable::setListcode()
     * @uses AxdEntity_SalesTable::setMarkupGroup()
     * @uses AxdEntity_SalesTable::setMultiLineDisc()
     * @uses AxdEntity_SalesTable::setNoCheckCreditLimit()
     * @uses AxdEntity_SalesTable::setNumberSequenceGroup()
     * @uses AxdEntity_SalesTable::setOneTimeCustomer()
     * @uses AxdEntity_SalesTable::setOrderComplete()
     * @uses AxdEntity_SalesTable::setPalletTagging()
     * @uses AxdEntity_SalesTable::setPayment()
     * @uses AxdEntity_SalesTable::setPaymentSched()
     * @uses AxdEntity_SalesTable::setPaymMode()
     * @uses AxdEntity_SalesTable::setPaymSpec()
     * @uses AxdEntity_SalesTable::setPort()
     * @uses AxdEntity_SalesTable::setPostingProfile()
     * @uses AxdEntity_SalesTable::setPriceGroupId()
     * @uses AxdEntity_SalesTable::setPrintPricesPackingSlip()
     * @uses AxdEntity_SalesTable::setProjId()
     * @uses AxdEntity_SalesTable::setPurchId()
     * @uses AxdEntity_SalesTable::setQuotationId()
     * @uses AxdEntity_SalesTable::setReceiptDateConfirmed()
     * @uses AxdEntity_SalesTable::setReceiptDateRequested()
     * @uses AxdEntity_SalesTable::setRecId()
     * @uses AxdEntity_SalesTable::setRecVersion()
     * @uses AxdEntity_SalesTable::setReservation()
     * @uses AxdEntity_SalesTable::setReturnDeadline()
     * @uses AxdEntity_SalesTable::setReturnItemNum()
     * @uses AxdEntity_SalesTable::setReturnReasonCodeId()
     * @uses AxdEntity_SalesTable::setReturnReplacementCreated()
     * @uses AxdEntity_SalesTable::setReturnReplacementId()
     * @uses AxdEntity_SalesTable::setReturnStatus()
     * @uses AxdEntity_SalesTable::setSalesGroup()
     * @uses AxdEntity_SalesTable::setSalesId()
     * @uses AxdEntity_SalesTable::setSalesName()
     * @uses AxdEntity_SalesTable::setSalesPoolId()
     * @uses AxdEntity_SalesTable::setSalesResponsible()
     * @uses AxdEntity_SalesTable::setSalesStatus()
     * @uses AxdEntity_SalesTable::setSalesType()
     * @uses AxdEntity_SalesTable::setSalesUnitId()
     * @uses AxdEntity_SalesTable::setSettleVoucher()
     * @uses AxdEntity_SalesTable::setShipCarrierAccount()
     * @uses AxdEntity_SalesTable::setShipCarrierAccountCode()
     * @uses AxdEntity_SalesTable::setShipCarrierBlindShipment()
     * @uses AxdEntity_SalesTable::setShipCarrierDeliveryContact()
     * @uses AxdEntity_SalesTable::setShipCarrierDlvType()
     * @uses AxdEntity_SalesTable::setShipCarrierExpeditedShipment()
     * @uses AxdEntity_SalesTable::setShipCarrierFuelSurcharge()
     * @uses AxdEntity_SalesTable::setShipCarrierID()
     * @uses AxdEntity_SalesTable::setShipCarrierResidential()
     * @uses AxdEntity_SalesTable::setShippingDateConfirmed()
     * @uses AxdEntity_SalesTable::setShippingDateRequested()
     * @uses AxdEntity_SalesTable::setSLGFinancialCompany()
     * @uses AxdEntity_SalesTable::setSLGIntrastat()
     * @uses AxdEntity_SalesTable::setSLGTaxRepresentativeAddress()
     * @uses AxdEntity_SalesTable::setSLGTaxRepresentativeCity()
     * @uses AxdEntity_SalesTable::setSLGTaxRepresentativeCountryId()
     * @uses AxdEntity_SalesTable::setSLGTaxRepresentativeStreet()
     * @uses AxdEntity_SalesTable::setSLGTaxRepresentativeVATNum()
     * @uses AxdEntity_SalesTable::setSLGTaxRepresentativeZipCodeId()
     * @uses AxdEntity_SalesTable::setSmmCampaignId()
     * @uses AxdEntity_SalesTable::setSmmSalesAmountTotal()
     * @uses AxdEntity_SalesTable::setSolvability()
     * @uses AxdEntity_SalesTable::setStatProcId()
     * @uses AxdEntity_SalesTable::setTaxGroup()
     * @uses AxdEntity_SalesTable::setTotalBalance()
     * @uses AxdEntity_SalesTable::setTotalCashDiscount()
     * @uses AxdEntity_SalesTable::setTotalInvoice()
     * @uses AxdEntity_SalesTable::setTotalMiscCharges()
     * @uses AxdEntity_SalesTable::setTotalSalesTax()
     * @uses AxdEntity_SalesTable::setTransactionCode()
     * @uses AxdEntity_SalesTable::setTransport()
     * @uses AxdEntity_SalesTable::setURL()
     * @uses AxdEntity_SalesTable::setVATNum()
     * @uses AxdEntity_SalesTable::setWMSIsRush()
     * @uses AxdEntity_SalesTable::setSalesLine()
     * @uses AxdEntity_SalesTable::setDocuRefHeader()
     * @uses AxdEntity_SalesTable::setMarkupTransHeader()
     * @uses AxdEntity_SalesTable::setAction()
     * @param string $deliveryDate
     * @param string $purchOrderFormNum
     * @param string $salesOriginId
     * @param string $salesTaker
     * @param string $class
     * @param string $_DocumentHash
     * @param float $amountExclTax
     * @param string $backOrder
     * @param string $caseTagging
     * @param string $cashDisc
     * @param float $cashDiscPercent
     * @param string $commissionGroup
     * @param string $complete
     * @param string $contactPersonId
     * @param int $covStatus
     * @param string $currencyCode
     * @param string $custAccount
     * @param string $custGroup
     * @param string $custInvoiceId
     * @param string $customerRef
     * @param string $dateCreated
     * @param string $deadline
     * @param string $deliveryAddress
     * @param string $deliveryCity
     * @param string $deliveryCountryRegionId
     * @param string $deliveryCounty
     * @param string $deliveryDateControlType
     * @param string $deliveryName
     * @param string $deliveryState
     * @param string $deliveryStreet
     * @param string $deliveryZipCode
     * @param \RaseConnector\ArrayType\AxdArray_AxdExtType_Dimension $dimension
     * @param int $directDebitMandate
     * @param float $discPercent
     * @param string $dlvMode
     * @param string $dlvReason
     * @param string $dlvTerm
     * @param string $documentStatus
     * @param string $eInvoiceAccountCode
     * @param string $eInvoiceLineSpec
     * @param string $email
     * @param string $endDisc
     * @param string $enterpriseNumber
     * @param float $estimate
     * @param string $exportReason
     * @param string $fixedDueDate
     * @param float $fixedExchRate
     * @param string $freightSlipType
     * @param string $freightZone
     * @param string $giroType
     * @param string $ignoreMarkup
     * @param string $inclTax
     * @param string $interCompanyOriginalCustAccount
     * @param string $interCompanyOriginalSalesId
     * @param string $inventLocationId
     * @param string $inventLocationIdCollect
     * @param string $inventSiteId
     * @param string $invoiceAccount
     * @param string $invoiceFrequenceId
     * @param string $itemTagging
     * @param string $languageId
     * @param string $lineDisc
     * @param string $listcode
     * @param string $markupGroup
     * @param string $multiLineDisc
     * @param string $noCheckCreditLimit
     * @param string $numberSequenceGroup
     * @param string $oneTimeCustomer
     * @param string $orderComplete
     * @param string $palletTagging
     * @param string $payment
     * @param string $paymentSched
     * @param string $paymMode
     * @param string $paymSpec
     * @param string $port
     * @param string $postingProfile
     * @param string $priceGroupId
     * @param string $printPricesPackingSlip
     * @param string $projId
     * @param string $purchId
     * @param string $quotationId
     * @param string $receiptDateConfirmed
     * @param string $receiptDateRequested
     * @param int $recId
     * @param int $recVersion
     * @param string $reservation
     * @param string $returnDeadline
     * @param string $returnItemNum
     * @param string $returnReasonCodeId
     * @param string $returnReplacementCreated
     * @param string $returnReplacementId
     * @param string $returnStatus
     * @param string $salesGroup
     * @param string $salesId
     * @param string $salesName
     * @param string $salesPoolId
     * @param string $salesResponsible
     * @param string $salesStatus
     * @param string $salesType
     * @param string $salesUnitId
     * @param string $settleVoucher
     * @param string $shipCarrierAccount
     * @param string $shipCarrierAccountCode
     * @param string $shipCarrierBlindShipment
     * @param string $shipCarrierDeliveryContact
     * @param string $shipCarrierDlvType
     * @param string $shipCarrierExpeditedShipment
     * @param string $shipCarrierFuelSurcharge
     * @param string $shipCarrierID
     * @param string $shipCarrierResidential
     * @param string $shippingDateConfirmed
     * @param string $shippingDateRequested
     * @param string $sLGFinancialCompany
     * @param string $sLGIntrastat
     * @param string $sLGTaxRepresentativeAddress
     * @param string $sLGTaxRepresentativeCity
     * @param string $sLGTaxRepresentativeCountryId
     * @param string $sLGTaxRepresentativeStreet
     * @param string $sLGTaxRepresentativeVATNum
     * @param string $sLGTaxRepresentativeZipCodeId
     * @param string $smmCampaignId
     * @param float $smmSalesAmountTotal
     * @param string $solvability
     * @param string $statProcId
     * @param string $taxGroup
     * @param float $totalBalance
     * @param float $totalCashDiscount
     * @param float $totalInvoice
     * @param float $totalMiscCharges
     * @param float $totalSalesTax
     * @param string $transactionCode
     * @param string $transport
     * @param string $uRL
     * @param string $vATNum
     * @param string $wMSIsRush
     * @param \RaseConnector\StructType\AxdEntity_SalesLine[] $salesLine
     * @param \RaseConnector\StructType\AxdEntity_DocuRefHeader[] $docuRefHeader
     * @param \RaseConnector\StructType\AxdEntity_MarkupTransHeader[] $markupTransHeader
     * @param string $action
     */
    public function __construct($deliveryDate = null, $purchOrderFormNum = null, $salesOriginId = null, $salesTaker = null, $class = null, $_DocumentHash = null, $amountExclTax = null, $backOrder = null, $caseTagging = null, $cashDisc = null, $cashDiscPercent = null, $commissionGroup = null, $complete = null, $contactPersonId = null, $covStatus = null, $currencyCode = null, $custAccount = null, $custGroup = null, $custInvoiceId = null, $customerRef = null, $dateCreated = null, $deadline = null, $deliveryAddress = null, $deliveryCity = null, $deliveryCountryRegionId = null, $deliveryCounty = null, $deliveryDateControlType = null, $deliveryName = null, $deliveryState = null, $deliveryStreet = null, $deliveryZipCode = null, \RaseConnector\ArrayType\AxdArray_AxdExtType_Dimension $dimension = null, $directDebitMandate = null, $discPercent = null, $dlvMode = null, $dlvReason = null, $dlvTerm = null, $documentStatus = null, $eInvoiceAccountCode = null, $eInvoiceLineSpec = null, $email = null, $endDisc = null, $enterpriseNumber = null, $estimate = null, $exportReason = null, $fixedDueDate = null, $fixedExchRate = null, $freightSlipType = null, $freightZone = null, $giroType = null, $ignoreMarkup = null, $inclTax = null, $interCompanyOriginalCustAccount = null, $interCompanyOriginalSalesId = null, $inventLocationId = null, $inventLocationIdCollect = null, $inventSiteId = null, $invoiceAccount = null, $invoiceFrequenceId = null, $itemTagging = null, $languageId = null, $lineDisc = null, $listcode = null, $markupGroup = null, $multiLineDisc = null, $noCheckCreditLimit = null, $numberSequenceGroup = null, $oneTimeCustomer = null, $orderComplete = null, $palletTagging = null, $payment = null, $paymentSched = null, $paymMode = null, $paymSpec = null, $port = null, $postingProfile = null, $priceGroupId = null, $printPricesPackingSlip = null, $projId = null, $purchId = null, $quotationId = null, $receiptDateConfirmed = null, $receiptDateRequested = null, $recId = null, $recVersion = null, $reservation = null, $returnDeadline = null, $returnItemNum = null, $returnReasonCodeId = null, $returnReplacementCreated = null, $returnReplacementId = null, $returnStatus = null, $salesGroup = null, $salesId = null, $salesName = null, $salesPoolId = null, $salesResponsible = null, $salesStatus = null, $salesType = null, $salesUnitId = null, $settleVoucher = null, $shipCarrierAccount = null, $shipCarrierAccountCode = null, $shipCarrierBlindShipment = null, $shipCarrierDeliveryContact = null, $shipCarrierDlvType = null, $shipCarrierExpeditedShipment = null, $shipCarrierFuelSurcharge = null, $shipCarrierID = null, $shipCarrierResidential = null, $shippingDateConfirmed = null, $shippingDateRequested = null, $sLGFinancialCompany = null, $sLGIntrastat = null, $sLGTaxRepresentativeAddress = null, $sLGTaxRepresentativeCity = null, $sLGTaxRepresentativeCountryId = null, $sLGTaxRepresentativeStreet = null, $sLGTaxRepresentativeVATNum = null, $sLGTaxRepresentativeZipCodeId = null, $smmCampaignId = null, $smmSalesAmountTotal = null, $solvability = null, $statProcId = null, $taxGroup = null, $totalBalance = null, $totalCashDiscount = null, $totalInvoice = null, $totalMiscCharges = null, $totalSalesTax = null, $transactionCode = null, $transport = null, $uRL = null, $vATNum = null, $wMSIsRush = null, array $salesLine = array(), array $docuRefHeader = array(), array $markupTransHeader = array(), $action = null)
    {
        $this
            ->setDeliveryDate($deliveryDate)
            ->setPurchOrderFormNum($purchOrderFormNum)
            ->setSalesOriginId($salesOriginId)
            ->setSalesTaker($salesTaker)
            ->setClass($class)
            ->set_DocumentHash($_DocumentHash)
            ->setAmountExclTax($amountExclTax)
            ->setBackOrder($backOrder)
            ->setCaseTagging($caseTagging)
            ->setCashDisc($cashDisc)
            ->setCashDiscPercent($cashDiscPercent)
            ->setCommissionGroup($commissionGroup)
            ->setComplete($complete)
            ->setContactPersonId($contactPersonId)
            ->setCovStatus($covStatus)
            ->setCurrencyCode($currencyCode)
            ->setCustAccount($custAccount)
            ->setCustGroup($custGroup)
            ->setCustInvoiceId($custInvoiceId)
            ->setCustomerRef($customerRef)
            ->setDateCreated($dateCreated)
            ->setDeadline($deadline)
            ->setDeliveryAddress($deliveryAddress)
            ->setDeliveryCity($deliveryCity)
            ->setDeliveryCountryRegionId($deliveryCountryRegionId)
            ->setDeliveryCounty($deliveryCounty)
            ->setDeliveryDateControlType($deliveryDateControlType)
            ->setDeliveryName($deliveryName)
            ->setDeliveryState($deliveryState)
            ->setDeliveryStreet($deliveryStreet)
            ->setDeliveryZipCode($deliveryZipCode)
            ->setDimension($dimension)
            ->setDirectDebitMandate($directDebitMandate)
            ->setDiscPercent($discPercent)
            ->setDlvMode($dlvMode)
            ->setDlvReason($dlvReason)
            ->setDlvTerm($dlvTerm)
            ->setDocumentStatus($documentStatus)
            ->setEInvoiceAccountCode($eInvoiceAccountCode)
            ->setEInvoiceLineSpec($eInvoiceLineSpec)
            ->setEmail($email)
            ->setEndDisc($endDisc)
            ->setEnterpriseNumber($enterpriseNumber)
            ->setEstimate($estimate)
            ->setExportReason($exportReason)
            ->setFixedDueDate($fixedDueDate)
            ->setFixedExchRate($fixedExchRate)
            ->setFreightSlipType($freightSlipType)
            ->setFreightZone($freightZone)
            ->setGiroType($giroType)
            ->setIgnoreMarkup($ignoreMarkup)
            ->setInclTax($inclTax)
            ->setInterCompanyOriginalCustAccount($interCompanyOriginalCustAccount)
            ->setInterCompanyOriginalSalesId($interCompanyOriginalSalesId)
            ->setInventLocationId($inventLocationId)
            ->setInventLocationIdCollect($inventLocationIdCollect)
            ->setInventSiteId($inventSiteId)
            ->setInvoiceAccount($invoiceAccount)
            ->setInvoiceFrequenceId($invoiceFrequenceId)
            ->setItemTagging($itemTagging)
            ->setLanguageId($languageId)
            ->setLineDisc($lineDisc)
            ->setListcode($listcode)
            ->setMarkupGroup($markupGroup)
            ->setMultiLineDisc($multiLineDisc)
            ->setNoCheckCreditLimit($noCheckCreditLimit)
            ->setNumberSequenceGroup($numberSequenceGroup)
            ->setOneTimeCustomer($oneTimeCustomer)
            ->setOrderComplete($orderComplete)
            ->setPalletTagging($palletTagging)
            ->setPayment($payment)
            ->setPaymentSched($paymentSched)
            ->setPaymMode($paymMode)
            ->setPaymSpec($paymSpec)
            ->setPort($port)
            ->setPostingProfile($postingProfile)
            ->setPriceGroupId($priceGroupId)
            ->setPrintPricesPackingSlip($printPricesPackingSlip)
            ->setProjId($projId)
            ->setPurchId($purchId)
            ->setQuotationId($quotationId)
            ->setReceiptDateConfirmed($receiptDateConfirmed)
            ->setReceiptDateRequested($receiptDateRequested)
            ->setRecId($recId)
            ->setRecVersion($recVersion)
            ->setReservation($reservation)
            ->setReturnDeadline($returnDeadline)
            ->setReturnItemNum($returnItemNum)
            ->setReturnReasonCodeId($returnReasonCodeId)
            ->setReturnReplacementCreated($returnReplacementCreated)
            ->setReturnReplacementId($returnReplacementId)
            ->setReturnStatus($returnStatus)
            ->setSalesGroup($salesGroup)
            ->setSalesId($salesId)
            ->setSalesName($salesName)
            ->setSalesPoolId($salesPoolId)
            ->setSalesResponsible($salesResponsible)
            ->setSalesStatus($salesStatus)
            ->setSalesType($salesType)
            ->setSalesUnitId($salesUnitId)
            ->setSettleVoucher($settleVoucher)
            ->setShipCarrierAccount($shipCarrierAccount)
            ->setShipCarrierAccountCode($shipCarrierAccountCode)
            ->setShipCarrierBlindShipment($shipCarrierBlindShipment)
            ->setShipCarrierDeliveryContact($shipCarrierDeliveryContact)
            ->setShipCarrierDlvType($shipCarrierDlvType)
            ->setShipCarrierExpeditedShipment($shipCarrierExpeditedShipment)
            ->setShipCarrierFuelSurcharge($shipCarrierFuelSurcharge)
            ->setShipCarrierID($shipCarrierID)
            ->setShipCarrierResidential($shipCarrierResidential)
            ->setShippingDateConfirmed($shippingDateConfirmed)
            ->setShippingDateRequested($shippingDateRequested)
            ->setSLGFinancialCompany($sLGFinancialCompany)
            ->setSLGIntrastat($sLGIntrastat)
            ->setSLGTaxRepresentativeAddress($sLGTaxRepresentativeAddress)
            ->setSLGTaxRepresentativeCity($sLGTaxRepresentativeCity)
            ->setSLGTaxRepresentativeCountryId($sLGTaxRepresentativeCountryId)
            ->setSLGTaxRepresentativeStreet($sLGTaxRepresentativeStreet)
            ->setSLGTaxRepresentativeVATNum($sLGTaxRepresentativeVATNum)
            ->setSLGTaxRepresentativeZipCodeId($sLGTaxRepresentativeZipCodeId)
            ->setSmmCampaignId($smmCampaignId)
            ->setSmmSalesAmountTotal($smmSalesAmountTotal)
            ->setSolvability($solvability)
            ->setStatProcId($statProcId)
            ->setTaxGroup($taxGroup)
            ->setTotalBalance($totalBalance)
            ->setTotalCashDiscount($totalCashDiscount)
            ->setTotalInvoice($totalInvoice)
            ->setTotalMiscCharges($totalMiscCharges)
            ->setTotalSalesTax($totalSalesTax)
            ->setTransactionCode($transactionCode)
            ->setTransport($transport)
            ->setURL($uRL)
            ->setVATNum($vATNum)
            ->setWMSIsRush($wMSIsRush)
            ->setSalesLine($salesLine)
            ->setDocuRefHeader($docuRefHeader)
            ->setMarkupTransHeader($markupTransHeader)
            ->setAction($action);
    }
    /**
     * Get DeliveryDate value
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param string $deliveryDate
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Get PurchOrderFormNum value
     * @return string
     */
    public function getPurchOrderFormNum()
    {
        return $this->PurchOrderFormNum;
    }
    /**
     * Set PurchOrderFormNum value
     * @param string $purchOrderFormNum
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setPurchOrderFormNum($purchOrderFormNum = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($purchOrderFormNum) && strlen($purchOrderFormNum) > 20) || (is_array($purchOrderFormNum) && count($purchOrderFormNum) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($purchOrderFormNum) ? strlen($purchOrderFormNum) : count($purchOrderFormNum)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($purchOrderFormNum) && strlen($purchOrderFormNum) < 0) || (is_array($purchOrderFormNum) && count($purchOrderFormNum) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($purchOrderFormNum) && !is_string($purchOrderFormNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($purchOrderFormNum)), __LINE__);
        }
        $this->PurchOrderFormNum = $purchOrderFormNum;
        return $this;
    }
    /**
     * Get SalesOriginId value
     * @return string
     */
    public function getSalesOriginId()
    {
        return $this->SalesOriginId;
    }
    /**
     * Set SalesOriginId value
     * @param string $salesOriginId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSalesOriginId($salesOriginId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($salesOriginId) && strlen($salesOriginId) > 10) || (is_array($salesOriginId) && count($salesOriginId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($salesOriginId) ? strlen($salesOriginId) : count($salesOriginId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($salesOriginId) && strlen($salesOriginId) < 0) || (is_array($salesOriginId) && count($salesOriginId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($salesOriginId) && !is_string($salesOriginId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salesOriginId)), __LINE__);
        }
        $this->SalesOriginId = $salesOriginId;
        return $this;
    }
    /**
     * Get SalesTaker value
     * @return string
     */
    public function getSalesTaker()
    {
        return $this->SalesTaker;
    }
    /**
     * Set SalesTaker value
     * @param string $salesTaker
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSalesTaker($salesTaker = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($salesTaker) && strlen($salesTaker) > 20) || (is_array($salesTaker) && count($salesTaker) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($salesTaker) ? strlen($salesTaker) : count($salesTaker)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($salesTaker) && strlen($salesTaker) < 0) || (is_array($salesTaker) && count($salesTaker) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($salesTaker) && !is_string($salesTaker)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salesTaker)), __LINE__);
        }
        $this->SalesTaker = $salesTaker;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
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
     * Get _DocumentHash value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function get_DocumentHash()
    {
        return isset($this->_DocumentHash) ? $this->_DocumentHash : null;
    }
    /**
     * Set _DocumentHash value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $_DocumentHash
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function set_DocumentHash($_DocumentHash = null)
    {
        // validation for constraint: string
        if (!is_null($_DocumentHash) && !is_string($_DocumentHash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_DocumentHash)), __LINE__);
        }
        if (is_null($_DocumentHash) || (is_array($_DocumentHash) && empty($_DocumentHash))) {
            unset($this->_DocumentHash);
        } else {
            $this->_DocumentHash = $_DocumentHash;
        }
        return $this;
    }
    /**
     * Get AmountExclTax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getAmountExclTax()
    {
        return isset($this->AmountExclTax) ? $this->AmountExclTax : null;
    }
    /**
     * Set AmountExclTax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $amountExclTax
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setAmountExclTax($amountExclTax = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($amountExclTax) && strlen(substr($amountExclTax, strpos($amountExclTax, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($amountExclTax, strpos($amountExclTax, '.')))), __LINE__);
        }
        if (is_null($amountExclTax) || (is_array($amountExclTax) && empty($amountExclTax))) {
            unset($this->AmountExclTax);
        } else {
            $this->AmountExclTax = $amountExclTax;
        }
        return $this;
    }
    /**
     * Get BackOrder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBackOrder()
    {
        return isset($this->BackOrder) ? $this->BackOrder : null;
    }
    /**
     * Set BackOrder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_Backorder::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_Backorder::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $backOrder
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setBackOrder($backOrder = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_Backorder::valueIsValid($backOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $backOrder, implode(', ', \RaseConnector\EnumType\AxdExtType_Backorder::getValidValues())), __LINE__);
        }
        if (is_null($backOrder) || (is_array($backOrder) && empty($backOrder))) {
            unset($this->BackOrder);
        } else {
            $this->BackOrder = $backOrder;
        }
        return $this;
    }
    /**
     * Get CaseTagging value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCaseTagging()
    {
        return isset($this->CaseTagging) ? $this->CaseTagging : null;
    }
    /**
     * Set CaseTagging value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_RFIDCaseTagging::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_RFIDCaseTagging::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $caseTagging
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setCaseTagging($caseTagging = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_RFIDCaseTagging::valueIsValid($caseTagging)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $caseTagging, implode(', ', \RaseConnector\EnumType\AxdExtType_RFIDCaseTagging::getValidValues())), __LINE__);
        }
        if (is_null($caseTagging) || (is_array($caseTagging) && empty($caseTagging))) {
            unset($this->CaseTagging);
        } else {
            $this->CaseTagging = $caseTagging;
        }
        return $this;
    }
    /**
     * Get CashDisc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCashDisc()
    {
        return isset($this->CashDisc) ? $this->CashDisc : null;
    }
    /**
     * Set CashDisc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cashDisc
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setCashDisc($cashDisc = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($cashDisc) && strlen($cashDisc) > 10) || (is_array($cashDisc) && count($cashDisc) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($cashDisc) ? strlen($cashDisc) : count($cashDisc)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($cashDisc) && strlen($cashDisc) < 0) || (is_array($cashDisc) && count($cashDisc) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($cashDisc) && !is_string($cashDisc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cashDisc)), __LINE__);
        }
        if (is_null($cashDisc) || (is_array($cashDisc) && empty($cashDisc))) {
            unset($this->CashDisc);
        } else {
            $this->CashDisc = $cashDisc;
        }
        return $this;
    }
    /**
     * Get CashDiscPercent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getCashDiscPercent()
    {
        return isset($this->CashDiscPercent) ? $this->CashDiscPercent : null;
    }
    /**
     * Set CashDiscPercent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $cashDiscPercent
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setCashDiscPercent($cashDiscPercent = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($cashDiscPercent) && strlen(substr($cashDiscPercent, strpos($cashDiscPercent, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($cashDiscPercent, strpos($cashDiscPercent, '.')))), __LINE__);
        }
        if (is_null($cashDiscPercent) || (is_array($cashDiscPercent) && empty($cashDiscPercent))) {
            unset($this->CashDiscPercent);
        } else {
            $this->CashDiscPercent = $cashDiscPercent;
        }
        return $this;
    }
    /**
     * Get CommissionGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommissionGroup()
    {
        return isset($this->CommissionGroup) ? $this->CommissionGroup : null;
    }
    /**
     * Set CommissionGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $commissionGroup
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setCommissionGroup($commissionGroup = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($commissionGroup) && strlen($commissionGroup) > 10) || (is_array($commissionGroup) && count($commissionGroup) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($commissionGroup) ? strlen($commissionGroup) : count($commissionGroup)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($commissionGroup) && strlen($commissionGroup) < 0) || (is_array($commissionGroup) && count($commissionGroup) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($commissionGroup) && !is_string($commissionGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commissionGroup)), __LINE__);
        }
        if (is_null($commissionGroup) || (is_array($commissionGroup) && empty($commissionGroup))) {
            unset($this->CommissionGroup);
        } else {
            $this->CommissionGroup = $commissionGroup;
        }
        return $this;
    }
    /**
     * Get Complete value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComplete()
    {
        return isset($this->Complete) ? $this->Complete : null;
    }
    /**
     * Set Complete value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_LineComplete::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_LineComplete::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $complete
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setComplete($complete = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_LineComplete::valueIsValid($complete)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $complete, implode(', ', \RaseConnector\EnumType\AxdExtType_LineComplete::getValidValues())), __LINE__);
        }
        if (is_null($complete) || (is_array($complete) && empty($complete))) {
            unset($this->Complete);
        } else {
            $this->Complete = $complete;
        }
        return $this;
    }
    /**
     * Get ContactPersonId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContactPersonId()
    {
        return isset($this->ContactPersonId) ? $this->ContactPersonId : null;
    }
    /**
     * Set ContactPersonId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contactPersonId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setContactPersonId($contactPersonId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($contactPersonId) && strlen($contactPersonId) > 20) || (is_array($contactPersonId) && count($contactPersonId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($contactPersonId) ? strlen($contactPersonId) : count($contactPersonId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($contactPersonId) && strlen($contactPersonId) < 0) || (is_array($contactPersonId) && count($contactPersonId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($contactPersonId) && !is_string($contactPersonId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactPersonId)), __LINE__);
        }
        if (is_null($contactPersonId) || (is_array($contactPersonId) && empty($contactPersonId))) {
            unset($this->ContactPersonId);
        } else {
            $this->ContactPersonId = $contactPersonId;
        }
        return $this;
    }
    /**
     * Get CovStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCovStatus()
    {
        return isset($this->CovStatus) ? $this->CovStatus : null;
    }
    /**
     * Set CovStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $covStatus
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setCovStatus($covStatus = null)
    {
        // validation for constraint: int
        if (!is_null($covStatus) && !is_numeric($covStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($covStatus)), __LINE__);
        }
        if (is_null($covStatus) || (is_array($covStatus) && empty($covStatus))) {
            unset($this->CovStatus);
        } else {
            $this->CovStatus = $covStatus;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
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
     * Get CustAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustAccount()
    {
        return isset($this->CustAccount) ? $this->CustAccount : null;
    }
    /**
     * Set CustAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $custAccount
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setCustAccount($custAccount = null)
    {
        // validation for constraint: string
        if (!is_null($custAccount) && !is_string($custAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custAccount)), __LINE__);
        }
        if (is_null($custAccount) || (is_array($custAccount) && empty($custAccount))) {
            unset($this->CustAccount);
        } else {
            $this->CustAccount = $custAccount;
        }
        return $this;
    }
    /**
     * Get CustGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustGroup()
    {
        return isset($this->CustGroup) ? $this->CustGroup : null;
    }
    /**
     * Set CustGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $custGroup
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setCustGroup($custGroup = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($custGroup) && strlen($custGroup) > 10) || (is_array($custGroup) && count($custGroup) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($custGroup) ? strlen($custGroup) : count($custGroup)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($custGroup) && strlen($custGroup) < 0) || (is_array($custGroup) && count($custGroup) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($custGroup) && !is_string($custGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custGroup)), __LINE__);
        }
        if (is_null($custGroup) || (is_array($custGroup) && empty($custGroup))) {
            unset($this->CustGroup);
        } else {
            $this->CustGroup = $custGroup;
        }
        return $this;
    }
    /**
     * Get CustInvoiceId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustInvoiceId()
    {
        return isset($this->CustInvoiceId) ? $this->CustInvoiceId : null;
    }
    /**
     * Set CustInvoiceId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $custInvoiceId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setCustInvoiceId($custInvoiceId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($custInvoiceId) && strlen($custInvoiceId) > 20) || (is_array($custInvoiceId) && count($custInvoiceId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($custInvoiceId) ? strlen($custInvoiceId) : count($custInvoiceId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($custInvoiceId) && strlen($custInvoiceId) < 0) || (is_array($custInvoiceId) && count($custInvoiceId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($custInvoiceId) && !is_string($custInvoiceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custInvoiceId)), __LINE__);
        }
        if (is_null($custInvoiceId) || (is_array($custInvoiceId) && empty($custInvoiceId))) {
            unset($this->CustInvoiceId);
        } else {
            $this->CustInvoiceId = $custInvoiceId;
        }
        return $this;
    }
    /**
     * Get CustomerRef value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerRef()
    {
        return isset($this->CustomerRef) ? $this->CustomerRef : null;
    }
    /**
     * Set CustomerRef value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerRef
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setCustomerRef($customerRef = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($customerRef) && strlen($customerRef) > 60) || (is_array($customerRef) && count($customerRef) > 60)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 60 element(s) or a scalar of 60 character(s) at most, "%d" length given', is_scalar($customerRef) ? strlen($customerRef) : count($customerRef)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($customerRef) && strlen($customerRef) < 0) || (is_array($customerRef) && count($customerRef) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($customerRef) && !is_string($customerRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerRef)), __LINE__);
        }
        if (is_null($customerRef) || (is_array($customerRef) && empty($customerRef))) {
            unset($this->CustomerRef);
        } else {
            $this->CustomerRef = $customerRef;
        }
        return $this;
    }
    /**
     * Get DateCreated value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateCreated()
    {
        return isset($this->DateCreated) ? $this->DateCreated : null;
    }
    /**
     * Set DateCreated value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateCreated
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDateCreated($dateCreated = null)
    {
        // validation for constraint: string
        if (!is_null($dateCreated) && !is_string($dateCreated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateCreated)), __LINE__);
        }
        if (is_null($dateCreated) || (is_array($dateCreated) && empty($dateCreated))) {
            unset($this->DateCreated);
        } else {
            $this->DateCreated = $dateCreated;
        }
        return $this;
    }
    /**
     * Get Deadline value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeadline()
    {
        return isset($this->Deadline) ? $this->Deadline : null;
    }
    /**
     * Set Deadline value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deadline
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDeadline($deadline = null)
    {
        // validation for constraint: string
        if (!is_null($deadline) && !is_string($deadline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deadline)), __LINE__);
        }
        if (is_null($deadline) || (is_array($deadline) && empty($deadline))) {
            unset($this->Deadline);
        } else {
            $this->Deadline = $deadline;
        }
        return $this;
    }
    /**
     * Get DeliveryAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryAddress()
    {
        return isset($this->DeliveryAddress) ? $this->DeliveryAddress : null;
    }
    /**
     * Set DeliveryAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryAddress
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDeliveryAddress($deliveryAddress = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($deliveryAddress) && strlen($deliveryAddress) > 250) || (is_array($deliveryAddress) && count($deliveryAddress) > 250)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 250 element(s) or a scalar of 250 character(s) at most, "%d" length given', is_scalar($deliveryAddress) ? strlen($deliveryAddress) : count($deliveryAddress)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($deliveryAddress) && strlen($deliveryAddress) < 0) || (is_array($deliveryAddress) && count($deliveryAddress) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($deliveryAddress) && !is_string($deliveryAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryAddress)), __LINE__);
        }
        if (is_null($deliveryAddress) || (is_array($deliveryAddress) && empty($deliveryAddress))) {
            unset($this->DeliveryAddress);
        } else {
            $this->DeliveryAddress = $deliveryAddress;
        }
        return $this;
    }
    /**
     * Get DeliveryCity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryCity()
    {
        return isset($this->DeliveryCity) ? $this->DeliveryCity : null;
    }
    /**
     * Set DeliveryCity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryCity
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDeliveryCity($deliveryCity = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($deliveryCity) && strlen($deliveryCity) > 60) || (is_array($deliveryCity) && count($deliveryCity) > 60)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 60 element(s) or a scalar of 60 character(s) at most, "%d" length given', is_scalar($deliveryCity) ? strlen($deliveryCity) : count($deliveryCity)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($deliveryCity) && strlen($deliveryCity) < 0) || (is_array($deliveryCity) && count($deliveryCity) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($deliveryCity) && !is_string($deliveryCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryCity)), __LINE__);
        }
        if (is_null($deliveryCity) || (is_array($deliveryCity) && empty($deliveryCity))) {
            unset($this->DeliveryCity);
        } else {
            $this->DeliveryCity = $deliveryCity;
        }
        return $this;
    }
    /**
     * Get DeliveryCountryRegionId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryCountryRegionId()
    {
        return isset($this->DeliveryCountryRegionId) ? $this->DeliveryCountryRegionId : null;
    }
    /**
     * Set DeliveryCountryRegionId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryCountryRegionId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDeliveryCountryRegionId($deliveryCountryRegionId = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryCountryRegionId) && !is_string($deliveryCountryRegionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryCountryRegionId)), __LINE__);
        }
        if (is_null($deliveryCountryRegionId) || (is_array($deliveryCountryRegionId) && empty($deliveryCountryRegionId))) {
            unset($this->DeliveryCountryRegionId);
        } else {
            $this->DeliveryCountryRegionId = $deliveryCountryRegionId;
        }
        return $this;
    }
    /**
     * Get DeliveryCounty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryCounty()
    {
        return isset($this->DeliveryCounty) ? $this->DeliveryCounty : null;
    }
    /**
     * Set DeliveryCounty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryCounty
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDeliveryCounty($deliveryCounty = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryCounty) && !is_string($deliveryCounty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryCounty)), __LINE__);
        }
        if (is_null($deliveryCounty) || (is_array($deliveryCounty) && empty($deliveryCounty))) {
            unset($this->DeliveryCounty);
        } else {
            $this->DeliveryCounty = $deliveryCounty;
        }
        return $this;
    }
    /**
     * Get DeliveryDateControlType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryDateControlType()
    {
        return isset($this->DeliveryDateControlType) ? $this->DeliveryDateControlType : null;
    }
    /**
     * Set DeliveryDateControlType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_SalesDeliveryDateControlType::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_SalesDeliveryDateControlType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliveryDateControlType
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDeliveryDateControlType($deliveryDateControlType = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_SalesDeliveryDateControlType::valueIsValid($deliveryDateControlType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryDateControlType, implode(', ', \RaseConnector\EnumType\AxdEnum_SalesDeliveryDateControlType::getValidValues())), __LINE__);
        }
        if (is_null($deliveryDateControlType) || (is_array($deliveryDateControlType) && empty($deliveryDateControlType))) {
            unset($this->DeliveryDateControlType);
        } else {
            $this->DeliveryDateControlType = $deliveryDateControlType;
        }
        return $this;
    }
    /**
     * Get DeliveryName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryName()
    {
        return isset($this->DeliveryName) ? $this->DeliveryName : null;
    }
    /**
     * Set DeliveryName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryName
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDeliveryName($deliveryName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($deliveryName) && strlen($deliveryName) > 60) || (is_array($deliveryName) && count($deliveryName) > 60)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 60 element(s) or a scalar of 60 character(s) at most, "%d" length given', is_scalar($deliveryName) ? strlen($deliveryName) : count($deliveryName)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($deliveryName) && strlen($deliveryName) < 0) || (is_array($deliveryName) && count($deliveryName) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($deliveryName) && !is_string($deliveryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryName)), __LINE__);
        }
        if (is_null($deliveryName) || (is_array($deliveryName) && empty($deliveryName))) {
            unset($this->DeliveryName);
        } else {
            $this->DeliveryName = $deliveryName;
        }
        return $this;
    }
    /**
     * Get DeliveryState value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryState()
    {
        return isset($this->DeliveryState) ? $this->DeliveryState : null;
    }
    /**
     * Set DeliveryState value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryState
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDeliveryState($deliveryState = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryState) && !is_string($deliveryState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryState)), __LINE__);
        }
        if (is_null($deliveryState) || (is_array($deliveryState) && empty($deliveryState))) {
            unset($this->DeliveryState);
        } else {
            $this->DeliveryState = $deliveryState;
        }
        return $this;
    }
    /**
     * Get DeliveryStreet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryStreet()
    {
        return isset($this->DeliveryStreet) ? $this->DeliveryStreet : null;
    }
    /**
     * Set DeliveryStreet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryStreet
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDeliveryStreet($deliveryStreet = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($deliveryStreet) && strlen($deliveryStreet) > 250) || (is_array($deliveryStreet) && count($deliveryStreet) > 250)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 250 element(s) or a scalar of 250 character(s) at most, "%d" length given', is_scalar($deliveryStreet) ? strlen($deliveryStreet) : count($deliveryStreet)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($deliveryStreet) && strlen($deliveryStreet) < 0) || (is_array($deliveryStreet) && count($deliveryStreet) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($deliveryStreet) && !is_string($deliveryStreet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryStreet)), __LINE__);
        }
        if (is_null($deliveryStreet) || (is_array($deliveryStreet) && empty($deliveryStreet))) {
            unset($this->DeliveryStreet);
        } else {
            $this->DeliveryStreet = $deliveryStreet;
        }
        return $this;
    }
    /**
     * Get DeliveryZipCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryZipCode()
    {
        return isset($this->DeliveryZipCode) ? $this->DeliveryZipCode : null;
    }
    /**
     * Set DeliveryZipCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryZipCode
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDeliveryZipCode($deliveryZipCode = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryZipCode) && !is_string($deliveryZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryZipCode)), __LINE__);
        }
        if (is_null($deliveryZipCode) || (is_array($deliveryZipCode) && empty($deliveryZipCode))) {
            unset($this->DeliveryZipCode);
        } else {
            $this->DeliveryZipCode = $deliveryZipCode;
        }
        return $this;
    }
    /**
     * Get Dimension value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \RaseConnector\ArrayType\AxdArray_AxdExtType_Dimension|null
     */
    public function getDimension()
    {
        return isset($this->Dimension) ? $this->Dimension : null;
    }
    /**
     * Set Dimension value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \RaseConnector\ArrayType\AxdArray_AxdExtType_Dimension $dimension
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDimension(\RaseConnector\ArrayType\AxdArray_AxdExtType_Dimension $dimension = null)
    {
        if (is_null($dimension) || (is_array($dimension) && empty($dimension))) {
            unset($this->Dimension);
        } else {
            $this->Dimension = $dimension;
        }
        return $this;
    }
    /**
     * Get DirectDebitMandate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDirectDebitMandate()
    {
        return isset($this->DirectDebitMandate) ? $this->DirectDebitMandate : null;
    }
    /**
     * Set DirectDebitMandate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $directDebitMandate
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDirectDebitMandate($directDebitMandate = null)
    {
        // validation for constraint: int
        if (!is_null($directDebitMandate) && !is_numeric($directDebitMandate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($directDebitMandate)), __LINE__);
        }
        if (is_null($directDebitMandate) || (is_array($directDebitMandate) && empty($directDebitMandate))) {
            unset($this->DirectDebitMandate);
        } else {
            $this->DirectDebitMandate = $directDebitMandate;
        }
        return $this;
    }
    /**
     * Get DiscPercent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getDiscPercent()
    {
        return isset($this->DiscPercent) ? $this->DiscPercent : null;
    }
    /**
     * Set DiscPercent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $discPercent
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDiscPercent($discPercent = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($discPercent) && strlen(substr($discPercent, strpos($discPercent, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($discPercent, strpos($discPercent, '.')))), __LINE__);
        }
        if (is_null($discPercent) || (is_array($discPercent) && empty($discPercent))) {
            unset($this->DiscPercent);
        } else {
            $this->DiscPercent = $discPercent;
        }
        return $this;
    }
    /**
     * Get DlvMode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDlvMode()
    {
        return isset($this->DlvMode) ? $this->DlvMode : null;
    }
    /**
     * Set DlvMode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dlvMode
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDlvMode($dlvMode = null)
    {
        // validation for constraint: string
        if (!is_null($dlvMode) && !is_string($dlvMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dlvMode)), __LINE__);
        }
        if (is_null($dlvMode) || (is_array($dlvMode) && empty($dlvMode))) {
            unset($this->DlvMode);
        } else {
            $this->DlvMode = $dlvMode;
        }
        return $this;
    }
    /**
     * Get DlvReason value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDlvReason()
    {
        return isset($this->DlvReason) ? $this->DlvReason : null;
    }
    /**
     * Set DlvReason value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dlvReason
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDlvReason($dlvReason = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($dlvReason) && strlen($dlvReason) > 10) || (is_array($dlvReason) && count($dlvReason) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($dlvReason) ? strlen($dlvReason) : count($dlvReason)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($dlvReason) && strlen($dlvReason) < 0) || (is_array($dlvReason) && count($dlvReason) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($dlvReason) && !is_string($dlvReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dlvReason)), __LINE__);
        }
        if (is_null($dlvReason) || (is_array($dlvReason) && empty($dlvReason))) {
            unset($this->DlvReason);
        } else {
            $this->DlvReason = $dlvReason;
        }
        return $this;
    }
    /**
     * Get DlvTerm value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDlvTerm()
    {
        return isset($this->DlvTerm) ? $this->DlvTerm : null;
    }
    /**
     * Set DlvTerm value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dlvTerm
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDlvTerm($dlvTerm = null)
    {
        // validation for constraint: string
        if (!is_null($dlvTerm) && !is_string($dlvTerm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dlvTerm)), __LINE__);
        }
        if (is_null($dlvTerm) || (is_array($dlvTerm) && empty($dlvTerm))) {
            unset($this->DlvTerm);
        } else {
            $this->DlvTerm = $dlvTerm;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
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
     * Get EInvoiceAccountCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEInvoiceAccountCode()
    {
        return isset($this->EInvoiceAccountCode) ? $this->EInvoiceAccountCode : null;
    }
    /**
     * Set EInvoiceAccountCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $eInvoiceAccountCode
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setEInvoiceAccountCode($eInvoiceAccountCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($eInvoiceAccountCode) && strlen($eInvoiceAccountCode) > 35) || (is_array($eInvoiceAccountCode) && count($eInvoiceAccountCode) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($eInvoiceAccountCode) ? strlen($eInvoiceAccountCode) : count($eInvoiceAccountCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($eInvoiceAccountCode) && strlen($eInvoiceAccountCode) < 0) || (is_array($eInvoiceAccountCode) && count($eInvoiceAccountCode) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($eInvoiceAccountCode) && !is_string($eInvoiceAccountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eInvoiceAccountCode)), __LINE__);
        }
        if (is_null($eInvoiceAccountCode) || (is_array($eInvoiceAccountCode) && empty($eInvoiceAccountCode))) {
            unset($this->EInvoiceAccountCode);
        } else {
            $this->EInvoiceAccountCode = $eInvoiceAccountCode;
        }
        return $this;
    }
    /**
     * Get EInvoiceLineSpec value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEInvoiceLineSpec()
    {
        return isset($this->EInvoiceLineSpec) ? $this->EInvoiceLineSpec : null;
    }
    /**
     * Set EInvoiceLineSpec value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_EInvoiceLineSpecific::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_EInvoiceLineSpecific::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eInvoiceLineSpec
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setEInvoiceLineSpec($eInvoiceLineSpec = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_EInvoiceLineSpecific::valueIsValid($eInvoiceLineSpec)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eInvoiceLineSpec, implode(', ', \RaseConnector\EnumType\AxdExtType_EInvoiceLineSpecific::getValidValues())), __LINE__);
        }
        if (is_null($eInvoiceLineSpec) || (is_array($eInvoiceLineSpec) && empty($eInvoiceLineSpec))) {
            unset($this->EInvoiceLineSpec);
        } else {
            $this->EInvoiceLineSpec = $eInvoiceLineSpec;
        }
        return $this;
    }
    /**
     * Get Email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmail()
    {
        return isset($this->Email) ? $this->Email : null;
    }
    /**
     * Set Email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $email
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setEmail($email = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($email) && strlen($email) > 80) || (is_array($email) && count($email) > 80)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 80 element(s) or a scalar of 80 character(s) at most, "%d" length given', is_scalar($email) ? strlen($email) : count($email)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($email) && strlen($email) < 0) || (is_array($email) && count($email) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }
        return $this;
    }
    /**
     * Get EndDisc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDisc()
    {
        return isset($this->EndDisc) ? $this->EndDisc : null;
    }
    /**
     * Set EndDisc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDisc
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setEndDisc($endDisc = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($endDisc) && strlen($endDisc) > 10) || (is_array($endDisc) && count($endDisc) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($endDisc) ? strlen($endDisc) : count($endDisc)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($endDisc) && strlen($endDisc) < 0) || (is_array($endDisc) && count($endDisc) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($endDisc) && !is_string($endDisc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDisc)), __LINE__);
        }
        if (is_null($endDisc) || (is_array($endDisc) && empty($endDisc))) {
            unset($this->EndDisc);
        } else {
            $this->EndDisc = $endDisc;
        }
        return $this;
    }
    /**
     * Get EnterpriseNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEnterpriseNumber()
    {
        return isset($this->EnterpriseNumber) ? $this->EnterpriseNumber : null;
    }
    /**
     * Set EnterpriseNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $enterpriseNumber
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setEnterpriseNumber($enterpriseNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($enterpriseNumber) && strlen($enterpriseNumber) > 50) || (is_array($enterpriseNumber) && count($enterpriseNumber) > 50)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 50 element(s) or a scalar of 50 character(s) at most, "%d" length given', is_scalar($enterpriseNumber) ? strlen($enterpriseNumber) : count($enterpriseNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($enterpriseNumber) && strlen($enterpriseNumber) < 0) || (is_array($enterpriseNumber) && count($enterpriseNumber) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($enterpriseNumber) && !is_string($enterpriseNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($enterpriseNumber)), __LINE__);
        }
        if (is_null($enterpriseNumber) || (is_array($enterpriseNumber) && empty($enterpriseNumber))) {
            unset($this->EnterpriseNumber);
        } else {
            $this->EnterpriseNumber = $enterpriseNumber;
        }
        return $this;
    }
    /**
     * Get Estimate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getEstimate()
    {
        return isset($this->Estimate) ? $this->Estimate : null;
    }
    /**
     * Set Estimate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $estimate
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setEstimate($estimate = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($estimate) && strlen(substr($estimate, strpos($estimate, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($estimate, strpos($estimate, '.')))), __LINE__);
        }
        if (is_null($estimate) || (is_array($estimate) && empty($estimate))) {
            unset($this->Estimate);
        } else {
            $this->Estimate = $estimate;
        }
        return $this;
    }
    /**
     * Get ExportReason value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExportReason()
    {
        return isset($this->ExportReason) ? $this->ExportReason : null;
    }
    /**
     * Set ExportReason value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $exportReason
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setExportReason($exportReason = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($exportReason) && strlen($exportReason) > 30) || (is_array($exportReason) && count($exportReason) > 30)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 30 element(s) or a scalar of 30 character(s) at most, "%d" length given', is_scalar($exportReason) ? strlen($exportReason) : count($exportReason)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($exportReason) && strlen($exportReason) < 0) || (is_array($exportReason) && count($exportReason) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($exportReason) && !is_string($exportReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exportReason)), __LINE__);
        }
        if (is_null($exportReason) || (is_array($exportReason) && empty($exportReason))) {
            unset($this->ExportReason);
        } else {
            $this->ExportReason = $exportReason;
        }
        return $this;
    }
    /**
     * Get FixedDueDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFixedDueDate()
    {
        return isset($this->FixedDueDate) ? $this->FixedDueDate : null;
    }
    /**
     * Set FixedDueDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fixedDueDate
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setFixedDueDate($fixedDueDate = null)
    {
        // validation for constraint: string
        if (!is_null($fixedDueDate) && !is_string($fixedDueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fixedDueDate)), __LINE__);
        }
        if (is_null($fixedDueDate) || (is_array($fixedDueDate) && empty($fixedDueDate))) {
            unset($this->FixedDueDate);
        } else {
            $this->FixedDueDate = $fixedDueDate;
        }
        return $this;
    }
    /**
     * Get FixedExchRate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getFixedExchRate()
    {
        return isset($this->FixedExchRate) ? $this->FixedExchRate : null;
    }
    /**
     * Set FixedExchRate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $fixedExchRate
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setFixedExchRate($fixedExchRate = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($fixedExchRate) && strlen(substr($fixedExchRate, strpos($fixedExchRate, '.'))) !== 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 12 fraction digits, "%d" given', strlen(substr($fixedExchRate, strpos($fixedExchRate, '.')))), __LINE__);
        }
        if (is_null($fixedExchRate) || (is_array($fixedExchRate) && empty($fixedExchRate))) {
            unset($this->FixedExchRate);
        } else {
            $this->FixedExchRate = $fixedExchRate;
        }
        return $this;
    }
    /**
     * Get FreightSlipType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFreightSlipType()
    {
        return isset($this->FreightSlipType) ? $this->FreightSlipType : null;
    }
    /**
     * Set FreightSlipType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_CustFreightSlipType::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_CustFreightSlipType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $freightSlipType
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setFreightSlipType($freightSlipType = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_CustFreightSlipType::valueIsValid($freightSlipType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $freightSlipType, implode(', ', \RaseConnector\EnumType\AxdExtType_CustFreightSlipType::getValidValues())), __LINE__);
        }
        if (is_null($freightSlipType) || (is_array($freightSlipType) && empty($freightSlipType))) {
            unset($this->FreightSlipType);
        } else {
            $this->FreightSlipType = $freightSlipType;
        }
        return $this;
    }
    /**
     * Get FreightZone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFreightZone()
    {
        return isset($this->FreightZone) ? $this->FreightZone : null;
    }
    /**
     * Set FreightZone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $freightZone
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setFreightZone($freightZone = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($freightZone) && strlen($freightZone) > 10) || (is_array($freightZone) && count($freightZone) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($freightZone) ? strlen($freightZone) : count($freightZone)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($freightZone) && strlen($freightZone) < 0) || (is_array($freightZone) && count($freightZone) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($freightZone) && !is_string($freightZone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freightZone)), __LINE__);
        }
        if (is_null($freightZone) || (is_array($freightZone) && empty($freightZone))) {
            unset($this->FreightZone);
        } else {
            $this->FreightZone = $freightZone;
        }
        return $this;
    }
    /**
     * Get GiroType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGiroType()
    {
        return isset($this->GiroType) ? $this->GiroType : null;
    }
    /**
     * Set GiroType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_PaymentStubInvoiceId::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_PaymentStubInvoiceId::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $giroType
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setGiroType($giroType = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_PaymentStubInvoiceId::valueIsValid($giroType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $giroType, implode(', ', \RaseConnector\EnumType\AxdExtType_PaymentStubInvoiceId::getValidValues())), __LINE__);
        }
        if (is_null($giroType) || (is_array($giroType) && empty($giroType))) {
            unset($this->GiroType);
        } else {
            $this->GiroType = $giroType;
        }
        return $this;
    }
    /**
     * Get IgnoreMarkup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIgnoreMarkup()
    {
        return isset($this->IgnoreMarkup) ? $this->IgnoreMarkup : null;
    }
    /**
     * Set IgnoreMarkup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_IgnoreMarkup::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_IgnoreMarkup::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ignoreMarkup
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setIgnoreMarkup($ignoreMarkup = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_IgnoreMarkup::valueIsValid($ignoreMarkup)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ignoreMarkup, implode(', ', \RaseConnector\EnumType\AxdExtType_IgnoreMarkup::getValidValues())), __LINE__);
        }
        if (is_null($ignoreMarkup) || (is_array($ignoreMarkup) && empty($ignoreMarkup))) {
            unset($this->IgnoreMarkup);
        } else {
            $this->IgnoreMarkup = $ignoreMarkup;
        }
        return $this;
    }
    /**
     * Get InclTax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInclTax()
    {
        return isset($this->InclTax) ? $this->InclTax : null;
    }
    /**
     * Set InclTax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_InclTax::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_InclTax::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $inclTax
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setInclTax($inclTax = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_InclTax::valueIsValid($inclTax)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $inclTax, implode(', ', \RaseConnector\EnumType\AxdExtType_InclTax::getValidValues())), __LINE__);
        }
        if (is_null($inclTax) || (is_array($inclTax) && empty($inclTax))) {
            unset($this->InclTax);
        } else {
            $this->InclTax = $inclTax;
        }
        return $this;
    }
    /**
     * Get InterCompanyOriginalCustAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInterCompanyOriginalCustAccount()
    {
        return isset($this->InterCompanyOriginalCustAccount) ? $this->InterCompanyOriginalCustAccount : null;
    }
    /**
     * Set InterCompanyOriginalCustAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $interCompanyOriginalCustAccount
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setInterCompanyOriginalCustAccount($interCompanyOriginalCustAccount = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($interCompanyOriginalCustAccount) && strlen($interCompanyOriginalCustAccount) > 20) || (is_array($interCompanyOriginalCustAccount) && count($interCompanyOriginalCustAccount) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($interCompanyOriginalCustAccount) ? strlen($interCompanyOriginalCustAccount) : count($interCompanyOriginalCustAccount)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($interCompanyOriginalCustAccount) && strlen($interCompanyOriginalCustAccount) < 0) || (is_array($interCompanyOriginalCustAccount) && count($interCompanyOriginalCustAccount) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($interCompanyOriginalCustAccount) && !is_string($interCompanyOriginalCustAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($interCompanyOriginalCustAccount)), __LINE__);
        }
        if (is_null($interCompanyOriginalCustAccount) || (is_array($interCompanyOriginalCustAccount) && empty($interCompanyOriginalCustAccount))) {
            unset($this->InterCompanyOriginalCustAccount);
        } else {
            $this->InterCompanyOriginalCustAccount = $interCompanyOriginalCustAccount;
        }
        return $this;
    }
    /**
     * Get InterCompanyOriginalSalesId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInterCompanyOriginalSalesId()
    {
        return isset($this->InterCompanyOriginalSalesId) ? $this->InterCompanyOriginalSalesId : null;
    }
    /**
     * Set InterCompanyOriginalSalesId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $interCompanyOriginalSalesId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setInterCompanyOriginalSalesId($interCompanyOriginalSalesId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($interCompanyOriginalSalesId) && strlen($interCompanyOriginalSalesId) > 20) || (is_array($interCompanyOriginalSalesId) && count($interCompanyOriginalSalesId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($interCompanyOriginalSalesId) ? strlen($interCompanyOriginalSalesId) : count($interCompanyOriginalSalesId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($interCompanyOriginalSalesId) && strlen($interCompanyOriginalSalesId) < 0) || (is_array($interCompanyOriginalSalesId) && count($interCompanyOriginalSalesId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($interCompanyOriginalSalesId) && !is_string($interCompanyOriginalSalesId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($interCompanyOriginalSalesId)), __LINE__);
        }
        if (is_null($interCompanyOriginalSalesId) || (is_array($interCompanyOriginalSalesId) && empty($interCompanyOriginalSalesId))) {
            unset($this->InterCompanyOriginalSalesId);
        } else {
            $this->InterCompanyOriginalSalesId = $interCompanyOriginalSalesId;
        }
        return $this;
    }
    /**
     * Get InventLocationId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventLocationId()
    {
        return isset($this->InventLocationId) ? $this->InventLocationId : null;
    }
    /**
     * Set InventLocationId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventLocationId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setInventLocationId($inventLocationId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($inventLocationId) && strlen($inventLocationId) > 10) || (is_array($inventLocationId) && count($inventLocationId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($inventLocationId) ? strlen($inventLocationId) : count($inventLocationId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($inventLocationId) && strlen($inventLocationId) < 0) || (is_array($inventLocationId) && count($inventLocationId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($inventLocationId) && !is_string($inventLocationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventLocationId)), __LINE__);
        }
        if (is_null($inventLocationId) || (is_array($inventLocationId) && empty($inventLocationId))) {
            unset($this->InventLocationId);
        } else {
            $this->InventLocationId = $inventLocationId;
        }
        return $this;
    }
    /**
     * Get InventLocationIdCollect value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventLocationIdCollect()
    {
        return isset($this->InventLocationIdCollect) ? $this->InventLocationIdCollect : null;
    }
    /**
     * Set InventLocationIdCollect value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventLocationIdCollect
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setInventLocationIdCollect($inventLocationIdCollect = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($inventLocationIdCollect) && strlen($inventLocationIdCollect) > 10) || (is_array($inventLocationIdCollect) && count($inventLocationIdCollect) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($inventLocationIdCollect) ? strlen($inventLocationIdCollect) : count($inventLocationIdCollect)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($inventLocationIdCollect) && strlen($inventLocationIdCollect) < 0) || (is_array($inventLocationIdCollect) && count($inventLocationIdCollect) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($inventLocationIdCollect) && !is_string($inventLocationIdCollect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventLocationIdCollect)), __LINE__);
        }
        if (is_null($inventLocationIdCollect) || (is_array($inventLocationIdCollect) && empty($inventLocationIdCollect))) {
            unset($this->InventLocationIdCollect);
        } else {
            $this->InventLocationIdCollect = $inventLocationIdCollect;
        }
        return $this;
    }
    /**
     * Get InventSiteId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventSiteId()
    {
        return isset($this->InventSiteId) ? $this->InventSiteId : null;
    }
    /**
     * Set InventSiteId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventSiteId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setInventSiteId($inventSiteId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($inventSiteId) && strlen($inventSiteId) > 10) || (is_array($inventSiteId) && count($inventSiteId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($inventSiteId) ? strlen($inventSiteId) : count($inventSiteId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($inventSiteId) && strlen($inventSiteId) < 0) || (is_array($inventSiteId) && count($inventSiteId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($inventSiteId) && !is_string($inventSiteId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventSiteId)), __LINE__);
        }
        if (is_null($inventSiteId) || (is_array($inventSiteId) && empty($inventSiteId))) {
            unset($this->InventSiteId);
        } else {
            $this->InventSiteId = $inventSiteId;
        }
        return $this;
    }
    /**
     * Get InvoiceAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceAccount()
    {
        return isset($this->InvoiceAccount) ? $this->InvoiceAccount : null;
    }
    /**
     * Set InvoiceAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceAccount
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setInvoiceAccount($invoiceAccount = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceAccount) && !is_string($invoiceAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceAccount)), __LINE__);
        }
        if (is_null($invoiceAccount) || (is_array($invoiceAccount) && empty($invoiceAccount))) {
            unset($this->InvoiceAccount);
        } else {
            $this->InvoiceAccount = $invoiceAccount;
        }
        return $this;
    }
    /**
     * Get InvoiceFrequenceId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInvoiceFrequenceId()
    {
        return isset($this->InvoiceFrequenceId) ? $this->InvoiceFrequenceId : null;
    }
    /**
     * Set InvoiceFrequenceId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $invoiceFrequenceId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setInvoiceFrequenceId($invoiceFrequenceId = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceFrequenceId) && !is_string($invoiceFrequenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceFrequenceId)), __LINE__);
        }
        if (is_null($invoiceFrequenceId) || (is_array($invoiceFrequenceId) && empty($invoiceFrequenceId))) {
            unset($this->InvoiceFrequenceId);
        } else {
            $this->InvoiceFrequenceId = $invoiceFrequenceId;
        }
        return $this;
    }
    /**
     * Get ItemTagging value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getItemTagging()
    {
        return isset($this->ItemTagging) ? $this->ItemTagging : null;
    }
    /**
     * Set ItemTagging value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_RFIDItemTagging::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_RFIDItemTagging::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemTagging
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setItemTagging($itemTagging = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_RFIDItemTagging::valueIsValid($itemTagging)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $itemTagging, implode(', ', \RaseConnector\EnumType\AxdExtType_RFIDItemTagging::getValidValues())), __LINE__);
        }
        if (is_null($itemTagging) || (is_array($itemTagging) && empty($itemTagging))) {
            unset($this->ItemTagging);
        } else {
            $this->ItemTagging = $itemTagging;
        }
        return $this;
    }
    /**
     * Get LanguageId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLanguageId()
    {
        return isset($this->LanguageId) ? $this->LanguageId : null;
    }
    /**
     * Set LanguageId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $languageId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setLanguageId($languageId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($languageId) && strlen($languageId) > 7) || (is_array($languageId) && count($languageId) > 7)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 7 element(s) or a scalar of 7 character(s) at most, "%d" length given', is_scalar($languageId) ? strlen($languageId) : count($languageId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($languageId) && strlen($languageId) < 0) || (is_array($languageId) && count($languageId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($languageId) && !is_string($languageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($languageId)), __LINE__);
        }
        if (is_null($languageId) || (is_array($languageId) && empty($languageId))) {
            unset($this->LanguageId);
        } else {
            $this->LanguageId = $languageId;
        }
        return $this;
    }
    /**
     * Get LineDisc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLineDisc()
    {
        return isset($this->LineDisc) ? $this->LineDisc : null;
    }
    /**
     * Set LineDisc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lineDisc
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setLineDisc($lineDisc = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($lineDisc) && strlen($lineDisc) > 10) || (is_array($lineDisc) && count($lineDisc) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($lineDisc) ? strlen($lineDisc) : count($lineDisc)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($lineDisc) && strlen($lineDisc) < 0) || (is_array($lineDisc) && count($lineDisc) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($lineDisc) && !is_string($lineDisc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineDisc)), __LINE__);
        }
        if (is_null($lineDisc) || (is_array($lineDisc) && empty($lineDisc))) {
            unset($this->LineDisc);
        } else {
            $this->LineDisc = $lineDisc;
        }
        return $this;
    }
    /**
     * Get Listcode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getListcode()
    {
        return isset($this->Listcode) ? $this->Listcode : null;
    }
    /**
     * Set Listcode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_ListcodeId::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_ListcodeId::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listcode
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setListcode($listcode = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_ListcodeId::valueIsValid($listcode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listcode, implode(', ', \RaseConnector\EnumType\AxdExtType_ListcodeId::getValidValues())), __LINE__);
        }
        if (is_null($listcode) || (is_array($listcode) && empty($listcode))) {
            unset($this->Listcode);
        } else {
            $this->Listcode = $listcode;
        }
        return $this;
    }
    /**
     * Get MarkupGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMarkupGroup()
    {
        return isset($this->MarkupGroup) ? $this->MarkupGroup : null;
    }
    /**
     * Set MarkupGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $markupGroup
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setMarkupGroup($markupGroup = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($markupGroup) && strlen($markupGroup) > 10) || (is_array($markupGroup) && count($markupGroup) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($markupGroup) ? strlen($markupGroup) : count($markupGroup)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($markupGroup) && strlen($markupGroup) < 0) || (is_array($markupGroup) && count($markupGroup) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($markupGroup) && !is_string($markupGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($markupGroup)), __LINE__);
        }
        if (is_null($markupGroup) || (is_array($markupGroup) && empty($markupGroup))) {
            unset($this->MarkupGroup);
        } else {
            $this->MarkupGroup = $markupGroup;
        }
        return $this;
    }
    /**
     * Get MultiLineDisc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMultiLineDisc()
    {
        return isset($this->MultiLineDisc) ? $this->MultiLineDisc : null;
    }
    /**
     * Set MultiLineDisc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $multiLineDisc
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setMultiLineDisc($multiLineDisc = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($multiLineDisc) && strlen($multiLineDisc) > 10) || (is_array($multiLineDisc) && count($multiLineDisc) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($multiLineDisc) ? strlen($multiLineDisc) : count($multiLineDisc)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($multiLineDisc) && strlen($multiLineDisc) < 0) || (is_array($multiLineDisc) && count($multiLineDisc) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($multiLineDisc) && !is_string($multiLineDisc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($multiLineDisc)), __LINE__);
        }
        if (is_null($multiLineDisc) || (is_array($multiLineDisc) && empty($multiLineDisc))) {
            unset($this->MultiLineDisc);
        } else {
            $this->MultiLineDisc = $multiLineDisc;
        }
        return $this;
    }
    /**
     * Get NoCheckCreditLimit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNoCheckCreditLimit()
    {
        return isset($this->NoCheckCreditLimit) ? $this->NoCheckCreditLimit : null;
    }
    /**
     * Set NoCheckCreditLimit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_NoCheckCreditLimit::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_NoCheckCreditLimit::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $noCheckCreditLimit
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setNoCheckCreditLimit($noCheckCreditLimit = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_NoCheckCreditLimit::valueIsValid($noCheckCreditLimit)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $noCheckCreditLimit, implode(', ', \RaseConnector\EnumType\AxdExtType_NoCheckCreditLimit::getValidValues())), __LINE__);
        }
        if (is_null($noCheckCreditLimit) || (is_array($noCheckCreditLimit) && empty($noCheckCreditLimit))) {
            unset($this->NoCheckCreditLimit);
        } else {
            $this->NoCheckCreditLimit = $noCheckCreditLimit;
        }
        return $this;
    }
    /**
     * Get NumberSequenceGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumberSequenceGroup()
    {
        return isset($this->NumberSequenceGroup) ? $this->NumberSequenceGroup : null;
    }
    /**
     * Set NumberSequenceGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $numberSequenceGroup
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setNumberSequenceGroup($numberSequenceGroup = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($numberSequenceGroup) && strlen($numberSequenceGroup) > 10) || (is_array($numberSequenceGroup) && count($numberSequenceGroup) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($numberSequenceGroup) ? strlen($numberSequenceGroup) : count($numberSequenceGroup)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($numberSequenceGroup) && strlen($numberSequenceGroup) < 0) || (is_array($numberSequenceGroup) && count($numberSequenceGroup) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($numberSequenceGroup) && !is_string($numberSequenceGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberSequenceGroup)), __LINE__);
        }
        if (is_null($numberSequenceGroup) || (is_array($numberSequenceGroup) && empty($numberSequenceGroup))) {
            unset($this->NumberSequenceGroup);
        } else {
            $this->NumberSequenceGroup = $numberSequenceGroup;
        }
        return $this;
    }
    /**
     * Get OneTimeCustomer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOneTimeCustomer()
    {
        return isset($this->OneTimeCustomer) ? $this->OneTimeCustomer : null;
    }
    /**
     * Set OneTimeCustomer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_OneTimeCustomer::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_OneTimeCustomer::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $oneTimeCustomer
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setOneTimeCustomer($oneTimeCustomer = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_OneTimeCustomer::valueIsValid($oneTimeCustomer)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $oneTimeCustomer, implode(', ', \RaseConnector\EnumType\AxdExtType_OneTimeCustomer::getValidValues())), __LINE__);
        }
        if (is_null($oneTimeCustomer) || (is_array($oneTimeCustomer) && empty($oneTimeCustomer))) {
            unset($this->OneTimeCustomer);
        } else {
            $this->OneTimeCustomer = $oneTimeCustomer;
        }
        return $this;
    }
    /**
     * Get OrderComplete value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderComplete()
    {
        return isset($this->OrderComplete) ? $this->OrderComplete : null;
    }
    /**
     * Set OrderComplete value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_OrderComplete::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_OrderComplete::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $orderComplete
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setOrderComplete($orderComplete = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_OrderComplete::valueIsValid($orderComplete)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $orderComplete, implode(', ', \RaseConnector\EnumType\AxdExtType_OrderComplete::getValidValues())), __LINE__);
        }
        if (is_null($orderComplete) || (is_array($orderComplete) && empty($orderComplete))) {
            unset($this->OrderComplete);
        } else {
            $this->OrderComplete = $orderComplete;
        }
        return $this;
    }
    /**
     * Get PalletTagging value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPalletTagging()
    {
        return isset($this->PalletTagging) ? $this->PalletTagging : null;
    }
    /**
     * Set PalletTagging value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_RFIDPalletTagging::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_RFIDPalletTagging::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $palletTagging
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setPalletTagging($palletTagging = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_RFIDPalletTagging::valueIsValid($palletTagging)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $palletTagging, implode(', ', \RaseConnector\EnumType\AxdExtType_RFIDPalletTagging::getValidValues())), __LINE__);
        }
        if (is_null($palletTagging) || (is_array($palletTagging) && empty($palletTagging))) {
            unset($this->PalletTagging);
        } else {
            $this->PalletTagging = $palletTagging;
        }
        return $this;
    }
    /**
     * Get Payment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPayment()
    {
        return isset($this->Payment) ? $this->Payment : null;
    }
    /**
     * Set Payment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $payment
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setPayment($payment = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($payment) && strlen($payment) > 10) || (is_array($payment) && count($payment) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($payment) ? strlen($payment) : count($payment)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($payment) && strlen($payment) < 0) || (is_array($payment) && count($payment) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($payment) && !is_string($payment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payment)), __LINE__);
        }
        if (is_null($payment) || (is_array($payment) && empty($payment))) {
            unset($this->Payment);
        } else {
            $this->Payment = $payment;
        }
        return $this;
    }
    /**
     * Get PaymentSched value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPaymentSched()
    {
        return isset($this->PaymentSched) ? $this->PaymentSched : null;
    }
    /**
     * Set PaymentSched value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $paymentSched
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setPaymentSched($paymentSched = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($paymentSched) && strlen($paymentSched) > 30) || (is_array($paymentSched) && count($paymentSched) > 30)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 30 element(s) or a scalar of 30 character(s) at most, "%d" length given', is_scalar($paymentSched) ? strlen($paymentSched) : count($paymentSched)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($paymentSched) && strlen($paymentSched) < 0) || (is_array($paymentSched) && count($paymentSched) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($paymentSched) && !is_string($paymentSched)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentSched)), __LINE__);
        }
        if (is_null($paymentSched) || (is_array($paymentSched) && empty($paymentSched))) {
            unset($this->PaymentSched);
        } else {
            $this->PaymentSched = $paymentSched;
        }
        return $this;
    }
    /**
     * Get PaymMode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPaymMode()
    {
        return isset($this->PaymMode) ? $this->PaymMode : null;
    }
    /**
     * Set PaymMode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $paymMode
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setPaymMode($paymMode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($paymMode) && strlen($paymMode) > 10) || (is_array($paymMode) && count($paymMode) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($paymMode) ? strlen($paymMode) : count($paymMode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($paymMode) && strlen($paymMode) < 0) || (is_array($paymMode) && count($paymMode) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($paymMode) && !is_string($paymMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymMode)), __LINE__);
        }
        if (is_null($paymMode) || (is_array($paymMode) && empty($paymMode))) {
            unset($this->PaymMode);
        } else {
            $this->PaymMode = $paymMode;
        }
        return $this;
    }
    /**
     * Get PaymSpec value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPaymSpec()
    {
        return isset($this->PaymSpec) ? $this->PaymSpec : null;
    }
    /**
     * Set PaymSpec value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $paymSpec
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setPaymSpec($paymSpec = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($paymSpec) && strlen($paymSpec) > 10) || (is_array($paymSpec) && count($paymSpec) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($paymSpec) ? strlen($paymSpec) : count($paymSpec)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($paymSpec) && strlen($paymSpec) < 0) || (is_array($paymSpec) && count($paymSpec) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($paymSpec) && !is_string($paymSpec)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymSpec)), __LINE__);
        }
        if (is_null($paymSpec) || (is_array($paymSpec) && empty($paymSpec))) {
            unset($this->PaymSpec);
        } else {
            $this->PaymSpec = $paymSpec;
        }
        return $this;
    }
    /**
     * Get Port value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPort()
    {
        return isset($this->Port) ? $this->Port : null;
    }
    /**
     * Set Port value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $port
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setPort($port = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($port) && strlen($port) > 10) || (is_array($port) && count($port) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($port) ? strlen($port) : count($port)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($port) && strlen($port) < 0) || (is_array($port) && count($port) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($port) && !is_string($port)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($port)), __LINE__);
        }
        if (is_null($port) || (is_array($port) && empty($port))) {
            unset($this->Port);
        } else {
            $this->Port = $port;
        }
        return $this;
    }
    /**
     * Get PostingProfile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostingProfile()
    {
        return isset($this->PostingProfile) ? $this->PostingProfile : null;
    }
    /**
     * Set PostingProfile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postingProfile
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setPostingProfile($postingProfile = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($postingProfile) && strlen($postingProfile) > 10) || (is_array($postingProfile) && count($postingProfile) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($postingProfile) ? strlen($postingProfile) : count($postingProfile)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($postingProfile) && strlen($postingProfile) < 0) || (is_array($postingProfile) && count($postingProfile) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($postingProfile) && !is_string($postingProfile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postingProfile)), __LINE__);
        }
        if (is_null($postingProfile) || (is_array($postingProfile) && empty($postingProfile))) {
            unset($this->PostingProfile);
        } else {
            $this->PostingProfile = $postingProfile;
        }
        return $this;
    }
    /**
     * Get PriceGroupId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPriceGroupId()
    {
        return isset($this->PriceGroupId) ? $this->PriceGroupId : null;
    }
    /**
     * Set PriceGroupId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $priceGroupId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setPriceGroupId($priceGroupId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($priceGroupId) && strlen($priceGroupId) > 10) || (is_array($priceGroupId) && count($priceGroupId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($priceGroupId) ? strlen($priceGroupId) : count($priceGroupId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($priceGroupId) && strlen($priceGroupId) < 0) || (is_array($priceGroupId) && count($priceGroupId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($priceGroupId) && !is_string($priceGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($priceGroupId)), __LINE__);
        }
        if (is_null($priceGroupId) || (is_array($priceGroupId) && empty($priceGroupId))) {
            unset($this->PriceGroupId);
        } else {
            $this->PriceGroupId = $priceGroupId;
        }
        return $this;
    }
    /**
     * Get PrintPricesPackingSlip value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPrintPricesPackingSlip()
    {
        return isset($this->PrintPricesPackingSlip) ? $this->PrintPricesPackingSlip : null;
    }
    /**
     * Set PrintPricesPackingSlip value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_NoYes::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_NoYes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $printPricesPackingSlip
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setPrintPricesPackingSlip($printPricesPackingSlip = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_NoYes::valueIsValid($printPricesPackingSlip)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $printPricesPackingSlip, implode(', ', \RaseConnector\EnumType\AxdEnum_NoYes::getValidValues())), __LINE__);
        }
        if (is_null($printPricesPackingSlip) || (is_array($printPricesPackingSlip) && empty($printPricesPackingSlip))) {
            unset($this->PrintPricesPackingSlip);
        } else {
            $this->PrintPricesPackingSlip = $printPricesPackingSlip;
        }
        return $this;
    }
    /**
     * Get ProjId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProjId()
    {
        return isset($this->ProjId) ? $this->ProjId : null;
    }
    /**
     * Set ProjId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $projId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setProjId($projId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($projId) && strlen($projId) > 10) || (is_array($projId) && count($projId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($projId) ? strlen($projId) : count($projId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($projId) && strlen($projId) < 0) || (is_array($projId) && count($projId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($projId) && !is_string($projId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($projId)), __LINE__);
        }
        if (is_null($projId) || (is_array($projId) && empty($projId))) {
            unset($this->ProjId);
        } else {
            $this->ProjId = $projId;
        }
        return $this;
    }
    /**
     * Get PurchId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPurchId()
    {
        return isset($this->PurchId) ? $this->PurchId : null;
    }
    /**
     * Set PurchId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $purchId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setPurchId($purchId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($purchId) && strlen($purchId) > 20) || (is_array($purchId) && count($purchId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($purchId) ? strlen($purchId) : count($purchId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($purchId) && strlen($purchId) < 0) || (is_array($purchId) && count($purchId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($purchId) && !is_string($purchId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($purchId)), __LINE__);
        }
        if (is_null($purchId) || (is_array($purchId) && empty($purchId))) {
            unset($this->PurchId);
        } else {
            $this->PurchId = $purchId;
        }
        return $this;
    }
    /**
     * Get QuotationId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getQuotationId()
    {
        return isset($this->QuotationId) ? $this->QuotationId : null;
    }
    /**
     * Set QuotationId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $quotationId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setQuotationId($quotationId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($quotationId) && strlen($quotationId) > 20) || (is_array($quotationId) && count($quotationId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($quotationId) ? strlen($quotationId) : count($quotationId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($quotationId) && strlen($quotationId) < 0) || (is_array($quotationId) && count($quotationId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($quotationId) && !is_string($quotationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quotationId)), __LINE__);
        }
        if (is_null($quotationId) || (is_array($quotationId) && empty($quotationId))) {
            unset($this->QuotationId);
        } else {
            $this->QuotationId = $quotationId;
        }
        return $this;
    }
    /**
     * Get ReceiptDateConfirmed value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReceiptDateConfirmed()
    {
        return isset($this->ReceiptDateConfirmed) ? $this->ReceiptDateConfirmed : null;
    }
    /**
     * Set ReceiptDateConfirmed value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $receiptDateConfirmed
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setReceiptDateConfirmed($receiptDateConfirmed = null)
    {
        // validation for constraint: string
        if (!is_null($receiptDateConfirmed) && !is_string($receiptDateConfirmed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiptDateConfirmed)), __LINE__);
        }
        if (is_null($receiptDateConfirmed) || (is_array($receiptDateConfirmed) && empty($receiptDateConfirmed))) {
            unset($this->ReceiptDateConfirmed);
        } else {
            $this->ReceiptDateConfirmed = $receiptDateConfirmed;
        }
        return $this;
    }
    /**
     * Get ReceiptDateRequested value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReceiptDateRequested()
    {
        return isset($this->ReceiptDateRequested) ? $this->ReceiptDateRequested : null;
    }
    /**
     * Set ReceiptDateRequested value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $receiptDateRequested
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setReceiptDateRequested($receiptDateRequested = null)
    {
        // validation for constraint: string
        if (!is_null($receiptDateRequested) && !is_string($receiptDateRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiptDateRequested)), __LINE__);
        }
        if (is_null($receiptDateRequested) || (is_array($receiptDateRequested) && empty($receiptDateRequested))) {
            unset($this->ReceiptDateRequested);
        } else {
            $this->ReceiptDateRequested = $receiptDateRequested;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
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
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
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
     * Get Reservation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReservation()
    {
        return isset($this->Reservation) ? $this->Reservation : null;
    }
    /**
     * Set Reservation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_ItemReservation::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_ItemReservation::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $reservation
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setReservation($reservation = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_ItemReservation::valueIsValid($reservation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $reservation, implode(', ', \RaseConnector\EnumType\AxdEnum_ItemReservation::getValidValues())), __LINE__);
        }
        if (is_null($reservation) || (is_array($reservation) && empty($reservation))) {
            unset($this->Reservation);
        } else {
            $this->Reservation = $reservation;
        }
        return $this;
    }
    /**
     * Get ReturnDeadline value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReturnDeadline()
    {
        return isset($this->ReturnDeadline) ? $this->ReturnDeadline : null;
    }
    /**
     * Set ReturnDeadline value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $returnDeadline
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setReturnDeadline($returnDeadline = null)
    {
        // validation for constraint: string
        if (!is_null($returnDeadline) && !is_string($returnDeadline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnDeadline)), __LINE__);
        }
        if (is_null($returnDeadline) || (is_array($returnDeadline) && empty($returnDeadline))) {
            unset($this->ReturnDeadline);
        } else {
            $this->ReturnDeadline = $returnDeadline;
        }
        return $this;
    }
    /**
     * Get ReturnItemNum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReturnItemNum()
    {
        return isset($this->ReturnItemNum) ? $this->ReturnItemNum : null;
    }
    /**
     * Set ReturnItemNum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $returnItemNum
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setReturnItemNum($returnItemNum = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($returnItemNum) && strlen($returnItemNum) > 10) || (is_array($returnItemNum) && count($returnItemNum) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($returnItemNum) ? strlen($returnItemNum) : count($returnItemNum)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($returnItemNum) && strlen($returnItemNum) < 0) || (is_array($returnItemNum) && count($returnItemNum) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($returnItemNum) && !is_string($returnItemNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnItemNum)), __LINE__);
        }
        if (is_null($returnItemNum) || (is_array($returnItemNum) && empty($returnItemNum))) {
            unset($this->ReturnItemNum);
        } else {
            $this->ReturnItemNum = $returnItemNum;
        }
        return $this;
    }
    /**
     * Get ReturnReasonCodeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReturnReasonCodeId()
    {
        return isset($this->ReturnReasonCodeId) ? $this->ReturnReasonCodeId : null;
    }
    /**
     * Set ReturnReasonCodeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $returnReasonCodeId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setReturnReasonCodeId($returnReasonCodeId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($returnReasonCodeId) && strlen($returnReasonCodeId) > 10) || (is_array($returnReasonCodeId) && count($returnReasonCodeId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($returnReasonCodeId) ? strlen($returnReasonCodeId) : count($returnReasonCodeId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($returnReasonCodeId) && strlen($returnReasonCodeId) < 0) || (is_array($returnReasonCodeId) && count($returnReasonCodeId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($returnReasonCodeId) && !is_string($returnReasonCodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnReasonCodeId)), __LINE__);
        }
        if (is_null($returnReasonCodeId) || (is_array($returnReasonCodeId) && empty($returnReasonCodeId))) {
            unset($this->ReturnReasonCodeId);
        } else {
            $this->ReturnReasonCodeId = $returnReasonCodeId;
        }
        return $this;
    }
    /**
     * Get ReturnReplacementCreated value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReturnReplacementCreated()
    {
        return isset($this->ReturnReplacementCreated) ? $this->ReturnReplacementCreated : null;
    }
    /**
     * Set ReturnReplacementCreated value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_ReturnReplacementCreated::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_ReturnReplacementCreated::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnReplacementCreated
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setReturnReplacementCreated($returnReplacementCreated = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_ReturnReplacementCreated::valueIsValid($returnReplacementCreated)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $returnReplacementCreated, implode(', ', \RaseConnector\EnumType\AxdExtType_ReturnReplacementCreated::getValidValues())), __LINE__);
        }
        if (is_null($returnReplacementCreated) || (is_array($returnReplacementCreated) && empty($returnReplacementCreated))) {
            unset($this->ReturnReplacementCreated);
        } else {
            $this->ReturnReplacementCreated = $returnReplacementCreated;
        }
        return $this;
    }
    /**
     * Get ReturnReplacementId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReturnReplacementId()
    {
        return isset($this->ReturnReplacementId) ? $this->ReturnReplacementId : null;
    }
    /**
     * Set ReturnReplacementId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $returnReplacementId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setReturnReplacementId($returnReplacementId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($returnReplacementId) && strlen($returnReplacementId) > 20) || (is_array($returnReplacementId) && count($returnReplacementId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($returnReplacementId) ? strlen($returnReplacementId) : count($returnReplacementId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($returnReplacementId) && strlen($returnReplacementId) < 0) || (is_array($returnReplacementId) && count($returnReplacementId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($returnReplacementId) && !is_string($returnReplacementId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnReplacementId)), __LINE__);
        }
        if (is_null($returnReplacementId) || (is_array($returnReplacementId) && empty($returnReplacementId))) {
            unset($this->ReturnReplacementId);
        } else {
            $this->ReturnReplacementId = $returnReplacementId;
        }
        return $this;
    }
    /**
     * Get ReturnStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReturnStatus()
    {
        return isset($this->ReturnStatus) ? $this->ReturnStatus : null;
    }
    /**
     * Set ReturnStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_ReturnStatusHeader::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_ReturnStatusHeader::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnStatus
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setReturnStatus($returnStatus = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_ReturnStatusHeader::valueIsValid($returnStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $returnStatus, implode(', ', \RaseConnector\EnumType\AxdEnum_ReturnStatusHeader::getValidValues())), __LINE__);
        }
        if (is_null($returnStatus) || (is_array($returnStatus) && empty($returnStatus))) {
            unset($this->ReturnStatus);
        } else {
            $this->ReturnStatus = $returnStatus;
        }
        return $this;
    }
    /**
     * Get SalesGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSalesGroup()
    {
        return isset($this->SalesGroup) ? $this->SalesGroup : null;
    }
    /**
     * Set SalesGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $salesGroup
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSalesGroup($salesGroup = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($salesGroup) && strlen($salesGroup) > 10) || (is_array($salesGroup) && count($salesGroup) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($salesGroup) ? strlen($salesGroup) : count($salesGroup)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($salesGroup) && strlen($salesGroup) < 0) || (is_array($salesGroup) && count($salesGroup) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($salesGroup) && !is_string($salesGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salesGroup)), __LINE__);
        }
        if (is_null($salesGroup) || (is_array($salesGroup) && empty($salesGroup))) {
            unset($this->SalesGroup);
        } else {
            $this->SalesGroup = $salesGroup;
        }
        return $this;
    }
    /**
     * Get SalesId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSalesId()
    {
        return isset($this->SalesId) ? $this->SalesId : null;
    }
    /**
     * Set SalesId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $salesId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSalesId($salesId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($salesId) && strlen($salesId) > 20) || (is_array($salesId) && count($salesId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($salesId) ? strlen($salesId) : count($salesId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($salesId) && strlen($salesId) < 0) || (is_array($salesId) && count($salesId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($salesId) && !is_string($salesId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salesId)), __LINE__);
        }
        if (is_null($salesId) || (is_array($salesId) && empty($salesId))) {
            unset($this->SalesId);
        } else {
            $this->SalesId = $salesId;
        }
        return $this;
    }
    /**
     * Get SalesName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSalesName()
    {
        return isset($this->SalesName) ? $this->SalesName : null;
    }
    /**
     * Set SalesName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $salesName
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSalesName($salesName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($salesName) && strlen($salesName) > 60) || (is_array($salesName) && count($salesName) > 60)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 60 element(s) or a scalar of 60 character(s) at most, "%d" length given', is_scalar($salesName) ? strlen($salesName) : count($salesName)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($salesName) && strlen($salesName) < 0) || (is_array($salesName) && count($salesName) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($salesName) && !is_string($salesName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salesName)), __LINE__);
        }
        if (is_null($salesName) || (is_array($salesName) && empty($salesName))) {
            unset($this->SalesName);
        } else {
            $this->SalesName = $salesName;
        }
        return $this;
    }
    /**
     * Get SalesPoolId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSalesPoolId()
    {
        return isset($this->SalesPoolId) ? $this->SalesPoolId : null;
    }
    /**
     * Set SalesPoolId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $salesPoolId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSalesPoolId($salesPoolId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($salesPoolId) && strlen($salesPoolId) > 10) || (is_array($salesPoolId) && count($salesPoolId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($salesPoolId) ? strlen($salesPoolId) : count($salesPoolId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($salesPoolId) && strlen($salesPoolId) < 0) || (is_array($salesPoolId) && count($salesPoolId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($salesPoolId) && !is_string($salesPoolId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salesPoolId)), __LINE__);
        }
        if (is_null($salesPoolId) || (is_array($salesPoolId) && empty($salesPoolId))) {
            unset($this->SalesPoolId);
        } else {
            $this->SalesPoolId = $salesPoolId;
        }
        return $this;
    }
    /**
     * Get SalesResponsible value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSalesResponsible()
    {
        return isset($this->SalesResponsible) ? $this->SalesResponsible : null;
    }
    /**
     * Set SalesResponsible value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $salesResponsible
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSalesResponsible($salesResponsible = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($salesResponsible) && strlen($salesResponsible) > 20) || (is_array($salesResponsible) && count($salesResponsible) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($salesResponsible) ? strlen($salesResponsible) : count($salesResponsible)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($salesResponsible) && strlen($salesResponsible) < 0) || (is_array($salesResponsible) && count($salesResponsible) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($salesResponsible) && !is_string($salesResponsible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salesResponsible)), __LINE__);
        }
        if (is_null($salesResponsible) || (is_array($salesResponsible) && empty($salesResponsible))) {
            unset($this->SalesResponsible);
        } else {
            $this->SalesResponsible = $salesResponsible;
        }
        return $this;
    }
    /**
     * Get SalesStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSalesStatus()
    {
        return isset($this->SalesStatus) ? $this->SalesStatus : null;
    }
    /**
     * Set SalesStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_SalesStatus::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_SalesStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $salesStatus
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSalesStatus($salesStatus = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_SalesStatus::valueIsValid($salesStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $salesStatus, implode(', ', \RaseConnector\EnumType\AxdEnum_SalesStatus::getValidValues())), __LINE__);
        }
        if (is_null($salesStatus) || (is_array($salesStatus) && empty($salesStatus))) {
            unset($this->SalesStatus);
        } else {
            $this->SalesStatus = $salesStatus;
        }
        return $this;
    }
    /**
     * Get SalesType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSalesType()
    {
        return isset($this->SalesType) ? $this->SalesType : null;
    }
    /**
     * Set SalesType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_SalesType::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_SalesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $salesType
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSalesType($salesType = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_SalesType::valueIsValid($salesType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $salesType, implode(', ', \RaseConnector\EnumType\AxdEnum_SalesType::getValidValues())), __LINE__);
        }
        if (is_null($salesType) || (is_array($salesType) && empty($salesType))) {
            unset($this->SalesType);
        } else {
            $this->SalesType = $salesType;
        }
        return $this;
    }
    /**
     * Get SalesUnitId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSalesUnitId()
    {
        return isset($this->SalesUnitId) ? $this->SalesUnitId : null;
    }
    /**
     * Set SalesUnitId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $salesUnitId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSalesUnitId($salesUnitId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($salesUnitId) && strlen($salesUnitId) > 20) || (is_array($salesUnitId) && count($salesUnitId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($salesUnitId) ? strlen($salesUnitId) : count($salesUnitId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($salesUnitId) && strlen($salesUnitId) < 0) || (is_array($salesUnitId) && count($salesUnitId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($salesUnitId) && !is_string($salesUnitId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salesUnitId)), __LINE__);
        }
        if (is_null($salesUnitId) || (is_array($salesUnitId) && empty($salesUnitId))) {
            unset($this->SalesUnitId);
        } else {
            $this->SalesUnitId = $salesUnitId;
        }
        return $this;
    }
    /**
     * Get SettleVoucher value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSettleVoucher()
    {
        return isset($this->SettleVoucher) ? $this->SettleVoucher : null;
    }
    /**
     * Set SettleVoucher value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_SalesSettlementType::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_SalesSettlementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $settleVoucher
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSettleVoucher($settleVoucher = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_SalesSettlementType::valueIsValid($settleVoucher)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $settleVoucher, implode(', ', \RaseConnector\EnumType\AxdExtType_SalesSettlementType::getValidValues())), __LINE__);
        }
        if (is_null($settleVoucher) || (is_array($settleVoucher) && empty($settleVoucher))) {
            unset($this->SettleVoucher);
        } else {
            $this->SettleVoucher = $settleVoucher;
        }
        return $this;
    }
    /**
     * Get ShipCarrierAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipCarrierAccount()
    {
        return isset($this->ShipCarrierAccount) ? $this->ShipCarrierAccount : null;
    }
    /**
     * Set ShipCarrierAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipCarrierAccount
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setShipCarrierAccount($shipCarrierAccount = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($shipCarrierAccount) && strlen($shipCarrierAccount) > 25) || (is_array($shipCarrierAccount) && count($shipCarrierAccount) > 25)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 25 element(s) or a scalar of 25 character(s) at most, "%d" length given', is_scalar($shipCarrierAccount) ? strlen($shipCarrierAccount) : count($shipCarrierAccount)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($shipCarrierAccount) && strlen($shipCarrierAccount) < 0) || (is_array($shipCarrierAccount) && count($shipCarrierAccount) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($shipCarrierAccount) && !is_string($shipCarrierAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipCarrierAccount)), __LINE__);
        }
        if (is_null($shipCarrierAccount) || (is_array($shipCarrierAccount) && empty($shipCarrierAccount))) {
            unset($this->ShipCarrierAccount);
        } else {
            $this->ShipCarrierAccount = $shipCarrierAccount;
        }
        return $this;
    }
    /**
     * Get ShipCarrierAccountCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipCarrierAccountCode()
    {
        return isset($this->ShipCarrierAccountCode) ? $this->ShipCarrierAccountCode : null;
    }
    /**
     * Set ShipCarrierAccountCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipCarrierAccountCode
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setShipCarrierAccountCode($shipCarrierAccountCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($shipCarrierAccountCode) && strlen($shipCarrierAccountCode) > 20) || (is_array($shipCarrierAccountCode) && count($shipCarrierAccountCode) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($shipCarrierAccountCode) ? strlen($shipCarrierAccountCode) : count($shipCarrierAccountCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($shipCarrierAccountCode) && strlen($shipCarrierAccountCode) < 0) || (is_array($shipCarrierAccountCode) && count($shipCarrierAccountCode) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($shipCarrierAccountCode) && !is_string($shipCarrierAccountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipCarrierAccountCode)), __LINE__);
        }
        if (is_null($shipCarrierAccountCode) || (is_array($shipCarrierAccountCode) && empty($shipCarrierAccountCode))) {
            unset($this->ShipCarrierAccountCode);
        } else {
            $this->ShipCarrierAccountCode = $shipCarrierAccountCode;
        }
        return $this;
    }
    /**
     * Get ShipCarrierBlindShipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipCarrierBlindShipment()
    {
        return isset($this->ShipCarrierBlindShipment) ? $this->ShipCarrierBlindShipment : null;
    }
    /**
     * Set ShipCarrierBlindShipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_ShipCarrierBlindShipment::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_ShipCarrierBlindShipment::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shipCarrierBlindShipment
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setShipCarrierBlindShipment($shipCarrierBlindShipment = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_ShipCarrierBlindShipment::valueIsValid($shipCarrierBlindShipment)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shipCarrierBlindShipment, implode(', ', \RaseConnector\EnumType\AxdExtType_ShipCarrierBlindShipment::getValidValues())), __LINE__);
        }
        if (is_null($shipCarrierBlindShipment) || (is_array($shipCarrierBlindShipment) && empty($shipCarrierBlindShipment))) {
            unset($this->ShipCarrierBlindShipment);
        } else {
            $this->ShipCarrierBlindShipment = $shipCarrierBlindShipment;
        }
        return $this;
    }
    /**
     * Get ShipCarrierDeliveryContact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipCarrierDeliveryContact()
    {
        return isset($this->ShipCarrierDeliveryContact) ? $this->ShipCarrierDeliveryContact : null;
    }
    /**
     * Set ShipCarrierDeliveryContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipCarrierDeliveryContact
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setShipCarrierDeliveryContact($shipCarrierDeliveryContact = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($shipCarrierDeliveryContact) && strlen($shipCarrierDeliveryContact) > 60) || (is_array($shipCarrierDeliveryContact) && count($shipCarrierDeliveryContact) > 60)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 60 element(s) or a scalar of 60 character(s) at most, "%d" length given', is_scalar($shipCarrierDeliveryContact) ? strlen($shipCarrierDeliveryContact) : count($shipCarrierDeliveryContact)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($shipCarrierDeliveryContact) && strlen($shipCarrierDeliveryContact) < 0) || (is_array($shipCarrierDeliveryContact) && count($shipCarrierDeliveryContact) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($shipCarrierDeliveryContact) && !is_string($shipCarrierDeliveryContact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipCarrierDeliveryContact)), __LINE__);
        }
        if (is_null($shipCarrierDeliveryContact) || (is_array($shipCarrierDeliveryContact) && empty($shipCarrierDeliveryContact))) {
            unset($this->ShipCarrierDeliveryContact);
        } else {
            $this->ShipCarrierDeliveryContact = $shipCarrierDeliveryContact;
        }
        return $this;
    }
    /**
     * Get ShipCarrierDlvType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipCarrierDlvType()
    {
        return isset($this->ShipCarrierDlvType) ? $this->ShipCarrierDlvType : null;
    }
    /**
     * Set ShipCarrierDlvType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_ShipCarrierDlvType::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_ShipCarrierDlvType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shipCarrierDlvType
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setShipCarrierDlvType($shipCarrierDlvType = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_ShipCarrierDlvType::valueIsValid($shipCarrierDlvType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shipCarrierDlvType, implode(', ', \RaseConnector\EnumType\AxdEnum_ShipCarrierDlvType::getValidValues())), __LINE__);
        }
        if (is_null($shipCarrierDlvType) || (is_array($shipCarrierDlvType) && empty($shipCarrierDlvType))) {
            unset($this->ShipCarrierDlvType);
        } else {
            $this->ShipCarrierDlvType = $shipCarrierDlvType;
        }
        return $this;
    }
    /**
     * Get ShipCarrierExpeditedShipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipCarrierExpeditedShipment()
    {
        return isset($this->ShipCarrierExpeditedShipment) ? $this->ShipCarrierExpeditedShipment : null;
    }
    /**
     * Set ShipCarrierExpeditedShipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_ShipCarrierExpeditedShipment::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_ShipCarrierExpeditedShipment::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shipCarrierExpeditedShipment
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setShipCarrierExpeditedShipment($shipCarrierExpeditedShipment = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_ShipCarrierExpeditedShipment::valueIsValid($shipCarrierExpeditedShipment)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shipCarrierExpeditedShipment, implode(', ', \RaseConnector\EnumType\AxdExtType_ShipCarrierExpeditedShipment::getValidValues())), __LINE__);
        }
        if (is_null($shipCarrierExpeditedShipment) || (is_array($shipCarrierExpeditedShipment) && empty($shipCarrierExpeditedShipment))) {
            unset($this->ShipCarrierExpeditedShipment);
        } else {
            $this->ShipCarrierExpeditedShipment = $shipCarrierExpeditedShipment;
        }
        return $this;
    }
    /**
     * Get ShipCarrierFuelSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipCarrierFuelSurcharge()
    {
        return isset($this->ShipCarrierFuelSurcharge) ? $this->ShipCarrierFuelSurcharge : null;
    }
    /**
     * Set ShipCarrierFuelSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_ShipCarrierFuelSurcharge::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_ShipCarrierFuelSurcharge::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shipCarrierFuelSurcharge
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setShipCarrierFuelSurcharge($shipCarrierFuelSurcharge = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_ShipCarrierFuelSurcharge::valueIsValid($shipCarrierFuelSurcharge)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shipCarrierFuelSurcharge, implode(', ', \RaseConnector\EnumType\AxdExtType_ShipCarrierFuelSurcharge::getValidValues())), __LINE__);
        }
        if (is_null($shipCarrierFuelSurcharge) || (is_array($shipCarrierFuelSurcharge) && empty($shipCarrierFuelSurcharge))) {
            unset($this->ShipCarrierFuelSurcharge);
        } else {
            $this->ShipCarrierFuelSurcharge = $shipCarrierFuelSurcharge;
        }
        return $this;
    }
    /**
     * Get ShipCarrierID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipCarrierID()
    {
        return isset($this->ShipCarrierID) ? $this->ShipCarrierID : null;
    }
    /**
     * Set ShipCarrierID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipCarrierID
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setShipCarrierID($shipCarrierID = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($shipCarrierID) && strlen($shipCarrierID) > 10) || (is_array($shipCarrierID) && count($shipCarrierID) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($shipCarrierID) ? strlen($shipCarrierID) : count($shipCarrierID)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($shipCarrierID) && strlen($shipCarrierID) < 0) || (is_array($shipCarrierID) && count($shipCarrierID) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($shipCarrierID) && !is_string($shipCarrierID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipCarrierID)), __LINE__);
        }
        if (is_null($shipCarrierID) || (is_array($shipCarrierID) && empty($shipCarrierID))) {
            unset($this->ShipCarrierID);
        } else {
            $this->ShipCarrierID = $shipCarrierID;
        }
        return $this;
    }
    /**
     * Get ShipCarrierResidential value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipCarrierResidential()
    {
        return isset($this->ShipCarrierResidential) ? $this->ShipCarrierResidential : null;
    }
    /**
     * Set ShipCarrierResidential value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_ShipCarrierResidentialDest::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_ShipCarrierResidentialDest::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shipCarrierResidential
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setShipCarrierResidential($shipCarrierResidential = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_ShipCarrierResidentialDest::valueIsValid($shipCarrierResidential)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shipCarrierResidential, implode(', ', \RaseConnector\EnumType\AxdExtType_ShipCarrierResidentialDest::getValidValues())), __LINE__);
        }
        if (is_null($shipCarrierResidential) || (is_array($shipCarrierResidential) && empty($shipCarrierResidential))) {
            unset($this->ShipCarrierResidential);
        } else {
            $this->ShipCarrierResidential = $shipCarrierResidential;
        }
        return $this;
    }
    /**
     * Get ShippingDateConfirmed value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShippingDateConfirmed()
    {
        return isset($this->ShippingDateConfirmed) ? $this->ShippingDateConfirmed : null;
    }
    /**
     * Set ShippingDateConfirmed value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shippingDateConfirmed
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setShippingDateConfirmed($shippingDateConfirmed = null)
    {
        // validation for constraint: string
        if (!is_null($shippingDateConfirmed) && !is_string($shippingDateConfirmed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingDateConfirmed)), __LINE__);
        }
        if (is_null($shippingDateConfirmed) || (is_array($shippingDateConfirmed) && empty($shippingDateConfirmed))) {
            unset($this->ShippingDateConfirmed);
        } else {
            $this->ShippingDateConfirmed = $shippingDateConfirmed;
        }
        return $this;
    }
    /**
     * Get ShippingDateRequested value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShippingDateRequested()
    {
        return isset($this->ShippingDateRequested) ? $this->ShippingDateRequested : null;
    }
    /**
     * Set ShippingDateRequested value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shippingDateRequested
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setShippingDateRequested($shippingDateRequested = null)
    {
        // validation for constraint: string
        if (!is_null($shippingDateRequested) && !is_string($shippingDateRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingDateRequested)), __LINE__);
        }
        if (is_null($shippingDateRequested) || (is_array($shippingDateRequested) && empty($shippingDateRequested))) {
            unset($this->ShippingDateRequested);
        } else {
            $this->ShippingDateRequested = $shippingDateRequested;
        }
        return $this;
    }
    /**
     * Get SLGFinancialCompany value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSLGFinancialCompany()
    {
        return isset($this->SLGFinancialCompany) ? $this->SLGFinancialCompany : null;
    }
    /**
     * Set SLGFinancialCompany value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sLGFinancialCompany
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSLGFinancialCompany($sLGFinancialCompany = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($sLGFinancialCompany) && strlen($sLGFinancialCompany) > 4) || (is_array($sLGFinancialCompany) && count($sLGFinancialCompany) > 4)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4 element(s) or a scalar of 4 character(s) at most, "%d" length given', is_scalar($sLGFinancialCompany) ? strlen($sLGFinancialCompany) : count($sLGFinancialCompany)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($sLGFinancialCompany) && strlen($sLGFinancialCompany) < 0) || (is_array($sLGFinancialCompany) && count($sLGFinancialCompany) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($sLGFinancialCompany) && !is_string($sLGFinancialCompany)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sLGFinancialCompany)), __LINE__);
        }
        if (is_null($sLGFinancialCompany) || (is_array($sLGFinancialCompany) && empty($sLGFinancialCompany))) {
            unset($this->SLGFinancialCompany);
        } else {
            $this->SLGFinancialCompany = $sLGFinancialCompany;
        }
        return $this;
    }
    /**
     * Get SLGIntrastat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSLGIntrastat()
    {
        return isset($this->SLGIntrastat) ? $this->SLGIntrastat : null;
    }
    /**
     * Set SLGIntrastat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_SLGIntrastat::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_SLGIntrastat::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sLGIntrastat
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSLGIntrastat($sLGIntrastat = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_SLGIntrastat::valueIsValid($sLGIntrastat)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sLGIntrastat, implode(', ', \RaseConnector\EnumType\AxdEnum_SLGIntrastat::getValidValues())), __LINE__);
        }
        if (is_null($sLGIntrastat) || (is_array($sLGIntrastat) && empty($sLGIntrastat))) {
            unset($this->SLGIntrastat);
        } else {
            $this->SLGIntrastat = $sLGIntrastat;
        }
        return $this;
    }
    /**
     * Get SLGTaxRepresentativeAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSLGTaxRepresentativeAddress()
    {
        return isset($this->SLGTaxRepresentativeAddress) ? $this->SLGTaxRepresentativeAddress : null;
    }
    /**
     * Set SLGTaxRepresentativeAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sLGTaxRepresentativeAddress
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSLGTaxRepresentativeAddress($sLGTaxRepresentativeAddress = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($sLGTaxRepresentativeAddress) && strlen($sLGTaxRepresentativeAddress) > 250) || (is_array($sLGTaxRepresentativeAddress) && count($sLGTaxRepresentativeAddress) > 250)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 250 element(s) or a scalar of 250 character(s) at most, "%d" length given', is_scalar($sLGTaxRepresentativeAddress) ? strlen($sLGTaxRepresentativeAddress) : count($sLGTaxRepresentativeAddress)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($sLGTaxRepresentativeAddress) && strlen($sLGTaxRepresentativeAddress) < 0) || (is_array($sLGTaxRepresentativeAddress) && count($sLGTaxRepresentativeAddress) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($sLGTaxRepresentativeAddress) && !is_string($sLGTaxRepresentativeAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sLGTaxRepresentativeAddress)), __LINE__);
        }
        if (is_null($sLGTaxRepresentativeAddress) || (is_array($sLGTaxRepresentativeAddress) && empty($sLGTaxRepresentativeAddress))) {
            unset($this->SLGTaxRepresentativeAddress);
        } else {
            $this->SLGTaxRepresentativeAddress = $sLGTaxRepresentativeAddress;
        }
        return $this;
    }
    /**
     * Get SLGTaxRepresentativeCity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSLGTaxRepresentativeCity()
    {
        return isset($this->SLGTaxRepresentativeCity) ? $this->SLGTaxRepresentativeCity : null;
    }
    /**
     * Set SLGTaxRepresentativeCity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sLGTaxRepresentativeCity
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSLGTaxRepresentativeCity($sLGTaxRepresentativeCity = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($sLGTaxRepresentativeCity) && strlen($sLGTaxRepresentativeCity) > 60) || (is_array($sLGTaxRepresentativeCity) && count($sLGTaxRepresentativeCity) > 60)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 60 element(s) or a scalar of 60 character(s) at most, "%d" length given', is_scalar($sLGTaxRepresentativeCity) ? strlen($sLGTaxRepresentativeCity) : count($sLGTaxRepresentativeCity)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($sLGTaxRepresentativeCity) && strlen($sLGTaxRepresentativeCity) < 0) || (is_array($sLGTaxRepresentativeCity) && count($sLGTaxRepresentativeCity) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($sLGTaxRepresentativeCity) && !is_string($sLGTaxRepresentativeCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sLGTaxRepresentativeCity)), __LINE__);
        }
        if (is_null($sLGTaxRepresentativeCity) || (is_array($sLGTaxRepresentativeCity) && empty($sLGTaxRepresentativeCity))) {
            unset($this->SLGTaxRepresentativeCity);
        } else {
            $this->SLGTaxRepresentativeCity = $sLGTaxRepresentativeCity;
        }
        return $this;
    }
    /**
     * Get SLGTaxRepresentativeCountryId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSLGTaxRepresentativeCountryId()
    {
        return isset($this->SLGTaxRepresentativeCountryId) ? $this->SLGTaxRepresentativeCountryId : null;
    }
    /**
     * Set SLGTaxRepresentativeCountryId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sLGTaxRepresentativeCountryId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSLGTaxRepresentativeCountryId($sLGTaxRepresentativeCountryId = null)
    {
        // validation for constraint: string
        if (!is_null($sLGTaxRepresentativeCountryId) && !is_string($sLGTaxRepresentativeCountryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sLGTaxRepresentativeCountryId)), __LINE__);
        }
        if (is_null($sLGTaxRepresentativeCountryId) || (is_array($sLGTaxRepresentativeCountryId) && empty($sLGTaxRepresentativeCountryId))) {
            unset($this->SLGTaxRepresentativeCountryId);
        } else {
            $this->SLGTaxRepresentativeCountryId = $sLGTaxRepresentativeCountryId;
        }
        return $this;
    }
    /**
     * Get SLGTaxRepresentativeStreet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSLGTaxRepresentativeStreet()
    {
        return isset($this->SLGTaxRepresentativeStreet) ? $this->SLGTaxRepresentativeStreet : null;
    }
    /**
     * Set SLGTaxRepresentativeStreet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sLGTaxRepresentativeStreet
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSLGTaxRepresentativeStreet($sLGTaxRepresentativeStreet = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($sLGTaxRepresentativeStreet) && strlen($sLGTaxRepresentativeStreet) > 250) || (is_array($sLGTaxRepresentativeStreet) && count($sLGTaxRepresentativeStreet) > 250)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 250 element(s) or a scalar of 250 character(s) at most, "%d" length given', is_scalar($sLGTaxRepresentativeStreet) ? strlen($sLGTaxRepresentativeStreet) : count($sLGTaxRepresentativeStreet)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($sLGTaxRepresentativeStreet) && strlen($sLGTaxRepresentativeStreet) < 0) || (is_array($sLGTaxRepresentativeStreet) && count($sLGTaxRepresentativeStreet) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($sLGTaxRepresentativeStreet) && !is_string($sLGTaxRepresentativeStreet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sLGTaxRepresentativeStreet)), __LINE__);
        }
        if (is_null($sLGTaxRepresentativeStreet) || (is_array($sLGTaxRepresentativeStreet) && empty($sLGTaxRepresentativeStreet))) {
            unset($this->SLGTaxRepresentativeStreet);
        } else {
            $this->SLGTaxRepresentativeStreet = $sLGTaxRepresentativeStreet;
        }
        return $this;
    }
    /**
     * Get SLGTaxRepresentativeVATNum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSLGTaxRepresentativeVATNum()
    {
        return isset($this->SLGTaxRepresentativeVATNum) ? $this->SLGTaxRepresentativeVATNum : null;
    }
    /**
     * Set SLGTaxRepresentativeVATNum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sLGTaxRepresentativeVATNum
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSLGTaxRepresentativeVATNum($sLGTaxRepresentativeVATNum = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($sLGTaxRepresentativeVATNum) && strlen($sLGTaxRepresentativeVATNum) > 20) || (is_array($sLGTaxRepresentativeVATNum) && count($sLGTaxRepresentativeVATNum) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($sLGTaxRepresentativeVATNum) ? strlen($sLGTaxRepresentativeVATNum) : count($sLGTaxRepresentativeVATNum)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($sLGTaxRepresentativeVATNum) && strlen($sLGTaxRepresentativeVATNum) < 0) || (is_array($sLGTaxRepresentativeVATNum) && count($sLGTaxRepresentativeVATNum) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($sLGTaxRepresentativeVATNum) && !is_string($sLGTaxRepresentativeVATNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sLGTaxRepresentativeVATNum)), __LINE__);
        }
        if (is_null($sLGTaxRepresentativeVATNum) || (is_array($sLGTaxRepresentativeVATNum) && empty($sLGTaxRepresentativeVATNum))) {
            unset($this->SLGTaxRepresentativeVATNum);
        } else {
            $this->SLGTaxRepresentativeVATNum = $sLGTaxRepresentativeVATNum;
        }
        return $this;
    }
    /**
     * Get SLGTaxRepresentativeZipCodeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSLGTaxRepresentativeZipCodeId()
    {
        return isset($this->SLGTaxRepresentativeZipCodeId) ? $this->SLGTaxRepresentativeZipCodeId : null;
    }
    /**
     * Set SLGTaxRepresentativeZipCodeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sLGTaxRepresentativeZipCodeId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSLGTaxRepresentativeZipCodeId($sLGTaxRepresentativeZipCodeId = null)
    {
        // validation for constraint: string
        if (!is_null($sLGTaxRepresentativeZipCodeId) && !is_string($sLGTaxRepresentativeZipCodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sLGTaxRepresentativeZipCodeId)), __LINE__);
        }
        if (is_null($sLGTaxRepresentativeZipCodeId) || (is_array($sLGTaxRepresentativeZipCodeId) && empty($sLGTaxRepresentativeZipCodeId))) {
            unset($this->SLGTaxRepresentativeZipCodeId);
        } else {
            $this->SLGTaxRepresentativeZipCodeId = $sLGTaxRepresentativeZipCodeId;
        }
        return $this;
    }
    /**
     * Get smmCampaignId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSmmCampaignId()
    {
        return isset($this->smmCampaignId) ? $this->smmCampaignId : null;
    }
    /**
     * Set smmCampaignId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $smmCampaignId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSmmCampaignId($smmCampaignId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($smmCampaignId) && strlen($smmCampaignId) > 10) || (is_array($smmCampaignId) && count($smmCampaignId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($smmCampaignId) ? strlen($smmCampaignId) : count($smmCampaignId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($smmCampaignId) && strlen($smmCampaignId) < 0) || (is_array($smmCampaignId) && count($smmCampaignId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($smmCampaignId) && !is_string($smmCampaignId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($smmCampaignId)), __LINE__);
        }
        if (is_null($smmCampaignId) || (is_array($smmCampaignId) && empty($smmCampaignId))) {
            unset($this->smmCampaignId);
        } else {
            $this->smmCampaignId = $smmCampaignId;
        }
        return $this;
    }
    /**
     * Get smmSalesAmountTotal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getSmmSalesAmountTotal()
    {
        return isset($this->smmSalesAmountTotal) ? $this->smmSalesAmountTotal : null;
    }
    /**
     * Set smmSalesAmountTotal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $smmSalesAmountTotal
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSmmSalesAmountTotal($smmSalesAmountTotal = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($smmSalesAmountTotal) && strlen(substr($smmSalesAmountTotal, strpos($smmSalesAmountTotal, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($smmSalesAmountTotal, strpos($smmSalesAmountTotal, '.')))), __LINE__);
        }
        if (is_null($smmSalesAmountTotal) || (is_array($smmSalesAmountTotal) && empty($smmSalesAmountTotal))) {
            unset($this->smmSalesAmountTotal);
        } else {
            $this->smmSalesAmountTotal = $smmSalesAmountTotal;
        }
        return $this;
    }
    /**
     * Get Solvability value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSolvability()
    {
        return isset($this->Solvability) ? $this->Solvability : null;
    }
    /**
     * Set Solvability value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_Solvability::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_Solvability::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $solvability
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSolvability($solvability = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_Solvability::valueIsValid($solvability)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $solvability, implode(', ', \RaseConnector\EnumType\AxdEnum_Solvability::getValidValues())), __LINE__);
        }
        if (is_null($solvability) || (is_array($solvability) && empty($solvability))) {
            unset($this->Solvability);
        } else {
            $this->Solvability = $solvability;
        }
        return $this;
    }
    /**
     * Get StatProcId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatProcId()
    {
        return isset($this->StatProcId) ? $this->StatProcId : null;
    }
    /**
     * Set StatProcId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $statProcId
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setStatProcId($statProcId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($statProcId) && strlen($statProcId) > 10) || (is_array($statProcId) && count($statProcId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($statProcId) ? strlen($statProcId) : count($statProcId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($statProcId) && strlen($statProcId) < 0) || (is_array($statProcId) && count($statProcId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($statProcId) && !is_string($statProcId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statProcId)), __LINE__);
        }
        if (is_null($statProcId) || (is_array($statProcId) && empty($statProcId))) {
            unset($this->StatProcId);
        } else {
            $this->StatProcId = $statProcId;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
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
     * Get totalBalance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getTotalBalance()
    {
        return isset($this->totalBalance) ? $this->totalBalance : null;
    }
    /**
     * Set totalBalance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $totalBalance
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setTotalBalance($totalBalance = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($totalBalance) && strlen(substr($totalBalance, strpos($totalBalance, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($totalBalance, strpos($totalBalance, '.')))), __LINE__);
        }
        if (is_null($totalBalance) || (is_array($totalBalance) && empty($totalBalance))) {
            unset($this->totalBalance);
        } else {
            $this->totalBalance = $totalBalance;
        }
        return $this;
    }
    /**
     * Get TotalCashDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getTotalCashDiscount()
    {
        return isset($this->TotalCashDiscount) ? $this->TotalCashDiscount : null;
    }
    /**
     * Set TotalCashDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $totalCashDiscount
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setTotalCashDiscount($totalCashDiscount = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($totalCashDiscount) && strlen(substr($totalCashDiscount, strpos($totalCashDiscount, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($totalCashDiscount, strpos($totalCashDiscount, '.')))), __LINE__);
        }
        if (is_null($totalCashDiscount) || (is_array($totalCashDiscount) && empty($totalCashDiscount))) {
            unset($this->TotalCashDiscount);
        } else {
            $this->TotalCashDiscount = $totalCashDiscount;
        }
        return $this;
    }
    /**
     * Get TotalInvoice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getTotalInvoice()
    {
        return isset($this->TotalInvoice) ? $this->TotalInvoice : null;
    }
    /**
     * Set TotalInvoice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $totalInvoice
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setTotalInvoice($totalInvoice = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($totalInvoice) && strlen(substr($totalInvoice, strpos($totalInvoice, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($totalInvoice, strpos($totalInvoice, '.')))), __LINE__);
        }
        if (is_null($totalInvoice) || (is_array($totalInvoice) && empty($totalInvoice))) {
            unset($this->TotalInvoice);
        } else {
            $this->TotalInvoice = $totalInvoice;
        }
        return $this;
    }
    /**
     * Get TotalMiscCharges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getTotalMiscCharges()
    {
        return isset($this->TotalMiscCharges) ? $this->TotalMiscCharges : null;
    }
    /**
     * Set TotalMiscCharges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $totalMiscCharges
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setTotalMiscCharges($totalMiscCharges = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($totalMiscCharges) && strlen(substr($totalMiscCharges, strpos($totalMiscCharges, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($totalMiscCharges, strpos($totalMiscCharges, '.')))), __LINE__);
        }
        if (is_null($totalMiscCharges) || (is_array($totalMiscCharges) && empty($totalMiscCharges))) {
            unset($this->TotalMiscCharges);
        } else {
            $this->TotalMiscCharges = $totalMiscCharges;
        }
        return $this;
    }
    /**
     * Get TotalSalesTax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getTotalSalesTax()
    {
        return isset($this->TotalSalesTax) ? $this->TotalSalesTax : null;
    }
    /**
     * Set TotalSalesTax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $totalSalesTax
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setTotalSalesTax($totalSalesTax = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($totalSalesTax) && strlen(substr($totalSalesTax, strpos($totalSalesTax, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($totalSalesTax, strpos($totalSalesTax, '.')))), __LINE__);
        }
        if (is_null($totalSalesTax) || (is_array($totalSalesTax) && empty($totalSalesTax))) {
            unset($this->TotalSalesTax);
        } else {
            $this->TotalSalesTax = $totalSalesTax;
        }
        return $this;
    }
    /**
     * Get TransactionCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransactionCode()
    {
        return isset($this->TransactionCode) ? $this->TransactionCode : null;
    }
    /**
     * Set TransactionCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transactionCode
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setTransactionCode($transactionCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($transactionCode) && strlen($transactionCode) > 10) || (is_array($transactionCode) && count($transactionCode) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($transactionCode) ? strlen($transactionCode) : count($transactionCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($transactionCode) && strlen($transactionCode) < 0) || (is_array($transactionCode) && count($transactionCode) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($transactionCode) && !is_string($transactionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionCode)), __LINE__);
        }
        if (is_null($transactionCode) || (is_array($transactionCode) && empty($transactionCode))) {
            unset($this->TransactionCode);
        } else {
            $this->TransactionCode = $transactionCode;
        }
        return $this;
    }
    /**
     * Get Transport value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransport()
    {
        return isset($this->Transport) ? $this->Transport : null;
    }
    /**
     * Set Transport value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transport
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setTransport($transport = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($transport) && strlen($transport) > 10) || (is_array($transport) && count($transport) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($transport) ? strlen($transport) : count($transport)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($transport) && strlen($transport) < 0) || (is_array($transport) && count($transport) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($transport) && !is_string($transport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transport)), __LINE__);
        }
        if (is_null($transport) || (is_array($transport) && empty($transport))) {
            unset($this->Transport);
        } else {
            $this->Transport = $transport;
        }
        return $this;
    }
    /**
     * Get URL value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getURL()
    {
        return isset($this->URL) ? $this->URL : null;
    }
    /**
     * Set URL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $uRL
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($uRL) && strlen($uRL) > 255) || (is_array($uRL) && count($uRL) > 255)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 255 element(s) or a scalar of 255 character(s) at most, "%d" length given', is_scalar($uRL) ? strlen($uRL) : count($uRL)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($uRL) && strlen($uRL) < 0) || (is_array($uRL) && count($uRL) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        if (is_null($uRL) || (is_array($uRL) && empty($uRL))) {
            unset($this->URL);
        } else {
            $this->URL = $uRL;
        }
        return $this;
    }
    /**
     * Get VATNum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVATNum()
    {
        return isset($this->VATNum) ? $this->VATNum : null;
    }
    /**
     * Set VATNum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vATNum
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setVATNum($vATNum = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($vATNum) && strlen($vATNum) > 20) || (is_array($vATNum) && count($vATNum) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($vATNum) ? strlen($vATNum) : count($vATNum)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($vATNum) && strlen($vATNum) < 0) || (is_array($vATNum) && count($vATNum) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($vATNum) && !is_string($vATNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vATNum)), __LINE__);
        }
        if (is_null($vATNum) || (is_array($vATNum) && empty($vATNum))) {
            unset($this->VATNum);
        } else {
            $this->VATNum = $vATNum;
        }
        return $this;
    }
    /**
     * Get WMSIsRush value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWMSIsRush()
    {
        return isset($this->WMSIsRush) ? $this->WMSIsRush : null;
    }
    /**
     * Set WMSIsRush value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_WMSIsRush::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_WMSIsRush::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $wMSIsRush
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setWMSIsRush($wMSIsRush = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_WMSIsRush::valueIsValid($wMSIsRush)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $wMSIsRush, implode(', ', \RaseConnector\EnumType\AxdExtType_WMSIsRush::getValidValues())), __LINE__);
        }
        if (is_null($wMSIsRush) || (is_array($wMSIsRush) && empty($wMSIsRush))) {
            unset($this->WMSIsRush);
        } else {
            $this->WMSIsRush = $wMSIsRush;
        }
        return $this;
    }
    /**
     * Get SalesLine value
     * @return \RaseConnector\StructType\AxdEntity_SalesLine[]|null
     */
    public function getSalesLine()
    {
        return $this->SalesLine;
    }
    /**
     * Set SalesLine value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\AxdEntity_SalesLine[] $salesLine
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setSalesLine(array $salesLine = array())
    {
        foreach ($salesLine as $axdEntity_SalesTableSalesLineItem) {
            // validation for constraint: itemType
            if (!$axdEntity_SalesTableSalesLineItem instanceof \RaseConnector\StructType\AxdEntity_SalesLine) {
                throw new \InvalidArgumentException(sprintf('The SalesLine property can only contain items of \RaseConnector\StructType\AxdEntity_SalesLine, "%s" given', is_object($axdEntity_SalesTableSalesLineItem) ? get_class($axdEntity_SalesTableSalesLineItem) : gettype($axdEntity_SalesTableSalesLineItem)), __LINE__);
            }
        }
        $this->SalesLine = $salesLine;
        return $this;
    }
    /**
     * Add item to SalesLine value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\AxdEntity_SalesLine $item
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function addToSalesLine(\RaseConnector\StructType\AxdEntity_SalesLine $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RaseConnector\StructType\AxdEntity_SalesLine) {
            throw new \InvalidArgumentException(sprintf('The SalesLine property can only contain items of \RaseConnector\StructType\AxdEntity_SalesLine, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SalesLine[] = $item;
        return $this;
    }
    /**
     * Get DocuRefHeader value
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader[]|null
     */
    public function getDocuRefHeader()
    {
        return $this->DocuRefHeader;
    }
    /**
     * Set DocuRefHeader value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\AxdEntity_DocuRefHeader[] $docuRefHeader
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setDocuRefHeader(array $docuRefHeader = array())
    {
        foreach ($docuRefHeader as $axdEntity_SalesTableDocuRefHeaderItem) {
            // validation for constraint: itemType
            if (!$axdEntity_SalesTableDocuRefHeaderItem instanceof \RaseConnector\StructType\AxdEntity_DocuRefHeader) {
                throw new \InvalidArgumentException(sprintf('The DocuRefHeader property can only contain items of \RaseConnector\StructType\AxdEntity_DocuRefHeader, "%s" given', is_object($axdEntity_SalesTableDocuRefHeaderItem) ? get_class($axdEntity_SalesTableDocuRefHeaderItem) : gettype($axdEntity_SalesTableDocuRefHeaderItem)), __LINE__);
            }
        }
        $this->DocuRefHeader = $docuRefHeader;
        return $this;
    }
    /**
     * Add item to DocuRefHeader value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\AxdEntity_DocuRefHeader $item
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function addToDocuRefHeader(\RaseConnector\StructType\AxdEntity_DocuRefHeader $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RaseConnector\StructType\AxdEntity_DocuRefHeader) {
            throw new \InvalidArgumentException(sprintf('The DocuRefHeader property can only contain items of \RaseConnector\StructType\AxdEntity_DocuRefHeader, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DocuRefHeader[] = $item;
        return $this;
    }
    /**
     * Get MarkupTransHeader value
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransHeader[]|null
     */
    public function getMarkupTransHeader()
    {
        return $this->MarkupTransHeader;
    }
    /**
     * Set MarkupTransHeader value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\AxdEntity_MarkupTransHeader[] $markupTransHeader
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function setMarkupTransHeader(array $markupTransHeader = array())
    {
        foreach ($markupTransHeader as $axdEntity_SalesTableMarkupTransHeaderItem) {
            // validation for constraint: itemType
            if (!$axdEntity_SalesTableMarkupTransHeaderItem instanceof \RaseConnector\StructType\AxdEntity_MarkupTransHeader) {
                throw new \InvalidArgumentException(sprintf('The MarkupTransHeader property can only contain items of \RaseConnector\StructType\AxdEntity_MarkupTransHeader, "%s" given', is_object($axdEntity_SalesTableMarkupTransHeaderItem) ? get_class($axdEntity_SalesTableMarkupTransHeaderItem) : gettype($axdEntity_SalesTableMarkupTransHeaderItem)), __LINE__);
            }
        }
        $this->MarkupTransHeader = $markupTransHeader;
        return $this;
    }
    /**
     * Add item to MarkupTransHeader value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\AxdEntity_MarkupTransHeader $item
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
     */
    public function addToMarkupTransHeader(\RaseConnector\StructType\AxdEntity_MarkupTransHeader $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RaseConnector\StructType\AxdEntity_MarkupTransHeader) {
            throw new \InvalidArgumentException(sprintf('The MarkupTransHeader property can only contain items of \RaseConnector\StructType\AxdEntity_MarkupTransHeader, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MarkupTransHeader[] = $item;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
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
     * @return \RaseConnector\StructType\AxdEntity_SalesTable
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
