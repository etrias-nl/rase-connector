<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AxdEntity_SalesLine StructType
 * @subpackage Structs
 */
class AxdEntity_SalesLine extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - union: AxdExtType_ItemIdSmall | AxdType_ExtCodeValue
     * @var string
     */
    public $ItemId;
    /**
     * The SalesQty
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - documentation: Hoeveelheid:Bestelde hoeveelheid in de verkoopeenheid
     * - fractionDigits: 2
     * @var float
     */
    public $SalesQty;
    /**
     * The SalesUnit
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - union: AxdExtType_SalesUnit | AxdType_ExtCodeValue
     * @var string
     */
    public $SalesUnit;
    /**
     * The class
     * Meta informations extracted from the WSDL
     * - fixed: entity
     * - use: required
     * @var string
     */
    public $class;
    /**
     * The ActivityNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Activiteitsnummer:Nummer van de activiteit.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $ActivityNumber;
    /**
     * The BackOrder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BackOrder;
    /**
     * The BarCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Streepjescode:Streepjescodecijfers
     * - maxLength: 80
     * - minLength: 0
     * @var string
     */
    public $BarCode;
    /**
     * The BarCodeType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Streepjescode-instellingen:Instellingen van streepjescodetype, lettertype enz.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $BarCodeType;
    /**
     * The BlanketRefTransId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Verwijzingspartij:Verwijzing naar partij op Afroeporder
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $BlanketRefTransId;
    /**
     * The Blocked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Blocked;
    /**
     * The CaseTagging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CaseTagging;
    /**
     * The Complete
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Complete;
    /**
     * The ConfirmedDlv
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Verzenddatum:Bevestigde verzenddatum indien aanwezig, zo niet gewenste verzenddatum
     * @var string
     */
    public $ConfirmedDlv;
    /**
     * The CostPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Kostprijs retour:Kostprijs per eenheid van het geretourneerde artikel
     * - fractionDigits: 20
     * @var float
     */
    public $CostPrice;
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
     * The CustomerLineNum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Regelnummer:Klantregelnummer.
     * - maxInclusive: 2147483647
     * - minInclusive: -2147483648
     * @var int
     */
    public $CustomerLineNum;
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
     * The DeliveredIntotal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Verkoophoeveelheid:Aantal verkoopeenheden.
     * - fractionDigits: 2
     * @var float
     */
    public $DeliveredIntotal;
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
     * The DeliveryType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DeliveryType;
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
     * The DlvMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdExtType_DlvModeId | AxdType_ExtCodeValue
     * @var string
     */
    public $DlvMode;
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
     * The ExpectedRetQty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Hoeveelheid:Aantal verkoopeenheden.
     * - fractionDigits: 2
     * @var float
     */
    public $ExpectedRetQty;
    /**
     * The ExternalItemId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Extern:Artikelnummer van klant.
     * - maxLength: 50
     * - minLength: 0
     * @var string
     */
    public $ExternalItemId;
    /**
     * The InventDeliverNow
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Hoeveelheid:Hoeveelheid in voorraadeenheden van het artikel.
     * - fractionDigits: 2
     * @var float
     */
    public $InventDeliverNow;
    /**
     * The InventDimId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Dimensienummer:Identificatie van dimensies voor het artikel.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $InventDimId;
    /**
     * The InventRefId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Referentienummer:Nummer van order, project, productie of inkoop waarnaar wordt verwezen
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $InventRefId;
    /**
     * The InventRefTransId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Verwijzingspartij:Partij-ID waarnaar wordt verwezen.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $InventRefTransId;
    /**
     * The InventRefType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InventRefType;
    /**
     * The InventTransId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Partij-ID:Identificatie van de artikelpartij.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $InventTransId;
    /**
     * The InventTransIdReturn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Retourpartij-ID:Partij-ID voor geretourneerde artikelen
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $InventTransIdReturn;
    /**
     * The ItemBOMId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Substuklijst:Stuklijstnummer voor specifieke substuklijst. Indien leeg, wordt het actieve nummer gebruikt.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $ItemBOMId;
    /**
     * The itemReplaced
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $itemReplaced;
    /**
     * The ItemTagging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ItemTagging;
    /**
     * The LedgerAccount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Grootboekrekening:Rekeningnummer voor boeking in grootboek.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $LedgerAccount;
    /**
     * The LineAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Nettobedrag:Verkoopbedrag van regel (incl. korting).
     * - fractionDigits: 2
     * @var float
     */
    public $LineAmount;
    /**
     * The LineDisc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Korting:Regelkorting in bedrag per prijseenheid.
     * - fractionDigits: 2
     * @var float
     */
    public $LineDisc;
    /**
     * The LineHeader
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Regelkoptekst:Tekst die de regel omschrijft
     * - maxLength: 80
     * - minLength: 0
     * @var string
     */
    public $LineHeader;
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
     * The LinePercent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Kortingspercentage:Regelkortingspercentage.
     * - fractionDigits: 2
     * @var float
     */
    public $LinePercent;
    /**
     * The MultiLnDisc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Meerregelkorting:Meerregelkorting per prijseenheid
     * - fractionDigits: 2
     * @var float
     */
    public $MultiLnDisc;
    /**
     * The MultiLnPercent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Meerregelkortingspercentage:Meerregelkortingspercentage
     * - fractionDigits: 2
     * @var float
     */
    public $MultiLnPercent;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Tekst:Standaardartikelomschrijving.
     * - maxLength: 1000
     * - minLength: 0
     * @var string
     */
    public $Name;
    /**
     * The OverDeliveryPct
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Meerlevering:Procentueel geaccepteerde meerlevering
     * - fractionDigits: 2
     * @var float
     */
    public $OverDeliveryPct;
    /**
     * The PackingUnit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - union: AxdExtType_InventPackingUnit | AxdType_ExtCodeValue
     * @var string
     */
    public $PackingUnit;
    /**
     * The PackingUnitQty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Hoeveelheid voor verpakkingseenheden:Hoeveelheid verpakkingseenheden
     * - fractionDigits: 2
     * @var float
     */
    public $PackingUnitQty;
    /**
     * The PalletTagging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PalletTagging;
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
     * The PriceUnit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Prijseenheid:Aantal eenheden waarin de prijs is uitgedrukt.
     * - fractionDigits: 2
     * @var float
     */
    public $PriceUnit;
    /**
     * The ProjCategoryId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Categorie:Standaard gebruikte categorie.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $ProjCategoryId;
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
     * The ProjLinePropertyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Regeleigenschap:Status waaraan de transactie is gekoppeld.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $ProjLinePropertyId;
    /**
     * The ProjTransId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Transactie-ID:Identificatie van transactie.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $ProjTransId;
    /**
     * The PurchorderFormNum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Bestelopdracht van klant:Nummer bestelopdracht van klant
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $PurchorderFormNum;
    /**
     * The QtyOrdered
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Hoeveelheid:Hoeveelheid in voorraadeenheden van het artikel.
     * - fractionDigits: 2
     * @var float
     */
    public $QtyOrdered;
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
     * The RemainInventFinancial
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Hoeveelheid:Hoeveelheid in voorraadeenheden van het artikel.
     * - fractionDigits: 2
     * @var float
     */
    public $RemainInventFinancial;
    /**
     * The RemainInventPhysical
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Hoeveelheid:Hoeveelheid in voorraadeenheden van het artikel.
     * - fractionDigits: 2
     * @var float
     */
    public $RemainInventPhysical;
    /**
     * The RemainSalesFinancial
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Verkoophoeveelheid:Aantal verkoopeenheden.
     * - fractionDigits: 2
     * @var float
     */
    public $RemainSalesFinancial;
    /**
     * The RemainSalesPhysical
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Verkoophoeveelheid:Aantal verkoopeenheden.
     * - fractionDigits: 2
     * @var float
     */
    public $RemainSalesPhysical;
    /**
     * The Reservation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Reservation;
    /**
     * The ReturnAllowReservation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ReturnAllowReservation;
    /**
     * The ReturnArrivalDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Werkelijke aankomstdatum:Transactiedatum.
     * @var string
     */
    public $ReturnArrivalDate;
    /**
     * The ReturnClosedDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Afgesloten datum:Transactiedatum.
     * @var string
     */
    public $ReturnClosedDate;
    /**
     * The ReturnDeadLine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Uiterste datum:Uiterste datum voor retourneren van het artikel.
     * @var string
     */
    public $ReturnDeadLine;
    /**
     * The ReturnDispositionCodeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Beschikkingscode:Identificatie van de beschikkingscode
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $ReturnDispositionCodeId;
    /**
     * The ReturnStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ReturnStatus;
    /**
     * The SalesDeliverNow
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Verkoophoeveelheid:Aantal verkoopeenheden.
     * - fractionDigits: 2
     * @var float
     */
    public $SalesDeliverNow;
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
     * The SalesMarkup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Diverse toeslagen op verkoop:Vaste diverse toeslagen op prijs, eenmaal op elke factuur toegepast.
     * - fractionDigits: 2
     * @var float
     */
    public $SalesMarkup;
    /**
     * The SalesPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Verkoopprijs:Overzicht van verkoopprijsinstellingen voor kosten.
     * - fractionDigits: 2
     * @var float
     */
    public $SalesPrice;
    /**
     * The SalesStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SalesStatus;
    /**
     * The SalesTableLineUpdate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SalesTableLineUpdate;
    /**
     * The SalesType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SalesType;
    /**
     * The Scrap
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Scrap;
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
     * The ShipCarrierDlvType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShipCarrierDlvType;
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
     * The StatTriangularDeal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StatTriangularDeal;
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
     * The UnderDeliveryPct
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Minderlevering:Procentueel geaccepteerde minderlevering
     * - fractionDigits: 2
     * @var float
     */
    public $UnderDeliveryPct;
    /**
     * The InventDim
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RaseConnector\StructType\AxdEntity_InventDim[]
     */
    public $InventDim;
    /**
     * The DocuRefLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RaseConnector\StructType\AxdEntity_DocuRefLine[]
     */
    public $DocuRefLine;
    /**
     * The MarkupTransLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RaseConnector\StructType\AxdEntity_MarkupTransLine[]
     */
    public $MarkupTransLine;
    /**
     * The action
     * @var string
     */
    public $action;
    /**
     * Constructor method for AxdEntity_SalesLine
     * @uses AxdEntity_SalesLine::setItemId()
     * @uses AxdEntity_SalesLine::setSalesQty()
     * @uses AxdEntity_SalesLine::setSalesUnit()
     * @uses AxdEntity_SalesLine::setClass()
     * @uses AxdEntity_SalesLine::setActivityNumber()
     * @uses AxdEntity_SalesLine::setBackOrder()
     * @uses AxdEntity_SalesLine::setBarCode()
     * @uses AxdEntity_SalesLine::setBarCodeType()
     * @uses AxdEntity_SalesLine::setBlanketRefTransId()
     * @uses AxdEntity_SalesLine::setBlocked()
     * @uses AxdEntity_SalesLine::setCaseTagging()
     * @uses AxdEntity_SalesLine::setComplete()
     * @uses AxdEntity_SalesLine::setConfirmedDlv()
     * @uses AxdEntity_SalesLine::setCostPrice()
     * @uses AxdEntity_SalesLine::setCurrencyCode()
     * @uses AxdEntity_SalesLine::setCustAccount()
     * @uses AxdEntity_SalesLine::setCustGroup()
     * @uses AxdEntity_SalesLine::setCustomerLineNum()
     * @uses AxdEntity_SalesLine::setCustomerRef()
     * @uses AxdEntity_SalesLine::setDeliveredIntotal()
     * @uses AxdEntity_SalesLine::setDeliveryAddress()
     * @uses AxdEntity_SalesLine::setDeliveryCity()
     * @uses AxdEntity_SalesLine::setDeliveryCountryRegionId()
     * @uses AxdEntity_SalesLine::setDeliveryCounty()
     * @uses AxdEntity_SalesLine::setDeliveryDateControlType()
     * @uses AxdEntity_SalesLine::setDeliveryName()
     * @uses AxdEntity_SalesLine::setDeliveryState()
     * @uses AxdEntity_SalesLine::setDeliveryStreet()
     * @uses AxdEntity_SalesLine::setDeliveryType()
     * @uses AxdEntity_SalesLine::setDeliveryZipCode()
     * @uses AxdEntity_SalesLine::setDimension()
     * @uses AxdEntity_SalesLine::setDlvMode()
     * @uses AxdEntity_SalesLine::setEInvoiceAccountCode()
     * @uses AxdEntity_SalesLine::setExpectedRetQty()
     * @uses AxdEntity_SalesLine::setExternalItemId()
     * @uses AxdEntity_SalesLine::setInventDeliverNow()
     * @uses AxdEntity_SalesLine::setInventDimId()
     * @uses AxdEntity_SalesLine::setInventRefId()
     * @uses AxdEntity_SalesLine::setInventRefTransId()
     * @uses AxdEntity_SalesLine::setInventRefType()
     * @uses AxdEntity_SalesLine::setInventTransId()
     * @uses AxdEntity_SalesLine::setInventTransIdReturn()
     * @uses AxdEntity_SalesLine::setItemBOMId()
     * @uses AxdEntity_SalesLine::setItemReplaced()
     * @uses AxdEntity_SalesLine::setItemTagging()
     * @uses AxdEntity_SalesLine::setLedgerAccount()
     * @uses AxdEntity_SalesLine::setLineAmount()
     * @uses AxdEntity_SalesLine::setLineDisc()
     * @uses AxdEntity_SalesLine::setLineHeader()
     * @uses AxdEntity_SalesLine::setLineNum()
     * @uses AxdEntity_SalesLine::setLinePercent()
     * @uses AxdEntity_SalesLine::setMultiLnDisc()
     * @uses AxdEntity_SalesLine::setMultiLnPercent()
     * @uses AxdEntity_SalesLine::setName()
     * @uses AxdEntity_SalesLine::setOverDeliveryPct()
     * @uses AxdEntity_SalesLine::setPackingUnit()
     * @uses AxdEntity_SalesLine::setPackingUnitQty()
     * @uses AxdEntity_SalesLine::setPalletTagging()
     * @uses AxdEntity_SalesLine::setPort()
     * @uses AxdEntity_SalesLine::setPriceUnit()
     * @uses AxdEntity_SalesLine::setProjCategoryId()
     * @uses AxdEntity_SalesLine::setProjId()
     * @uses AxdEntity_SalesLine::setProjLinePropertyId()
     * @uses AxdEntity_SalesLine::setProjTransId()
     * @uses AxdEntity_SalesLine::setPurchorderFormNum()
     * @uses AxdEntity_SalesLine::setQtyOrdered()
     * @uses AxdEntity_SalesLine::setReceiptDateConfirmed()
     * @uses AxdEntity_SalesLine::setReceiptDateRequested()
     * @uses AxdEntity_SalesLine::setRecId()
     * @uses AxdEntity_SalesLine::setRecVersion()
     * @uses AxdEntity_SalesLine::setRemainInventFinancial()
     * @uses AxdEntity_SalesLine::setRemainInventPhysical()
     * @uses AxdEntity_SalesLine::setRemainSalesFinancial()
     * @uses AxdEntity_SalesLine::setRemainSalesPhysical()
     * @uses AxdEntity_SalesLine::setReservation()
     * @uses AxdEntity_SalesLine::setReturnAllowReservation()
     * @uses AxdEntity_SalesLine::setReturnArrivalDate()
     * @uses AxdEntity_SalesLine::setReturnClosedDate()
     * @uses AxdEntity_SalesLine::setReturnDeadLine()
     * @uses AxdEntity_SalesLine::setReturnDispositionCodeId()
     * @uses AxdEntity_SalesLine::setReturnStatus()
     * @uses AxdEntity_SalesLine::setSalesDeliverNow()
     * @uses AxdEntity_SalesLine::setSalesGroup()
     * @uses AxdEntity_SalesLine::setSalesId()
     * @uses AxdEntity_SalesLine::setSalesMarkup()
     * @uses AxdEntity_SalesLine::setSalesPrice()
     * @uses AxdEntity_SalesLine::setSalesStatus()
     * @uses AxdEntity_SalesLine::setSalesTableLineUpdate()
     * @uses AxdEntity_SalesLine::setSalesType()
     * @uses AxdEntity_SalesLine::setScrap()
     * @uses AxdEntity_SalesLine::setShipCarrierAccount()
     * @uses AxdEntity_SalesLine::setShipCarrierAccountCode()
     * @uses AxdEntity_SalesLine::setShipCarrierDlvType()
     * @uses AxdEntity_SalesLine::setShipCarrierID()
     * @uses AxdEntity_SalesLine::setShippingDateConfirmed()
     * @uses AxdEntity_SalesLine::setShippingDateRequested()
     * @uses AxdEntity_SalesLine::setStatProcId()
     * @uses AxdEntity_SalesLine::setStatTriangularDeal()
     * @uses AxdEntity_SalesLine::setTaxAutogenerated()
     * @uses AxdEntity_SalesLine::setTaxGroup()
     * @uses AxdEntity_SalesLine::setTaxItemGroup()
     * @uses AxdEntity_SalesLine::setTransactionCode()
     * @uses AxdEntity_SalesLine::setTransport()
     * @uses AxdEntity_SalesLine::setUnderDeliveryPct()
     * @uses AxdEntity_SalesLine::setInventDim()
     * @uses AxdEntity_SalesLine::setDocuRefLine()
     * @uses AxdEntity_SalesLine::setMarkupTransLine()
     * @uses AxdEntity_SalesLine::setAction()
     * @param string $itemId
     * @param float $salesQty
     * @param string $salesUnit
     * @param string $class
     * @param string $activityNumber
     * @param string $backOrder
     * @param string $barCode
     * @param string $barCodeType
     * @param string $blanketRefTransId
     * @param string $blocked
     * @param string $caseTagging
     * @param string $complete
     * @param string $confirmedDlv
     * @param float $costPrice
     * @param string $currencyCode
     * @param string $custAccount
     * @param string $custGroup
     * @param int $customerLineNum
     * @param string $customerRef
     * @param float $deliveredIntotal
     * @param string $deliveryAddress
     * @param string $deliveryCity
     * @param string $deliveryCountryRegionId
     * @param string $deliveryCounty
     * @param string $deliveryDateControlType
     * @param string $deliveryName
     * @param string $deliveryState
     * @param string $deliveryStreet
     * @param string $deliveryType
     * @param string $deliveryZipCode
     * @param \RaseConnector\ArrayType\AxdArray_AxdExtType_Dimension $dimension
     * @param string $dlvMode
     * @param string $eInvoiceAccountCode
     * @param float $expectedRetQty
     * @param string $externalItemId
     * @param float $inventDeliverNow
     * @param string $inventDimId
     * @param string $inventRefId
     * @param string $inventRefTransId
     * @param string $inventRefType
     * @param string $inventTransId
     * @param string $inventTransIdReturn
     * @param string $itemBOMId
     * @param string $itemReplaced
     * @param string $itemTagging
     * @param string $ledgerAccount
     * @param float $lineAmount
     * @param float $lineDisc
     * @param string $lineHeader
     * @param float $lineNum
     * @param float $linePercent
     * @param float $multiLnDisc
     * @param float $multiLnPercent
     * @param string $name
     * @param float $overDeliveryPct
     * @param string $packingUnit
     * @param float $packingUnitQty
     * @param string $palletTagging
     * @param string $port
     * @param float $priceUnit
     * @param string $projCategoryId
     * @param string $projId
     * @param string $projLinePropertyId
     * @param string $projTransId
     * @param string $purchorderFormNum
     * @param float $qtyOrdered
     * @param string $receiptDateConfirmed
     * @param string $receiptDateRequested
     * @param int $recId
     * @param int $recVersion
     * @param float $remainInventFinancial
     * @param float $remainInventPhysical
     * @param float $remainSalesFinancial
     * @param float $remainSalesPhysical
     * @param string $reservation
     * @param string $returnAllowReservation
     * @param string $returnArrivalDate
     * @param string $returnClosedDate
     * @param string $returnDeadLine
     * @param string $returnDispositionCodeId
     * @param string $returnStatus
     * @param float $salesDeliverNow
     * @param string $salesGroup
     * @param string $salesId
     * @param float $salesMarkup
     * @param float $salesPrice
     * @param string $salesStatus
     * @param string $salesTableLineUpdate
     * @param string $salesType
     * @param string $scrap
     * @param string $shipCarrierAccount
     * @param string $shipCarrierAccountCode
     * @param string $shipCarrierDlvType
     * @param string $shipCarrierID
     * @param string $shippingDateConfirmed
     * @param string $shippingDateRequested
     * @param string $statProcId
     * @param string $statTriangularDeal
     * @param string $taxAutogenerated
     * @param string $taxGroup
     * @param string $taxItemGroup
     * @param string $transactionCode
     * @param string $transport
     * @param float $underDeliveryPct
     * @param \RaseConnector\StructType\AxdEntity_InventDim[] $inventDim
     * @param \RaseConnector\StructType\AxdEntity_DocuRefLine[] $docuRefLine
     * @param \RaseConnector\StructType\AxdEntity_MarkupTransLine[] $markupTransLine
     * @param string $action
     */
    public function __construct($itemId = null, $salesQty = null, $salesUnit = null, $class = null, $activityNumber = null, $backOrder = null, $barCode = null, $barCodeType = null, $blanketRefTransId = null, $blocked = null, $caseTagging = null, $complete = null, $confirmedDlv = null, $costPrice = null, $currencyCode = null, $custAccount = null, $custGroup = null, $customerLineNum = null, $customerRef = null, $deliveredIntotal = null, $deliveryAddress = null, $deliveryCity = null, $deliveryCountryRegionId = null, $deliveryCounty = null, $deliveryDateControlType = null, $deliveryName = null, $deliveryState = null, $deliveryStreet = null, $deliveryType = null, $deliveryZipCode = null, \RaseConnector\ArrayType\AxdArray_AxdExtType_Dimension $dimension = null, $dlvMode = null, $eInvoiceAccountCode = null, $expectedRetQty = null, $externalItemId = null, $inventDeliverNow = null, $inventDimId = null, $inventRefId = null, $inventRefTransId = null, $inventRefType = null, $inventTransId = null, $inventTransIdReturn = null, $itemBOMId = null, $itemReplaced = null, $itemTagging = null, $ledgerAccount = null, $lineAmount = null, $lineDisc = null, $lineHeader = null, $lineNum = null, $linePercent = null, $multiLnDisc = null, $multiLnPercent = null, $name = null, $overDeliveryPct = null, $packingUnit = null, $packingUnitQty = null, $palletTagging = null, $port = null, $priceUnit = null, $projCategoryId = null, $projId = null, $projLinePropertyId = null, $projTransId = null, $purchorderFormNum = null, $qtyOrdered = null, $receiptDateConfirmed = null, $receiptDateRequested = null, $recId = null, $recVersion = null, $remainInventFinancial = null, $remainInventPhysical = null, $remainSalesFinancial = null, $remainSalesPhysical = null, $reservation = null, $returnAllowReservation = null, $returnArrivalDate = null, $returnClosedDate = null, $returnDeadLine = null, $returnDispositionCodeId = null, $returnStatus = null, $salesDeliverNow = null, $salesGroup = null, $salesId = null, $salesMarkup = null, $salesPrice = null, $salesStatus = null, $salesTableLineUpdate = null, $salesType = null, $scrap = null, $shipCarrierAccount = null, $shipCarrierAccountCode = null, $shipCarrierDlvType = null, $shipCarrierID = null, $shippingDateConfirmed = null, $shippingDateRequested = null, $statProcId = null, $statTriangularDeal = null, $taxAutogenerated = null, $taxGroup = null, $taxItemGroup = null, $transactionCode = null, $transport = null, $underDeliveryPct = null, array $inventDim = array(), array $docuRefLine = array(), array $markupTransLine = array(), $action = null)
    {
        $this
            ->setItemId($itemId)
            ->setSalesQty($salesQty)
            ->setSalesUnit($salesUnit)
            ->setClass($class)
            ->setActivityNumber($activityNumber)
            ->setBackOrder($backOrder)
            ->setBarCode($barCode)
            ->setBarCodeType($barCodeType)
            ->setBlanketRefTransId($blanketRefTransId)
            ->setBlocked($blocked)
            ->setCaseTagging($caseTagging)
            ->setComplete($complete)
            ->setConfirmedDlv($confirmedDlv)
            ->setCostPrice($costPrice)
            ->setCurrencyCode($currencyCode)
            ->setCustAccount($custAccount)
            ->setCustGroup($custGroup)
            ->setCustomerLineNum($customerLineNum)
            ->setCustomerRef($customerRef)
            ->setDeliveredIntotal($deliveredIntotal)
            ->setDeliveryAddress($deliveryAddress)
            ->setDeliveryCity($deliveryCity)
            ->setDeliveryCountryRegionId($deliveryCountryRegionId)
            ->setDeliveryCounty($deliveryCounty)
            ->setDeliveryDateControlType($deliveryDateControlType)
            ->setDeliveryName($deliveryName)
            ->setDeliveryState($deliveryState)
            ->setDeliveryStreet($deliveryStreet)
            ->setDeliveryType($deliveryType)
            ->setDeliveryZipCode($deliveryZipCode)
            ->setDimension($dimension)
            ->setDlvMode($dlvMode)
            ->setEInvoiceAccountCode($eInvoiceAccountCode)
            ->setExpectedRetQty($expectedRetQty)
            ->setExternalItemId($externalItemId)
            ->setInventDeliverNow($inventDeliverNow)
            ->setInventDimId($inventDimId)
            ->setInventRefId($inventRefId)
            ->setInventRefTransId($inventRefTransId)
            ->setInventRefType($inventRefType)
            ->setInventTransId($inventTransId)
            ->setInventTransIdReturn($inventTransIdReturn)
            ->setItemBOMId($itemBOMId)
            ->setItemReplaced($itemReplaced)
            ->setItemTagging($itemTagging)
            ->setLedgerAccount($ledgerAccount)
            ->setLineAmount($lineAmount)
            ->setLineDisc($lineDisc)
            ->setLineHeader($lineHeader)
            ->setLineNum($lineNum)
            ->setLinePercent($linePercent)
            ->setMultiLnDisc($multiLnDisc)
            ->setMultiLnPercent($multiLnPercent)
            ->setName($name)
            ->setOverDeliveryPct($overDeliveryPct)
            ->setPackingUnit($packingUnit)
            ->setPackingUnitQty($packingUnitQty)
            ->setPalletTagging($palletTagging)
            ->setPort($port)
            ->setPriceUnit($priceUnit)
            ->setProjCategoryId($projCategoryId)
            ->setProjId($projId)
            ->setProjLinePropertyId($projLinePropertyId)
            ->setProjTransId($projTransId)
            ->setPurchorderFormNum($purchorderFormNum)
            ->setQtyOrdered($qtyOrdered)
            ->setReceiptDateConfirmed($receiptDateConfirmed)
            ->setReceiptDateRequested($receiptDateRequested)
            ->setRecId($recId)
            ->setRecVersion($recVersion)
            ->setRemainInventFinancial($remainInventFinancial)
            ->setRemainInventPhysical($remainInventPhysical)
            ->setRemainSalesFinancial($remainSalesFinancial)
            ->setRemainSalesPhysical($remainSalesPhysical)
            ->setReservation($reservation)
            ->setReturnAllowReservation($returnAllowReservation)
            ->setReturnArrivalDate($returnArrivalDate)
            ->setReturnClosedDate($returnClosedDate)
            ->setReturnDeadLine($returnDeadLine)
            ->setReturnDispositionCodeId($returnDispositionCodeId)
            ->setReturnStatus($returnStatus)
            ->setSalesDeliverNow($salesDeliverNow)
            ->setSalesGroup($salesGroup)
            ->setSalesId($salesId)
            ->setSalesMarkup($salesMarkup)
            ->setSalesPrice($salesPrice)
            ->setSalesStatus($salesStatus)
            ->setSalesTableLineUpdate($salesTableLineUpdate)
            ->setSalesType($salesType)
            ->setScrap($scrap)
            ->setShipCarrierAccount($shipCarrierAccount)
            ->setShipCarrierAccountCode($shipCarrierAccountCode)
            ->setShipCarrierDlvType($shipCarrierDlvType)
            ->setShipCarrierID($shipCarrierID)
            ->setShippingDateConfirmed($shippingDateConfirmed)
            ->setShippingDateRequested($shippingDateRequested)
            ->setStatProcId($statProcId)
            ->setStatTriangularDeal($statTriangularDeal)
            ->setTaxAutogenerated($taxAutogenerated)
            ->setTaxGroup($taxGroup)
            ->setTaxItemGroup($taxItemGroup)
            ->setTransactionCode($transactionCode)
            ->setTransport($transport)
            ->setUnderDeliveryPct($underDeliveryPct)
            ->setInventDim($inventDim)
            ->setDocuRefLine($docuRefLine)
            ->setMarkupTransLine($markupTransLine)
            ->setAction($action);
    }
    /**
     * Get ItemId value
     * @return string
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param string $itemId
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: string
        if (!is_null($itemId) && !is_string($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemId)), __LINE__);
        }
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get SalesQty value
     * @return float
     */
    public function getSalesQty()
    {
        return $this->SalesQty;
    }
    /**
     * Set SalesQty value
     * @param float $salesQty
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setSalesQty($salesQty = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($salesQty) && strlen(substr($salesQty, strpos($salesQty, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($salesQty, strpos($salesQty, '.')))), __LINE__);
        }
        $this->SalesQty = $salesQty;
        return $this;
    }
    /**
     * Get SalesUnit value
     * @return string
     */
    public function getSalesUnit()
    {
        return $this->SalesUnit;
    }
    /**
     * Set SalesUnit value
     * @param string $salesUnit
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setSalesUnit($salesUnit = null)
    {
        // validation for constraint: string
        if (!is_null($salesUnit) && !is_string($salesUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salesUnit)), __LINE__);
        }
        $this->SalesUnit = $salesUnit;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get ActivityNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getActivityNumber()
    {
        return isset($this->ActivityNumber) ? $this->ActivityNumber : null;
    }
    /**
     * Set ActivityNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $activityNumber
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setActivityNumber($activityNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($activityNumber) && strlen($activityNumber) > 10) || (is_array($activityNumber) && count($activityNumber) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($activityNumber) ? strlen($activityNumber) : count($activityNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($activityNumber) && strlen($activityNumber) < 0) || (is_array($activityNumber) && count($activityNumber) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($activityNumber) && !is_string($activityNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($activityNumber)), __LINE__);
        }
        if (is_null($activityNumber) || (is_array($activityNumber) && empty($activityNumber))) {
            unset($this->ActivityNumber);
        } else {
            $this->ActivityNumber = $activityNumber;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get BarCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBarCode()
    {
        return isset($this->BarCode) ? $this->BarCode : null;
    }
    /**
     * Set BarCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $barCode
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setBarCode($barCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($barCode) && strlen($barCode) > 80) || (is_array($barCode) && count($barCode) > 80)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 80 element(s) or a scalar of 80 character(s) at most, "%d" length given', is_scalar($barCode) ? strlen($barCode) : count($barCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($barCode) && strlen($barCode) < 0) || (is_array($barCode) && count($barCode) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($barCode) && !is_string($barCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barCode)), __LINE__);
        }
        if (is_null($barCode) || (is_array($barCode) && empty($barCode))) {
            unset($this->BarCode);
        } else {
            $this->BarCode = $barCode;
        }
        return $this;
    }
    /**
     * Get BarCodeType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBarCodeType()
    {
        return isset($this->BarCodeType) ? $this->BarCodeType : null;
    }
    /**
     * Set BarCodeType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $barCodeType
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setBarCodeType($barCodeType = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($barCodeType) && strlen($barCodeType) > 10) || (is_array($barCodeType) && count($barCodeType) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($barCodeType) ? strlen($barCodeType) : count($barCodeType)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($barCodeType) && strlen($barCodeType) < 0) || (is_array($barCodeType) && count($barCodeType) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($barCodeType) && !is_string($barCodeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barCodeType)), __LINE__);
        }
        if (is_null($barCodeType) || (is_array($barCodeType) && empty($barCodeType))) {
            unset($this->BarCodeType);
        } else {
            $this->BarCodeType = $barCodeType;
        }
        return $this;
    }
    /**
     * Get BlanketRefTransId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBlanketRefTransId()
    {
        return isset($this->BlanketRefTransId) ? $this->BlanketRefTransId : null;
    }
    /**
     * Set BlanketRefTransId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $blanketRefTransId
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setBlanketRefTransId($blanketRefTransId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($blanketRefTransId) && strlen($blanketRefTransId) > 20) || (is_array($blanketRefTransId) && count($blanketRefTransId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($blanketRefTransId) ? strlen($blanketRefTransId) : count($blanketRefTransId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($blanketRefTransId) && strlen($blanketRefTransId) < 0) || (is_array($blanketRefTransId) && count($blanketRefTransId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($blanketRefTransId) && !is_string($blanketRefTransId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($blanketRefTransId)), __LINE__);
        }
        if (is_null($blanketRefTransId) || (is_array($blanketRefTransId) && empty($blanketRefTransId))) {
            unset($this->BlanketRefTransId);
        } else {
            $this->BlanketRefTransId = $blanketRefTransId;
        }
        return $this;
    }
    /**
     * Get Blocked value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBlocked()
    {
        return isset($this->Blocked) ? $this->Blocked : null;
    }
    /**
     * Set Blocked value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_LineStopped::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_LineStopped::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $blocked
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setBlocked($blocked = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_LineStopped::valueIsValid($blocked)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $blocked, implode(', ', \RaseConnector\EnumType\AxdExtType_LineStopped::getValidValues())), __LINE__);
        }
        if (is_null($blocked) || (is_array($blocked) && empty($blocked))) {
            unset($this->Blocked);
        } else {
            $this->Blocked = $blocked;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get ConfirmedDlv value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConfirmedDlv()
    {
        return isset($this->ConfirmedDlv) ? $this->ConfirmedDlv : null;
    }
    /**
     * Set ConfirmedDlv value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $confirmedDlv
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setConfirmedDlv($confirmedDlv = null)
    {
        // validation for constraint: string
        if (!is_null($confirmedDlv) && !is_string($confirmedDlv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmedDlv)), __LINE__);
        }
        if (is_null($confirmedDlv) || (is_array($confirmedDlv) && empty($confirmedDlv))) {
            unset($this->ConfirmedDlv);
        } else {
            $this->ConfirmedDlv = $confirmedDlv;
        }
        return $this;
    }
    /**
     * Get CostPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getCostPrice()
    {
        return isset($this->CostPrice) ? $this->CostPrice : null;
    }
    /**
     * Set CostPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $costPrice
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setCostPrice($costPrice = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($costPrice) && strlen(substr($costPrice, strpos($costPrice, '.'))) !== 20) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 20 fraction digits, "%d" given', strlen(substr($costPrice, strpos($costPrice, '.')))), __LINE__);
        }
        if (is_null($costPrice) || (is_array($costPrice) && empty($costPrice))) {
            unset($this->CostPrice);
        } else {
            $this->CostPrice = $costPrice;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get CustomerLineNum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCustomerLineNum()
    {
        return isset($this->CustomerLineNum) ? $this->CustomerLineNum : null;
    }
    /**
     * Set CustomerLineNum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $customerLineNum
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setCustomerLineNum($customerLineNum = null)
    {
        // validation for constraint: int
        if (!is_null($customerLineNum) && !is_numeric($customerLineNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($customerLineNum)), __LINE__);
        }
        if (is_null($customerLineNum) || (is_array($customerLineNum) && empty($customerLineNum))) {
            unset($this->CustomerLineNum);
        } else {
            $this->CustomerLineNum = $customerLineNum;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get DeliveredIntotal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getDeliveredIntotal()
    {
        return isset($this->DeliveredIntotal) ? $this->DeliveredIntotal : null;
    }
    /**
     * Set DeliveredIntotal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $deliveredIntotal
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setDeliveredIntotal($deliveredIntotal = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($deliveredIntotal) && strlen(substr($deliveredIntotal, strpos($deliveredIntotal, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($deliveredIntotal, strpos($deliveredIntotal, '.')))), __LINE__);
        }
        if (is_null($deliveredIntotal) || (is_array($deliveredIntotal) && empty($deliveredIntotal))) {
            unset($this->DeliveredIntotal);
        } else {
            $this->DeliveredIntotal = $deliveredIntotal;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get DeliveryType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryType()
    {
        return isset($this->DeliveryType) ? $this->DeliveryType : null;
    }
    /**
     * Set DeliveryType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_TradeLineDlvTypeId::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_TradeLineDlvTypeId::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliveryType
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setDeliveryType($deliveryType = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_TradeLineDlvTypeId::valueIsValid($deliveryType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryType, implode(', ', \RaseConnector\EnumType\AxdExtType_TradeLineDlvTypeId::getValidValues())), __LINE__);
        }
        if (is_null($deliveryType) || (is_array($deliveryType) && empty($deliveryType))) {
            unset($this->DeliveryType);
        } else {
            $this->DeliveryType = $deliveryType;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get ExpectedRetQty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getExpectedRetQty()
    {
        return isset($this->ExpectedRetQty) ? $this->ExpectedRetQty : null;
    }
    /**
     * Set ExpectedRetQty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $expectedRetQty
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setExpectedRetQty($expectedRetQty = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($expectedRetQty) && strlen(substr($expectedRetQty, strpos($expectedRetQty, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($expectedRetQty, strpos($expectedRetQty, '.')))), __LINE__);
        }
        if (is_null($expectedRetQty) || (is_array($expectedRetQty) && empty($expectedRetQty))) {
            unset($this->ExpectedRetQty);
        } else {
            $this->ExpectedRetQty = $expectedRetQty;
        }
        return $this;
    }
    /**
     * Get ExternalItemId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExternalItemId()
    {
        return isset($this->ExternalItemId) ? $this->ExternalItemId : null;
    }
    /**
     * Set ExternalItemId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $externalItemId
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setExternalItemId($externalItemId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($externalItemId) && strlen($externalItemId) > 50) || (is_array($externalItemId) && count($externalItemId) > 50)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 50 element(s) or a scalar of 50 character(s) at most, "%d" length given', is_scalar($externalItemId) ? strlen($externalItemId) : count($externalItemId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($externalItemId) && strlen($externalItemId) < 0) || (is_array($externalItemId) && count($externalItemId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($externalItemId) && !is_string($externalItemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalItemId)), __LINE__);
        }
        if (is_null($externalItemId) || (is_array($externalItemId) && empty($externalItemId))) {
            unset($this->ExternalItemId);
        } else {
            $this->ExternalItemId = $externalItemId;
        }
        return $this;
    }
    /**
     * Get InventDeliverNow value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getInventDeliverNow()
    {
        return isset($this->InventDeliverNow) ? $this->InventDeliverNow : null;
    }
    /**
     * Set InventDeliverNow value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $inventDeliverNow
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setInventDeliverNow($inventDeliverNow = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($inventDeliverNow) && strlen(substr($inventDeliverNow, strpos($inventDeliverNow, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($inventDeliverNow, strpos($inventDeliverNow, '.')))), __LINE__);
        }
        if (is_null($inventDeliverNow) || (is_array($inventDeliverNow) && empty($inventDeliverNow))) {
            unset($this->InventDeliverNow);
        } else {
            $this->InventDeliverNow = $inventDeliverNow;
        }
        return $this;
    }
    /**
     * Get InventDimId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventDimId()
    {
        return isset($this->InventDimId) ? $this->InventDimId : null;
    }
    /**
     * Set InventDimId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventDimId
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setInventDimId($inventDimId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($inventDimId) && strlen($inventDimId) > 20) || (is_array($inventDimId) && count($inventDimId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($inventDimId) ? strlen($inventDimId) : count($inventDimId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($inventDimId) && strlen($inventDimId) < 0) || (is_array($inventDimId) && count($inventDimId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($inventDimId) && !is_string($inventDimId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventDimId)), __LINE__);
        }
        if (is_null($inventDimId) || (is_array($inventDimId) && empty($inventDimId))) {
            unset($this->InventDimId);
        } else {
            $this->InventDimId = $inventDimId;
        }
        return $this;
    }
    /**
     * Get InventRefId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventRefId()
    {
        return isset($this->InventRefId) ? $this->InventRefId : null;
    }
    /**
     * Set InventRefId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventRefId
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setInventRefId($inventRefId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($inventRefId) && strlen($inventRefId) > 20) || (is_array($inventRefId) && count($inventRefId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($inventRefId) ? strlen($inventRefId) : count($inventRefId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($inventRefId) && strlen($inventRefId) < 0) || (is_array($inventRefId) && count($inventRefId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($inventRefId) && !is_string($inventRefId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventRefId)), __LINE__);
        }
        if (is_null($inventRefId) || (is_array($inventRefId) && empty($inventRefId))) {
            unset($this->InventRefId);
        } else {
            $this->InventRefId = $inventRefId;
        }
        return $this;
    }
    /**
     * Get InventRefTransId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventRefTransId()
    {
        return isset($this->InventRefTransId) ? $this->InventRefTransId : null;
    }
    /**
     * Set InventRefTransId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventRefTransId
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setInventRefTransId($inventRefTransId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($inventRefTransId) && strlen($inventRefTransId) > 20) || (is_array($inventRefTransId) && count($inventRefTransId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($inventRefTransId) ? strlen($inventRefTransId) : count($inventRefTransId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($inventRefTransId) && strlen($inventRefTransId) < 0) || (is_array($inventRefTransId) && count($inventRefTransId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($inventRefTransId) && !is_string($inventRefTransId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventRefTransId)), __LINE__);
        }
        if (is_null($inventRefTransId) || (is_array($inventRefTransId) && empty($inventRefTransId))) {
            unset($this->InventRefTransId);
        } else {
            $this->InventRefTransId = $inventRefTransId;
        }
        return $this;
    }
    /**
     * Get InventRefType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventRefType()
    {
        return isset($this->InventRefType) ? $this->InventRefType : null;
    }
    /**
     * Set InventRefType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_InventRefType::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_InventRefType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $inventRefType
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setInventRefType($inventRefType = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_InventRefType::valueIsValid($inventRefType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $inventRefType, implode(', ', \RaseConnector\EnumType\AxdEnum_InventRefType::getValidValues())), __LINE__);
        }
        if (is_null($inventRefType) || (is_array($inventRefType) && empty($inventRefType))) {
            unset($this->InventRefType);
        } else {
            $this->InventRefType = $inventRefType;
        }
        return $this;
    }
    /**
     * Get InventTransId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventTransId()
    {
        return isset($this->InventTransId) ? $this->InventTransId : null;
    }
    /**
     * Set InventTransId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventTransId
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setInventTransId($inventTransId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($inventTransId) && strlen($inventTransId) > 20) || (is_array($inventTransId) && count($inventTransId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($inventTransId) ? strlen($inventTransId) : count($inventTransId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($inventTransId) && strlen($inventTransId) < 0) || (is_array($inventTransId) && count($inventTransId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($inventTransId) && !is_string($inventTransId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventTransId)), __LINE__);
        }
        if (is_null($inventTransId) || (is_array($inventTransId) && empty($inventTransId))) {
            unset($this->InventTransId);
        } else {
            $this->InventTransId = $inventTransId;
        }
        return $this;
    }
    /**
     * Get InventTransIdReturn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventTransIdReturn()
    {
        return isset($this->InventTransIdReturn) ? $this->InventTransIdReturn : null;
    }
    /**
     * Set InventTransIdReturn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventTransIdReturn
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setInventTransIdReturn($inventTransIdReturn = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($inventTransIdReturn) && strlen($inventTransIdReturn) > 20) || (is_array($inventTransIdReturn) && count($inventTransIdReturn) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($inventTransIdReturn) ? strlen($inventTransIdReturn) : count($inventTransIdReturn)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($inventTransIdReturn) && strlen($inventTransIdReturn) < 0) || (is_array($inventTransIdReturn) && count($inventTransIdReturn) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($inventTransIdReturn) && !is_string($inventTransIdReturn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventTransIdReturn)), __LINE__);
        }
        if (is_null($inventTransIdReturn) || (is_array($inventTransIdReturn) && empty($inventTransIdReturn))) {
            unset($this->InventTransIdReturn);
        } else {
            $this->InventTransIdReturn = $inventTransIdReturn;
        }
        return $this;
    }
    /**
     * Get ItemBOMId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getItemBOMId()
    {
        return isset($this->ItemBOMId) ? $this->ItemBOMId : null;
    }
    /**
     * Set ItemBOMId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $itemBOMId
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setItemBOMId($itemBOMId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($itemBOMId) && strlen($itemBOMId) > 20) || (is_array($itemBOMId) && count($itemBOMId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($itemBOMId) ? strlen($itemBOMId) : count($itemBOMId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($itemBOMId) && strlen($itemBOMId) < 0) || (is_array($itemBOMId) && count($itemBOMId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($itemBOMId) && !is_string($itemBOMId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemBOMId)), __LINE__);
        }
        if (is_null($itemBOMId) || (is_array($itemBOMId) && empty($itemBOMId))) {
            unset($this->ItemBOMId);
        } else {
            $this->ItemBOMId = $itemBOMId;
        }
        return $this;
    }
    /**
     * Get itemReplaced value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getItemReplaced()
    {
        return isset($this->itemReplaced) ? $this->itemReplaced : null;
    }
    /**
     * Set itemReplaced value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_ReturnItemReplaced::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_ReturnItemReplaced::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemReplaced
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setItemReplaced($itemReplaced = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_ReturnItemReplaced::valueIsValid($itemReplaced)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $itemReplaced, implode(', ', \RaseConnector\EnumType\AxdExtType_ReturnItemReplaced::getValidValues())), __LINE__);
        }
        if (is_null($itemReplaced) || (is_array($itemReplaced) && empty($itemReplaced))) {
            unset($this->itemReplaced);
        } else {
            $this->itemReplaced = $itemReplaced;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get LedgerAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLedgerAccount()
    {
        return isset($this->LedgerAccount) ? $this->LedgerAccount : null;
    }
    /**
     * Set LedgerAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ledgerAccount
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setLedgerAccount($ledgerAccount = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($ledgerAccount) && strlen($ledgerAccount) > 20) || (is_array($ledgerAccount) && count($ledgerAccount) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($ledgerAccount) ? strlen($ledgerAccount) : count($ledgerAccount)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($ledgerAccount) && strlen($ledgerAccount) < 0) || (is_array($ledgerAccount) && count($ledgerAccount) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($ledgerAccount) && !is_string($ledgerAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ledgerAccount)), __LINE__);
        }
        if (is_null($ledgerAccount) || (is_array($ledgerAccount) && empty($ledgerAccount))) {
            unset($this->LedgerAccount);
        } else {
            $this->LedgerAccount = $ledgerAccount;
        }
        return $this;
    }
    /**
     * Get LineAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getLineAmount()
    {
        return isset($this->LineAmount) ? $this->LineAmount : null;
    }
    /**
     * Set LineAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $lineAmount
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setLineAmount($lineAmount = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($lineAmount) && strlen(substr($lineAmount, strpos($lineAmount, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($lineAmount, strpos($lineAmount, '.')))), __LINE__);
        }
        if (is_null($lineAmount) || (is_array($lineAmount) && empty($lineAmount))) {
            unset($this->LineAmount);
        } else {
            $this->LineAmount = $lineAmount;
        }
        return $this;
    }
    /**
     * Get LineDisc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getLineDisc()
    {
        return isset($this->LineDisc) ? $this->LineDisc : null;
    }
    /**
     * Set LineDisc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $lineDisc
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setLineDisc($lineDisc = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($lineDisc) && strlen(substr($lineDisc, strpos($lineDisc, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($lineDisc, strpos($lineDisc, '.')))), __LINE__);
        }
        if (is_null($lineDisc) || (is_array($lineDisc) && empty($lineDisc))) {
            unset($this->LineDisc);
        } else {
            $this->LineDisc = $lineDisc;
        }
        return $this;
    }
    /**
     * Get LineHeader value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLineHeader()
    {
        return isset($this->LineHeader) ? $this->LineHeader : null;
    }
    /**
     * Set LineHeader value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lineHeader
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setLineHeader($lineHeader = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($lineHeader) && strlen($lineHeader) > 80) || (is_array($lineHeader) && count($lineHeader) > 80)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 80 element(s) or a scalar of 80 character(s) at most, "%d" length given', is_scalar($lineHeader) ? strlen($lineHeader) : count($lineHeader)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($lineHeader) && strlen($lineHeader) < 0) || (is_array($lineHeader) && count($lineHeader) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($lineHeader) && !is_string($lineHeader)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineHeader)), __LINE__);
        }
        if (is_null($lineHeader) || (is_array($lineHeader) && empty($lineHeader))) {
            unset($this->LineHeader);
        } else {
            $this->LineHeader = $lineHeader;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get LinePercent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getLinePercent()
    {
        return isset($this->LinePercent) ? $this->LinePercent : null;
    }
    /**
     * Set LinePercent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $linePercent
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setLinePercent($linePercent = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($linePercent) && strlen(substr($linePercent, strpos($linePercent, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($linePercent, strpos($linePercent, '.')))), __LINE__);
        }
        if (is_null($linePercent) || (is_array($linePercent) && empty($linePercent))) {
            unset($this->LinePercent);
        } else {
            $this->LinePercent = $linePercent;
        }
        return $this;
    }
    /**
     * Get MultiLnDisc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getMultiLnDisc()
    {
        return isset($this->MultiLnDisc) ? $this->MultiLnDisc : null;
    }
    /**
     * Set MultiLnDisc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $multiLnDisc
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setMultiLnDisc($multiLnDisc = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($multiLnDisc) && strlen(substr($multiLnDisc, strpos($multiLnDisc, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($multiLnDisc, strpos($multiLnDisc, '.')))), __LINE__);
        }
        if (is_null($multiLnDisc) || (is_array($multiLnDisc) && empty($multiLnDisc))) {
            unset($this->MultiLnDisc);
        } else {
            $this->MultiLnDisc = $multiLnDisc;
        }
        return $this;
    }
    /**
     * Get MultiLnPercent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getMultiLnPercent()
    {
        return isset($this->MultiLnPercent) ? $this->MultiLnPercent : null;
    }
    /**
     * Set MultiLnPercent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $multiLnPercent
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setMultiLnPercent($multiLnPercent = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($multiLnPercent) && strlen(substr($multiLnPercent, strpos($multiLnPercent, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($multiLnPercent, strpos($multiLnPercent, '.')))), __LINE__);
        }
        if (is_null($multiLnPercent) || (is_array($multiLnPercent) && empty($multiLnPercent))) {
            unset($this->MultiLnPercent);
        } else {
            $this->MultiLnPercent = $multiLnPercent;
        }
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setName($name = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($name) && strlen($name) > 1000) || (is_array($name) && count($name) > 1000)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1000 element(s) or a scalar of 1000 character(s) at most, "%d" length given', is_scalar($name) ? strlen($name) : count($name)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($name) && strlen($name) < 0) || (is_array($name) && count($name) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get OverDeliveryPct value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getOverDeliveryPct()
    {
        return isset($this->OverDeliveryPct) ? $this->OverDeliveryPct : null;
    }
    /**
     * Set OverDeliveryPct value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $overDeliveryPct
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setOverDeliveryPct($overDeliveryPct = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($overDeliveryPct) && strlen(substr($overDeliveryPct, strpos($overDeliveryPct, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($overDeliveryPct, strpos($overDeliveryPct, '.')))), __LINE__);
        }
        if (is_null($overDeliveryPct) || (is_array($overDeliveryPct) && empty($overDeliveryPct))) {
            unset($this->OverDeliveryPct);
        } else {
            $this->OverDeliveryPct = $overDeliveryPct;
        }
        return $this;
    }
    /**
     * Get PackingUnit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackingUnit()
    {
        return isset($this->PackingUnit) ? $this->PackingUnit : null;
    }
    /**
     * Set PackingUnit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packingUnit
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setPackingUnit($packingUnit = null)
    {
        // validation for constraint: string
        if (!is_null($packingUnit) && !is_string($packingUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packingUnit)), __LINE__);
        }
        if (is_null($packingUnit) || (is_array($packingUnit) && empty($packingUnit))) {
            unset($this->PackingUnit);
        } else {
            $this->PackingUnit = $packingUnit;
        }
        return $this;
    }
    /**
     * Get PackingUnitQty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPackingUnitQty()
    {
        return isset($this->PackingUnitQty) ? $this->PackingUnitQty : null;
    }
    /**
     * Set PackingUnitQty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $packingUnitQty
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setPackingUnitQty($packingUnitQty = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($packingUnitQty) && strlen(substr($packingUnitQty, strpos($packingUnitQty, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($packingUnitQty, strpos($packingUnitQty, '.')))), __LINE__);
        }
        if (is_null($packingUnitQty) || (is_array($packingUnitQty) && empty($packingUnitQty))) {
            unset($this->PackingUnitQty);
        } else {
            $this->PackingUnitQty = $packingUnitQty;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get PriceUnit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPriceUnit()
    {
        return isset($this->PriceUnit) ? $this->PriceUnit : null;
    }
    /**
     * Set PriceUnit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $priceUnit
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setPriceUnit($priceUnit = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($priceUnit) && strlen(substr($priceUnit, strpos($priceUnit, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($priceUnit, strpos($priceUnit, '.')))), __LINE__);
        }
        if (is_null($priceUnit) || (is_array($priceUnit) && empty($priceUnit))) {
            unset($this->PriceUnit);
        } else {
            $this->PriceUnit = $priceUnit;
        }
        return $this;
    }
    /**
     * Get ProjCategoryId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProjCategoryId()
    {
        return isset($this->ProjCategoryId) ? $this->ProjCategoryId : null;
    }
    /**
     * Set ProjCategoryId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $projCategoryId
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setProjCategoryId($projCategoryId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($projCategoryId) && strlen($projCategoryId) > 10) || (is_array($projCategoryId) && count($projCategoryId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($projCategoryId) ? strlen($projCategoryId) : count($projCategoryId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($projCategoryId) && strlen($projCategoryId) < 0) || (is_array($projCategoryId) && count($projCategoryId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($projCategoryId) && !is_string($projCategoryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($projCategoryId)), __LINE__);
        }
        if (is_null($projCategoryId) || (is_array($projCategoryId) && empty($projCategoryId))) {
            unset($this->ProjCategoryId);
        } else {
            $this->ProjCategoryId = $projCategoryId;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get ProjLinePropertyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProjLinePropertyId()
    {
        return isset($this->ProjLinePropertyId) ? $this->ProjLinePropertyId : null;
    }
    /**
     * Set ProjLinePropertyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $projLinePropertyId
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setProjLinePropertyId($projLinePropertyId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($projLinePropertyId) && strlen($projLinePropertyId) > 10) || (is_array($projLinePropertyId) && count($projLinePropertyId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($projLinePropertyId) ? strlen($projLinePropertyId) : count($projLinePropertyId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($projLinePropertyId) && strlen($projLinePropertyId) < 0) || (is_array($projLinePropertyId) && count($projLinePropertyId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($projLinePropertyId) && !is_string($projLinePropertyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($projLinePropertyId)), __LINE__);
        }
        if (is_null($projLinePropertyId) || (is_array($projLinePropertyId) && empty($projLinePropertyId))) {
            unset($this->ProjLinePropertyId);
        } else {
            $this->ProjLinePropertyId = $projLinePropertyId;
        }
        return $this;
    }
    /**
     * Get ProjTransId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProjTransId()
    {
        return isset($this->ProjTransId) ? $this->ProjTransId : null;
    }
    /**
     * Set ProjTransId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $projTransId
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setProjTransId($projTransId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($projTransId) && strlen($projTransId) > 20) || (is_array($projTransId) && count($projTransId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($projTransId) ? strlen($projTransId) : count($projTransId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($projTransId) && strlen($projTransId) < 0) || (is_array($projTransId) && count($projTransId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($projTransId) && !is_string($projTransId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($projTransId)), __LINE__);
        }
        if (is_null($projTransId) || (is_array($projTransId) && empty($projTransId))) {
            unset($this->ProjTransId);
        } else {
            $this->ProjTransId = $projTransId;
        }
        return $this;
    }
    /**
     * Get PurchorderFormNum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPurchorderFormNum()
    {
        return isset($this->PurchorderFormNum) ? $this->PurchorderFormNum : null;
    }
    /**
     * Set PurchorderFormNum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $purchorderFormNum
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setPurchorderFormNum($purchorderFormNum = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($purchorderFormNum) && strlen($purchorderFormNum) > 20) || (is_array($purchorderFormNum) && count($purchorderFormNum) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($purchorderFormNum) ? strlen($purchorderFormNum) : count($purchorderFormNum)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($purchorderFormNum) && strlen($purchorderFormNum) < 0) || (is_array($purchorderFormNum) && count($purchorderFormNum) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($purchorderFormNum) && !is_string($purchorderFormNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($purchorderFormNum)), __LINE__);
        }
        if (is_null($purchorderFormNum) || (is_array($purchorderFormNum) && empty($purchorderFormNum))) {
            unset($this->PurchorderFormNum);
        } else {
            $this->PurchorderFormNum = $purchorderFormNum;
        }
        return $this;
    }
    /**
     * Get QtyOrdered value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getQtyOrdered()
    {
        return isset($this->QtyOrdered) ? $this->QtyOrdered : null;
    }
    /**
     * Set QtyOrdered value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $qtyOrdered
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setQtyOrdered($qtyOrdered = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($qtyOrdered) && strlen(substr($qtyOrdered, strpos($qtyOrdered, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($qtyOrdered, strpos($qtyOrdered, '.')))), __LINE__);
        }
        if (is_null($qtyOrdered) || (is_array($qtyOrdered) && empty($qtyOrdered))) {
            unset($this->QtyOrdered);
        } else {
            $this->QtyOrdered = $qtyOrdered;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get RemainInventFinancial value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getRemainInventFinancial()
    {
        return isset($this->RemainInventFinancial) ? $this->RemainInventFinancial : null;
    }
    /**
     * Set RemainInventFinancial value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $remainInventFinancial
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setRemainInventFinancial($remainInventFinancial = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($remainInventFinancial) && strlen(substr($remainInventFinancial, strpos($remainInventFinancial, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($remainInventFinancial, strpos($remainInventFinancial, '.')))), __LINE__);
        }
        if (is_null($remainInventFinancial) || (is_array($remainInventFinancial) && empty($remainInventFinancial))) {
            unset($this->RemainInventFinancial);
        } else {
            $this->RemainInventFinancial = $remainInventFinancial;
        }
        return $this;
    }
    /**
     * Get RemainInventPhysical value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getRemainInventPhysical()
    {
        return isset($this->RemainInventPhysical) ? $this->RemainInventPhysical : null;
    }
    /**
     * Set RemainInventPhysical value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $remainInventPhysical
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setRemainInventPhysical($remainInventPhysical = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($remainInventPhysical) && strlen(substr($remainInventPhysical, strpos($remainInventPhysical, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($remainInventPhysical, strpos($remainInventPhysical, '.')))), __LINE__);
        }
        if (is_null($remainInventPhysical) || (is_array($remainInventPhysical) && empty($remainInventPhysical))) {
            unset($this->RemainInventPhysical);
        } else {
            $this->RemainInventPhysical = $remainInventPhysical;
        }
        return $this;
    }
    /**
     * Get RemainSalesFinancial value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getRemainSalesFinancial()
    {
        return isset($this->RemainSalesFinancial) ? $this->RemainSalesFinancial : null;
    }
    /**
     * Set RemainSalesFinancial value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $remainSalesFinancial
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setRemainSalesFinancial($remainSalesFinancial = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($remainSalesFinancial) && strlen(substr($remainSalesFinancial, strpos($remainSalesFinancial, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($remainSalesFinancial, strpos($remainSalesFinancial, '.')))), __LINE__);
        }
        if (is_null($remainSalesFinancial) || (is_array($remainSalesFinancial) && empty($remainSalesFinancial))) {
            unset($this->RemainSalesFinancial);
        } else {
            $this->RemainSalesFinancial = $remainSalesFinancial;
        }
        return $this;
    }
    /**
     * Get RemainSalesPhysical value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getRemainSalesPhysical()
    {
        return isset($this->RemainSalesPhysical) ? $this->RemainSalesPhysical : null;
    }
    /**
     * Set RemainSalesPhysical value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $remainSalesPhysical
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setRemainSalesPhysical($remainSalesPhysical = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($remainSalesPhysical) && strlen(substr($remainSalesPhysical, strpos($remainSalesPhysical, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($remainSalesPhysical, strpos($remainSalesPhysical, '.')))), __LINE__);
        }
        if (is_null($remainSalesPhysical) || (is_array($remainSalesPhysical) && empty($remainSalesPhysical))) {
            unset($this->RemainSalesPhysical);
        } else {
            $this->RemainSalesPhysical = $remainSalesPhysical;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get ReturnAllowReservation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReturnAllowReservation()
    {
        return isset($this->ReturnAllowReservation) ? $this->ReturnAllowReservation : null;
    }
    /**
     * Set ReturnAllowReservation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_ReturnAllowReservation::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_ReturnAllowReservation::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnAllowReservation
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setReturnAllowReservation($returnAllowReservation = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_ReturnAllowReservation::valueIsValid($returnAllowReservation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $returnAllowReservation, implode(', ', \RaseConnector\EnumType\AxdExtType_ReturnAllowReservation::getValidValues())), __LINE__);
        }
        if (is_null($returnAllowReservation) || (is_array($returnAllowReservation) && empty($returnAllowReservation))) {
            unset($this->ReturnAllowReservation);
        } else {
            $this->ReturnAllowReservation = $returnAllowReservation;
        }
        return $this;
    }
    /**
     * Get ReturnArrivalDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReturnArrivalDate()
    {
        return isset($this->ReturnArrivalDate) ? $this->ReturnArrivalDate : null;
    }
    /**
     * Set ReturnArrivalDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $returnArrivalDate
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setReturnArrivalDate($returnArrivalDate = null)
    {
        // validation for constraint: string
        if (!is_null($returnArrivalDate) && !is_string($returnArrivalDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnArrivalDate)), __LINE__);
        }
        if (is_null($returnArrivalDate) || (is_array($returnArrivalDate) && empty($returnArrivalDate))) {
            unset($this->ReturnArrivalDate);
        } else {
            $this->ReturnArrivalDate = $returnArrivalDate;
        }
        return $this;
    }
    /**
     * Get ReturnClosedDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReturnClosedDate()
    {
        return isset($this->ReturnClosedDate) ? $this->ReturnClosedDate : null;
    }
    /**
     * Set ReturnClosedDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $returnClosedDate
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setReturnClosedDate($returnClosedDate = null)
    {
        // validation for constraint: string
        if (!is_null($returnClosedDate) && !is_string($returnClosedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnClosedDate)), __LINE__);
        }
        if (is_null($returnClosedDate) || (is_array($returnClosedDate) && empty($returnClosedDate))) {
            unset($this->ReturnClosedDate);
        } else {
            $this->ReturnClosedDate = $returnClosedDate;
        }
        return $this;
    }
    /**
     * Get ReturnDeadLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReturnDeadLine()
    {
        return isset($this->ReturnDeadLine) ? $this->ReturnDeadLine : null;
    }
    /**
     * Set ReturnDeadLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $returnDeadLine
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setReturnDeadLine($returnDeadLine = null)
    {
        // validation for constraint: string
        if (!is_null($returnDeadLine) && !is_string($returnDeadLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnDeadLine)), __LINE__);
        }
        if (is_null($returnDeadLine) || (is_array($returnDeadLine) && empty($returnDeadLine))) {
            unset($this->ReturnDeadLine);
        } else {
            $this->ReturnDeadLine = $returnDeadLine;
        }
        return $this;
    }
    /**
     * Get ReturnDispositionCodeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReturnDispositionCodeId()
    {
        return isset($this->ReturnDispositionCodeId) ? $this->ReturnDispositionCodeId : null;
    }
    /**
     * Set ReturnDispositionCodeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $returnDispositionCodeId
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setReturnDispositionCodeId($returnDispositionCodeId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($returnDispositionCodeId) && strlen($returnDispositionCodeId) > 10) || (is_array($returnDispositionCodeId) && count($returnDispositionCodeId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($returnDispositionCodeId) ? strlen($returnDispositionCodeId) : count($returnDispositionCodeId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($returnDispositionCodeId) && strlen($returnDispositionCodeId) < 0) || (is_array($returnDispositionCodeId) && count($returnDispositionCodeId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($returnDispositionCodeId) && !is_string($returnDispositionCodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnDispositionCodeId)), __LINE__);
        }
        if (is_null($returnDispositionCodeId) || (is_array($returnDispositionCodeId) && empty($returnDispositionCodeId))) {
            unset($this->ReturnDispositionCodeId);
        } else {
            $this->ReturnDispositionCodeId = $returnDispositionCodeId;
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
     * @uses \RaseConnector\EnumType\AxdEnum_ReturnStatusLine::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_ReturnStatusLine::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnStatus
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setReturnStatus($returnStatus = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_ReturnStatusLine::valueIsValid($returnStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $returnStatus, implode(', ', \RaseConnector\EnumType\AxdEnum_ReturnStatusLine::getValidValues())), __LINE__);
        }
        if (is_null($returnStatus) || (is_array($returnStatus) && empty($returnStatus))) {
            unset($this->ReturnStatus);
        } else {
            $this->ReturnStatus = $returnStatus;
        }
        return $this;
    }
    /**
     * Get SalesDeliverNow value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getSalesDeliverNow()
    {
        return isset($this->SalesDeliverNow) ? $this->SalesDeliverNow : null;
    }
    /**
     * Set SalesDeliverNow value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $salesDeliverNow
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setSalesDeliverNow($salesDeliverNow = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($salesDeliverNow) && strlen(substr($salesDeliverNow, strpos($salesDeliverNow, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($salesDeliverNow, strpos($salesDeliverNow, '.')))), __LINE__);
        }
        if (is_null($salesDeliverNow) || (is_array($salesDeliverNow) && empty($salesDeliverNow))) {
            unset($this->SalesDeliverNow);
        } else {
            $this->SalesDeliverNow = $salesDeliverNow;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get SalesMarkup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getSalesMarkup()
    {
        return isset($this->SalesMarkup) ? $this->SalesMarkup : null;
    }
    /**
     * Set SalesMarkup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $salesMarkup
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setSalesMarkup($salesMarkup = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($salesMarkup) && strlen(substr($salesMarkup, strpos($salesMarkup, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($salesMarkup, strpos($salesMarkup, '.')))), __LINE__);
        }
        if (is_null($salesMarkup) || (is_array($salesMarkup) && empty($salesMarkup))) {
            unset($this->SalesMarkup);
        } else {
            $this->SalesMarkup = $salesMarkup;
        }
        return $this;
    }
    /**
     * Get SalesPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getSalesPrice()
    {
        return isset($this->SalesPrice) ? $this->SalesPrice : null;
    }
    /**
     * Set SalesPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $salesPrice
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setSalesPrice($salesPrice = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($salesPrice) && strlen(substr($salesPrice, strpos($salesPrice, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($salesPrice, strpos($salesPrice, '.')))), __LINE__);
        }
        if (is_null($salesPrice) || (is_array($salesPrice) && empty($salesPrice))) {
            unset($this->SalesPrice);
        } else {
            $this->SalesPrice = $salesPrice;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get SalesTableLineUpdate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSalesTableLineUpdate()
    {
        return isset($this->SalesTableLineUpdate) ? $this->SalesTableLineUpdate : null;
    }
    /**
     * Set SalesTableLineUpdate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_boolean::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_boolean::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $salesTableLineUpdate
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setSalesTableLineUpdate($salesTableLineUpdate = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_boolean::valueIsValid($salesTableLineUpdate)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $salesTableLineUpdate, implode(', ', \RaseConnector\EnumType\AxdEnum_boolean::getValidValues())), __LINE__);
        }
        if (is_null($salesTableLineUpdate) || (is_array($salesTableLineUpdate) && empty($salesTableLineUpdate))) {
            unset($this->SalesTableLineUpdate);
        } else {
            $this->SalesTableLineUpdate = $salesTableLineUpdate;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get Scrap value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getScrap()
    {
        return isset($this->Scrap) ? $this->Scrap : null;
    }
    /**
     * Set Scrap value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_NoYes::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_NoYes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $scrap
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setScrap($scrap = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_NoYes::valueIsValid($scrap)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $scrap, implode(', ', \RaseConnector\EnumType\AxdEnum_NoYes::getValidValues())), __LINE__);
        }
        if (is_null($scrap) || (is_array($scrap) && empty($scrap))) {
            unset($this->Scrap);
        } else {
            $this->Scrap = $scrap;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get StatTriangularDeal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatTriangularDeal()
    {
        return isset($this->StatTriangularDeal) ? $this->StatTriangularDeal : null;
    }
    /**
     * Set StatTriangularDeal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdExtType_IntrastatTriangularDeal::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdExtType_IntrastatTriangularDeal::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $statTriangularDeal
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setStatTriangularDeal($statTriangularDeal = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdExtType_IntrastatTriangularDeal::valueIsValid($statTriangularDeal)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $statTriangularDeal, implode(', ', \RaseConnector\EnumType\AxdExtType_IntrastatTriangularDeal::getValidValues())), __LINE__);
        }
        if (is_null($statTriangularDeal) || (is_array($statTriangularDeal) && empty($statTriangularDeal))) {
            unset($this->StatTriangularDeal);
        } else {
            $this->StatTriangularDeal = $statTriangularDeal;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * Get UnderDeliveryPct value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getUnderDeliveryPct()
    {
        return isset($this->UnderDeliveryPct) ? $this->UnderDeliveryPct : null;
    }
    /**
     * Set UnderDeliveryPct value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $underDeliveryPct
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setUnderDeliveryPct($underDeliveryPct = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($underDeliveryPct) && strlen(substr($underDeliveryPct, strpos($underDeliveryPct, '.'))) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($underDeliveryPct, strpos($underDeliveryPct, '.')))), __LINE__);
        }
        if (is_null($underDeliveryPct) || (is_array($underDeliveryPct) && empty($underDeliveryPct))) {
            unset($this->UnderDeliveryPct);
        } else {
            $this->UnderDeliveryPct = $underDeliveryPct;
        }
        return $this;
    }
    /**
     * Get InventDim value
     * @return \RaseConnector\StructType\AxdEntity_InventDim[]|null
     */
    public function getInventDim()
    {
        return $this->InventDim;
    }
    /**
     * Set InventDim value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\AxdEntity_InventDim[] $inventDim
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setInventDim(array $inventDim = array())
    {
        foreach ($inventDim as $axdEntity_SalesLineInventDimItem) {
            // validation for constraint: itemType
            if (!$axdEntity_SalesLineInventDimItem instanceof \RaseConnector\StructType\AxdEntity_InventDim) {
                throw new \InvalidArgumentException(sprintf('The InventDim property can only contain items of \RaseConnector\StructType\AxdEntity_InventDim, "%s" given', is_object($axdEntity_SalesLineInventDimItem) ? get_class($axdEntity_SalesLineInventDimItem) : gettype($axdEntity_SalesLineInventDimItem)), __LINE__);
            }
        }
        $this->InventDim = $inventDim;
        return $this;
    }
    /**
     * Add item to InventDim value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\AxdEntity_InventDim $item
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function addToInventDim(\RaseConnector\StructType\AxdEntity_InventDim $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RaseConnector\StructType\AxdEntity_InventDim) {
            throw new \InvalidArgumentException(sprintf('The InventDim property can only contain items of \RaseConnector\StructType\AxdEntity_InventDim, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InventDim[] = $item;
        return $this;
    }
    /**
     * Get DocuRefLine value
     * @return \RaseConnector\StructType\AxdEntity_DocuRefLine[]|null
     */
    public function getDocuRefLine()
    {
        return $this->DocuRefLine;
    }
    /**
     * Set DocuRefLine value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\AxdEntity_DocuRefLine[] $docuRefLine
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setDocuRefLine(array $docuRefLine = array())
    {
        foreach ($docuRefLine as $axdEntity_SalesLineDocuRefLineItem) {
            // validation for constraint: itemType
            if (!$axdEntity_SalesLineDocuRefLineItem instanceof \RaseConnector\StructType\AxdEntity_DocuRefLine) {
                throw new \InvalidArgumentException(sprintf('The DocuRefLine property can only contain items of \RaseConnector\StructType\AxdEntity_DocuRefLine, "%s" given', is_object($axdEntity_SalesLineDocuRefLineItem) ? get_class($axdEntity_SalesLineDocuRefLineItem) : gettype($axdEntity_SalesLineDocuRefLineItem)), __LINE__);
            }
        }
        $this->DocuRefLine = $docuRefLine;
        return $this;
    }
    /**
     * Add item to DocuRefLine value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\AxdEntity_DocuRefLine $item
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function addToDocuRefLine(\RaseConnector\StructType\AxdEntity_DocuRefLine $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RaseConnector\StructType\AxdEntity_DocuRefLine) {
            throw new \InvalidArgumentException(sprintf('The DocuRefLine property can only contain items of \RaseConnector\StructType\AxdEntity_DocuRefLine, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DocuRefLine[] = $item;
        return $this;
    }
    /**
     * Get MarkupTransLine value
     * @return \RaseConnector\StructType\AxdEntity_MarkupTransLine[]|null
     */
    public function getMarkupTransLine()
    {
        return $this->MarkupTransLine;
    }
    /**
     * Set MarkupTransLine value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\AxdEntity_MarkupTransLine[] $markupTransLine
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function setMarkupTransLine(array $markupTransLine = array())
    {
        foreach ($markupTransLine as $axdEntity_SalesLineMarkupTransLineItem) {
            // validation for constraint: itemType
            if (!$axdEntity_SalesLineMarkupTransLineItem instanceof \RaseConnector\StructType\AxdEntity_MarkupTransLine) {
                throw new \InvalidArgumentException(sprintf('The MarkupTransLine property can only contain items of \RaseConnector\StructType\AxdEntity_MarkupTransLine, "%s" given', is_object($axdEntity_SalesLineMarkupTransLineItem) ? get_class($axdEntity_SalesLineMarkupTransLineItem) : gettype($axdEntity_SalesLineMarkupTransLineItem)), __LINE__);
            }
        }
        $this->MarkupTransLine = $markupTransLine;
        return $this;
    }
    /**
     * Add item to MarkupTransLine value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\AxdEntity_MarkupTransLine $item
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
     */
    public function addToMarkupTransLine(\RaseConnector\StructType\AxdEntity_MarkupTransLine $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RaseConnector\StructType\AxdEntity_MarkupTransLine) {
            throw new \InvalidArgumentException(sprintf('The MarkupTransLine property can only contain items of \RaseConnector\StructType\AxdEntity_MarkupTransLine, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MarkupTransLine[] = $item;
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
     * @return \RaseConnector\StructType\AxdEntity_SalesLine
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
