# Slick Module API

[![Latest Version](https://img.shields.io/github/release/slickframework/module-api.svg?style=flat-square)](https://github.com/slickframework/module-api/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/github/actions/workflow/status/slickframework/module-api/continuous-integration.yml?style=flat-square)](https://github.com/slickframework/module-api/actions/workflows/continuous-integration.yml)
[![Quality Score](https://img.shields.io/scrutinizer/g/slickframework/module-api/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/slickframework/module-api?branch=master)
[![Quality Gate Status](https://sonarqube.fsilva.info/api/project_badges/measure?project=Module-API&metric=alert_status&token=sqb_ff6906e5897b59ffa8fb726c2b885a942a8fd99e)](https://sonarqube.fsilva.info/dashboard?id=Module-API)
[![Total Downloads](https://img.shields.io/packagist/dt/slick/module-api.svg?style=flat-square)](https://packagist.org/packages/slick/module-api)

`Slick` is a modular framework where nearly all features are implemented as modules. Some modules
are enabled by default and cannot be disabled, while others may need to be enabled to set up
their dependencies in the dependency container, console commands, HTTP middlewares, and default
settings. It is always possible to override container services and settings for these modules.

This package is compliant with PSR-2 code standards and PSR-4 autoload standards.
It also applies the semantic version 2.0.0 specification.

## What’s a module?
A module is typically a package that provides specific functionality. Whether you need to
develop a web application or a command line tool, modules enable you to extend the framework’s
capabilities by adding command line commands, HTTP middleware handlers, and configuring
the dependency container and default settings to work with.

## Install

Via Composer

``` bash
$ composer require slick/module-api
```

## Testing

``` bash
# unit tests
$ vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email slick.framework@gmail.com
instead of using the issue tracker.

## Credits

- [Slick framework](https://slickframework.github.io/)
- [All Contributors](https://github.com/slickframework/module-api/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.