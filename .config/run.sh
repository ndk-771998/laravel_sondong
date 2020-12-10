#!/bin/sh
php artisan migrate --force
php artisan db:seed --force
chmod -R 777 storage
