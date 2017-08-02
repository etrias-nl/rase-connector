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

class SalesOrderServiceReadRequest implements RequestInterface
{
    /**
     * @var EntityKeyList
     */
    protected $EntityKeyList = null;

    /**
     * Constructor.
     *
     * @var EntityKeyList
     *
     * @param mixed $EntityKeyList
     */
    public function __construct($EntityKeyList)
    {
        $this->EntityKeyList = $EntityKeyList;
    }

    /**
     * @return EntityKeyList
     */
    public function getEntityKeyList()
    {
        return $this->EntityKeyList;
    }

    /**
     * @param EntityKeyList $EntityKeyList
     *
     * @return $this
     */
    public function setEntityKeyList($EntityKeyList)
    {
        $this->EntityKeyList = $EntityKeyList;

        return $this;
    }
}
