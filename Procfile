web: heroku-php-apache2 public/
worker: php artisan migrate
worker: php artisan db:seed --class=ProductSeeder
worker: php artisan db:seed --class=TagSeeder
