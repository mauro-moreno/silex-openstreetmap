# Silex OpenStreetMap

Silex Wrapper for the OpenStreetMap API

## Installation

Require the latest version of Scientist Laravel using [Composer](https://getcomposer.org/).

    composer require mauro-moreno/silex-openstreetmap

Enable Service Provider

```php
<?php
$app = new Silex\Application;
$app->register(new MauroMoreno\OpenStreetMap\Silex\OpenStreetMapServiceProvider);
```

## Usage

```php
<?php
$app['openstreetmap.nominatim']->reverse(40.748817, -73.985428);
```