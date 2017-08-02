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

namespace Etrias\RaseConnector;

/*
* SoapClient based on Guzzle
*/
use Etrias\RaseConnector\Client\RaseClientInterface;
use Phpro\SoapClient\Client;
use Phpro\SoapClient\Type\MixedResult;

/**
 * Class SoapClient.
 *
 */
class GuzzleSoapClient extends Client implements RaseClientInterface
{
    public function __call($name, $arguments)
    {
        return $this->call($name, $arguments[0]);
    }
}
