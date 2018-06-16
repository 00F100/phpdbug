# phpdbug

Debug for PHP scripts

[![Total Downloads](https://poser.pugx.org/00F100/phpdbug/downloads)](https://packagist.org/packages/00F100/phpdbug)

## Installation
--------------------

Run on terminal:

```sh

composer require 00f100/phpdbug

```

Or add in your composer.json

```json

"require-dev": {
    "00f100/phpdbug": "*"
},

```

## Usage
--------------------

Run in your code:

```php
<?php

$var = array(
   'foo' => 'bar'
);

// Force die
debug($var);
// or
d($var);

// Non-force die
debug($var, false);
// or
d($var, false);

```