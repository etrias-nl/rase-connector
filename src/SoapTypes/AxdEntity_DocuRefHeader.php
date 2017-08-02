<?php

namespace Etrias\RaseConnector\SoapTypes;

class AxdEntity_DocuRefHeader
{

    /**
     * @var AxdExtType_selectableDataArea
     */
    protected $ActualCompanyId = null;

    /**
     * @var AxdExtType_smmDocuAuthorId
     */
    protected $AuthorId = null;

    /**
     * @var AxdExtType_ContactPersonId
     */
    protected $ContactPersonId = null;

    /**
     * @var AxdExtType_smmEncyclopediaItemId
     */
    protected $EncyclopediaItemId = null;

    /**
     * @var AxdExtType_Description
     */
    protected $Name = null;

    /**
     * @var AxdExtType_Notes
     */
    protected $Notes = null;

    /**
     * @var AxdExtType_DirPartyId
     */
    protected $PartyId = null;

    /**
     * @var AxdExtType_recId
     */
    protected $RecId = null;

    /**
     * @var AxdExtType_recVersion
     */
    protected $RecVersion = null;

    /**
     * @var AxdExtType_selectableDataArea
     */
    protected $RefCompanyId = null;

    /**
     * @var AxdExtType_recId
     */
    protected $RefRecId = null;

    /**
     * @var AxdExtType_tableId
     */
    protected $RefTableId = null;

    /**
     * @var AxdEnum_DocuRestriction
     */
    protected $Restriction = null;

    /**
     * @var AxdEnum_bool
     */
    protected $smmTable = null;

    /**
     * @var AxdExtType_DocuTypeId
     */
    protected $TypeId = null;

    /**
     * @var UNKNOWN
     */
    protected $class = null;

    /**
     * @var AxdEnum_AxdEntityAction
     */
    protected $action = null;

    /**
     * Constructor
     *
     * @var AxdExtType_selectableDataArea $ActualCompanyId
     * @var AxdExtType_smmDocuAuthorId $AuthorId
     * @var AxdExtType_ContactPersonId $ContactPersonId
     * @var AxdExtType_smmEncyclopediaItemId $EncyclopediaItemId
     * @var AxdExtType_Description $Name
     * @var AxdExtType_Notes $Notes
     * @var AxdExtType_DirPartyId $PartyId
     * @var AxdExtType_recId $RecId
     * @var AxdExtType_recVersion $RecVersion
     * @var AxdExtType_selectableDataArea $RefCompanyId
     * @var AxdExtType_recId $RefRecId
     * @var AxdExtType_tableId $RefTableId
     * @var AxdEnum_DocuRestriction $Restriction
     * @var AxdEnum_bool $smmTable
     * @var AxdExtType_DocuTypeId $TypeId
     * @var UNKNOWN $class
     * @var AxdEnum_AxdEntityAction $action
     */
    public function __construct($ActualCompanyId, $AuthorId, $ContactPersonId, $EncyclopediaItemId, $Name, $Notes, $PartyId, $RecId, $RecVersion, $RefCompanyId, $RefRecId, $RefTableId, $Restriction, $smmTable, $TypeId, $class, $action)
    {
        $this->ActualCompanyId = $ActualCompanyId;
        $this->AuthorId = $AuthorId;
        $this->ContactPersonId = $ContactPersonId;
        $this->EncyclopediaItemId = $EncyclopediaItemId;
        $this->Name = $Name;
        $this->Notes = $Notes;
        $this->PartyId = $PartyId;
        $this->RecId = $RecId;
        $this->RecVersion = $RecVersion;
        $this->RefCompanyId = $RefCompanyId;
        $this->RefRecId = $RefRecId;
        $this->RefTableId = $RefTableId;
        $this->Restriction = $Restriction;
        $this->smmTable = $smmTable;
        $this->TypeId = $TypeId;
        $this->class = $class;
        $this->action = $action;
    }

    /**
     * @return AxdExtType_selectableDataArea
     */
    public function getActualCompanyId()
    {
        return $this->ActualCompanyId;
    }

