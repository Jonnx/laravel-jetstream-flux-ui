# Laravel Jetstream Flux UI

A Laravel package that provides a service provider to publish a set of pre-defined UI views for rapid prototyping or scaffolding.

## Features
- Publishes a collection of ready-to-use Blade views
- Simple integration with Laravel's vendor:publish system

## Quick Start

```
composer require laravel/jetstream
php artisan jetstream:install livewire --teams --dark
npm install
npm run build
php artisan migrate:fresh
composer require jonnx/laravel-jetstream-flux-ui
php artisan vendor:publish --tag=jetstream-flux-ui-views --force
php artisan vendor:publish --tag=jetstream-flux-ui-build-config --force
npm remove tailwindcss
npm add tailwindcss --include=dev
npm add @tailwindcss/postcss --include=dev
php artisan flux:activate
npm run build
```

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


## Global Helper: `initials()`

This package provides a globally available helper function called `initials()`. You can use it in your Blade templates or anywhere in your application to get the uppercase initials of a string:

```blade
{{ initials('Jane Doe') }} <!-- Outputs: JD -->
```

After publishing, you can customize the views in your application's `resources/views/vendor/jetstream-flux-ui` directory as needed.

## Example

A sample view is included:

```
resources/views/vendor/jetstream-flux-ui/example.blade.php
```

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).
