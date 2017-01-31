<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class LessThanToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class LessThanToken extends CharacterToken
{
    const IDENTIFIER = T_LESS_THAN;
    
    public function __construct(string $content = '<', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
