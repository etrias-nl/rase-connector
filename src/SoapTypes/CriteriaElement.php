<?php

namespace Etrias\RaseConnector\SoapTypes;

class CriteriaElement
{

    /**
     * @var string
     */
    protected $DataSourceName = null;

    /**
     * @var string
     */
    protected $FieldName = null;

    /**
     * @var Operator
     */
    protected $Operator = null;

    /**
     * @var string
     */
    protected $Value1 = null;

    /**
     * @var string
     */
    protected $Value2 = null;

    /**
     * Constructor
     *
     * @var string $DataSourceName
     * @var string $FieldName
     * @var Operator $Operator
     * @var string $Value1
     * @var string $Value2
     */
    public function __construct($DataSourceName, $FieldName, $Operator, $Value1, $Value2)
    {
        $this->DataSourceName = $DataSourceName;
        $this->FieldName = $FieldName;
        $this->Operator = $Operator;
        $this->Value1 = $Value1;
        $this->Value2 = $Value2;
    }

    /**
     * @return string
     */
    public function getDataSourceName()
    {
        return $this->DataSourceName;
    }

    /**
     * @param string $DataSourceName
     * @return $this
     */
    public function setDataSourceName($DataSourceName)
    {
        $this->DataSourceName = $DataSourceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->FieldName;
    }

    /**
     * @param string $FieldName
     * @return $this
     */
    public function setFieldName($FieldName)
    {
        $this->FieldName = $FieldName;
        return $this;
    }

    /**
     * @return Operator
     */
    public function getOperator()
    {
        return $this->Operator;
    }

    /**
     * @param Operator $Operator
     * @return $this
     */
    public function setOperator($Operator)
    {
        $this->Operator = $Operator;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue1()
    {
        return $this->Value1;
    }

    /**
     * @param string $Value1
     * @return $this
     */
    public function setValue1($Value1)
    {
        $this->Value1 = $Value1;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue2()
    {
        return $this->Value2;
    }

    /**
     * @param string $Value2
     * @return $this
     */
    public function setValue2($Value2)
    {
        $this->Value2 = $Value2;
        return $this;
    }


}

