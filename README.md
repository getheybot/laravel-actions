# Actions

[![Latest Version on Packagist](https://img.shields.io/packagist/v/getheybot/laravel-actions.svg?style=flat-square)](https://packagist.org/packages/getheybot/laravel-actions)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/getheybot/laravel-actions/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/getheybot/laravel-actions/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/getheybot/laravel-actions/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/getheybot/laravel-actions/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/getheybot/laravel-actions.svg?style=flat-square)](https://packagist.org/packages/getheybot/laravel-actions)
<!--delete-->
---
This package introduces a new way of organising the logic of your Laravel applications by focusing on the actions your applications provide.

Instead of creating controllers, jobs, listeners and so on, it allows you to create a PHP class that handles a specific task and run that class as anything you want.

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require getheybot/laravel-actions
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-actions-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-actions-views"
```

## Usage

```php
$laravelActions = new Heybot\LaravelActions();
echo $laravelActions->echoPhrase('Hello, Heybot!');
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

- [Heybot](https://github.com/getheybot)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
