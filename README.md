# Slim Starter

A starter app for building php applications with the Slim micro framework

## What's Included?

- Autowiring with PHP-DI
- Twig templates
- Monolog logging
- Csrf Protection (With a twig extensions)

## Usage

### Csrf

When creating a form you will need to add a hidden token field.  This is taken care of with a simple include:

```
<form ...>
{% include '_csrf.twig' %}
...
```

## License

slim-starter is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
