# Lngx Url Shortener Service
--

Lngx is an intrepid, self-hostable open-source link shortening web application with a robust API. It allows you to host your own URL shortener, to brand your URLs, and to gain control over your data. Lngx is especially easy to use, and provides a modern, themeable feel.

### Quickstart

Lngx is written in PHP and Lumen, using MySQL as its primary database.

Installation TL;DR: clone or download this repository, set document root to `public/`, create MySQL database, go to `yoursite.com/setup` and follow instructions.

### Upgrading Lngx
*Upgrading from 1.x:*

There are breaking changes between 2.x and 1.x; it is not yet possible to automatically upgrade to 2.x.

*Upgrading from 2.x:*
 - Back up your database and files
 - Update by using `git pull` or downloading a release
 - Run `composer install --no-dev -o` to ensure dependencies are up to date
 - Migrate with `php artisan migrate` to ensure database structure is up to date

#### Versioning

Lngx uses [Semantic Versioning](http://semver.org/)
