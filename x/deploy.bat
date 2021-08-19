:: activate maintenance mode
php artisan down

:: clear any local changes
git reset --hard HEAD
git clean -fd

:: ensure head is at master
git checkout main

:: update source code
git pull

:: update PHP dependencies
call composer install --no-interaction --no-dev --prefer-dist

:: --no-interaction Do not ask any interactive question
:: --no-dev  Disables installation of require-dev packages.
:: --prefer-dist  Forces installation from package dist even for dev versions.

:: update database
php artisan migrate --force

:: Updates assets to installed version
php artisan canvas:publish

:: --force  Required to run when in production.

:: create version file
git describe --tags>version.json

:: stop maintenance mode
php artisan up
