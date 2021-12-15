# Laravel World
A simple package for the world data (Country, State and City)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/devsbuddy/laravel-world.svg?style=flat-square)](https://packagist.org/packages/devsbuddy/laravel-world)
[![Total Downloads](https://img.shields.io/packagist/dt/devsbuddy/laravel-world.svg?style=flat-square)](https://packagist.org/packages/devsbuddy/laravel-world)
[GitHub Actions](https://github.com/devsbuddy/laravel-world/actions/workflows/main.yml/badge.svg)

Get the country state and city related data for your laravel projects.

## Installation

You can install the package via composer:

```bash
composer require thedevsbuddy/laravel-world
```

Publish the assets and resources
```bash
php artisan vendor:publish --provider="Devsbuddy\LaravelWorld\LaravelWorldServiceProvider"
```


## Usage
Load ```laraworldScripts``` In your ```app.blade.php``` or wherever needed use this
```php
@laraworldScripts
```


### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email shoaibkhan@devsbuddy.com instead of using the issue tracker.

## Credits

-   [Shoaib Khan](https://github.com/devsbuddy)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
