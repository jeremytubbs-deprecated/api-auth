Laravel Api Auth
==

### Setup
Add service provider to `app/config`:

```php
Jeremytubbs\ApiAuth\ApiAuthServiceProvider::class,
````

Publish the `api-auth.php` config:
```sh
php artisan vendor:publish
```

Add a `'api-auth' => []` $middlewareGroups in `app\Http\Kernel.php`. The login route is protected by the ThrottelsLogins trait.
