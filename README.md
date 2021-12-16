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

Publish the assets
```bash
php artisan vendor:publish --provider="Devsbuddy\Laraworld\LaraworldServiceProvider"
```

Create Country, State and City tables and Import data.
```bash
php artisan laraworld:import
```

## Usage
#### jQuery
LaraWorld uses ajax to fetch the country state and city data which requires ```jQuery``` as a dependency. 
So you will have to use ```jQuery``` in the page before adding ```laraworldScripte``` in the page.

Load ```jQuery``` and ```laraworldScripts``` In your ```app.blade.php``` or wherever needed.
```html
<body>
    <!-- ...Other stuffs -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @laraworldScripts
</body>
```

To show dropdown in any page for the country, state and city you can use.
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

### Additional options

#### Set default value
If you want to set the default selected option / value you can do that as well.
To set default value you can pass ```data-value``` property in the ```select``` element.

**Example**
```html
<!-- 101 is the id of country (India) -->
<select id="country" name="country" data-value="101"></select> 
```

#### Select2
If you want to use ```select2``` on your app we have also covered it.

To initialized ```select2``` just add ```select2``` class in the select element.

#### Example
```html
<select id="country" name="country" class="select2"></select>
```
**Note:- You will have to import ```select2``` CDN in the page.**

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email shoaibkhan@devsbuddy.com instead of using the issue tracker.

## Credits

-   [Shoaib Khan](https://github.com/devsbuddy)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
