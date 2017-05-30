<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueryCriteria StructType
 * Meta informations extracted from the WSDL
 * - type: q1:QueryCriteria
 * @subpackage Structs
 */
class QueryCriteria extends AbstractStructBase
{
    /**
     * The CriteriaElement
     * @var \rase\StructType\CriteriaElement
     */
    public $CriteriaElement;
    /**
     * Constructor method for QueryCriteria
     * @uses QueryCriteria::setCriteriaElement()
     * @param \rase\StructType\CriteriaElement $criteriaElement
     */
    public function __construct(\rase\StructType\CriteriaElement $criteriaElement = null)
    {
        $this
            ->setCriteriaElement($criteriaElement);
    }
    /**
     * Get CriteriaElement value
     * @return \rase\StructType\CriteriaElement|null
     */
    public function getCriteriaElement()
    {
        return $this->CriteriaElement;
    }
    /**
     * Set CriteriaElement value
     * @param \rase\StructType\CriteriaElement $criteriaElement
     * @return \rase\StructType\QueryCriteria
     */
    public function setCriteriaElement(\rase\StructType\CriteriaElement $criteriaElement = null)
    {
        $this->CriteriaElement = $criteriaElement;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \rase\StructType\QueryCriteria
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
