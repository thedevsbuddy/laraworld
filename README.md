# LaraWorld
A simple package for the world data (Country, State and City)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/thedevsbuddy/laravel-world.svg?style=flat-square)](https://packagist.org/packages/thedevsbuddy/laraworld)
[![Total Downloads](https://img.shields.io/packagist/dt/thedevsbuddy/laravel-world.svg?style=flat-square)](https://packagist.org/packages/thedevsbuddy/laraworld)

Get the country state and city related data for your laravel projects.

## Installation

You can install the package via composer:

```bash
composer require thedevsbuddy/laraworld
```

Publish the assets and resources
```bash
php artisan vendor:publish --provider="Devsbuddy\Laraworld\LaraworldServiceProvider"
```


## Usage
Load ```laraworldScripts``` In your ```app.blade.php``` or wherever needed use this
```php
@laraworldScripts
```

To show dropdown in any page for the country state and city you cab use
```html
<!-- Country Dropdown -->
<select name="country" id="country"></select>
<!-- State Dropdown -->
<select name="state" id="state"></select>
<!-- City Dropdown -->
<select name="city" id="city"></select>
```

That's it, You don't have to do anything else.
Now it will automatically populate the countries and when you select a country it will show state list and so on.

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
