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

class ArrayOfFaultMessage
{
    /**
     * @var FaultMessage
     */
    protected $FaultMessage = null;

    /**
     * Constructor.
     *
     * @var FaultMessage
     *
     * @param mixed $FaultMessage
     */
    public function __construct($FaultMessage)
    {
        $this->FaultMessage = $FaultMessage;
    }

    /**
     * @return FaultMessage
     */
    public function getFaultMessage()
    {
        return $this->FaultMessage;
    }

    /**
     * @param FaultMessage $FaultMessage
     *
     * @return $this
     */
    public function setFaultMessage($FaultMessage)
    {
        $this->FaultMessage = $FaultMessage;

        return $this;
    }
}
