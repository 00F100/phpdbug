# phpdbug

Debug for PHP scripts

Installation
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

Usage
--------------------

Run in your code:

```php
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