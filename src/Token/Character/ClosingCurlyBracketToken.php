<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class ClosingCurlyBracketToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class ClosingCurlyBracketToken extends CharacterToken
{
    const IDENTIFIER = T_CLOSING_CURLY_BRACKET;
    
    public function __construct(string $content = '}', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
