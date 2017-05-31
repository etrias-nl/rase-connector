<?php

namespace RaseConnector\ServiceType;

use \jamesiarmes\PhpNtlm\SoapClient;

/**
 * This class stands for Read ServiceType
 * @subpackage Services
 */
class Read extends SoapClient
{
    /**
     * Method to call the operation originally named read
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \RaseConnector\StructType\SalesOrderServiceReadRequest $parameters
     * @return \RaseConnector\StructType\SalesOrderServiceReadResponse|bool
     */
    public function read(\RaseConnector\StructType\SalesOrderServiceReadRequest $parameters)
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
     * @see SoapClient::getResult()
     * @return \RaseConnector\StructType\SalesOrderServiceReadResponse
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
