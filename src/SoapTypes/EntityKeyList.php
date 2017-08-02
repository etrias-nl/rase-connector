<?php

namespace Etrias\RaseConnector\SoapTypes;

class EntityKeyList
{

    /**
     * @var EntityKey
     */
    protected $EntityKey = null;

    /**
     * Constructor
     *
     * @var EntityKey $EntityKey
     */
    public function __construct($EntityKey)
    {
        $this->EntityKey = $EntityKey;
    }

    /**
     * @return EntityKey
     */
    public function getEntityKey()
    {
        return $this->EntityKey;
    }

    /**
     * @param EntityKey $EntityKey
     * @return $this
     */
    public function setEntityKey($EntityKey)
    {
        $this->EntityKey = $EntityKey;
        return $this;
    }


}

