<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class OpeningSquareBracketToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class OpeningSquareBracketToken extends CharacterToken
{
    const IDENTIFIER = T_OPENING_SQUARE_BRACKET;
    
    public function __construct(string $content = '[', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
