<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Tests\Etrias\PaazlConnector\Functional\Services;

use DateTime;
use Etrias\RaseConnector\Client\RaseClientInterface;
use Etrias\RaseConnector\GuzzleSoapClient;
use Etrias\RaseConnector\Middleware\RemoveNillNodesMiddleware;
use Etrias\RaseConnector\Services\RaseService;
use Etrias\RaseConnector\SoapTypes\AxdEntity_InventDim;
use Etrias\RaseConnector\SoapTypes\AxdEntity_SalesLine;
use Etrias\RaseConnector\SoapTypes\AxdEntity_SalesTable;
use Etrias\RaseConnector\SoapTypes\AxdEnum_SalesType;
use Etrias\RaseConnector\SoapTypes\AxdEnum_SalesUnit;
use Etrias\RaseConnector\SoapTypes\AxdExtType_IgnoreMarkup;
use Etrias\RaseConnector\SoapTypes\AxdExtType_InclTax;
use Etrias\RaseConnector\SoapTypes\AxdSalesOrder;
use Etrias\RaseConnector\SoapTypes\SalesOrderServiceCreateResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Middleware\NtlmMiddleware;
use Phpro\SoapClient\Middleware\RemoveEmptyNodesMiddleware;
use Phpro\SoapClient\Middleware\Wsdl\DisableExtensionsMiddleware;
use Phpro\SoapClient\Soap\Handler\GuzzleHandle;
use Phpro\SoapClient\Soap\SoapClient;
use Phpro\SoapClient\Wsdl\Provider\GuzzleWsdlProvider;
use PHPUnit\Framework\TestCase;

class RaseServiceTest extends TestCase
{
    /** @var RaseClientInterface */
    protected $soapClient;

    /** @var  RaseService|SoapClient */
    protected $raseService;

    public function setUp()
    {
        $guzzleClient = new Client();

        $wsdlProvider = GuzzleWsdlProvider::createForClient($guzzleClient);
        $wsdlProvider->addMiddleware(new DisableExtensionsMiddleware());

        $clientFactory = new ClientFactory(GuzzleSoapClient::class);
        $soapOptions = [
            'cache_wsdl' => WSDL_CACHE_DISK,
            'trace' => true,
        ];

        $clientBuilder = new ClientBuilder($clientFactory, RaseClientInterface::WSDL_STAGING, $soapOptions);
        $clientBuilder->withClassMaps(require __DIR__.'/../../../src/ClassMapCollection.php');
        $clientBuilder->withHandler(GuzzleHandle::createForClient($guzzleClient));
        $clientBuilder->withWsdlProvider($wsdlProvider);
        $clientBuilder->addMiddleware(new NtlmMiddleware('racompany\etrias-proxy', 'Xyx502$7!xc501!'));
        $clientBuilder->addMiddleware(new RemoveEmptyNodesMiddleware());

        $this->soapClient = $clientBuilder->build();

        $this->raseService = new RaseService($this->soapClient);
    }

    public function testCreate()
    {
        $salesTable = new AxdEntity_SalesTable();
        $salesTable
            ->setSalesPoolId(getenv('CUSTACCOUNT'))
            ->setCustAccount('005450')
            ->setCustomerRef('rase' . date('YmdHis'))
            ->setDeliveryCity('city')
            ->setDeliveryCountryRegionId('NL')
            ->setDeliveryName('delivery_name')
            ->setDeliveryStreet('street')
            ->setDeliveryZipCode('zip_code')
            ->setDlvMode('DHL_B2B')
            ->setEmail('noreply@email.com')
            ->setPurchOrderFormNum('rase' . date('YmdHis'))
            ->setReceiptDateRequested(new DateTime('today'))
            ->setDeliveryDate(new DateTime('tomorrow'))
            ->setSalesOriginId(getenv('SALESORIGINID'))
            ->setSalesTaker('ADM')
            ->setSalesType(AxdEnum_SalesType::SALES)
            ->setIgnoreMarkup(AxdExtType_IgnoreMarkup::NO)
            ->setInclTax(AxdExtType_InclTax::NO)
        ;

        $salesLine = new AxdEntity_SalesLine('E89', 1, 'PAIR');
        $inventDim = (new AxdEntity_InventDim())->setInventColorId('463')->setInventSizeId('42');
        $salesLine->setInventDim([$inventDim]);

        $salesTable->addSalesLine($salesLine);

        $salesOrder = new AxdSalesOrder();
        $salesOrder->setSalesTable($salesTable);

        $response = $this->raseService->create($salesOrder);

        $this->assertInstanceOf(SalesOrderServiceCreateResponse::class, $response);
    }

    public function testFind()
    {
        $this->expectException(\BadMethodCallException::class);
        $this->raseService->find();
    }

    public function testFindKeys()
    {
        $this->expectException(\BadMethodCallException::class);
        $this->raseService->findKeys();
    }

    public function testRead()
    {
        $this->expectException(\BadMethodCallException::class);
        $this->raseService->read();
    }

    public function testDelete()
    {
        $this->expectException(\BadMethodCallException::class);
        $this->raseService->delete();
    }

    public function testUpdate()
    {
        $this->expectException(\BadMethodCallException::class);
        $this->raseService->update();
    }
}
