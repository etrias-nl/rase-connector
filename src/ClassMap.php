<?php

namespace RaseConnector;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'QueryCriteria' => '\\RaseConnector\\StructType\\QueryCriteria',
            'CriteriaElement' => '\\RaseConnector\\StructType\\CriteriaElement',
            'EntityKey' => '\\RaseConnector\\StructType\\EntityKey',
            'KeyData' => '\\RaseConnector\\StructType\\KeyData',
            'KeyField' => '\\RaseConnector\\StructType\\KeyField',
            'EntityKeyList' => '\\RaseConnector\\StructType\\EntityKeyList',
            'AxdSalesOrder' => '\\RaseConnector\\StructType\\AxdSalesOrder',
            'AxdEntity_SalesTable' => '\\RaseConnector\\StructType\\AxdEntity_SalesTable',
            'AxdArray_AxdExtType_Dimension' => '\\RaseConnector\\ArrayType\\AxdArray_AxdExtType_Dimension',
            'AxdEntity_SalesLine' => '\\RaseConnector\\StructType\\AxdEntity_SalesLine',
            'AxdEntity_InventDim' => '\\RaseConnector\\StructType\\AxdEntity_InventDim',
            'AxdEntity_DocuRefLine' => '\\RaseConnector\\StructType\\AxdEntity_DocuRefLine',
            'AxdEntity_MarkupTransLine' => '\\RaseConnector\\StructType\\AxdEntity_MarkupTransLine',
            'AxdEntity_DocuRefHeader' => '\\RaseConnector\\StructType\\AxdEntity_DocuRefHeader',
            'AxdEntity_MarkupTransHeader' => '\\RaseConnector\\StructType\\AxdEntity_MarkupTransHeader',
            'SalesOrderServiceFindKeysRequest' => '\\RaseConnector\\StructType\\SalesOrderServiceFindKeysRequest',
            'SalesOrderServiceFindKeysResponse' => '\\RaseConnector\\StructType\\SalesOrderServiceFindKeysResponse',
            'SalesOrderServiceFindRequest' => '\\RaseConnector\\StructType\\SalesOrderServiceFindRequest',
            'SalesOrderServiceFindResponse' => '\\RaseConnector\\StructType\\SalesOrderServiceFindResponse',
            'SalesOrderServiceReadRequest' => '\\RaseConnector\\StructType\\SalesOrderServiceReadRequest',
            'SalesOrderServiceReadResponse' => '\\RaseConnector\\StructType\\SalesOrderServiceReadResponse',
            'SalesOrderServiceCreateRequest' => '\\RaseConnector\\StructType\\SalesOrderServiceCreateRequest',
            'SalesOrderServiceCreateResponse' => '\\RaseConnector\\StructType\\SalesOrderServiceCreateResponse',
            'SalesOrderServiceDeleteRequest' => '\\RaseConnector\\StructType\\SalesOrderServiceDeleteRequest',
            'SalesOrderServiceUpdateRequest' => '\\RaseConnector\\StructType\\SalesOrderServiceUpdateRequest',
            'AifFault' => '\\RaseConnector\\StructType\\AifFault',
            'ArrayOfFaultMessageList' => '\\RaseConnector\\ArrayType\\ArrayOfFaultMessageList',
            'FaultMessageList' => '\\RaseConnector\\StructType\\FaultMessageList',
            'ArrayOfFaultMessage' => '\\RaseConnector\\ArrayType\\ArrayOfFaultMessage',
            'FaultMessage' => '\\RaseConnector\\StructType\\FaultMessage',
        );
    }
}
