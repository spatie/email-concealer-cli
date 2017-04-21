# Conceal e-mail addresses in a file

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/email-concealer-cli.svg?style=flat-square)](https://packagist.org/packages/spatie/email-concealer-cli)
[![Build Status](https://img.shields.io/travis/spatie/email-concealer-cli/master.svg?style=flat-square)](https://travis-ci.org/spatie/email-concealer-cli)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/dcf931ff-0d0e-420e-86c3-79b2f1db5822.svg?style=flat-square)](https://insight.sensiolabs.com/projects/dcf931ff-0d0e-420e-86c3-79b2f1db5822)
[![Quality Score](https://img.shields.io/scrutinizer/g/spatie/email-concealer-cli.svg?style=flat-square)](https://scrutinizer-ci.com/g/spatie/email-concealer-cli)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/email-concealer-cli.svg?style=flat-square)](https://packagist.org/packages/spatie/email-concealer-cli)

CLI tool for concealing e-mails in a file by replacing their domain. Useful for concealing up production data—like MySQL dumps—so you can use it locally without worrying about having real addresses on your system.

This package is a CLI app for [spatie/email-concealer](https://github.com/spatie/email-concealer).

## Postcardware

You're free to use this package (it's [MIT-licensed](LICENSE.md)), but if it makes it to your production environment we highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Samberstraat 69D, 2060 Antwerp, Belgium.

We publish all received postcards [on our company website](https://spatie.be/en/opensource/postcards).

## Installation

You can install the package via composer:

``` bash
composer global require spatie/email-concealer-cli
```

## Usage

```
# Conceal all e-mail addresses in a file, and print the result
email-concealer conceal path_to_src_file

# Conceal all e-mail addresses in a file, and write the result to a new file
email-concealer conceal path_to_src_file path_to_dest_file

# Conceal all e-mail addresses in a file, and overwrite the existing file
email-concealer conceal path_to_src_file --overwrite

# Conceal all e-mail addresses by replacing them with a "spatie.be" domain
email-concealer conceal path_to_src_file --overwrite --domain="spatie.be"
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Sebastian De Deyne](https://github.com/sebastiandedeyne)
- [All Contributors](../../contributors)

## About Spatie

Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
