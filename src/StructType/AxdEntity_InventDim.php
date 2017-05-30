<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AxdEntity_InventDim StructType
 * @subpackage Structs
 */
class AxdEntity_InventDim extends AbstractStructBase
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
     * The configId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Configuratie:Identificatie van artikelconfiguratie.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $configId;
    /**
     * The InventBatchId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Batchnummer:Batchdimensie.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $InventBatchId;
    /**
     * The InventColorId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Kleur:Identificatie van artikelkleur.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $InventColorId;
    /**
     * The inventDimId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Dimensienummer:Identificatie van dimensies voor het artikel.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $inventDimId;
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
     * The inventSerialId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Serienummer:Serienummerdimensie.
     * - maxLength: 20
     * - minLength: 0
     * @var string
     */
    public $inventSerialId;
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
     * The InventSizeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Grootte:Identificatie van artikelgrootte.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $InventSizeId;
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
     * The wMSLocationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Locatie:Magazijnlocatie.
     * - maxLength: 10
     * - minLength: 0
     * @var string
     */
    public $wMSLocationId;
    /**
     * The wMSPalletId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Pallet-ID:Unieke pallet-ID (Serial Shipping Container Code)
     * - maxLength: 18
     * - minLength: 0
     * @var string
     */
    public $wMSPalletId;
    /**
     * The action
     * @var string
     */
    public $action;
    /**
     * Constructor method for AxdEntity_InventDim
     * @uses AxdEntity_InventDim::setClass()
     * @uses AxdEntity_InventDim::setConfigId()
     * @uses AxdEntity_InventDim::setInventBatchId()
     * @uses AxdEntity_InventDim::setInventColorId()
     * @uses AxdEntity_InventDim::setInventDimId()
     * @uses AxdEntity_InventDim::setInventLocationId()
     * @uses AxdEntity_InventDim::setInventSerialId()
     * @uses AxdEntity_InventDim::setInventSiteId()
     * @uses AxdEntity_InventDim::setInventSizeId()
     * @uses AxdEntity_InventDim::setRecId()
     * @uses AxdEntity_InventDim::setRecVersion()
     * @uses AxdEntity_InventDim::setWMSLocationId()
     * @uses AxdEntity_InventDim::setWMSPalletId()
     * @uses AxdEntity_InventDim::setAction()
     * @param string $class
     * @param string $configId
     * @param string $inventBatchId
     * @param string $inventColorId
     * @param string $inventDimId
     * @param string $inventLocationId
     * @param string $inventSerialId
     * @param string $inventSiteId
     * @param string $inventSizeId
     * @param int $recId
     * @param int $recVersion
     * @param string $wMSLocationId
     * @param string $wMSPalletId
     * @param string $action
     */
    public function __construct($class = null, $configId = null, $inventBatchId = null, $inventColorId = null, $inventDimId = null, $inventLocationId = null, $inventSerialId = null, $inventSiteId = null, $inventSizeId = null, $recId = null, $recVersion = null, $wMSLocationId = null, $wMSPalletId = null, $action = null)
    {
        $this
            ->setClass($class)
            ->setConfigId($configId)
            ->setInventBatchId($inventBatchId)
            ->setInventColorId($inventColorId)
            ->setInventDimId($inventDimId)
            ->setInventLocationId($inventLocationId)
            ->setInventSerialId($inventSerialId)
            ->setInventSiteId($inventSiteId)
            ->setInventSizeId($inventSizeId)
            ->setRecId($recId)
            ->setRecVersion($recVersion)
            ->setWMSLocationId($wMSLocationId)
            ->setWMSPalletId($wMSPalletId)
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
     * @return \rase\StructType\AxdEntity_InventDim
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
     * Get configId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConfigId()
    {
        return isset($this->configId) ? $this->configId : null;
    }
    /**
     * Set configId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $configId
     * @return \rase\StructType\AxdEntity_InventDim
     */
    public function setConfigId($configId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($configId) && strlen($configId) > 10) || (is_array($configId) && count($configId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($configId) ? strlen($configId) : count($configId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($configId) && strlen($configId) < 0) || (is_array($configId) && count($configId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($configId) && !is_string($configId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($configId)), __LINE__);
        }
        if (is_null($configId) || (is_array($configId) && empty($configId))) {
            unset($this->configId);
        } else {
            $this->configId = $configId;
        }
        return $this;
    }
    /**
     * Get InventBatchId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventBatchId()
    {
        return isset($this->InventBatchId) ? $this->InventBatchId : null;
    }
    /**
     * Set InventBatchId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventBatchId
     * @return \rase\StructType\AxdEntity_InventDim
     */
    public function setInventBatchId($inventBatchId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($inventBatchId) && strlen($inventBatchId) > 20) || (is_array($inventBatchId) && count($inventBatchId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($inventBatchId) ? strlen($inventBatchId) : count($inventBatchId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($inventBatchId) && strlen($inventBatchId) < 0) || (is_array($inventBatchId) && count($inventBatchId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($inventBatchId) && !is_string($inventBatchId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventBatchId)), __LINE__);
        }
        if (is_null($inventBatchId) || (is_array($inventBatchId) && empty($inventBatchId))) {
            unset($this->InventBatchId);
        } else {
            $this->InventBatchId = $inventBatchId;
        }
        return $this;
    }
    /**
     * Get InventColorId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventColorId()
    {
        return isset($this->InventColorId) ? $this->InventColorId : null;
    }
    /**
     * Set InventColorId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventColorId
     * @return \rase\StructType\AxdEntity_InventDim
     */
    public function setInventColorId($inventColorId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($inventColorId) && strlen($inventColorId) > 10) || (is_array($inventColorId) && count($inventColorId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($inventColorId) ? strlen($inventColorId) : count($inventColorId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($inventColorId) && strlen($inventColorId) < 0) || (is_array($inventColorId) && count($inventColorId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($inventColorId) && !is_string($inventColorId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventColorId)), __LINE__);
        }
        if (is_null($inventColorId) || (is_array($inventColorId) && empty($inventColorId))) {
            unset($this->InventColorId);
        } else {
            $this->InventColorId = $inventColorId;
        }
        return $this;
    }
    /**
     * Get inventDimId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventDimId()
    {
        return isset($this->inventDimId) ? $this->inventDimId : null;
    }
    /**
     * Set inventDimId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventDimId
     * @return \rase\StructType\AxdEntity_InventDim
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
            unset($this->inventDimId);
        } else {
            $this->inventDimId = $inventDimId;
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
     * @return \rase\StructType\AxdEntity_InventDim
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
     * Get inventSerialId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventSerialId()
    {
        return isset($this->inventSerialId) ? $this->inventSerialId : null;
    }
    /**
     * Set inventSerialId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventSerialId
     * @return \rase\StructType\AxdEntity_InventDim
     */
    public function setInventSerialId($inventSerialId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($inventSerialId) && strlen($inventSerialId) > 20) || (is_array($inventSerialId) && count($inventSerialId) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($inventSerialId) ? strlen($inventSerialId) : count($inventSerialId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($inventSerialId) && strlen($inventSerialId) < 0) || (is_array($inventSerialId) && count($inventSerialId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($inventSerialId) && !is_string($inventSerialId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventSerialId)), __LINE__);
        }
        if (is_null($inventSerialId) || (is_array($inventSerialId) && empty($inventSerialId))) {
            unset($this->inventSerialId);
        } else {
            $this->inventSerialId = $inventSerialId;
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
     * @return \rase\StructType\AxdEntity_InventDim
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
     * Get InventSizeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventSizeId()
    {
        return isset($this->InventSizeId) ? $this->InventSizeId : null;
    }
    /**
     * Set InventSizeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventSizeId
     * @return \rase\StructType\AxdEntity_InventDim
     */
    public function setInventSizeId($inventSizeId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($inventSizeId) && strlen($inventSizeId) > 10) || (is_array($inventSizeId) && count($inventSizeId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($inventSizeId) ? strlen($inventSizeId) : count($inventSizeId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($inventSizeId) && strlen($inventSizeId) < 0) || (is_array($inventSizeId) && count($inventSizeId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($inventSizeId) && !is_string($inventSizeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inventSizeId)), __LINE__);
        }
        if (is_null($inventSizeId) || (is_array($inventSizeId) && empty($inventSizeId))) {
            unset($this->InventSizeId);
        } else {
            $this->InventSizeId = $inventSizeId;
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
     * @return \rase\StructType\AxdEntity_InventDim
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
     * @return \rase\StructType\AxdEntity_InventDim
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
     * Get wMSLocationId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWMSLocationId()
    {
        return isset($this->wMSLocationId) ? $this->wMSLocationId : null;
    }
    /**
     * Set wMSLocationId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $wMSLocationId
     * @return \rase\StructType\AxdEntity_InventDim
     */
    public function setWMSLocationId($wMSLocationId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($wMSLocationId) && strlen($wMSLocationId) > 10) || (is_array($wMSLocationId) && count($wMSLocationId) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($wMSLocationId) ? strlen($wMSLocationId) : count($wMSLocationId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($wMSLocationId) && strlen($wMSLocationId) < 0) || (is_array($wMSLocationId) && count($wMSLocationId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($wMSLocationId) && !is_string($wMSLocationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wMSLocationId)), __LINE__);
        }
        if (is_null($wMSLocationId) || (is_array($wMSLocationId) && empty($wMSLocationId))) {
            unset($this->wMSLocationId);
        } else {
            $this->wMSLocationId = $wMSLocationId;
        }
        return $this;
    }
    /**
     * Get wMSPalletId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWMSPalletId()
    {
        return isset($this->wMSPalletId) ? $this->wMSPalletId : null;
    }
    /**
     * Set wMSPalletId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $wMSPalletId
     * @return \rase\StructType\AxdEntity_InventDim
     */
    public function setWMSPalletId($wMSPalletId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($wMSPalletId) && strlen($wMSPalletId) > 18) || (is_array($wMSPalletId) && count($wMSPalletId) > 18)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 18 element(s) or a scalar of 18 character(s) at most, "%d" length given', is_scalar($wMSPalletId) ? strlen($wMSPalletId) : count($wMSPalletId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($wMSPalletId) && strlen($wMSPalletId) < 0) || (is_array($wMSPalletId) && count($wMSPalletId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($wMSPalletId) && !is_string($wMSPalletId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wMSPalletId)), __LINE__);
        }
        if (is_null($wMSPalletId) || (is_array($wMSPalletId) && empty($wMSPalletId))) {
            unset($this->wMSPalletId);
        } else {
            $this->wMSPalletId = $wMSPalletId;
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
     * @uses \rase\EnumType\AxdEnum_AxdEntityAction::valueIsValid()
     * @uses \rase\EnumType\AxdEnum_AxdEntityAction::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \rase\StructType\AxdEntity_InventDim
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\rase\EnumType\AxdEnum_AxdEntityAction::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \rase\EnumType\AxdEnum_AxdEntityAction::getValidValues())), __LINE__);
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
     * @return \rase\StructType\AxdEntity_InventDim
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
