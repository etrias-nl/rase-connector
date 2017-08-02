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

class EntityKeyList
{
    /**
     * @var EntityKey
     */
    protected $EntityKey = null;

    /**
     * Constructor.
     *
     * @var EntityKey
     *
     * @param mixed $EntityKey
     */
    public function __construct($EntityKey)
    {
        $this->EntityKey = $EntityKey;
    }

    /**
     * @return EntityKey
     */
    public function getEntityKey()
    {
        return $this->EntityKey;
    }

    /**
     * @param EntityKey $EntityKey
     *
     * @return $this
     */
    public function setEntityKey($EntityKey)
    {
        $this->EntityKey = $EntityKey;

        return $this;
    }
}
