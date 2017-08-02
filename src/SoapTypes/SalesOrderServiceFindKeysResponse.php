<?php

namespace Etrias\RaseConnector\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class SalesOrderServiceFindKeysResponse implements ResultInterface
{

    /**
     * @var EntityKeyList
     */
    protected $EntityKeyList = null;

    /**
     * Constructor
     *
     * @var EntityKeyList $EntityKeyList
     */
    public function __construct($EntityKeyList)
    {
        $this->EntityKeyList = $EntityKeyList;
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
     * @return $this
     */
    public function setEntityKeyList($EntityKeyList)
    {
        $this->EntityKeyList = $EntityKeyList;
        return $this;
    }


}

