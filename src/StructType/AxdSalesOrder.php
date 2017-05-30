<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AxdSalesOrder StructType
 * Meta informations extracted from the WSDL
 * - type: q3:AxdSalesOrder
 * @subpackage Structs
 */
class AxdSalesOrder extends AbstractStructBase
{
    /**
     * The DocPurpose
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DocPurpose;
    /**
     * The SenderId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - documentation: Bedrijf:ID voor een gegevensgebied
     * - maxLength: 4
     * - minLength: 0
     * @var string
     */
    public $SenderId;
    /**
     * The SalesTable
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RaseConnector\StructType\AxdEntity_SalesTable[]
     */
    public $SalesTable;
    /**
     * Constructor method for AxdSalesOrder
     * @uses AxdSalesOrder::setDocPurpose()
     * @uses AxdSalesOrder::setSenderId()
     * @uses AxdSalesOrder::setSalesTable()
     * @param string $docPurpose
     * @param string $senderId
     * @param \RaseConnector\StructType\AxdEntity_SalesTable[] $salesTable
     */
    public function __construct($docPurpose = null, $senderId = null, array $salesTable = array())
    {
        $this
            ->setDocPurpose($docPurpose)
            ->setSenderId($senderId)
            ->setSalesTable($salesTable);
    }
    /**
     * Get DocPurpose value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocPurpose()
    {
        return isset($this->DocPurpose) ? $this->DocPurpose : null;
    }
    /**
     * Set DocPurpose value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \RaseConnector\EnumType\AxdEnum_XMLDocPurpose::valueIsValid()
     * @uses \RaseConnector\EnumType\AxdEnum_XMLDocPurpose::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $docPurpose
     * @return \RaseConnector\StructType\AxdSalesOrder
     */
    public function setDocPurpose($docPurpose = null)
    {
        // validation for constraint: enumeration
        if (!\RaseConnector\EnumType\AxdEnum_XMLDocPurpose::valueIsValid($docPurpose)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $docPurpose, implode(', ', \RaseConnector\EnumType\AxdEnum_XMLDocPurpose::getValidValues())), __LINE__);
        }
        if (is_null($docPurpose) || (is_array($docPurpose) && empty($docPurpose))) {
            unset($this->DocPurpose);
        } else {
            $this->DocPurpose = $docPurpose;
        }
        return $this;
    }
    /**
     * Get SenderId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSenderId()
    {
        return isset($this->SenderId) ? $this->SenderId : null;
    }
    /**
     * Set SenderId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $senderId
     * @return \RaseConnector\StructType\AxdSalesOrder
     */
    public function setSenderId($senderId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($senderId) && strlen($senderId) > 4) || (is_array($senderId) && count($senderId) > 4)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4 element(s) or a scalar of 4 character(s) at most, "%d" length given', is_scalar($senderId) ? strlen($senderId) : count($senderId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($senderId) && strlen($senderId) < 0) || (is_array($senderId) && count($senderId) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($senderId) && !is_string($senderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderId)), __LINE__);
        }
        if (is_null($senderId) || (is_array($senderId) && empty($senderId))) {
            unset($this->SenderId);
        } else {
            $this->SenderId = $senderId;
        }
        return $this;
    }
    /**
     * Get SalesTable value
     * @return \RaseConnector\StructType\AxdEntity_SalesTable[]|null
     */
    public function getSalesTable()
    {
        return $this->SalesTable;
    }
    /**
     * Set SalesTable value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\AxdEntity_SalesTable[] $salesTable
     * @return \RaseConnector\StructType\AxdSalesOrder
     */
    public function setSalesTable(array $salesTable = array())
    {
        foreach ($salesTable as $axdSalesOrderSalesTableItem) {
            // validation for constraint: itemType
            if (!$axdSalesOrderSalesTableItem instanceof \RaseConnector\StructType\AxdEntity_SalesTable) {
                throw new \InvalidArgumentException(sprintf('The SalesTable property can only contain items of \RaseConnector\StructType\AxdEntity_SalesTable, "%s" given', is_object($axdSalesOrderSalesTableItem) ? get_class($axdSalesOrderSalesTableItem) : gettype($axdSalesOrderSalesTableItem)), __LINE__);
            }
        }
        $this->SalesTable = $salesTable;
        return $this;
    }
    /**
     * Add item to SalesTable value
     * @throws \InvalidArgumentException
     * @param \RaseConnector\StructType\AxdEntity_SalesTable $item
     * @return \RaseConnector\StructType\AxdSalesOrder
     */
    public function addToSalesTable(\RaseConnector\StructType\AxdEntity_SalesTable $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RaseConnector\StructType\AxdEntity_SalesTable) {
            throw new \InvalidArgumentException(sprintf('The SalesTable property can only contain items of \RaseConnector\StructType\AxdEntity_SalesTable, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SalesTable[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RaseConnector\StructType\AxdSalesOrder
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
