# Pandoc PHP Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ueberdosis/pandoc.svg?style=flat-square)](https://packagist.org/packages/ueberdosis/pandoc)
[![Build Status](https://github.com/ueberdosis/pandoc/workflows/run-tests/badge.svg)](https://github.com/ueberdosis/pandoc/actions)
[![Total Downloads](https://img.shields.io/packagist/dt/ueberdosis/pandoc.svg?style=flat-square)](https://packagist.org/packages/ueberdosis/pandoc)

If you need to convert files from one markup format into another, pandoc is your swiss-army knife. This package is a PHP wrapper for the command-line tool used for [Alldocs](https://alldocs.app).

## Installation

You can install the package via composer:

```bash
composer require ueberdosis/pandoc
```

## Usage

### Return the converted text

``` php
$output = (new \Ueberdosis\Pandoc\Pandoc)
    ->from('markdown')
    ->input("# Test")
    ->to('html')
    ->run();
```

### Use a file as input and write a file as output

``` php
(new \Ueberdosis\Pandoc\Pandoc)
    ->from('markdown')
    ->inputFile('tests/data/example.md')
    ->to('plain')
    ->output('tests/temp/example.txt')
    ->run();
```

### Change path to Pandoc

``` php
new \Ueberdosis\Pandoc\Pandoc([
    'command' => '/usr/local/bin/pandoc',
]);
```

### List available input formats

``` php
(new \Ueberdosis\Pandoc\Pandoc)->listInputFormats()
```

### List available output formats

``` php
(new \Ueberdosis\Pandoc\Pandoc)->listOutputFormats();
```

### Write a log file

``` php
echo (new \Ueberdosis\Pandoc\Pandoc)
    ->from('markdown')
    ->input("# Markdown")
    ->to('html')
    ->log('log.txt')
    ->run();
```

### Retrieve Pandoc version

``` php
echo (new \Ueberdosis\Pandoc\Pandoc)->version();
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Hans Pagel](https://github.com/hanspagel)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
