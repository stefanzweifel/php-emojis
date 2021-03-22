# Up to date Emojis as PHP Classes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wnx/php-emojis.svg?style=flat-square)](https://packagist.org/packages/wnx/php-emojis)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/wnx/php-emojis/Tests?label=tests)](https://github.com/wnx/php-emojis/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/wnx/php-emojis.svg?style=flat-square)](https://packagist.org/packages/wnx/php-emojis)


A composer package containing all available Emoji combinations as PHP classes. Why? Why not?!

## Installation

You can install the package via composer:

```bash
composer require wnx/emojis
```

## Usage

```php
use Wnx\Emojis\Emojis\Princess;

$emoji = new Princess();
echo $emoji->symbol();

Princess::SYMBOL;
Princess::HEX;
Princess::CODE;
Princess::NAME;
Princess::GROUP;
Princess::NAME_WITH_UNDERSCORES;
Princess::TAGS;
```

## Testing

```bash
composer test
```

## Create Build

Regenerate Emoji classes by running the following commands.

```bash
composer install
yarn
composer run build
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Stefan Zweifel](https://github.com/stefanzweifel)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
