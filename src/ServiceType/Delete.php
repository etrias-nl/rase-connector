<?php

namespace RaseConnector\ServiceType;

use \RaseConnector\SoapClient;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends SoapClient
{
    /**
     * Method to call the operation originally named delete
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \RaseConnector\StructType\SalesOrderServiceDeleteRequest $parameters
     * @return void|bool
     */
    public function delete(\RaseConnector\StructType\SalesOrderServiceDeleteRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->delete($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return void
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
