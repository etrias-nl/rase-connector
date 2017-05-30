<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesOrderServiceFindRequest StructType
 * @subpackage Structs
 */
class SalesOrderServiceFindRequest extends AbstractStructBase
{
    /**
     * The QueryCriteria
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: q3:QueryCriteria
     * @var \rase\StructType\QueryCriteria
     */
    public $QueryCriteria;
    /**
     * Constructor method for SalesOrderServiceFindRequest
     * @uses SalesOrderServiceFindRequest::setQueryCriteria()
     * @param \rase\StructType\QueryCriteria $queryCriteria
     */
    public function __construct(\rase\StructType\QueryCriteria $queryCriteria = null)
    {
        $this
            ->setQueryCriteria($queryCriteria);
    }
    /**
     * Get QueryCriteria value
     * @return \rase\StructType\QueryCriteria|null
     */
    public function getQueryCriteria()
    {
        return $this->QueryCriteria;
    }
    /**
     * Set QueryCriteria value
     * @param \rase\StructType\QueryCriteria $queryCriteria
     * @return \rase\StructType\SalesOrderServiceFindRequest
     */
    public function setQueryCriteria(\rase\StructType\QueryCriteria $queryCriteria = null)
    {
        $this->QueryCriteria = $queryCriteria;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \rase\StructType\SalesOrderServiceFindRequest
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
