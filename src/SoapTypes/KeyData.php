<?php

namespace Etrias\RaseConnector\SoapTypes;

class KeyData
{

    /**
     * @var KeyField
     */
    protected $KeyField = null;

    /**
     * Constructor
     *
     * @var KeyField $KeyField
     */
    public function __construct($KeyField)
    {
        $this->KeyField = $KeyField;
    }

    /**
     * @return KeyField
     */
    public function getKeyField()
    {
        return $this->KeyField;
    }

    /**
     * @param KeyField $KeyField
     * @return $this
     */
    public function setKeyField($KeyField)
    {
        $this->KeyField = $KeyField;
        return $this;
    }


}

