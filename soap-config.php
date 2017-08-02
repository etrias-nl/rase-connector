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

require_once __DIR__.'/vendor/autoload.php';

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Zend\Code\Generator\PropertyGenerator;

return Config::create()
    ->setWsdl(\Etrias\RaseConnector\Client\RaseClientInterface::WSDL_STAGING)
    ->setDestination('src/SoapTypes')
    ->setNamespace('\\Etrias\\RaseConnector\\SoapTypes')
    ->setRuleSet(
        new Rules\RuleSet(
            [
                new Rules\AssembleRule(new Assembler\PropertyAssembler(PropertyGenerator::VISIBILITY_PROTECTED)),
                new Rules\AssembleRule(new Assembler\ClassMapAssembler()),
                new Rules\TypenameMatchesRule(new Rules\AssembleRule(new Assembler\RequestAssembler()), '/Request$/'),
                new Rules\TypenameMatchesRule(new Rules\AssembleRule(new Assembler\ResultAssembler()), '/Response$/'),
                new Rules\MultiRule([
                    new Rules\AssembleRule(new Assembler\GetterAssembler()),
                    new Rules\AssembleRule(new Assembler\SetterAssembler()),
                    new Rules\AssembleRule(new Assembler\FluentSetterAssembler()),
                    new Rules\AssembleRule(new Assembler\ConstructorAssembler()),
                ]),
            ]
        )
    )

;
