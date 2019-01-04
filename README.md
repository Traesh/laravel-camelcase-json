# laravel-uppercamelcase-json

Convert response JSON key to UpperCamelCase.

## Usage

**In controller class**

```php
return response()->json($model);
// => ['UserName' => 'foo', 'UserKey' => 'bar', ...]
```

## Requirements

- Laravel 5+

## Install 

```bash
$ composer require 'traesh/laravel-uppercamelcase-json' '~1.0'
```

Add the service provider.

**config/app.php**

```php
'provider' => [
	// default providers
	// ...
	
	Traesh\LaravelUpperCamelCaseJson\UpperCamelCaseJsonResponseServiceProvider::class,
],
```
