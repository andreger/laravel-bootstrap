# Laravel Bootstrap

[![Latest Version on Packagist](https://img.shields.io/packagist/v/asgedev/laravel-bootstrap.svg?style=flat-square)](https://packagist.org/packages/asgedev/laravel-bootstrap)
[![Run Tests](https://github.com/asgedev/laravel-bootstrap/actions/workflows/php.yml/badge.svg)](https://github.com/asgedev/laravel-bootstrap/actions/workflows/php.yml)

## Documentation, Installation, and Usage Instructions

See the [documentation](https://libs.asge.com.br/docs/laravel-bootstrap/) for detailed installation and usage instructions.

## What It Does
This library provides a collection of Bootstrap components.

## Available Components

- [Anchor](#anchor)
- [Navbar](#navbar)
- [Tab](#tab)
- [Table](#table)

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

## Navbar

### Syntax

```php
$items = [
    [
        'id' => 1,
        'text' => 'Item 1',
        'href' => '/',
    ]
];
```

```html
<x-bs-navbar :items="$items" selected="1" themeColor="light" bgThemeColor="light">Company Name</x-bs-navbar>
```
It will be rendered as:

```html
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        Company Name
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarItems" aria-controls="navbarItems" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarItems">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Item 1</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
```
### Attributes

| Attribute | Type | Default | Descriptions |
|---|---|---|---|
| items | array | null | Array of items |
| selected | string | null | Selected tab item ID |
| themeColor | string | null | Navbar theme color. Available values: light, dark |
| bgThemeColor | string | null | Background theme color |
| class | string | null | Additional classes |

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

---

## Table

### Syntax

```php
$data  = [
    [
        'First',
        'Last',
        'Handle',
    ],
    [
        'Jonh',
        'Otto',
        '@mdo'
    ],   
    [
        'Jacob',
        'Thornton',
        '@fat'
    ],   
    [
        'Larry',
        'the Bird',
        '@twitter'
    ],   
];
```

```html
<x-bs-table :data="$data" :hasHead="true" />
```

It will be rendered as:

```html
<table class="table">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
```

### Variations

```html
<x-bs-table-danger ... />
<x-bs-table-dark ... />
<x-bs-table-info ... />
<x-bs-table-light ... />
<x-bs-table-primary ... />
<x-bs-table-secondary ... />
<x-bs-table-success ... />
<x-bs-table-warning ... />
```

### Attributes

| Attribute | Type | Default | Descriptions |
|---|---|---|---|
| data | array | null | Table data items |
| hasHead | bool | false | Uses the first data item as thead row  |
| hasFoot | bool | false | Uses the last data item as tfoot row  |
| striped | bool | false | Adds zebra-striping to any table row within the tbody  |
| hover | bool | false | Enables a hover state on table rows within a tbody |
| bordered | bool | false | Adds borders on all sides of the table and cells |
| borderless | bool | false | Removes borders on all sides of the table and cells |
| small | bool | false | Makes table more compact by cutting all cell padding in half |
| caption | string | null | Adds a caption to the table |
