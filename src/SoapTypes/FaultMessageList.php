<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\RaseConnector\SoapTypes;

class FaultMessageList
{
    /**
     * @var string
     */
    protected $Document = null;

    /**
     * @var string
     */
    protected $DocumentOperation = null;

    /**
     * @var ArrayOfFaultMessage
     */
    protected $FaultMessageArray = null;

    /**
     * @var string
     */
    protected $Field = null;

    /**
     * @var string
     */
    protected $Service = null;

    /**
     * @var string
     */
    protected $ServiceOperation = null;

    /**
     * @var string
     */
    protected $ServiceOperationParameter = null;

    /**
     * @var string
     */
    protected $XPath = null;

    /**
     * @var string
     */
    protected $XmlLine = null;

    /**
     * @var string
     */
    protected $XmlPosition = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string              $DocumentOperation
     * @var ArrayOfFaultMessage $FaultMessageArray
     * @var string              $Field
     * @var string              $Service
     * @var string              $ServiceOperation
     * @var string              $ServiceOperationParameter
     * @var string              $XPath
     * @var string              $XmlLine
     * @var string              $XmlPosition
     *
     * @param mixed $Document
     * @param mixed $DocumentOperation
     * @param mixed $FaultMessageArray
     * @param mixed $Field
     * @param mixed $Service
     * @param mixed $ServiceOperation
     * @param mixed $ServiceOperationParameter
     * @param mixed $XPath
     * @param mixed $XmlLine
     * @param mixed $XmlPosition
     */
    public function __construct($Document, $DocumentOperation, $FaultMessageArray, $Field, $Service, $ServiceOperation, $ServiceOperationParameter, $XPath, $XmlLine, $XmlPosition)
    {
        $this->Document = $Document;
        $this->DocumentOperation = $DocumentOperation;
        $this->FaultMessageArray = $FaultMessageArray;
        $this->Field = $Field;
        $this->Service = $Service;
        $this->ServiceOperation = $ServiceOperation;
        $this->ServiceOperationParameter = $ServiceOperationParameter;
        $this->XPath = $XPath;
        $this->XmlLine = $XmlLine;
        $this->XmlPosition = $XmlPosition;
    }

    /**
     * @return string
     */
    public function getDocument()
    {
        return $this->Document;
    }

    /**
     * @param string $Document
     *
     * @return $this
     */
    public function setDocument($Document)
    {
        $this->Document = $Document;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentOperation()
    {
        return $this->DocumentOperation;
    }

    /**
     * @param string $DocumentOperation
     *
     * @return $this
     */
    public function setDocumentOperation($DocumentOperation)
    {
        $this->DocumentOperation = $DocumentOperation;

        return $this;
    }

    /**
     * @return ArrayOfFaultMessage
     */
    public function getFaultMessageArray()
    {
        return $this->FaultMessageArray;
    }

    /**
     * @param ArrayOfFaultMessage $FaultMessageArray
     *
     * @return $this
     */
    public function setFaultMessageArray($FaultMessageArray)
    {
        $this->FaultMessageArray = $FaultMessageArray;

        return $this;
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
     *
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
    public function getService()
    {
        return $this->Service;
    }

    /**
     * @param string $Service
     *
     * @return $this
     */
    public function setService($Service)
    {
        $this->Service = $Service;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceOperation()
    {
        return $this->ServiceOperation;
    }

    /**
     * @param string $ServiceOperation
     *
     * @return $this
     */
    public function setServiceOperation($ServiceOperation)
    {
        $this->ServiceOperation = $ServiceOperation;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceOperationParameter()
    {
        return $this->ServiceOperationParameter;
    }

    /**
     * @param string $ServiceOperationParameter
     *
     * @return $this
     */
    public function setServiceOperationParameter($ServiceOperationParameter)
    {
        $this->ServiceOperationParameter = $ServiceOperationParameter;

        return $this;
    }

    /**
     * @return string
     */
    public function getXPath()
    {
        return $this->XPath;
    }

    /**
     * @param string $XPath
     *
     * @return $this
     */
    public function setXPath($XPath)
    {
        $this->XPath = $XPath;

        return $this;
    }

    /**
     * @return string
     */
    public function getXmlLine()
    {
        return $this->XmlLine;
    }

    /**
     * @param string $XmlLine
     *
     * @return $this
     */
    public function setXmlLine($XmlLine)
    {
        $this->XmlLine = $XmlLine;

        return $this;
    }

    /**
     * @return string
     */
    public function getXmlPosition()
    {
        return $this->XmlPosition;
    }

    /**
     * @param string $XmlPosition
     *
     * @return $this
     */
    public function setXmlPosition($XmlPosition)
    {
        $this->XmlPosition = $XmlPosition;

        return $this;
    }
}
