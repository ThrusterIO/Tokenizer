<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class PercentToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class PercentToken extends CharacterToken
{
    const IDENTIFIER = T_PERCENT;
    
    public function __construct(string $content = '%', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
