![Laravel Ecommerce Example](https://user-images.githubusercontent.com/4316355/36414878-d41987b2-15f1-11e8-9f2c-6c3a68e4a14b.gif)

# Laravel Ecommerce HijabStore

## Installation

1. Clone the repo and `cd` into it
1. `composer install`
1. Rename or copy `.env.example` file to `.env`
1. `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set `ADMIN_PASSWORD` in your `.env` file if you want to specify an admin password. If not, the default password is 'password'
1. `php artisan ecommerce:install`. This will migrate the database and run any seeders necessary.
1. `npm install`
1. `npm run dev`
1. `php artisan serve` or use Laravel Valet or Laravel Homestead
1. Visit `localhost:8000` in your browser
1. Visit `/admin` if you want to access the Voyager admin backend. Admin User/Password: `admin@admin.com/password`. Admin Web User/Password: `adminweb@adminweb.com/password`

## Shopping Cart Package

I originally used the [Crinsane/LaravelShoppingcart](https://github.com/Crinsane/LaravelShoppingcart) package but it is slow to update to the latest versions of Laravel. I now use [hardevine/LaravelShoppingcart](https://github.com/hardevine/LaravelShoppingcart) which is a forked version that updates quicker.

## Starting from a particular point

If you would like to follow along from a particular point, follow these instructions. I'm going to be starting from my starting point in the first video of the series. You can choose any point by replacing the hash with [any particular commit](https://github.com/drehimself/laravel-ecommerce-example/commits/master).

1. Clone the repo and `cd` into it
1. `git checkout f4f651a8a35ebb2ff38ba15771fd65c93051f942`
1. Follow the rest of the steps above. Instead of `php artisan ecommerce:install`, migrate and seed the normal way with `php artisan migrate --seed`
