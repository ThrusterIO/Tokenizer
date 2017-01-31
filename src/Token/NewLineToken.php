<?php

namespace Thruster\Component\Tokenizer\Token;

use Thruster\Component\Tokenizer\Token;

/**
 * Class NewLineToken
 *
 * @package Thruster\Component\Tokenizer\Token
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class NewLineToken extends Token
{
    const IDENTIFIER = T_NEWLINE;

    public function __construct(string $content = "\n", int $line)
    {
        parent::__construct(static::IDENTIFIER, $content, $line);
    }
}