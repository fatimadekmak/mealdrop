# MealDrop

Meal Drop is an innovative and user-friendly multi-vendor food ordering platform built with **Laravel** and **PHP**. It empowers customers to place food orders from multiple restaurants in a single, convenient platform.

## Installation

1. Download the zip file of the project and unzip it into htdocs (or www/projects if using Wamp server).
2. Make a copy of `.env.example` and rename it to `.env` and **edit** your Database connection information (PORT, USERNAME, PASSWORD). Keep database name as mealdropdb.
3. Start your server and visit `localhost/mealdrop/install` to create database and database tables and insert data.
4. In the directory of the project, open `installer.cmd`. This runs the follow commands for you. (You don't need to run them yourself)

>`composer install`

>`php artisan key:generate`

>`npm install`

>`npm run build`

>`php artisan serve`

## For testing Purposes
### User Types:
- 0: Customer
- 1: Admin
- 2: Restaurant
- 3: Delivery Company

*all users passwords are '123123123'*