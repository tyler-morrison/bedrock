# Craft Bedrock

Craft Bedrock is a modern Craft CMS stack that helps you get started with the best development tools and project structure.

Much of the philosophy behind Bedrock is inspired by the [Twelve-Factor App](http://12factor.net/) methodology.

## Features

* Better folder structure
* Dependency management with [Composer](http://getcomposer.org)
* Easy Craft configuration with environment specific files
* Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
* Autoloader for mu-plugins (use regular plugins as mu-plugins)

Use [Craft Trellis](https://github.com/tyler-morrison/craft-trellis) for additional features:

* Easy development environments with [Vagrant](http://www.vagrantup.com/)
* Easy server provisioning with [Ansible](http://www.ansible.com/) (Ubuntu 14.04, PHP 7, MariaDB)
* One-command deploys

## Requirements

* PHP >= 5.6
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

## Installation

1. Create a new project - `composer create-project craft/bedrock`
2. Copy `.env.example` to `.env` and update environment variables:
  * `DB_NAME` - Database name
  * `DB_USER` - Database user
  * `DB_PASSWORD` - Database password
  * `DB_HOST` - Database host
  * `CRAFT_ENV` - Set to environment (`development`, `staging`, `production`)
  * `CRAFT_HOME` - Full URL to Craft CMS home (http://example.com)
  * `CRAFT_CP` - Custom configuration for admin c-panel
3. Add theme(s) in `templates` as you would for a normal Craft site.
4. Set your site vhost document root to `/path/to/site/public/` (`/path/to/site/current/public/` if using deploys)
5. Access WP admin at `http://example.com/{CRAFT_CP}`

## Deploys

Deploy Craft Bedrock sites out of the box using [Craft Trellis](https://github.com/roots/trellis).

## Craft Documentation
Installation instructions and much more.
https://craftcms.com/docs

## Craft Changelog
Release notes with bug fixes, improvements and additions.
https://craftcms.com/changelog

## Craft Forums
A great place to ask your Craft questions, meet the awesome Craft community and earn mad reputation.
https://craftcms.stackexchange.com/
