<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://webservice.ra-group.be:4751/salesorderservice.svc?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://webservice.ra-group.be:4751/salesorderservice.svc?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \RaseConnector\ClassMap::get(),
);
/**
 * Samples for Find ServiceType
 */
$find = new \RaseConnector\ServiceType\Find($options);
/**
 * Sample call for findKeys operation/method
 */
if ($find->findKeys(new \RaseConnector\StructType\SalesOrderServiceFindKeysRequest()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for find operation/method
 */
if ($find->find(new \RaseConnector\StructType\SalesOrderServiceFindRequest()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Samples for Read ServiceType
 */
$read = new \RaseConnector\ServiceType\Read($options);
/**
 * Sample call for read operation/method
 */
if ($read->read(new \RaseConnector\StructType\SalesOrderServiceReadRequest()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \RaseConnector\ServiceType\Create($options);
/**
 * Sample call for create operation/method
 */
if ($create->create(new \RaseConnector\StructType\SalesOrderServiceCreateRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \RaseConnector\ServiceType\Delete($options);
/**
 * Sample call for delete operation/method
 */
if ($delete->delete(new \RaseConnector\StructType\SalesOrderServiceDeleteRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \RaseConnector\ServiceType\Update($options);
/**
 * Sample call for update operation/method
 */
if ($update->update(new \RaseConnector\StructType\SalesOrderServiceUpdateRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
