<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class DoubleQuotesToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class DoubleQuotesToken extends CharacterToken
{
    const IDENTIFIER = T_DOUBLE_QUOTES;
    
    public function __construct(string $content = '"', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
