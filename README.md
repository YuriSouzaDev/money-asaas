# Money Asaas

[![Latest Version on Packagist](https://img.shields.io/packagist/v/yurisouzadev/money-asaas.svg?style=flat-square)](https://packagist.org/packages/yurisouzadev/money-asaas)
[![Tests](https://github.com/YuriSouzaDev/money-asaas/actions/workflows/tests.yml/badge.svg)](https://github.com/YuriSouzaDev/money-asaas/actions/workflows/tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/yurisouzadev/money-asaas.svg?style=flat-square)](https://packagist.org/packages/yurisouzadev/money-asaas)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require yurisouzadev/money-asaas
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="money-asaas-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="money-asaas-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="money-asaas-views"
```

## Usage

```php
$moneyAsaas = new Moneyasaas\MoneyAsaas();
echo $moneyAsaas->echoPhrase('Hello, Moneyasaas!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Yuri Souza](https://github.com/YuriSouzaDev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
