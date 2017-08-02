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

namespace Etrias\RaseConnector\Client;

use Phpro\SoapClient\ClientInterface;

/**
 * Interface RaseClientInterface.
 */
interface RaseClientInterface extends ClientInterface
{
    const WSDL_PRODUCTION = 'http://webservice.ra-group.be:4750/salesorderservice.svc?wsdl';
    const WSDL_STAGING = 'http://webservice.ra-group.be:4751/salesorderservice.svc?wsdl';
}
