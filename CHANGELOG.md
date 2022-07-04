# Changelog

All Notable changes to `laravel-enum` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## 2.2.0 - 2020-12-21

- PHP 8 support
- Dropped PHP 7.2 support
- Migrated to GitHub actions

## 2.1.0 - 2020-09-24

Laravel 8 support

## 2.0.0 - 2020-03-04

- Laravel 7.x support
- PHP 7.4 support
- Dropped all laravel versions lower than 7
- Minimum required PHP version upped to 7.2.5
- Implemented enum casting with native custom casts feature
- Exception will be thrown if you were trying to save invalid enum value

## 1.6.0 - 2019-09-06

- Laravel 6.0 support
- Minimum required PHP version upped to 7.2
- Dropped support of unsupported Laravel versions

## 1.5.0 - 2019-07-14

Added ability to pass custom values into `make:enum` command. [check out](README.md#usage)

## 1.4.0 - 2019-06-20

Added ability to check multiple enum values with `is()` or `isAny()` methods

## 1.3.0 - 2019-03-11

Laravel 5.8 support

## 1.2.0 - 2018-11-24

### Added
- Support to validate enum by key

### Fixed
- `toArray(false)` now not returns `__default => null` if `__default` not defined

## 1.1.0 - 2018-09-23

### Added
- Laravel 5.7 support

## 1.0.1 - 2018-07-04

### Added
- __default constant to enum.stub file.
