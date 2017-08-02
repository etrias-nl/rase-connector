<?php

namespace Etrias\RaseConnector\SoapTypes;

class ArrayOfFaultMessage
{

    /**
     * @var FaultMessage
     */
    protected $FaultMessage = null;

    /**
     * Constructor
     *
     * @var FaultMessage $FaultMessage
     */
    public function __construct($FaultMessage)
    {
        $this->FaultMessage = $FaultMessage;
    }

    /**
     * @return FaultMessage
     */
    public function getFaultMessage()
    {
        return $this->FaultMessage;
    }

    /**
     * @param FaultMessage $FaultMessage
     * @return $this
     */
    public function setFaultMessage($FaultMessage)
    {
        $this->FaultMessage = $FaultMessage;
        return $this;
    }


}

