# Laravel Bootstrap

[![Latest Version on Packagist](https://img.shields.io/packagist/v/asgedev/laravel-bootstrap.svg?style=flat-square)](https://packagist.org/packages/asgedev/laravel-bootstrap)
[![Run Tests](https://github.com/asgedev/laravel-bootstrap/actions/workflows/php.yml/badge.svg)](https://github.com/asgedev/laravel-bootstrap/actions/workflows/php.yml)

## Documentation, Installation, and Usage Instructions

See the [documentation](https://libs.asge.com.br/docs/laravel-bootstrap/) for detailed installation and usage instructions.

## What It Does
This library provides a collection of Bootstrap components.

## Available Components

- [Anchor](#anchor)
- [Tab](#tab)

---

## Anchor

### Syntax

```html
<x-bs-a-primary href="/" text="My Link" fas="check" />
```

It will be rendered as:

```html
<a href="/" class="btn btn-primary">
    <i class="fas fa-check"></i> My Link
</a>
```

### Variations

```html
<x-bs-a-danger ... />
<x-bs-a-dark ... />
<x-bs-a-info ... />
<x-bs-a-light ... />
<x-bs-a-primary ... />
<x-bs-a-secondary ... />
<x-bs-a-success ... />
<x-bs-a-warning ... />
<x-bs-a-outline-danger ... />
<x-bs-a-outline-dark ... />
<x-bs-a-outline-info ... />
<x-bs-a-outline-light ... />
<x-bs-a-outline-primary ... />
<x-bs-a-outline-secondary ... />
<x-bs-a-outline-success ... />
<x-bs-a-outline-warning ... />
```

### Attributes

| Attribute | Type | Default | Descriptions |
|---|---|---|---|
| id | string | null | Component ID |
| themeColor | string | null | Bootstrap theme color (e.g., primary) |
| href | string | null | Destination link |
| text | string | null | Link text |
| target | string | null | Link target |
| class | string | null | Component classes separeted by spaces |
| fas | string | null | Font Awesome solid icon (e.g., check) |
| far | string | null | Font Awesome regular icon (e.g., clock) |
| fab | string | null | Font Awesome brand icon (e.g., git) |

---

## Tab

### Syntax

```php
$items = [
    [
        'id' => 1,
        'text' => 'Item 1',
        'href' => '/',
        'disable' => false,
        'fas' => 'check',
    ]
];
```

```html
<x-bs-tab :items="$items" selected="1" />
```

It will be rendered as:

```html
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="/"
            <i class="fas fa-check"></i> Item 1
        </a>
    </li>
</ul>
```

### Attributes

| Attribute | Type | Default | Descriptions |
|---|---|---|---|
| items | array | null | Array of items |
| selected | string | null | Selected tab item ID |
| target | string | null | Link target |
| class | string | null | Component classes separeted by spaces |

### Item Properties

| Key | Type | Default | Descriptions |
|---|---|---|---|
| id | string | null | Item ID |
| text | string | null | Tab text |
| href | string | null | Tab link |
| disabled | bool | false | Disable tab item |
| fas | string | null | Font Awesome solid icon (e.g., check) |
| far | string | null | Font Awesome regular icon (e.g., clock) |
| fab | string | null | Font Awesome brand icon (e.g., git) |
