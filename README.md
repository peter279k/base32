<<<<<<< HEAD
base32
======

Base32 Encoder/Decoder for PHP according to [RFC 4648](https://tools.ietf.org/html/rfc4648).

[![Build Status](https://secure.travis-ci.org/ChristianRiesen/base32.png)](http://travis-ci.org/ChristianRiesen/base32)
[![HHVM Status](http://hhvm.h4cc.de/badge/christian-riesen/base32.png)](http://hhvm.h4cc.de/package/christian-riesen/base32)

[![Latest Stable Version](https://poser.pugx.org/christian-riesen/base32/v/stable.png)](https://packagist.org/packages/christian-riesen/base32) [![Total Downloads](https://poser.pugx.org/christian-riesen/base32/downloads.png)](https://packagist.org/packages/christian-riesen/base32) [![Latest Unstable Version](https://poser.pugx.org/christian-riesen/base32/v/unstable.png)](https://packagist.org/packages/christian-riesen/base32) [![License](https://poser.pugx.org/christian-riesen/base32/license.png)](https://packagist.org/packages/christian-riesen/base32)

Do you like this? Flattr it:

[![Flattr base32](http://api.flattr.com/button/flattr-badge-large.png)](http://flattr.com/thing/720563/ChristianRiesenbase32-on-GitHub)

Usage
-----

```php
<?php

// Include class or user autoloader
use Base32\Base32;

$string = 'fooba';

$encoded = Base32::encode($string);
// $encoded contains now 'MZXW6YTB'

$decoded = Base32::decode($encoded);
// $decoded is again 'fooba'
```

About
=====

Use
---

Initially created to work with the [one time password project](https://github.com/ChristianRiesen/otp), yet it can stand alone just as well as [Jordi Boggiano](http://seld.be/) kindly pointed out. It's the only Base32 implementation I could make work that passes the test vectors (and contains unit tests).

Goal
----
Have a RFC compliant Base32 encoder and decoder. The implementation could be improved, but for now, it does the job and has unit tests. Ideally, the class can be enhanced while the unit tests keep passing.

Requirements
------------

PHP 5.3 to 5.6 or 7.0+

If you want to run the tests, PHPUnit 5.0+ or up is required. Tests require PHP 5.6 or 7.0+.

Author
------

Christian Riesen <chris.riesen@gmail.com> http://christianriesen.com

Acknowledgements
----------------

Base32 is mostly based on the work of https://github.com/NTICompass/PHP-Base32
=======
# Base32

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Base32 string encoder based on [RFC 4648](https://tools.ietf.org/html/rfc4648#section-6).

## Installation

Via Composer

```
$ composer require odan/base32
```

## Requirements

* PHP 7.0+

## Usage

```php
use Odan\Encoding\Base32;

$str = "abc 1234";

// Encode
$base32 = new Base32();
$encoded = $base32->encode($str); // MFRGGIBRGIZTI====

// Decode
echo $base32->decode($encoded); // abc 1234
```

### Without padding and only lowercase

```php
$str = "abc 1234";

// Encode
$encoded = $base32->encode($str, false);
$encoded = strtolower($enc); // mfrggibrgizti

// Decode
echo $base32->decode($encoded);
```

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Credits
* Bryan Ruiz

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/odan/base32.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/odan/base32/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/odan/base32.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/odan/base32.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/odan/base32.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/odan/base32
[link-travis]: https://travis-ci.org/odan/base32
[link-scrutinizer]: https://scrutinizer-ci.com/g/odan/base32/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/odan/base32
[link-downloads]: https://packagist.org/packages/odan/base32
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
>>>>>>> 4730400d5f88dfbaf1370473e5fd109d00b06985
