## Introduction

This project covers the setup of a Laravel application, creating REST APIs for login and registration, building a digital clock using jQuery, and displaying hierarchical data using a self-referencing table.

## Prerequisites

- PHP
- Composer
- Laravel
- MySQL
- Node.js and npm

## 1. Setup Laravel

### Clone an Empty Git Repository

```bash
Cd test

git clone https://github.com/Jasmeenkour12/Test

###Install, Dependencies
composer install
##Set Up Environment Variables
cp .env.example .env
##chage db name user or password
###Generate Application Key
php artisan key:generate
##Run Migrations and
 Seed Database
php artisan migrate --seed

###Run the Development Server
php artisan serve


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
