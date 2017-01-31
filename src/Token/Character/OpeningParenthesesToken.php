<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class OpeningParenthesesToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class OpeningParenthesesToken extends CharacterToken
{
    const IDENTIFIER = T_OPENING_PARENTHESES;
    
    public function __construct(string $content = '(', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
