<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class TildeToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class TildeToken extends CharacterToken
{
    const IDENTIFIER = T_TILDE;
    
    public function __construct(string $content = '~', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
