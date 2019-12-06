# Wordpress Composer Template

This is a simple plug-n-play skeleton of a git-friendly Wordpress composer installation

## Setup New Project

To get started using it, use the `create-project` composer command:

```
composer create-project athaller/wordpress-composer-template
```

## Getting Started

WordPress is a PHP/MySQL-based project. We have a basic development environment that you can quickly get up and running with a few commands. First off, you will need to download and install [Docker](https://www.docker.com/products/docker-desktop), if you don't have it already. After that, there are a few commands to run:

### Development Environment Commands

Running these commands will start the development environment:

```
npm install
npm run build:dev
npm run env:start
npm run env:install
```

Additionally, `npm run env:stop` will stop the environment.

`npm run env:cli` runs the [WP-CLI tool](https://make.wordpress.org/cli/handbook/). WP-CLI has a lot of [useful commands](https://developer.wordpress.org/cli/commands/) you can use to work on your WordPress site. Where the documentation mentions running `wp`, run `npm run env:cli` instead. For example, `npm run env:cli help`.


That's it!

Additionally, you can initialize git repository and configure it as you wish (existing .gitignore provides a good starting point).

---

# Resources:
* https://github.com/wordpress/wordpress-develop
* https://roots.io/using-composer-with-wordpress/
* https://davidwinter.me/install-and-manage-wordpress-with-composer/
* http://composer.rarst.net/recipe/site-stack

# Thanks to:
* [John P. Bloch](https://github.com/johnpbloch/wordpress)
* [Andrey “Rarst” Savchenko](http://composer.rarst.net/)
