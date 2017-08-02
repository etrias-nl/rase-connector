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

class KeyField
{
    /**
     * @var string
     */
    protected $Field = null;

    /**
     * @var string
     */
    protected $Value = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string $Value
     *
     * @param mixed $Field
     * @param mixed $Value
     */
    public function __construct($Field, $Value)
    {
        $this->Field = $Field;
        $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->Field;
    }

    /**
     * @param string $Field
     *
     * @return $this
     */
    public function setField($Field)
    {
        $this->Field = $Field;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     *
     * @return $this
     */
    public function setValue($Value)
    {
        $this->Value = $Value;

        return $this;
    }
}
