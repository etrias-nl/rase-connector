#RASE order connector
You can use this package to easily make a soap connection to RASE order service in PHP.
 
 Ex. 
 
```php
$salesTable = new \rase\StructType\AxdEntity_SalesTable();
$salesTable->setSalesPoolId('WEBORD')
     ->setCustAccount('account')
     ->setDeliveryCity('city')
     ->setDeliveryCountryRegionId('NL')
     ->setDeliveryName('delivery_name')
     ->setDeliveryStreet('street')
     ->setDeliveryZipCode('zip_code')
     ->setDlvMode('DHL_B2B')
     ->setEmail('reply@company.com'))
     ->setPurchOrderFormNum('rase' . date('YmdHis'))
     ->setCustomerRef('rase' . date('YmdHis'))
     ->setReceiptDateRequested(new DateTime('today'))
     ->setDeliveryDate(new DateTime('tomorrow'))
     ->setSalesOriginId('sales_origin_id')
     ->setSalesTaker('ADM')
     ->setSalesType(AxdEnum_SalesType::VALUE_SALES)
     ->setIgnoreMarkup('No')
     ->setInclTax('No')
     ->setClass('entity');
     
$salesLine = (new AxdEntity_SalesLine($skuNumber, (int)$quantity, 'PAIR'))->setClass('entity');
$inventDim = (new AxdEntity_InventDim())->setInventColorId($item_color)->setInventSizeId($item_size)->setClass('entity');
$salesLine->setInventDim([$inventDim]);

$salesTable->addToSalesLine($salesLine);

$salesOrder = new AxdSalesOrder();
$salesOrder->addToSalesTable($salesTable);
$createRequest = new SalesOrderServiceCreateRequest($salesOrder);

$soapOptions = [
    AbstractSoapClientBase::WSDL_URL => https://endpoint.com,
    AbstractSoapClientBase::WSDL_CLASSMAP => RaseConnector\ClassMap::get(),
    AbstractSoapClientBase::DEFAULT_SOAP_CLIENT_CLASS => jamesiarmes\PhpNtlm\SoapClient::class,
    'wsdl_user' => 'username',
    'wsdl_password' => 'password'
];

$soapClient = new RaseConnector\ServiceType\Create($options, true);
$soapClient->create($createRequest);
 ```

#Regenerate package
```bash
php wsdltophp.phar generate:package \
    --urlorpath="http://webservice.ra-group.be:4751/salesorderservice.svc?wsdl" \
    --destination ./src \
    --composer-name="etrias/rase-connector" \
    --namespace RaseConnector --force
```
