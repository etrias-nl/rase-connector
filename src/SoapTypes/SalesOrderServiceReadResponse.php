<?php

namespace Etrias\RaseConnector\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class SalesOrderServiceReadResponse implements ResultInterface
{

    /**
     * @var AxdSalesOrder
     */
    protected $SalesOrder = null;

    /**
     * Constructor
     *
     * @var AxdSalesOrder $SalesOrder
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
     * @return $this
     */
    public function setSalesOrder($SalesOrder)
    {
        $this->SalesOrder = $SalesOrder;
        return $this;
    }


}

