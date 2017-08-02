<?php

namespace Etrias\RaseConnector\SoapTypes;

class AxdSalesOrder
{

    /**
     * @var string
     */
    protected $DocPurpose = null;

    /**
     * @var AxdExtType_dataAreaId
     */
    protected $SenderId = null;

    /**
     * @var AxdEntity_SalesTable
     */
    protected $SalesTable = null;

    /**
     * @return string
     */
    public function getDocPurpose()
    {
        return $this->DocPurpose;
    }

    /**
     * @param string $DocPurpose
     * @return $this
     */
    public function setDocPurpose($DocPurpose)
    {
        $this->DocPurpose = $DocPurpose;
        return $this;
    }

    /**
     * @return AxdExtType_dataAreaId
     */
    public function getSenderId()
    {
        return $this->SenderId;
    }

    /**
     * @param AxdExtType_dataAreaId $SenderId
     * @return $this
     */
    public function setSenderId($SenderId)
    {
        $this->SenderId = $SenderId;
        return $this;
    }

    /**
     * @return AxdEntity_SalesTable
     */
    public function getSalesTable()
    {
        return $this->SalesTable;
    }

    /**
     * @param AxdEntity_SalesTable $SalesTable
     * @return $this
     */
    public function setSalesTable($SalesTable)
    {
        $this->SalesTable = $SalesTable;
        return $this;
    }
}

