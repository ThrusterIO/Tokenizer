<?php

namespace Thruster\Component\Tokenizer\Exception;

use Exception;
use InvalidArgumentException;

/**
 * Class FileNotFoundException
 *
 * @package Thruster\Component\Tokenizer\Exception
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class FileNotFoundException extends InvalidArgumentException
{
    /**
     * @inheritDoc
     */
    public function __construct(string $file)
    {
        $message = sprintf(
            'File "%s" not found!',
            $file
        );

        parent::__construct($message);
    }
}