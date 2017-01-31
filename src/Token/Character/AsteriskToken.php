<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class AsteriskToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class AsteriskToken extends CharacterToken
{
    const IDENTIFIER = T_ASTERISK;
    
    public function __construct(string $content = '*', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
