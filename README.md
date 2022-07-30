composer show | grep phpstan

<!-- pint command -->
./vendor/bin/pint

./vendor/bin/pint --test

<!-- add laravel telescope -->
composer require laravel/telescope --dev
php artisan telescope:install


<!-- add laravel/ide helper -->
composer require --dev barryvdh/laravel-ide-helper

php artisan ide-helper:generate - PHPDoc generation for Laravel Facades

php artisan ide-helper:models - PHPDocs for models

php artisan ide-helper:model -F helpers/ModelHelper.php -M PHPDocs for model

<!-- add phpstan -->
composer require phpstan/phpstan

create a file phpstan.neon for config({
    parameters:

    paths:

        - app

    level: 7

    ignoreErrors:

    excludePaths:
})

./vendor/bin/phpstan analyse

<!-- add larastan -->
composer require nunomaduro/larastan --dev

-add this in phpstan.neon

includes:

    - ./vendor/nunomaduro/larastan/extension.neon

parameters:

    paths:

        - app

    level: 9

    ignoreErrors:

    excludePaths:

<!-- php artisan -->

<!-- create post and migration and factory -->
php artisan make:model Post -mf

<!-- see help to create model -->
php artisan help make:model

<!-- add pest -->
composer require pestphp/pest --dev --with-all-dependencies

composer require pestphp/pest-plugin-laravel --dev

php artisan pest:install

./vendor/bin/pest --init

./vendor/bin/pest