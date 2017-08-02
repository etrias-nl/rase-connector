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

class AifFault
{
    /**
     * @var string
     */
    protected $CustomDetailXml = null;

    /**
     * @var ArrayOfFaultMessageList
     */
    protected $FaultMessageListArray = null;

    /**
     * Constructor.
     *
     * @var string
     * @var ArrayOfFaultMessageList $FaultMessageListArray
     *
     * @param mixed $CustomDetailXml
     * @param mixed $FaultMessageListArray
     */
    public function __construct($CustomDetailXml, $FaultMessageListArray)
    {
        $this->CustomDetailXml = $CustomDetailXml;
        $this->FaultMessageListArray = $FaultMessageListArray;
    }

    /**
     * @return string
     */
    public function getCustomDetailXml()
    {
        return $this->CustomDetailXml;
    }

    /**
     * @param string $CustomDetailXml
     *
     * @return $this
     */
    public function setCustomDetailXml($CustomDetailXml)
    {
        $this->CustomDetailXml = $CustomDetailXml;

        return $this;
    }

    /**
     * @return ArrayOfFaultMessageList
     */
    public function getFaultMessageListArray()
    {
        return $this->FaultMessageListArray;
    }

    /**
     * @param ArrayOfFaultMessageList $FaultMessageListArray
     *
     * @return $this
     */
    public function setFaultMessageListArray($FaultMessageListArray)
    {
        $this->FaultMessageListArray = $FaultMessageListArray;

        return $this;
    }
}
