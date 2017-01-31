<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class PipeToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class PipeToken extends CharacterToken
{
    const IDENTIFIER = T_PIPE;
    
    public function __construct(string $content = '|', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
