<?php

namespace Thruster\Component\Tokenizer\Token;

use Thruster\Component\Tokenizer\Token;

/**
 * Class WhitespaceToken
 *
 * @package Thruster\Component\Tokenizer\Token
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class WhitespaceToken extends Token
{
    const IDENTIFIER = T_WHITESPACE;

    /**
     * @var int
     */
    private $size;

    public function __construct(string $content = ' ', int $line)
    {
        $this->size = strlen($content);

        parent::__construct($this::IDENTIFIER, $content, $line);
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->setContent(str_repeat(' ', $size));

        $this->size = $size;
    }
}
