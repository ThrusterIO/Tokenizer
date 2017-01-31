<?php

namespace Thruster\Component\Tokenizer\Token\Character;

use Thruster\Component\Tokenizer\Token\CharacterToken;

/**
 * Class QuestionMarkToken
 *
 * @package Thruster\Component\Tokenizer\Token\Character
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class QuestionMarkToken extends CharacterToken
{
    const IDENTIFIER = T_QUESTION_MARK;
    
    public function __construct(string $content = '?', int $line)
    {
        parent::__construct($this::IDENTIFIER, $content, $line);
    }
}
