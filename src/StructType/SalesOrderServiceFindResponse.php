<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesOrderServiceFindResponse StructType
 * @subpackage Structs
 */
class SalesOrderServiceFindResponse extends AbstractStructBase
{
    /**
     * The SalesOrder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: q4:SalesOrder
     * @var \rase\StructType\AxdSalesOrder
     */
    public $SalesOrder;
    /**
     * Constructor method for SalesOrderServiceFindResponse
     * @uses SalesOrderServiceFindResponse::setSalesOrder()
     * @param \rase\StructType\AxdSalesOrder $salesOrder
     */
    public function __construct(\rase\StructType\AxdSalesOrder $salesOrder = null)
    {
        $this
            ->setSalesOrder($salesOrder);
    }
    /**
     * Get SalesOrder value
     * @return \rase\StructType\AxdSalesOrder|null
     */
    public function getSalesOrder()
    {
        return $this->SalesOrder;
    }
    /**
     * Set SalesOrder value
     * @param \rase\StructType\AxdSalesOrder $salesOrder
     * @return \rase\StructType\SalesOrderServiceFindResponse
     */
    public function setSalesOrder(\rase\StructType\AxdSalesOrder $salesOrder = null)
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
     * @return \rase\StructType\SalesOrderServiceFindResponse
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
