<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AifFault StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AifFault
 * @subpackage Structs
 */
class AifFault extends AbstractStructBase
{
    /**
     * The CustomDetailXml
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomDetailXml;
    /**
     * The FaultMessageListArray
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \rase\ArrayType\ArrayOfFaultMessageList
     */
    public $FaultMessageListArray;
    /**
     * Constructor method for AifFault
     * @uses AifFault::setCustomDetailXml()
     * @uses AifFault::setFaultMessageListArray()
     * @param string $customDetailXml
     * @param \rase\ArrayType\ArrayOfFaultMessageList $faultMessageListArray
     */
    public function __construct($customDetailXml = null, \rase\ArrayType\ArrayOfFaultMessageList $faultMessageListArray = null)
    {
        $this
            ->setCustomDetailXml($customDetailXml)
            ->setFaultMessageListArray($faultMessageListArray);
    }
    /**
     * Get CustomDetailXml value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomDetailXml()
    {
        return isset($this->CustomDetailXml) ? $this->CustomDetailXml : null;
    }
    /**
     * Set CustomDetailXml value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customDetailXml
     * @return \rase\StructType\AifFault
     */
    public function setCustomDetailXml($customDetailXml = null)
    {
        // validation for constraint: string
        if (!is_null($customDetailXml) && !is_string($customDetailXml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customDetailXml)), __LINE__);
        }
        if (is_null($customDetailXml) || (is_array($customDetailXml) && empty($customDetailXml))) {
            unset($this->CustomDetailXml);
        } else {
            $this->CustomDetailXml = $customDetailXml;
        }
        return $this;
    }
    /**
     * Get FaultMessageListArray value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \rase\ArrayType\ArrayOfFaultMessageList|null
     */
    public function getFaultMessageListArray()
    {
        return isset($this->FaultMessageListArray) ? $this->FaultMessageListArray : null;
    }
    /**
     * Set FaultMessageListArray value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \rase\ArrayType\ArrayOfFaultMessageList $faultMessageListArray
     * @return \rase\StructType\AifFault
     */
    public function setFaultMessageListArray(\rase\ArrayType\ArrayOfFaultMessageList $faultMessageListArray = null)
    {
        if (is_null($faultMessageListArray) || (is_array($faultMessageListArray) && empty($faultMessageListArray))) {
            unset($this->FaultMessageListArray);
        } else {
            $this->FaultMessageListArray = $faultMessageListArray;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \rase\StructType\AifFault
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
