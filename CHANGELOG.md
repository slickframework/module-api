# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com)
and this project adheres to [Semantic Versioning](http://semver.org).

## [Unreleased]

## [v0.4.0] - 2024-07-14
### Adds
- A Slick `ContainerInterface` container is passed as argument to the
  `ConsoleModuleInterface::configureConsole()` method to allow dependency container
  usage on command creations and setup.

## [v0.3.0] - 2024-07-10
### Added
- array manipulation functions
### Fixed
- GIT export properties

## [v0.2.0] - 2024-07-04
### Added
- Modules now can listen to `onEnable` and `onDisable` events.

## [v0.1.0] - 2024-07-02
### Added
- First release
- SlickModuleInterface, WebModuleInterface and ConsoleModuleInterface
- Basic implementations for Module and middleware handler.

[Unreleased]: https://github.com/slickframework/module-api/compare/v0.4.0...HEAD
[v0.4.0]: https://github.com/slickframework/module-api/compare/v0.3.0...v0.4.0
[v0.3.0]: https://github.com/slickframework/module-api/compare/v0.2.0...v0.3.0
[v0.2.0]: https://github.com/slickframework/module-api/compare/v0.1.0...v0.2.0
[v0.1.0]: https://github.com/slickframework/module-api/compare/9efd6e...v0.1.0
