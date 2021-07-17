# Blade Icons Template

<a href="https://github.com/ssmusoke/blade-healthicons/actions?query=workflow%3ATests">
    <img src="https://github.com/ssmusoke/blade-healthicons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/ssmusoke/blade-healthicons">
    <img src="https://img.shields.io/packagist/v/ssmusoke/blade-healthicons?style=pl" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/ssmusoke/blade-healthicons">
    <img src="https://img.shields.io/packagist/dt/ssmusoke/blade-healthicons" alt="Total Downloads">
</a>

A package to easily make use of [Health Icons](https://healthicons.org/) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [healthicons.org](https://healthicons.org/).

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

```bash
composer require ssmusoke/blade-healthicons
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Blade Icons

Blade HealthIcons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade HealthIcons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-healthicons.php` config file:

```bash
php artisan vendor:publish --tag=blade-healthicons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-healthicon-o-health_worker/>
```

You can also pass classes to your icon components:

```blade
<x-healthicon-o-health_worker class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-healthicon-o-health_worker style="color: #555"/>
```
There are 3 types of styles for each icon: 
1. Filled
```blade
<x-healthicon-f-health_worker/>
```
2. Negative
```blade
<x-healthicon-n-health_worker/>
```
3. Outline
```blade
<x-healthicon-f-health_worker/>
```
### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-healthicons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-healthicons/o-adjustments.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade HealthIcons is developed and maintained by [Stephen Senkomago Musoke](https://ssmusoke.com)

## License

Blade HealthIcons is open-sourced software licensed under [the MIT license](LICENSE.md).
