:: activate maintenance mode
php artisan down

:: update PHP dependencies
call composer install

:: update database
php artisan migrate

:: Updates assets to installed version
php artisan canvas:publish

::optimise code for prod prior to server webhook
call npm run prod

:: create version file
git describe --tags>version.json

:: stop maintenance mode
php artisan up