    /**
     * @param AxdExtType_selectableDataArea $ActualCompanyId
     * @return $this
     */
    public function setActualCompanyId($ActualCompanyId)
    {
        $this->ActualCompanyId = $ActualCompanyId;
        return $this;
    }

    /**
     * @return AxdExtType_smmDocuAuthorId
     */
    public function getAuthorId()
    {
        return $this->AuthorId;
    }

    /**
     * @param AxdExtType_smmDocuAuthorId $AuthorId
     * @return $this
     */
    public function setAuthorId($AuthorId)
    {
        $this->AuthorId = $AuthorId;
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
     * @return $this
     */
    public function setContactPersonId($ContactPersonId)
    {
        $this->ContactPersonId = $ContactPersonId;
        return $this;
    }

    /**
     * @return AxdExtType_smmEncyclopediaItemId
     */
    public function getEncyclopediaItemId()
    {
        return $this->EncyclopediaItemId;
    }

    /**
     * @param AxdExtType_smmEncyclopediaItemId $EncyclopediaItemId
     * @return $this
     */
    public function setEncyclopediaItemId($EncyclopediaItemId)
    {
        $this->EncyclopediaItemId = $EncyclopediaItemId;
        return $this;
    }

    /**
     * @return AxdExtType_Description
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param AxdExtType_Description $Name
     * @return $this
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return AxdExtType_Notes
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param AxdExtType_Notes $Notes
     * @return $this
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * @return AxdExtType_DirPartyId
     */
    public function getPartyId()
    {
        return $this->PartyId;
    }

    /**
     * @param AxdExtType_DirPartyId $PartyId
     * @return $this
     */
    public function setPartyId($PartyId)
    {
        $this->PartyId = $PartyId;
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
     * @return $this
     */
    public function setRecVersion($RecVersion)
    {
        $this->RecVersion = $RecVersion;
        return $this;
    }

    /**
     * @return AxdExtType_selectableDataArea
     */
    public function getRefCompanyId()
    {
        return $this->RefCompanyId;
    }

    /**
     * @param AxdExtType_selectableDataArea $RefCompanyId
     * @return $this
     */
    public function setRefCompanyId($RefCompanyId)
    {
        $this->RefCompanyId = $RefCompanyId;
        return $this;
    }

    /**
     * @return AxdExtType_recId
     */
    public function getRefRecId()
    {
        return $this->RefRecId;
    }

    /**
     * @param AxdExtType_recId $RefRecId
     * @return $this
     */
    public function setRefRecId($RefRecId)
    {
        $this->RefRecId = $RefRecId;
        return $this;
    }

    /**
     * @return AxdExtType_tableId
     */
    public function getRefTableId()
    {
        return $this->RefTableId;
    }

    /**
     * @param AxdExtType_tableId $RefTableId
     * @return $this
     */
    public function setRefTableId($RefTableId)
    {
        $this->RefTableId = $RefTableId;
        return $this;
    }

    /**
     * @return AxdEnum_DocuRestriction
     */
    public function getRestriction()
    {
        return $this->Restriction;
    }

    /**
     * @param AxdEnum_DocuRestriction $Restriction
     * @return $this
     */
    public function setRestriction($Restriction)
    {
        $this->Restriction = $Restriction;
        return $this;
    }

    /**
     * @return AxdEnum_bool
     */
    public function getSmmTable()
    {
        return $this->smmTable;
    }

    /**
     * @param AxdEnum_bool $smmTable
     * @return $this
     */
    public function setSmmTable($smmTable)
    {
        $this->smmTable = $smmTable;
        return $this;
    }

    /**
     * @return AxdExtType_DocuTypeId
     */
    public function getTypeId()
    {
        return $this->TypeId;
    }

    /**
     * @param AxdExtType_DocuTypeId $TypeId
     * @return $this
     */
    public function setTypeId($TypeId)
    {
        $this->TypeId = $TypeId;
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
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }


}

