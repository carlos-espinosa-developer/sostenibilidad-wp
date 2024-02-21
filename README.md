
# WordPress Docker Container

Lightweight WordPress container with Nginx 1.14 & PHP-FPM 7.4 based on Alpine Linux.

_WordPress version currently installed:_ **6.4.3**

## Usage

    Corre el contenedor local usando el comando docker-compose --env-file .env.local up

### WP-CLI

This image includes [wp-cli](https://wp-cli.org/) which can be used like this:

    docker exec <your container name> /usr/local/bin/wp --path=/usr/src/wordpress <your command>


## Inspired by

* https://hub.docker.com/_/wordpress/
* https://codeable.io/wordpress-developers-intro-to-docker-part-two/
* https://github.com/TrafeX/docker-php-nginx/
* https://github.com/etopian/alpine-php-wordpress
#
