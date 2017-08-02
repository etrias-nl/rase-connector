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

class QueryCriteria
{
    /**
     * @var CriteriaElement
     */
    protected $CriteriaElement = null;

    /**
     * Constructor.
     *
     * @var CriteriaElement
     *
     * @param mixed $CriteriaElement
     */
    public function __construct($CriteriaElement)
    {
        $this->CriteriaElement = $CriteriaElement;
    }

    /**
     * @return CriteriaElement
     */
    public function getCriteriaElement()
    {
        return $this->CriteriaElement;
    }

    /**
     * @param CriteriaElement $CriteriaElement
     *
     * @return $this
     */
    public function setCriteriaElement($CriteriaElement)
    {
        $this->CriteriaElement = $CriteriaElement;

        return $this;
    }
}
