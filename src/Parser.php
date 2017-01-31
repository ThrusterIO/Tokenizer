<?php

namespace Thruster\Component\Tokenizer;

use Thruster\Component\Tokenizer\Token\NewLineToken;
use Thruster\Component\Tokenizer\Token\WhitespaceToken;
use Thruster\Component\Tokenizer\Token\ConstantEncapsedStringToken;
use Thruster\Component\Tokenizer\Exception\FileNotFoundException;

/**
 * Class Parser
 *
 * @package Thruster\Component\Tokenizer
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Parser
{
    public function parseFile(string $file): array
    {
        if (false === file_exists($file)) {
            throw new FileNotFoundException($file);
        }

        return $this->parse(file_get_contents($file));
    }

    public function parseBlock(string $blockCode): array
    {
        $tokens = $this->parse('<?php ' . $blockCode);

        array_shift($tokens);
        array_shift($tokens);

        return $tokens;
    }

    public function parse(string $sourceCode): array
    {
        $tokens = [];

        $line = 0;
        foreach (token_get_all($sourceCode) as $data) {
            /** @var Token $token */
            if (false === is_array($data)) {
                $tokenClass = TokenInterface::CHARACTER_TO_CLASS_MAP[$data];

                $tokens[] = new $tokenClass($data, $line);

                continue;
            }

            $tokenClass = TokenInterface::TOKEN_TO_CLASS_MAP[$data[0]];
            $content = $data[1];
            $line = $data[2];

            if ($tokenClass === ConstantEncapsedStringToken::class || 0 === strpos($content, '/*')) {
                $tokens[] = new $tokenClass($content, $line);

                continue;
            }

            $splitContent = preg_split(
                '#(\r\n|\n| +)#',
                $content,
                -1,
               PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY
            );

            foreach ($splitContent as $splitPart) {
                if ("\r\n" === $splitPart || "\n" === $splitPart) {
                    $tokens[] = new NewLineToken($splitPart, $line);
                    $line++;

                    continue;
                }

                if (0 === strpos($splitPart, ' ')) {
                    $tokens[] = new WhitespaceToken($splitPart, $line);

                    continue;
                }

                $tokens[] = new $tokenClass($splitPart, $line);
            }
        }

        return $tokens;
    }
}