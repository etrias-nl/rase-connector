<?php

namespace Etrias\RaseConnector\SoapTypes;

class KeyField
{

    /**
     * @var string
     */
    protected $Field = null;

    /**
     * @var string
     */
    protected $Value = null;

    /**
     * Constructor
     *
     * @var string $Field
     * @var string $Value
     */
    public function __construct($Field, $Value)
    {
        $this->Field = $Field;
        $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->Field;
    }

    /**
     * @param string $Field
     * @return $this
     */
    public function setField($Field)
    {
        $this->Field = $Field;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return $this
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }


}

