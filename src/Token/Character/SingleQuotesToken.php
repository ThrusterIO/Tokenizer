<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class SingleQuotesToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class SingleQuotesToken extends CharacterToken
{
    const IDENTIFIER = T_SINGLE_QUOTES;
    
    public function __construct(string $content = '\'', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
