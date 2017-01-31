<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class OpeningCurlyBracketToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class OpeningCurlyBracketToken extends CharacterToken
{
    const IDENTIFIER = T_OPENING_CURLY_BRACKET;
    
    public function __construct(string $content = '{', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
