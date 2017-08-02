<?php

namespace Etrias\RaseConnector\SoapTypes;

class AxdEntity_InventDim
{

    /**
     * @var AxdExtType_ConfigId
     */
    protected $configId = null;

    /**
     * @var AxdExtType_InventBatchId
     */
    protected $InventBatchId = null;

    /**
     * @var string
     */
    protected $InventColorId = null;

    /**
     * @var AxdExtType_InventDimId
     */
    protected $inventDimId = null;

    /**
     * @var AxdExtType_InventLocationId
     */
    protected $InventLocationId = null;

    /**
     * @var AxdExtType_InventSerialId
     */
    protected $inventSerialId = null;

    /**
     * @var AxdExtType_InventSiteId
     */
    protected $InventSiteId = null;

    /**
     * @var string
     */
    protected $InventSizeId = null;

    /**
     * @var AxdExtType_recId
     */
    protected $RecId = null;

    /**
     * @var AxdExtType_recVersion
     */
    protected $RecVersion = null;

    /**
     * @var AxdExtType_WMSLocationId
     */
    protected $wMSLocationId = null;

    /**
     * @var AxdExtType_WMSPalletId
     */
    protected $wMSPalletId = null;

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
     */
    public function __construct()
    {
        $this->class = 'entity';
    }

    /**
     * @return AxdExtType_ConfigId
     */
    public function getConfigId()
    {
        return $this->configId;
    }

    /**
     * @param AxdExtType_ConfigId $configId
     * @return $this
     */
    public function setConfigId($configId)
    {
        $this->configId = $configId;
        return $this;
    }

    /**
     * @return AxdExtType_InventBatchId
     */
    public function getInventBatchId()
    {
        return $this->InventBatchId;
    }

    /**
     * @param AxdExtType_InventBatchId $InventBatchId
     * @return $this
     */
    public function setInventBatchId($InventBatchId)
    {
        $this->InventBatchId = $InventBatchId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInventColorId()
    {
        return $this->InventColorId;
    }

    /**
     * @param string $InventColorId
     * @return $this
     */
    public function setInventColorId($InventColorId)
    {
        $this->InventColorId = $InventColorId;
        return $this;
    }

    /**
     * @return AxdExtType_InventDimId
     */
    public function getInventDimId()
    {
        return $this->inventDimId;
    }

    /**
     * @param AxdExtType_InventDimId $inventDimId
     * @return $this
     */
    public function setInventDimId($inventDimId)
    {
        $this->inventDimId = $inventDimId;
        return $this;
    }

    /**
     * @return AxdExtType_InventLocationId
     */
    public function getInventLocationId()
    {
        return $this->InventLocationId;
    }

    /**
     * @param AxdExtType_InventLocationId $InventLocationId
     * @return $this
     */
    public function setInventLocationId($InventLocationId)
    {
        $this->InventLocationId = $InventLocationId;
        return $this;
    }

    /**
     * @return AxdExtType_InventSerialId
     */
    public function getInventSerialId()
    {
        return $this->inventSerialId;
    }

    /**
     * @param AxdExtType_InventSerialId $inventSerialId
     * @return $this
     */
    public function setInventSerialId($inventSerialId)
    {
        $this->inventSerialId = $inventSerialId;
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
     * @return $this
     */
    public function setInventSiteId($InventSiteId)
    {
        $this->InventSiteId = $InventSiteId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInventSizeId()
    {
        return $this->InventSizeId;
    }

    /**
     * @param string $InventSizeId
     * @return $this
     */
    public function setInventSizeId($InventSizeId)
    {
        $this->InventSizeId = $InventSizeId;
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
     * @return AxdExtType_WMSLocationId
     */
    public function getWMSLocationId()
    {
        return $this->wMSLocationId;
    }

    /**
     * @param AxdExtType_WMSLocationId $wMSLocationId
     * @return $this
     */
    public function setWMSLocationId($wMSLocationId)
    {
        $this->wMSLocationId = $wMSLocationId;
        return $this;
    }

    /**
     * @return AxdExtType_WMSPalletId
     */
    public function getWMSPalletId()
    {
        return $this->wMSPalletId;
    }

    /**
     * @param AxdExtType_WMSPalletId $wMSPalletId
     * @return $this
     */
    public function setWMSPalletId($wMSPalletId)
    {
        $this->wMSPalletId = $wMSPalletId;
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

