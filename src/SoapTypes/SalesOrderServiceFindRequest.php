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

use Phpro\SoapClient\Type\RequestInterface;

class SalesOrderServiceFindRequest implements RequestInterface
{
    /**
     * @var QueryCriteria
     */
    protected $QueryCriteria = null;

    /**
     * Constructor.
     *
     * @var QueryCriteria
     */
    public function __construct(QueryCriteria $QueryCriteria)
    {
        $this->QueryCriteria = $QueryCriteria;
    }

    /**
     * @return QueryCriteria
     */
    public function getQueryCriteria()
    {
        return $this->QueryCriteria;
    }

    /**
     * @param QueryCriteria $QueryCriteria
     *
     * @return $this
     */
    public function setQueryCriteria($QueryCriteria)
    {
        $this->QueryCriteria = $QueryCriteria;

        return $this;
    }
}
