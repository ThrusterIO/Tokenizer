<?php

namespace Thruster\Component\Tokenizer;

use JsonSerializable;

/**
 * Class Token
 *
 * @package Thruster\Component\Tokenizer
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Token implements TokenInterface, JsonSerializable
{
    /**
     * @var int
     */
    private $identifier;

    /**
     * @var string
     */
    private $content;

    /**
     * @var int
     */
    private $line;

    public function __construct(int $identifier, string $content, int $line)
    {
        $this->identifier = $identifier;
        $this->content    = $content;
        $this->line       = $line;
    }

    /**
     * @return int
     */
    public function getIdentifier(): int
    {
        return $this->identifier;
    }

    /**
     * @param int $identifier
     *
     * @return Token
     */
    public function setIdentifier(int $identifier): Token
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return Token
     */
    public function setContent(string $content): Token
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return int
     */
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * @param int $line
     *
     * @return Token
     */
    public function setLine(int $line): Token
    {
        $this->line = $line;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this::name($this->identifier);
    }

    public static function name(int $identifier): string
    {
        if (isset(static::TOKEN_MAP[$identifier])) {
            return static::TOKEN_MAP[$identifier];
        }

        return token_name($identifier);
    }

    public static function fromArray(array $data)
    {
        return (function (int $identifier, string $content, int $line) {
            $tokenClass = static::TOKEN_TO_CLASS_MAP[$identifier];

            return new $tokenClass($content, $line);
        })(...$data);
    }

    public function toArray(): array
    {
        return [
            $this->getIdentifier(),
            $this->getContent(),
            $this->getLine(),
        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }
}