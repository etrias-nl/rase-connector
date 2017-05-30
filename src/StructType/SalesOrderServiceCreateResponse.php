<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesOrderServiceCreateResponse StructType
 * @subpackage Structs
 */
class SalesOrderServiceCreateResponse extends AbstractStructBase
{
    /**
     * The EntityKeyList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: q8:EntityKeyList
     * @var \rase\StructType\EntityKeyList
     */
    public $EntityKeyList;
    /**
     * Constructor method for SalesOrderServiceCreateResponse
     * @uses SalesOrderServiceCreateResponse::setEntityKeyList()
     * @param \rase\StructType\EntityKeyList $entityKeyList
     */
    public function __construct(\rase\StructType\EntityKeyList $entityKeyList = null)
    {
        $this
            ->setEntityKeyList($entityKeyList);
    }
    /**
     * Get EntityKeyList value
     * @return \rase\StructType\EntityKeyList|null
     */
    public function getEntityKeyList()
    {
        return $this->EntityKeyList;
    }
    /**
     * Set EntityKeyList value
     * @param \rase\StructType\EntityKeyList $entityKeyList
     * @return \rase\StructType\SalesOrderServiceCreateResponse
     */
    public function setEntityKeyList(\rase\StructType\EntityKeyList $entityKeyList = null)
    {
        $this->EntityKeyList = $entityKeyList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \rase\StructType\SalesOrderServiceCreateResponse
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
