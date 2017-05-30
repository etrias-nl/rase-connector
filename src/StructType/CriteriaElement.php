<?php

namespace RaseConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CriteriaElement StructType
 * @subpackage Structs
 */
class CriteriaElement extends AbstractStructBase
{
    /**
     * The DataSourceName
     * @var string
     */
    public $DataSourceName;
    /**
     * The FieldName
     * @var string
     */
    public $FieldName;
    /**
     * The Operator
     * @var string
     */
    public $Operator;
    /**
     * The Value1
     * @var string
     */
    public $Value1;
    /**
     * The Value2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Value2;
    /**
     * Constructor method for CriteriaElement
     * @uses CriteriaElement::setDataSourceName()
     * @uses CriteriaElement::setFieldName()
     * @uses CriteriaElement::setOperator()
     * @uses CriteriaElement::setValue1()
     * @uses CriteriaElement::setValue2()
     * @param string $dataSourceName
     * @param string $fieldName
     * @param string $operator
     * @param string $value1
     * @param string $value2
     */
    public function __construct($dataSourceName = null, $fieldName = null, $operator = null, $value1 = null, $value2 = null)
    {
        $this
            ->setDataSourceName($dataSourceName)
            ->setFieldName($fieldName)
            ->setOperator($operator)
            ->setValue1($value1)
            ->setValue2($value2);
    }
    /**
     * Get DataSourceName value
     * @return string|null
     */
    public function getDataSourceName()
    {
        return $this->DataSourceName;
    }
    /**
     * Set DataSourceName value
     * @param string $dataSourceName
     * @return \rase\StructType\CriteriaElement
     */
    public function setDataSourceName($dataSourceName = null)
    {
        // validation for constraint: string
        if (!is_null($dataSourceName) && !is_string($dataSourceName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dataSourceName)), __LINE__);
        }
        $this->DataSourceName = $dataSourceName;
        return $this;
    }
    /**
     * Get FieldName value
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->FieldName;
    }
    /**
     * Set FieldName value
     * @param string $fieldName
     * @return \rase\StructType\CriteriaElement
     */
    public function setFieldName($fieldName = null)
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fieldName)), __LINE__);
        }
        $this->FieldName = $fieldName;
        return $this;
    }
    /**
     * Get Operator value
     * @return string|null
     */
    public function getOperator()
    {
        return $this->Operator;
    }
    /**
     * Set Operator value
     * @uses \rase\EnumType\Operator::valueIsValid()
     * @uses \rase\EnumType\Operator::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $operator
     * @return \rase\StructType\CriteriaElement
     */
    public function setOperator($operator = null)
    {
        // validation for constraint: enumeration
        if (!\rase\EnumType\Operator::valueIsValid($operator)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $operator, implode(', ', \rase\EnumType\Operator::getValidValues())), __LINE__);
        }
        $this->Operator = $operator;
        return $this;
    }
    /**
     * Get Value1 value
     * @return string|null
     */
    public function getValue1()
    {
        return $this->Value1;
    }
    /**
     * Set Value1 value
     * @param string $value1
     * @return \rase\StructType\CriteriaElement
     */
    public function setValue1($value1 = null)
    {
        // validation for constraint: string
        if (!is_null($value1) && !is_string($value1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value1)), __LINE__);
        }
        $this->Value1 = $value1;
        return $this;
    }
    /**
     * Get Value2 value
     * @return string|null
     */
    public function getValue2()
    {
        return $this->Value2;
    }
    /**
     * Set Value2 value
     * @param string $value2
     * @return \rase\StructType\CriteriaElement
     */
    public function setValue2($value2 = null)
    {
        // validation for constraint: string
        if (!is_null($value2) && !is_string($value2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value2)), __LINE__);
        }
        $this->Value2 = $value2;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \rase\StructType\CriteriaElement
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
