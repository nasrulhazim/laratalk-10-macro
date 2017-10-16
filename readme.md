# Laravel Macros

Search for `use Illuminate\Support\Traits\Macroable;`

1. Rule
2. Translator
3. Str
4. Collection
5. Carbon
6. Arr
7. UrlGenerator
8. Router
9. Route
10. ResponseFactory
11. Mailer
12. UploadFile
13. Response
14. Request
15. RedirectResponse
16. JsonResponse
17. TestResponse
18. PresetCommand
19. Filesystem
20. Blueprint
21. Builder
22. Relation
23. FactoryBuilder
24. Event
25. Repository
26. SessionGuard
27. RequestGuard

## Response Macro

```
$ php artisan make ResponseMacroServiceProvider
```

Register `ResponseMacroServiceProvider` in `config/app.php`, in `providers` key.

```
App\Providers\ResponseMacroServiceProvider::class,
```

In `boot()` method, add the following:

```php
Response::macro('title', function ($value) {
    return Response::make(title_case($value));
});
```

In `routes/console.php`, you can test the new response type/macro:

```php
$this->comment(
    response()->title('some random string ssAsdsad loREM ipSum')
);
```

## Collection Macro

```
$ php artisan make CollectionMacroServiceProvider
```

Register `CollectionMacroServiceProvider` in `config/app.php`, in `providers` key.

```
App\Providers\CollectionMacroServiceProvider::class,
```

In `routes/console.php`, you can test the new response type/macro:

```php
collect()->ifEmpty(function (Collection $collection) {
    echo 'hi, you are empty now.' . PHP_EOL;
});
collect([1, 2, 3])->ifEmpty(function (Collection $collection) {
    echo 'hi, you are not empty now.' . PHP_EOL;
});
```

