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

use Phpro\SoapClient\Soap\ClassMap\ClassMap;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;

return new ClassMapCollection([
    new ClassMap('QueryCriteria', \Etrias\RaseConnector\SoapTypes\QueryCriteria::class),
    new ClassMap('CriteriaElement', \Etrias\RaseConnector\SoapTypes\CriteriaElement::class),
    new ClassMap('AxdSalesOrder', \Etrias\RaseConnector\SoapTypes\AxdSalesOrder::class),
    new ClassMap('AxdEntity_SalesTable', \Etrias\RaseConnector\SoapTypes\AxdEntity_SalesTable::class),
    new ClassMap('AxdArray_AxdExtType_Dimension', \Etrias\RaseConnector\SoapTypes\AxdArray_AxdExtType_Dimension::class),
    new ClassMap('AxdEntity_SalesLine', \Etrias\RaseConnector\SoapTypes\AxdEntity_SalesLine::class),
    new ClassMap('AxdEntity_InventDim', \Etrias\RaseConnector\SoapTypes\AxdEntity_InventDim::class),
    new ClassMap('AxdEntity_DocuRefLine', \Etrias\RaseConnector\SoapTypes\AxdEntity_DocuRefLine::class),
    new ClassMap('AxdEntity_MarkupTransLine', \Etrias\RaseConnector\SoapTypes\AxdEntity_MarkupTransLine::class),
    new ClassMap('AxdEntity_DocuRefHeader', \Etrias\RaseConnector\SoapTypes\AxdEntity_DocuRefHeader::class),
    new ClassMap('AxdEntity_MarkupTransHeader', \Etrias\RaseConnector\SoapTypes\AxdEntity_MarkupTransHeader::class),
    new ClassMap('EntityKey', \Etrias\RaseConnector\SoapTypes\EntityKey::class),
    new ClassMap('KeyData', \Etrias\RaseConnector\SoapTypes\KeyData::class),
    new ClassMap('KeyField', \Etrias\RaseConnector\SoapTypes\KeyField::class),
    new ClassMap('EntityKeyList', \Etrias\RaseConnector\SoapTypes\EntityKeyList::class),
    new ClassMap('SalesOrderServiceFindRequest', \Etrias\RaseConnector\SoapTypes\SalesOrderServiceFindRequest::class),
    new ClassMap('SalesOrderServiceFindResponse', \Etrias\RaseConnector\SoapTypes\SalesOrderServiceFindResponse::class),
    new ClassMap('SalesOrderServiceReadRequest', \Etrias\RaseConnector\SoapTypes\SalesOrderServiceReadRequest::class),
    new ClassMap('SalesOrderServiceReadResponse', \Etrias\RaseConnector\SoapTypes\SalesOrderServiceReadResponse::class),
    new ClassMap('SalesOrderServiceFindKeysRequest', \Etrias\RaseConnector\SoapTypes\SalesOrderServiceFindKeysRequest::class),
    new ClassMap('SalesOrderServiceFindKeysResponse', \Etrias\RaseConnector\SoapTypes\SalesOrderServiceFindKeysResponse::class),
    new ClassMap('SalesOrderServiceCreateRequest', \Etrias\RaseConnector\SoapTypes\SalesOrderServiceCreateRequest::class),
    new ClassMap('SalesOrderServiceCreateResponse', \Etrias\RaseConnector\SoapTypes\SalesOrderServiceCreateResponse::class),
    new ClassMap('SalesOrderServiceDeleteRequest', \Etrias\RaseConnector\SoapTypes\SalesOrderServiceDeleteRequest::class),
    new ClassMap('SalesOrderServiceUpdateRequest', \Etrias\RaseConnector\SoapTypes\SalesOrderServiceUpdateRequest::class),
    new ClassMap('AifFault', \Etrias\RaseConnector\SoapTypes\AifFault::class),
    new ClassMap('ArrayOfFaultMessageList', \Etrias\RaseConnector\SoapTypes\ArrayOfFaultMessageList::class),
    new ClassMap('FaultMessageList', \Etrias\RaseConnector\SoapTypes\FaultMessageList::class),
    new ClassMap('ArrayOfFaultMessage', \Etrias\RaseConnector\SoapTypes\ArrayOfFaultMessage::class),
    new ClassMap('FaultMessage', \Etrias\RaseConnector\SoapTypes\FaultMessage::class),
]);
