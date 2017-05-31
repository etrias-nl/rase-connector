<?php

namespace RaseConnector\ServiceType;

use \jamesiarmes\PhpNtlm\SoapClient;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends SoapClient
{
    /**
     * Method to call the operation originally named update
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \RaseConnector\StructType\SalesOrderServiceUpdateRequest $parameters
     * @return void|bool
     */
    public function update(\RaseConnector\StructType\SalesOrderServiceUpdateRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->update($parameters));
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
