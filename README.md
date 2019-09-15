[![Build Status](https://travis-ci.com/ulrack/codec.svg?branch=master)](https://travis-ci.com/ulrack/codec)

# Ulrack Codec

This package contains Encoding and Decoding interfaces, including a codec for JSON and YAML. 

## Installation

To install the package run the following command:

```
composer require ulrack/codec
```

## Usage

Two implementations are provided in this package.

### [JsonCodec](src/Component/JsonCodec.php)

This class provides a encoder and decoder in one implementation. In the constructor, additional options can be configured.

A simple encode/decode example looks like:
```php
<?php

use Ulrack\Codec\Component\JsonCodec;

$jsonCodec = new JsonCodec();

// {"foo": "bar"}
$encoded = $jsonCodec->encode(['foo' => 'bar']);

// ['foo' => 'bar']
$decoded = $jsonCodec->decode($encoded);
```

### [YamlCodec](src/Component/YamlCodec.php)

This class provides a encoder and decoder in one implementation. In the constructor, additional options can be configured. It uses the [PHP YAML PECL package](https://pecl.php.net/package/yaml).

A simple encode/decode example looks like:
```php
<?php

use Ulrack\Codec\Component\YamlCodec;

$jsonCodec = new YamlCodec();

// foo: bar
$encoded = $jsonCodec->encode(['foo' => 'bar']);

// ['foo' => 'bar']
$decoded = $jsonCodec->decode($encoded);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## MIT License

Copyright (c) 2019 Jyxon

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
