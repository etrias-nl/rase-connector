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

namespace Etrias\RaseConnector\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class SalesOrderServiceReadResponse implements ResultInterface
{
    /**
     * @var AxdSalesOrder
     */
    protected $SalesOrder = null;

    /**
     * Constructor.
     *
     * @var AxdSalesOrder
     *
     * @param mixed $SalesOrder
     */
    public function __construct($SalesOrder)
    {
        $this->SalesOrder = $SalesOrder;
    }

    /**
     * @return AxdSalesOrder
     */
    public function getSalesOrder()
    {
        return $this->SalesOrder;
    }

    /**
     * @param AxdSalesOrder $SalesOrder
     *
     * @return $this
     */
    public function setSalesOrder($SalesOrder)
    {
        $this->SalesOrder = $SalesOrder;

        return $this;
    }
}
