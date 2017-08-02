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

class AxdArray_AxdExtType_Dimension
{
    /**
     * @var AxdExtType_Dimension
     */
    protected $element = null;

    /**
     * Constructor.
     *
     * @var AxdExtType_Dimension
     *
     * @param mixed $element
     */
    public function __construct($element)
    {
        $this->element = $element;
    }

    /**
     * @return AxdExtType_Dimension
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * @param AxdExtType_Dimension $element
     *
     * @return $this
     */
    public function setElement($element)
    {
        $this->element = $element;

        return $this;
    }
}
