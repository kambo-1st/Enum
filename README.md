# Kambo PHP enum library
[![Build Status](https://travis-ci.org/kambo-1st/Enum.svg?branch=master)](https://travis-ci.org/kambo-1st/Enum)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/kambo-1st/Enum/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/kambo-1st/Enum/?branch=master)

Just another PHP enumeration library

## Install

Prefered way to install library is with composer:
```sh
composer require kambo/enum
```

## Usage
Enumeration is declared by implementing class ```Kambo\Enum\Enum``` and adding class constants:

```php
use Kambo\Enum\Enum;

class Foo extends Enum {
    const BAR = 'bar';
    const QUX = 'qux';
}
```

Base enum class implement following usefull methods:

```toArray``` convert whole enumeration to array with constant name in key and Enum instance in value

Following example code:
```php
$array = Foo::toArray();
var_dump($array);
```

Will print:
```php
array(2) {
  'BAR' =>
  string(3) "bar"
  'QUX' =>
  string(3) "qux"
}
```

There is also alias method called ```values``` which just called ```toArray``` method.

```inEnum``` check if the provided value is in enumeration:

```php
$existInEnum = Foo::inEnum('bar');
// print true as the value exists in enumeration
echo $existInEnum;

$existInEnum = Foo::inEnum('agh');
// print false as the value does not exists in enumeration
echo $existInEnum;

```
## License
The MIT License (MIT), https://opensource.org/licenses/MIT
