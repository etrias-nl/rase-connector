<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesOrderServiceReadResponse StructType
 * @subpackage Structs
 */
class SalesOrderServiceReadResponse extends AbstractStructBase
{
    /**
     * The SalesOrder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: q6:SalesOrder
     * @var \RaseConnector\StructType\AxdSalesOrder
     */
    public $SalesOrder;
    /**
     * Constructor method for SalesOrderServiceReadResponse
     * @uses SalesOrderServiceReadResponse::setSalesOrder()
     * @param \RaseConnector\StructType\AxdSalesOrder $salesOrder
     */
    public function __construct(\RaseConnector\StructType\AxdSalesOrder $salesOrder = null)
    {
        $this
            ->setSalesOrder($salesOrder);
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
     * @return \RaseConnector\StructType\SalesOrderServiceReadResponse
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
     * @return \RaseConnector\StructType\SalesOrderServiceReadResponse
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
