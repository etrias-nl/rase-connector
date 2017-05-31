<?php

namespace RaseConnector;

/**
 * Client for Ntlm support
 * @package RaseConnector
 */
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * Class SoapClient
 * @package RaseConnector
 */
class SoapClient extends AbstractSoapClientBase
{
    const DEFAULT_SOAP_CLIENT_CLASS = '\jamesiarmes\PhpNtlm\SoapClient';
}
