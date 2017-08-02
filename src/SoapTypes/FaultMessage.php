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

class FaultMessage
{
    /**
     * @var string
     */
    protected $Code = null;

    /**
     * @var string
     */
    protected $Message = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string $Message
     *
     * @param mixed $Code
     * @param mixed $Message
     */
    public function __construct($Code, $Message)
    {
        $this->Code = $Code;
        $this->Message = $Message;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     *
     * @return $this
     */
    public function setCode($Code)
    {
        $this->Code = $Code;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     *
     * @return $this
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;

        return $this;
    }
}
