<?php

namespace Etrias\RaseConnector\SoapTypes;

use Phpro\SoapClient\Type\RequestInterface;

class SalesOrderServiceFindKeysRequest implements RequestInterface
{

    /**
     * @var QueryCriteria
     */
    protected $QueryCriteria = null;

    /**
     * Constructor
     *
     * @var QueryCriteria $QueryCriteria
     */
    public function __construct($QueryCriteria)
    {
        $this->QueryCriteria = $QueryCriteria;
    }

    /**
     * @return QueryCriteria
     */
    public function getQueryCriteria()
    {
        return $this->QueryCriteria;
    }

    /**
     * @param QueryCriteria $QueryCriteria
     * @return $this
     */
    public function setQueryCriteria($QueryCriteria)
    {
        $this->QueryCriteria = $QueryCriteria;
        return $this;
    }


}

