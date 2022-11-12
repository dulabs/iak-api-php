# API PHP SDK - IAK
![php version requirement](https://img.shields.io/badge/php%20version-%3E=%205.6-red)

PHP library to help you integrate your system to Indobest Artha Kreasi (IAK) API services. This library consists of two sections, **prepaid** and **postpaid**

**Note**: 
- You have to register yourself first on this [link](https://iak.id) to get the access key for our API services
- Parameter used in IAK API's functions is in the form of single **array** parameter which consists of zero or multiple available field(s)
- Response given by each function is in the form of a single **array**. Please refer to each section's response example for more details

## Installation
Using Composer

```php
composer require iak-id/iak-api-php
```

## Getting Started
You can use below snippet code to use our check balance service on prepaid API and get our pricelist on postpaid API to get started on our SDK.

### Prepaid

```php
<?php
// import autoload
require_once __DIR__ . "/vendor/autoload.php";

// import IAKPrepaid Class
use Dulabs\IakApiPHP\Services\IAKPrepaid;

$iakPrepaid = new IAKPrepaid([
  'userHp' => 'your-username',
  'apiKey' => 'your-api-key-depending-on-stage',
  'stage' => 'sandbox-or-production'
]);

$balanceResult = $iakPrepaid->checkBalance();
echo $balanceResult;
```

### Postpaid
```php
<?php
// import autoload
require_once __DIR__ . "/vendor/autoload.php";

// Import IAKPostpaid Class
use Dulabs\IakApiPHP\Services\IAKPostpaid;

$iakPostpaid = new IAKPostpaid([
  'userHp' => 'your-username',
  'apiKey' => 'your-api-key-depending-on-stage',
  'stage' => 'sandbox-or-production'
]);

$pricelistResult = $iakPostpaid->pricelist();
echo $pricelistResult;

```

## Documentation
You can find the documentation of this package at [API SDK docs](https://api.iak.id/docs/sdk/docs/php/introduction.md)


## Changelog
See [CHANGELOG](https://api.iak.id/docs/sdk/docs/php/changelog.md) for more information on what has changed recently


## Contributing
You can contribute on the development of this package by [opening new issue(s)](https://github.com/iak-id/iak-api-php/issues) when encountering any bugs or issues in this project or by [submitting new pull request(s)](https://github.com/iak-id/iak-api-php/pulls) to contribute directly to the code
