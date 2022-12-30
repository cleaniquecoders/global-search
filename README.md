# A simplified global search for Laravel Scout

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cleaniquecoders/global-search.svg?style=flat-square)](https://packagist.org/packages/cleaniquecoders/global-search)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/cleaniquecoders/global-search/run-tests?label=tests)](https://github.com/cleaniquecoders/global-search/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/cleaniquecoders/global-search/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/cleaniquecoders/global-search/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/cleaniquecoders/global-search.svg?style=flat-square)](https://packagist.org/packages/cleaniquecoders/global-search)

A simplified global search for Laravel Scout.

## Installation

You can install the package via composer:

```bash
composer require cleaniquecoders/global-search
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="global-search-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="global-search-config"
```

## Usage

Install [Laravel Scout](https://laravel.com/docs/9.x/scout#installation).

Then configure your model so that it's [searchable](https://laravel.com/docs/9.x/scout#configuring-searchable-data).

Next, add the following in your `routes/api.php`:

```php

use CleaniqueCoders\GlobalSearch\GlobalSearch;

GlobalSearch::routes();
```

You may now use the API search route in your front-end:

```javascript
axios.get('search', {
    'type' => 'user',
    'keyword' => 'nasrul'
})
.then(...)
```

If you need to call within your application, from the back-end, you can use the `search()` helper:

```php
// get the first result
search(\App\Models\User::class, 'nasrul');

// get all possible result by passing true to the third argument
// this will return a paginated result
search(\App\Models\User::class, 'nasrul', true);
```

To add more search capabilities, you may add more enum values as in `app/Enums/SearchType` class.

```php
<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self user()
 * @method static self profile()
 */
class SearchType extends Enum
{
    public static function values(): array
    {
        return [
            'user' => \App\Models\User::class,
            'profile' => \App\Models\Profile::class,
        ];
    }

    protected static function labels(): array
    {
        return [
            'user' => __('User'),
            'profile' => __('Profile'),
        ];
    }
}
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

- [Nasrul Hazim Bin Mohamad](https://github.com/cleaniquecoders)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
