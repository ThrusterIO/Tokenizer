<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class ClosingParenthesesToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class ClosingParenthesesToken extends CharacterToken
{
    const IDENTIFIER = T_CLOSING_PARENTHESES;
    
    public function __construct(string $content = ')', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
