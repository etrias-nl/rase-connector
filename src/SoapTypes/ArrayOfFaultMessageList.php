<?php

namespace Etrias\RaseConnector\SoapTypes;

class ArrayOfFaultMessageList
{

    /**
     * @var FaultMessageList
     */
    protected $FaultMessageList = null;

    /**
     * Constructor
     *
     * @var FaultMessageList $FaultMessageList
     */
    public function __construct($FaultMessageList)
    {
        $this->FaultMessageList = $FaultMessageList;
    }

    /**
     * @return FaultMessageList
     */
    public function getFaultMessageList()
    {
        return $this->FaultMessageList;
    }

    /**
     * @param FaultMessageList $FaultMessageList
     * @return $this
     */
    public function setFaultMessageList($FaultMessageList)
    {
        $this->FaultMessageList = $FaultMessageList;
        return $this;
    }


}

