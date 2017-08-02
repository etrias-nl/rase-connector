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

use Phpro\SoapClient\Type\RequestInterface;

class SalesOrderServiceUpdateRequest implements RequestInterface
{
    /**
     * @var EntityKeyList
     */
    protected $EntityKeyList = null;

    /**
     * @var AxdSalesOrder
     */
    protected $SalesOrder = null;

    /**
     * Constructor.
     *
     * @var EntityKeyList
     * @var AxdSalesOrder $SalesOrder
     *
     * @param mixed $EntityKeyList
     * @param mixed $SalesOrder
     */
    public function __construct($EntityKeyList, $SalesOrder)
    {
        $this->EntityKeyList = $EntityKeyList;
        $this->SalesOrder = $SalesOrder;
    }

    /**
     * @return EntityKeyList
     */
    public function getEntityKeyList()
    {
        return $this->EntityKeyList;
    }

    /**
     * @param EntityKeyList $EntityKeyList
     *
     * @return $this
     */
    public function setEntityKeyList($EntityKeyList)
    {
        $this->EntityKeyList = $EntityKeyList;

        return $this;
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
