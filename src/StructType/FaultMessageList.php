<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaultMessageList StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FaultMessageList
 * @subpackage Structs
 */
class FaultMessageList extends AbstractStructBase
{
    /**
     * The Document
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Document;
    /**
     * The DocumentOperation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DocumentOperation;
    /**
     * The FaultMessageArray
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \rase\ArrayType\ArrayOfFaultMessage
     */
    public $FaultMessageArray;
    /**
     * The Field
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Field;
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Service;
    /**
     * The ServiceOperation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ServiceOperation;
    /**
     * The ServiceOperationParameter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ServiceOperationParameter;
    /**
     * The XPath
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $XPath;
    /**
     * The XmlLine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $XmlLine;
    /**
     * The XmlPosition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $XmlPosition;
    /**
     * Constructor method for FaultMessageList
     * @uses FaultMessageList::setDocument()
     * @uses FaultMessageList::setDocumentOperation()
     * @uses FaultMessageList::setFaultMessageArray()
     * @uses FaultMessageList::setField()
     * @uses FaultMessageList::setService()
     * @uses FaultMessageList::setServiceOperation()
     * @uses FaultMessageList::setServiceOperationParameter()
     * @uses FaultMessageList::setXPath()
     * @uses FaultMessageList::setXmlLine()
     * @uses FaultMessageList::setXmlPosition()
     * @param string $document
     * @param string $documentOperation
     * @param \rase\ArrayType\ArrayOfFaultMessage $faultMessageArray
     * @param string $field
     * @param string $service
     * @param string $serviceOperation
     * @param string $serviceOperationParameter
     * @param string $xPath
     * @param string $xmlLine
     * @param string $xmlPosition
     */
    public function __construct($document = null, $documentOperation = null, \rase\ArrayType\ArrayOfFaultMessage $faultMessageArray = null, $field = null, $service = null, $serviceOperation = null, $serviceOperationParameter = null, $xPath = null, $xmlLine = null, $xmlPosition = null)
    {
        $this
            ->setDocument($document)
            ->setDocumentOperation($documentOperation)
            ->setFaultMessageArray($faultMessageArray)
            ->setField($field)
            ->setService($service)
            ->setServiceOperation($serviceOperation)
            ->setServiceOperationParameter($serviceOperationParameter)
            ->setXPath($xPath)
            ->setXmlLine($xmlLine)
            ->setXmlPosition($xmlPosition);
    }
    /**
     * Get Document value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocument()
    {
        return isset($this->Document) ? $this->Document : null;
    }
    /**
     * Set Document value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $document
     * @return \rase\StructType\FaultMessageList
     */
    public function setDocument($document = null)
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document)), __LINE__);
        }
        if (is_null($document) || (is_array($document) && empty($document))) {
            unset($this->Document);
        } else {
            $this->Document = $document;
        }
        return $this;
    }
    /**
     * Get DocumentOperation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentOperation()
    {
        return isset($this->DocumentOperation) ? $this->DocumentOperation : null;
    }
    /**
     * Set DocumentOperation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentOperation
     * @return \rase\StructType\FaultMessageList
     */
    public function setDocumentOperation($documentOperation = null)
    {
        // validation for constraint: string
        if (!is_null($documentOperation) && !is_string($documentOperation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentOperation)), __LINE__);
        }
        if (is_null($documentOperation) || (is_array($documentOperation) && empty($documentOperation))) {
            unset($this->DocumentOperation);
        } else {
            $this->DocumentOperation = $documentOperation;
        }
        return $this;
    }
    /**
     * Get FaultMessageArray value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \rase\ArrayType\ArrayOfFaultMessage|null
     */
    public function getFaultMessageArray()
    {
        return isset($this->FaultMessageArray) ? $this->FaultMessageArray : null;
    }
    /**
     * Set FaultMessageArray value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \rase\ArrayType\ArrayOfFaultMessage $faultMessageArray
     * @return \rase\StructType\FaultMessageList
     */
    public function setFaultMessageArray(\rase\ArrayType\ArrayOfFaultMessage $faultMessageArray = null)
    {
        if (is_null($faultMessageArray) || (is_array($faultMessageArray) && empty($faultMessageArray))) {
            unset($this->FaultMessageArray);
        } else {
            $this->FaultMessageArray = $faultMessageArray;
        }
        return $this;
    }
    /**
     * Get Field value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getField()
    {
        return isset($this->Field) ? $this->Field : null;
    }
    /**
     * Set Field value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $field
     * @return \rase\StructType\FaultMessageList
     */
    public function setField($field = null)
    {
        // validation for constraint: string
        if (!is_null($field) && !is_string($field)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($field)), __LINE__);
        }
        if (is_null($field) || (is_array($field) && empty($field))) {
            unset($this->Field);
        } else {
            $this->Field = $field;
        }
        return $this;
    }
    /**
     * Get Service value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getService()
    {
        return isset($this->Service) ? $this->Service : null;
    }
    /**
     * Set Service value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $service
     * @return \rase\StructType\FaultMessageList
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($service)), __LINE__);
        }
        if (is_null($service) || (is_array($service) && empty($service))) {
            unset($this->Service);
        } else {
            $this->Service = $service;
        }
        return $this;
    }
    /**
     * Get ServiceOperation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getServiceOperation()
    {
        return isset($this->ServiceOperation) ? $this->ServiceOperation : null;
    }
    /**
     * Set ServiceOperation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serviceOperation
     * @return \rase\StructType\FaultMessageList
     */
    public function setServiceOperation($serviceOperation = null)
    {
        // validation for constraint: string
        if (!is_null($serviceOperation) && !is_string($serviceOperation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceOperation)), __LINE__);
        }
        if (is_null($serviceOperation) || (is_array($serviceOperation) && empty($serviceOperation))) {
            unset($this->ServiceOperation);
        } else {
            $this->ServiceOperation = $serviceOperation;
        }
        return $this;
    }
    /**
     * Get ServiceOperationParameter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getServiceOperationParameter()
    {
        return isset($this->ServiceOperationParameter) ? $this->ServiceOperationParameter : null;
    }
    /**
     * Set ServiceOperationParameter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serviceOperationParameter
     * @return \rase\StructType\FaultMessageList
     */
    public function setServiceOperationParameter($serviceOperationParameter = null)
    {
        // validation for constraint: string
        if (!is_null($serviceOperationParameter) && !is_string($serviceOperationParameter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceOperationParameter)), __LINE__);
        }
        if (is_null($serviceOperationParameter) || (is_array($serviceOperationParameter) && empty($serviceOperationParameter))) {
            unset($this->ServiceOperationParameter);
        } else {
            $this->ServiceOperationParameter = $serviceOperationParameter;
        }
        return $this;
    }
    /**
     * Get XPath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getXPath()
    {
        return isset($this->XPath) ? $this->XPath : null;
    }
    /**
     * Set XPath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $xPath
     * @return \rase\StructType\FaultMessageList
     */
    public function setXPath($xPath = null)
    {
        // validation for constraint: string
        if (!is_null($xPath) && !is_string($xPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($xPath)), __LINE__);
        }
        if (is_null($xPath) || (is_array($xPath) && empty($xPath))) {
            unset($this->XPath);
        } else {
            $this->XPath = $xPath;
        }
        return $this;
    }
    /**
     * Get XmlLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getXmlLine()
    {
        return isset($this->XmlLine) ? $this->XmlLine : null;
    }
    /**
     * Set XmlLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $xmlLine
     * @return \rase\StructType\FaultMessageList
     */
    public function setXmlLine($xmlLine = null)
    {
        // validation for constraint: string
        if (!is_null($xmlLine) && !is_string($xmlLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($xmlLine)), __LINE__);
        }
        if (is_null($xmlLine) || (is_array($xmlLine) && empty($xmlLine))) {
            unset($this->XmlLine);
        } else {
            $this->XmlLine = $xmlLine;
        }
        return $this;
    }
    /**
     * Get XmlPosition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getXmlPosition()
    {
        return isset($this->XmlPosition) ? $this->XmlPosition : null;
    }
    /**
     * Set XmlPosition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $xmlPosition
     * @return \rase\StructType\FaultMessageList
     */
    public function setXmlPosition($xmlPosition = null)
    {
        // validation for constraint: string
        if (!is_null($xmlPosition) && !is_string($xmlPosition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($xmlPosition)), __LINE__);
        }
        if (is_null($xmlPosition) || (is_array($xmlPosition) && empty($xmlPosition))) {
            unset($this->XmlPosition);
        } else {
            $this->XmlPosition = $xmlPosition;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \rase\StructType\FaultMessageList
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
