<?php

namespace Etrias\RaseConnector\SoapTypes;

class FaultMessage
{

    /**
     * @var string
     */
    protected $Code = null;

    /**
     * @var string
     */
    protected $Message = null;

    /**
     * Constructor
     *
     * @var string $Code
     * @var string $Message
     */
    public function __construct($Code, $Message)
    {
        $this->Code = $Code;
        $this->Message = $Message;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return $this
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     * @return $this
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }


}

