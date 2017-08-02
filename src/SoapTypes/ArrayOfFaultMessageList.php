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

class ArrayOfFaultMessageList
{
    /**
     * @var FaultMessageList
     */
    protected $FaultMessageList = null;

    /**
     * Constructor.
     *
     * @var FaultMessageList
     *
     * @param mixed $FaultMessageList
     */
    public function __construct($FaultMessageList)
    {
        $this->FaultMessageList = $FaultMessageList;
    }

    /**
     * @return FaultMessageList
     */
    public function getFaultMessageList()
    {
        return $this->FaultMessageList;
    }

    /**
     * @param FaultMessageList $FaultMessageList
     *
     * @return $this
     */
    public function setFaultMessageList($FaultMessageList)
    {
        $this->FaultMessageList = $FaultMessageList;

        return $this;
    }
}
