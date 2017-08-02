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

namespace Etrias\RaseConnector\Services;

use Etrias\RaseConnector\Client\RaseClientInterface;
use Etrias\RaseConnector\SoapTypes\AxdSalesOrder;
use Etrias\RaseConnector\SoapTypes\SalesOrderServiceCreateRequest;

class RaseService
{
    /** @var RaseClientInterface */
    protected $client;

    /**
     * DocumentService constructor.
     *
     * @param RaseClientInterface $client
     */
    public function __construct(RaseClientInterface $client)
    {
        $this->client = $client;
    }

    public function find()
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public function findKeys()
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public function read()
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public function delete()
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public function update()
    {
        throw new \BadMethodCallException('Not implemented');
    }

    public function create(AxdSalesOrder $salesOrder)
    {
        $request = new SalesOrderServiceCreateRequest($salesOrder);

        return $this->client->create($request);
    }
}
