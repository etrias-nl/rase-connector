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

class EntityKey
{
    /**
     * @var KeyData
     */
    protected $KeyData = null;

    /**
     * Constructor.
     *
     * @var KeyData
     *
     * @param mixed $KeyData
     */
    public function __construct($KeyData)
    {
        $this->KeyData = $KeyData;
    }

    /**
     * @return KeyData
     */
    public function getKeyData()
    {
        return $this->KeyData;
    }

    /**
     * @param KeyData $KeyData
     *
     * @return $this
     */
    public function setKeyData($KeyData)
    {
        $this->KeyData = $KeyData;

        return $this;
    }
}
