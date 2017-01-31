# Tokenizer Component

[![Latest Version](https://img.shields.io/github/release/ThrusterIO/tokenizer.svg?style=flat-square)](https://github.com/ThrusterIO/tokenizer/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/travis/ThrusterIO/tokenizer.svg?style=flat-square)](https://travis-ci.org/ThrusterIO/tokenizer)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/ThrusterIO/tokenizer.svg?style=flat-square)](https://scrutinizer-ci.com/g/ThrusterIO/tokenizer)
[![Quality Score](https://img.shields.io/scrutinizer/g/ThrusterIO/tokenizer.svg?style=flat-square)](https://scrutinizer-ci.com/g/ThrusterIO/tokenizer)
[![Total Downloads](https://img.shields.io/packagist/dt/thruster/tokenizer.svg?style=flat-square)](https://packagist.org/packages/thruster/tokenizer)

[![Email](https://img.shields.io/badge/email-aurimas@niekis.lt-blue.svg?style=flat-square)](mailto:aurimas@niekis.lt)

The Thruster Tokenizer Component.


## Install

Via Composer

```bash
$ composer require thruster/tokenizer
```

## Usage

```php
use Thruster\Component\Tokenizer\Parser;

$parser = new Parser();

$parser->parse('<?php ... ?>'); // => Token[]
$parser->parseBlock('function fooBar(){...};'); // => Token[]
$parser->parseFile('/some/file.php'); // => Token[]
```

## Testing

```bash
$ composer test
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.


## License

Please see [License File](LICENSE) for more information.
