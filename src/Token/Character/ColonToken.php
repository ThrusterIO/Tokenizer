<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class ColonToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class ColonToken extends CharacterToken
{
    const IDENTIFIER = T_COLON;
    
    public function __construct(string $content = ':', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
