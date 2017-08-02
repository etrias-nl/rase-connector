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

class KeyData
{
    /**
     * @var KeyField
     */
    protected $KeyField = null;

    /**
     * Constructor.
     *
     * @var KeyField
     *
     * @param mixed $KeyField
     */
    public function __construct($KeyField)
    {
        $this->KeyField = $KeyField;
    }

    /**
     * @return KeyField
     */
    public function getKeyField()
    {
        return $this->KeyField;
    }

    /**
     * @param KeyField $KeyField
     *
     * @return $this
     */
    public function setKeyField($KeyField)
    {
        $this->KeyField = $KeyField;

        return $this;
    }
}
