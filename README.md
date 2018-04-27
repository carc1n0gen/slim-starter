# Slim Starter

A starter app for building php applications with the Slim micro framework

## What's Included?

- Autowiring with PHP-DI
- Twig templates
- Monolog logging
- Csrf Protection (With a twig extension)
- Sessions (with a twig extension)

## Usage

### Session

Inject the \SlimSession\Helper in to your code and then you can set and get session variables easily.

```php
use SlimSession\Helper as SessionHelper;

$app->get('/something', function ($request, $response, SessionHelper $session) {
    // Three ways to get and set session variables

    // 1
    $session->someVar = 'Sweet';
    $message = $session->someVar;
    
    // 2
    $session->set('someVar', 'Sweet');
    $message = $session->get('someVar');

    // 3
    $session['someVar'] = 'Sweet';
    $message = $session['someVar'];
    ...
});
```

There's also a twig extension preloaded which allowes you to easily get session values in your twig views

```html
<p>{{ session('someVar') }}</p>
```

### Csrf

When creating a form you will need to add a hidden token field.  This is taken care of with a simple include:

```html
<form ...>
{% include '_csrf.twig' %}
...
```

## License

slim-starter is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
