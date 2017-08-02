<?php

namespace Etrias\RaseConnector\SoapTypes;

class AxdArray_AxdExtType_Dimension
{

    /**
     * @var AxdExtType_Dimension
     */
    protected $element = null;

    /**
     * Constructor
     *
     * @var AxdExtType_Dimension $element
     */
    public function __construct($element)
    {
        $this->element = $element;
    }

    /**
     * @return AxdExtType_Dimension
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * @param AxdExtType_Dimension $element
     * @return $this
     */
    public function setElement($element)
    {
        $this->element = $element;
        return $this;
    }


}

