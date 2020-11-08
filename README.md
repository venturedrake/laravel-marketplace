# Laravel Marketplace

<!--- [![Latest Version on Packagist](https://img.shields.io/packagist/v/venturedrake/laravel-marketplace.svg?style=flat-square)](https://packagist.org/packages/venturedrake/laravel-marketplace) --->
[![Build Status](https://travis-ci.com/venturedrake/laravel-marketplace.svg?branch=master)](https://travis-ci.com/venturedrake/laravel-marketplace)
[![StyleCI](https://github.styleci.io/repos/310991233/shield?branch=master)](https://github.styleci.io/repos/310991233?branch=master)
<!--- [![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/venturedrake/laravel-marketplace/run-tests?label=tests)](https://github.com/venturedrake/laravel-marketplace/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/venturedrake/laravel-marketplace.svg?style=flat-square)](https://packagist.org/packages/venturedrake/laravel-marketplace) --->

> ⚠️ Warning: This is a pre-release version that is not yet ready for production use.

## Installation

You can install the package via composer:

```bash
composer require venturedrake/laravel-marketplace
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="VentureDrake\LaravelMarketplace\LaravelMarketplaceServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="VentureDrake\LaravelMarketplace\LaravelMarketplaceServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$laravel-marketplace = new VentureDrake\LaravelMarketplace();
echo $laravel-marketplace->echoPhrase('Hello, VentureDrake!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Andrew Drake](https://github.com/AndrewDrake)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
