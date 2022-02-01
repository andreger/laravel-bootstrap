# Laravel Bootstrap

[![Latest Version on Packagist](https://img.shields.io/packagist/v/asgedev/laravel-bootstrap.svg?style=flat-square)](https://packagist.org/packages/asgedev/laravel-bootstrap)
[![Run Tests](https://github.com/asgedev/laravel-bootstrap/actions/workflows/php.yml/badge.svg)](https://github.com/asgedev/laravel-bootstrap/actions/workflows/php.yml)

## Documentation, Installation, and Usage Instructions

See the [documentation](https://libs.asge.com.br/docs/laravel-bootstrap/) for detailed installation and usage instructions.

## What It Does
This library provides a collection of Bootstrap components.

### Anchor
```html
<x-bs-a-primary href="/" text="My Link" fas="check">
```

It will be rendered as:

```html
<a href="/" class="btn btn-primary">
    <i class="fas fa-check"></i> My Link
</a>
```

| Attribute | Type | Default | Descriptions |
| ----------- | ----------- |
| id | string | null | Component ID |
| themeColor | string | null | Bootstrap theme color (e.g., primary) |
| href | string | null | Destination link |
| text | string | null | Link text |
| target | string | null | Link target |
| class | string | null | Component classes separeted by spaces |
| fas | string | null | Font Awesome Solid icon (e.g., times) |

