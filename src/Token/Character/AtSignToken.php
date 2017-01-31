<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class AtSignToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class AtSignToken extends CharacterToken
{
    const IDENTIFIER = T_AT_SIGN;
    
    public function __construct(string $content = '@', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
