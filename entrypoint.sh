#!/bin/bash

# terminate on errors
set -e
    # Generate secrets
    curl -f https://api.wordpress.org/secret-key/1.1/salt/ >> /var/www/sostenibilidad/wp-secrets.php
exec "$@"
