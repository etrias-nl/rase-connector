<?php

namespace RaseConnector\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Read ServiceType
 * @subpackage Services
 */
class Read extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named read
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \rase\StructType\SalesOrderServiceReadRequest $parameters
     * @return \rase\StructType\SalesOrderServiceReadResponse|bool
     */
    public function read(\rase\StructType\SalesOrderServiceReadRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->read($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \rase\StructType\SalesOrderServiceReadResponse
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