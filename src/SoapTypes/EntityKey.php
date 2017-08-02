<?php

namespace Etrias\RaseConnector\SoapTypes;

class EntityKey
{

    /**
     * @var KeyData
     */
    protected $KeyData = null;

    /**
     * Constructor
     *
     * @var KeyData $KeyData
     */
    public function __construct($KeyData)
    {
        $this->KeyData = $KeyData;
    }

    /**
     * @return KeyData
     */
    public function getKeyData()
    {
        return $this->KeyData;
    }

    /**
     * @param KeyData $KeyData
     * @return $this
     */
    public function setKeyData($KeyData)
    {
        $this->KeyData = $KeyData;
        return $this;
    }


}

