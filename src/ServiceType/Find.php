<?php

namespace RaseConnector\ServiceType;

use \jamesiarmes\PhpNtlm\SoapClient;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends SoapClient
{
    /**
     * Method to call the operation originally named findKeys
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \RaseConnector\StructType\SalesOrderServiceFindKeysRequest $parameters
     * @return \RaseConnector\StructType\SalesOrderServiceFindKeysResponse|bool
     */
    public function findKeys(\RaseConnector\StructType\SalesOrderServiceFindKeysRequest $parameters)
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
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \RaseConnector\StructType\SalesOrderServiceFindRequest $parameters
     * @return \RaseConnector\StructType\SalesOrderServiceFindResponse|bool
     */
    public function find(\RaseConnector\StructType\SalesOrderServiceFindRequest $parameters)
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
     * @see SoapClient::getResult()
     * @return \RaseConnector\StructType\SalesOrderServiceFindKeysResponse|\RaseConnector\StructType\SalesOrderServiceFindResponse
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
