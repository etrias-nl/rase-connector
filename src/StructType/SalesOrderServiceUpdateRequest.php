<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesOrderServiceUpdateRequest StructType
 * @subpackage Structs
 */
class SalesOrderServiceUpdateRequest extends AbstractStructBase
{
    /**
     * The EntityKeyList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: q10:EntityKeyList
     * @var \RaseConnector\StructType\EntityKeyList
     */
    public $EntityKeyList;
    /**
     * The SalesOrder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: q11:SalesOrder
     * @var \RaseConnector\StructType\AxdSalesOrder
     */
    public $SalesOrder;
    /**
     * Constructor method for SalesOrderServiceUpdateRequest
     * @uses SalesOrderServiceUpdateRequest::setEntityKeyList()
     * @uses SalesOrderServiceUpdateRequest::setSalesOrder()
     * @param \RaseConnector\StructType\EntityKeyList $entityKeyList
     * @param \RaseConnector\StructType\AxdSalesOrder $salesOrder
     */
    public function __construct(\RaseConnector\StructType\EntityKeyList $entityKeyList = null, \RaseConnector\StructType\AxdSalesOrder $salesOrder = null)
    {
        $this
            ->setEntityKeyList($entityKeyList)
            ->setSalesOrder($salesOrder);
    }
    /**
     * Get EntityKeyList value
     * @return \RaseConnector\StructType\EntityKeyList|null
     */
    public function getEntityKeyList()
    {
        return $this->EntityKeyList;
    }
    /**
     * Set EntityKeyList value
     * @param \RaseConnector\StructType\EntityKeyList $entityKeyList
     * @return \RaseConnector\StructType\SalesOrderServiceUpdateRequest
     */
    public function setEntityKeyList(\RaseConnector\StructType\EntityKeyList $entityKeyList = null)
    {
        $this->EntityKeyList = $entityKeyList;
        return $this;
    }
    /**
     * Get SalesOrder value
     * @return \RaseConnector\StructType\AxdSalesOrder|null
     */
    public function getSalesOrder()
    {
        return $this->SalesOrder;
    }
    /**
     * Set SalesOrder value
     * @param \RaseConnector\StructType\AxdSalesOrder $salesOrder
     * @return \RaseConnector\StructType\SalesOrderServiceUpdateRequest
     */
    public function setSalesOrder(\RaseConnector\StructType\AxdSalesOrder $salesOrder = null)
    {
        $this->SalesOrder = $salesOrder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RaseConnector\StructType\SalesOrderServiceUpdateRequest
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
