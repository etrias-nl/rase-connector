<?php

namespace RaseConnector\ServiceType;

use \RaseConnector\SoapClient;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends SoapClient
{
    /**
     * Method to call the operation originally named create
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \RaseConnector\StructType\SalesOrderServiceCreateRequest $parameters
     * @return \RaseConnector\StructType\SalesOrderServiceCreateResponse|bool
     */
    public function create(\RaseConnector\StructType\SalesOrderServiceCreateRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->create($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \RaseConnector\StructType\SalesOrderServiceCreateResponse
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
