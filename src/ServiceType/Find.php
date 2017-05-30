<?php

namespace RaseConnector\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named findKeys
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \rase\StructType\SalesOrderServiceFindKeysRequest $parameters
     * @return \rase\StructType\SalesOrderServiceFindKeysResponse|bool
     */
    public function findKeys(\rase\StructType\SalesOrderServiceFindKeysRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->findKeys($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named find
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \rase\StructType\SalesOrderServiceFindRequest $parameters
     * @return \rase\StructType\SalesOrderServiceFindResponse|bool
     */
    public function find(\rase\StructType\SalesOrderServiceFindRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->find($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \rase\StructType\SalesOrderServiceFindKeysResponse|\rase\StructType\SalesOrderServiceFindResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
