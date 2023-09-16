#!/bin/sh

# cd /var/www/log.trcoa.edu;
cd /home/vgafoxibzuf6/public_html/jamiesh.com;

# activate maintenance mode
php artisan down

# update source code
git pull origin master 2>&1

# update PHP dependencies
php composer install --no-interaction --no-dev --prefer-dist
# --no-interaction Do not ask any interactive question
# --no-dev  Disables installation of require-dev packages.
# --prefer-dist  Forces installation from package dist even for dev versions.

# update database
php artisan migrate --force
# --force  Required to run when in production.

# Clear caches
php artisan cache:clear

# Clear caches
php artisan cache:clear

# stop maintenance mode
php artisan up


# npm install
npm install
npm run build
