![Polr Logo](https://docs.lngx.org/img/logo.png)

[![GitHub license](https://img.shields.io/badge/license-GPLv2%2B-orange.svg)](about/license)
[![GitHub release](https://img.shields.io/github/release/19peaches/lngx.svg)](https://github.com/19peaches/lngx/releases)

Lngx is a beautiful, modern, lightweight, and minimalist open-source URL shortening application. It allows you to host your own URL shortener, to brand your URLs, and to gain control over your data. Lngx is especially easy to use, and provides a modern, themeable interface.

Lngx is built on the original [Polr](https://github.com/cydrobolt/polr) application created and maintained by [Chaoyi Zha](https://cydrobolt.com), with great thanks for such an elegant approach.

### Quickstart

Lngx is written in PHP and Lumen, using MySQL as its primary database.

For complete installtion directions please refer to the [Lngx Documentation](https://docs.lngx.org).

Installation TL;DR: clone or download this repository, set document root to `public/`, create MySQL database, go to `yoursite.com/setup` and follow instructions.

### Upgrading Lngx

*Upgrading from 1.x:*
 - Back up your database and files
 - Update by using `git pull` or downloading a release
 - Run `composer install --no-dev -o` to ensure dependencies are up to date
 - Migrate with `php artisan migrate` to ensure database structure is up to date

#### Versioning

Lngx uses [Semantic Versioning](http://semver.org/)
