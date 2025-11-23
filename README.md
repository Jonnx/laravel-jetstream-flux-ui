# Laravel Jetstream Flux UI

A Laravel package that provides a service provider to publish a set of pre-defined UI views for rapid prototyping or scaffolding.

## Features
- Publishes a collection of ready-to-use Blade views
- Simple integration with Laravel's vendor:publish system

## Installation

1. Require the package in your Laravel project (if published to a repository):
   ```bash
   composer require jonnx/laravel-jetstream-flux-ui
   ```
2. The service provider is auto-discovered via Laravel's package discovery.

## Publishing Views

To publish the package's views to your application's `resources/views/vendor/jetstream-flux-ui` directory, run:

```bash
php artisan vendor:publish --tag=jetstream-flux-ui-views
```

## Usage

After publishing, you can customize the views in your application's `resources/views/vendor/jetstream-flux-ui` directory as needed.

## Example

A sample view is included:

```
resources/views/vendor/jetstream-flux-ui/example.blade.php
```

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).
