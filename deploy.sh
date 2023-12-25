#!/bin/bash

# Activate maintenance mode
php artisan down

# Clear any local changes
git reset --hard HEAD
git clean -fd

# Ensure head is at main
git checkout main

# Update source code
git pull

# Update PHP dependencies
composer install --no-interaction --no-dev --prefer-dist

# Update database
php artisan migrate --force

# Create version file
git describe --tags > version.json

# Stop maintenance mode
php artisan up
