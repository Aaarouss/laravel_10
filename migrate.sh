#!/bin/bash
php artisan db:wipe
php artisan db:seed
php artisan migrate