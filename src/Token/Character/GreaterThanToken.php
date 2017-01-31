<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class GreaterThanToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class GreaterThanToken extends CharacterToken
{
    const IDENTIFIER = T_GREATER_THAN;
    
    public function __construct(string $content = '>', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
