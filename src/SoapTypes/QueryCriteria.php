<?php

namespace Etrias\RaseConnector\SoapTypes;

class QueryCriteria
{

    /**
     * @var CriteriaElement
     */
    protected $CriteriaElement = null;

    /**
     * Constructor
     *
     * @var CriteriaElement $CriteriaElement
     */
    public function __construct($CriteriaElement)
    {
        $this->CriteriaElement = $CriteriaElement;
    }

    /**
     * @return CriteriaElement
     */
    public function getCriteriaElement()
    {
        return $this->CriteriaElement;
    }

    /**
     * @param CriteriaElement $CriteriaElement
     * @return $this
     */
    public function setCriteriaElement($CriteriaElement)
    {
        $this->CriteriaElement = $CriteriaElement;
        return $this;
    }


}

