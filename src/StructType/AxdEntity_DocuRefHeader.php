<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AxdEntity_DocuRefHeader StructType
 * @subpackage Structs
 */
class AxdEntity_DocuRefHeader extends AbstractStructBase
{
    /**
     * The class
     * Meta informations extracted from the WSDL
     * - fixed: entity
     * - use: required
     * @var string
     */
    public $class;
    /**
     * The ActualCompanyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Bedrijf:ID voor het bedrijf dat kan worden geselecteerd
     * - maxLength: 4
     * - minLength: 0
     * @var string
     */
    public $ActualCompanyId;
    /**
     * The AuthorId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Auteur:Definieert de auteur van het document.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $AuthorId;
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
     * The EncyclopediaItemId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: ID van encyclopedie-item:Unieke ID van encyclopedie-item
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $EncyclopediaItemId;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Omschrijving:Beknopte transactieomschrijving.
     * - maxLength: 60
     * - minLength: 0
     * @var string
     */
    public $Name;
    /**
     * The Notes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Notitie:Veld Notitie.
     * - minLength: 0
     * @var string
     */
    public $Notes;
    /**
     * The PartyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Adresboek-ID:Identificatie adresboek
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $PartyId;
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
     * The RefCompanyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Bedrijf:ID voor het bedrijf dat kan worden geselecteerd
     * - maxLength: 4
     * - minLength: 0
     * @var string
     */
    public $RefCompanyId;
    /**
     * The RefRecId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Record-ID:Unieke ID voor de record in de database
     * - maxInclusive: 9223372036854775807
     * - minInclusive: -9223372036854775808
     * @var int
     */
    public $RefRecId;
    /**
     * The RefTableId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Tabel:ID voor de tabel
     * - maxInclusive: 2147483647
     * - minInclusive: -2147483648
     * @var int
     */
    public $RefTableId;
    /**
     * The Restriction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Restriction;
    /**
     * The smmTable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $smmTable;
    /**
     * The TypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Type:Identificatie van het documenttype.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $TypeId;
    /**
     * The action
     * @var string
     */
    public $action;
    /**
     * Constructor method for AxdEntity_DocuRefHeader
     * @uses AxdEntity_DocuRefHeader::setClass()
     * @uses AxdEntity_DocuRefHeader::setActualCompanyId()
     * @uses AxdEntity_DocuRefHeader::setAuthorId()
     * @uses AxdEntity_DocuRefHeader::setContactPersonId()
     * @uses AxdEntity_DocuRefHeader::setEncyclopediaItemId()
     * @uses AxdEntity_DocuRefHeader::setName()
     * @uses AxdEntity_DocuRefHeader::setNotes()
     * @uses AxdEntity_DocuRefHeader::setPartyId()
     * @uses AxdEntity_DocuRefHeader::setRecId()
     * @uses AxdEntity_DocuRefHeader::setRecVersion()
     * @uses AxdEntity_DocuRefHeader::setRefCompanyId()
     * @uses AxdEntity_DocuRefHeader::setRefRecId()
     * @uses AxdEntity_DocuRefHeader::setRefTableId()
     * @uses AxdEntity_DocuRefHeader::setRestriction()
     * @uses AxdEntity_DocuRefHeader::setSmmTable()
     * @uses AxdEntity_DocuRefHeader::setTypeId()
     * @uses AxdEntity_DocuRefHeader::setAction()
     * @param string $class
     * @param string $actualCompanyId
     * @param string $authorId
     * @param string $contactPersonId
     * @param string $encyclopediaItemId
     * @param string $name
     * @param string $notes
     * @param string $partyId
     * @param int $recId
     * @param int $recVersion
     * @param string $refCompanyId
     * @param int $refRecId
     * @param int $refTableId
     * @param string $restriction
     * @param string $smmTable
     * @param string $typeId
     * @param string $action
     */
    public function __construct($class = null, $actualCompanyId = null, $authorId = null, $contactPersonId = null, $encyclopediaItemId = null, $name = null, $notes = null, $partyId = null, $recId = null, $recVersion = null, $refCompanyId = null, $refRecId = null, $refTableId = null, $restriction = null, $smmTable = null, $typeId = null, $action = null)
    {
        $this
            ->setClass($class)
            ->setActualCompanyId($actualCompanyId)
            ->setAuthorId($authorId)
            ->setContactPersonId($contactPersonId)
            ->setEncyclopediaItemId($encyclopediaItemId)
            ->setName($name)
            ->setNotes($notes)
            ->setPartyId($partyId)
            ->setRecId($recId)
            ->setRecVersion($recVersion)
            ->setRefCompanyId($refCompanyId)
            ->setRefRecId($refRecId)
            ->setRefTableId($refTableId)
            ->setRestriction($restriction)
            ->setSmmTable($smmTable)
            ->setTypeId($typeId)
            ->setAction($action);
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
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
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
     * Get ActualCompanyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getActualCompanyId()
    {
        return isset($this->ActualCompanyId) ? $this->ActualCompanyId : null;
    }
    /**
     * Set ActualCompanyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $actualCompanyId
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
     */
    public function setActualCompanyId($actualCompanyId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($actualCompanyId) && strlen($actualCompanyId) > 4) || (is_array($actualCompanyId) && count($actualCompanyId) > 4)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4 element(s) or a scalar of 4 character(s) at most, "%d" length given', is_scalar($actualCompanyId) ? strlen($actualCompanyId) : count($actualCompanyId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($actualCompanyId) && strlen($actualCompanyId) < 0) || (is_array($actualCompanyId) && count($actualCompanyId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($actualCompanyId) && !is_string($actualCompanyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actualCompanyId)), __LINE__);
        }
        if (is_null($actualCompanyId) || (is_array($actualCompanyId) && empty($actualCompanyId))) {
            unset($this->ActualCompanyId);
        } else {
            $this->ActualCompanyId = $actualCompanyId;
        }
        return $this;
    }
    /**
     * Get AuthorId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAuthorId()
    {
        return isset($this->AuthorId) ? $this->AuthorId : null;
    }
    /**
     * Set AuthorId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $authorId
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
     */
    public function setAuthorId($authorId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($authorId) && strlen($authorId) > 20) || (is_array($authorId) && count($authorId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($authorId) ? strlen($authorId) : count($authorId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($authorId) && strlen($authorId) < 0) || (is_array($authorId) && count($authorId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($authorId) && !is_string($authorId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorId)), __LINE__);
        }
        if (is_null($authorId) || (is_array($authorId) && empty($authorId))) {
            unset($this->AuthorId);
        } else {
            $this->AuthorId = $authorId;
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
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
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
     * Get EncyclopediaItemId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEncyclopediaItemId()
    {
        return isset($this->EncyclopediaItemId) ? $this->EncyclopediaItemId : null;
    }
    /**
     * Set EncyclopediaItemId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $encyclopediaItemId
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
     */
    public function setEncyclopediaItemId($encyclopediaItemId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($encyclopediaItemId) && strlen($encyclopediaItemId) > 10) || (is_array($encyclopediaItemId) && count($encyclopediaItemId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($encyclopediaItemId) ? strlen($encyclopediaItemId) : count($encyclopediaItemId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($encyclopediaItemId) && strlen($encyclopediaItemId) < 0) || (is_array($encyclopediaItemId) && count($encyclopediaItemId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($encyclopediaItemId) && !is_string($encyclopediaItemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($encyclopediaItemId)), __LINE__);
        }
        if (is_null($encyclopediaItemId) || (is_array($encyclopediaItemId) && empty($encyclopediaItemId))) {
            unset($this->EncyclopediaItemId);
        } else {
            $this->EncyclopediaItemId = $encyclopediaItemId;
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
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
     */
    public function setName($name = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($name) && strlen($name) > 60) || (is_array($name) && count($name) > 60)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 60 element(s) or a scalar of 60 character(s) at most, "%d" length given', is_scalar($name) ? strlen($name) : count($name)), __LINE__);
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
     * Get Notes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNotes()
    {
        return isset($this->Notes) ? $this->Notes : null;
    }
    /**
     * Set Notes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $notes
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($notes) && strlen($notes) < 0) || (is_array($notes) && count($notes) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notes)), __LINE__);
        }
        if (is_null($notes) || (is_array($notes) && empty($notes))) {
            unset($this->Notes);
        } else {
            $this->Notes = $notes;
        }
        return $this;
    }
    /**
     * Get PartyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPartyId()
    {
        return isset($this->PartyId) ? $this->PartyId : null;
    }
    /**
     * Set PartyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $partyId
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
     */
    public function setPartyId($partyId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($partyId) && strlen($partyId) > 20) || (is_array($partyId) && count($partyId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($partyId) ? strlen($partyId) : count($partyId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($partyId) && strlen($partyId) < 0) || (is_array($partyId) && count($partyId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($partyId) && !is_string($partyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partyId)), __LINE__);
        }
        if (is_null($partyId) || (is_array($partyId) && empty($partyId))) {
            unset($this->PartyId);
        } else {
            $this->PartyId = $partyId;
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
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
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
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
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
     * Get RefCompanyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRefCompanyId()
    {
        return isset($this->RefCompanyId) ? $this->RefCompanyId : null;
    }
    /**
     * Set RefCompanyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $refCompanyId
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
     */
    public function setRefCompanyId($refCompanyId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($refCompanyId) && strlen($refCompanyId) > 4) || (is_array($refCompanyId) && count($refCompanyId) > 4)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4 element(s) or a scalar of 4 character(s) at most, "%d" length given', is_scalar($refCompanyId) ? strlen($refCompanyId) : count($refCompanyId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($refCompanyId) && strlen($refCompanyId) < 0) || (is_array($refCompanyId) && count($refCompanyId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($refCompanyId) && !is_string($refCompanyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refCompanyId)), __LINE__);
        }
        if (is_null($refCompanyId) || (is_array($refCompanyId) && empty($refCompanyId))) {
            unset($this->RefCompanyId);
        } else {
            $this->RefCompanyId = $refCompanyId;
        }
        return $this;
    }
    /**
     * Get RefRecId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getRefRecId()
    {
        return isset($this->RefRecId) ? $this->RefRecId : null;
    }
    /**
     * Set RefRecId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $refRecId
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
     */
    public function setRefRecId($refRecId = null)
    {
        // validation for constraint: int
        if (!is_null($refRecId) && !is_numeric($refRecId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($refRecId)), __LINE__);
        }
        if (is_null($refRecId) || (is_array($refRecId) && empty($refRecId))) {
            unset($this->RefRecId);
        } else {
            $this->RefRecId = $refRecId;
        }
        return $this;
    }
    /**
     * Get RefTableId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getRefTableId()
    {
        return isset($this->RefTableId) ? $this->RefTableId : null;
    }
    /**
     * Set RefTableId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $refTableId
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
     */
    public function setRefTableId($refTableId = null)
    {
        // validation for constraint: int
        if (!is_null($refTableId) && !is_numeric($refTableId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($refTableId)), __LINE__);
        }
        if (is_null($refTableId) || (is_array($refTableId) && empty($refTableId))) {
            unset($this->RefTableId);
        } else {
            $this->RefTableId = $refTableId;
        }
        return $this;
    }
    /**
     * Get Restriction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRestriction()
    {
        return isset($this->Restriction) ? $this->Restriction : null;
    }
    /**
     * Set Restriction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_DocuRestriction::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_DocuRestriction::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $restriction
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
     */
    public function setRestriction($restriction = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_DocuRestriction::valueIsValid($restriction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $restriction, implode(', ', \RaseConnector\EnumType\AxdEnum_DocuRestriction::getValidValues())), __LINE__);
        }
        if (is_null($restriction) || (is_array($restriction) && empty($restriction))) {
            unset($this->Restriction);
        } else {
            $this->Restriction = $restriction;
        }
        return $this;
    }
    /**
     * Get smmTable value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSmmTable()
    {
        return isset($this->smmTable) ? $this->smmTable : null;
    }
    /**
     * Set smmTable value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_boolean::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_boolean::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $smmTable
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
     */
    public function setSmmTable($smmTable = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_boolean::valueIsValid($smmTable)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $smmTable, implode(', ', \RaseConnector\EnumType\AxdEnum_boolean::getValidValues())), __LINE__);
        }
        if (is_null($smmTable) || (is_array($smmTable) && empty($smmTable))) {
            unset($this->smmTable);
        } else {
            $this->smmTable = $smmTable;
        }
        return $this;
    }
    /**
     * Get TypeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeId()
    {
        return isset($this->TypeId) ? $this->TypeId : null;
    }
    /**
     * Set TypeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeId
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
     */
    public function setTypeId($typeId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($typeId) && strlen($typeId) > 10) || (is_array($typeId) && count($typeId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($typeId) ? strlen($typeId) : count($typeId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($typeId) && strlen($typeId) < 0) || (is_array($typeId) && count($typeId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeId)), __LINE__);
        }
        if (is_null($typeId) || (is_array($typeId) && empty($typeId))) {
            unset($this->TypeId);
        } else {
            $this->TypeId = $typeId;
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
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
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
     * @return \RaseConnector\StructType\AxdEntity_DocuRefHeader
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
