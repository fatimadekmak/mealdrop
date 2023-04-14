# MealDrop

Meal Drop is an innovative and user-friendly multi-vendor food ordering platform built with **Laravel** and **PHP**. It empowers customers to place food orders from multiple restaurants in a single, convenient platform.

## Installation

1. CLone/Download the zip file of the project.
2. Make a copy of `.env.example` and rename it to `.env` and **edit** your Database connection information (PORT, USERNAME, PASSWORD). Keep database name as mealdropdb. If a connection error occurs, you may need to edit the servername in install/index.php to "localhost:portnum" (ex: "localhost:3307")
3. Start your server and visit `localhost/mealdrop/install` to create database and database tables and insert data.
4. In the directory of the project, open `installer.cmd`. This will run the following commands for you.

> `composer install`

> `php artisan key:generate`

> `npm install`

> `npm run build`

> `php artisan serve`

Note:  This installation was tested on different environments (different devices on both wamp and xampp servers) and it was successful. If you face any problem creating the database using the install folder, kindly created the database 'mealdrop' manually and import the 'mealdropdb.sql' in the sql files folder submitted along with the project. If you face any problem while running the installer.cmd, kindly try running every command at a time to find were the problem occurs.  
You may also contact me on my email: [fatima.k.dokmak@gmail.com]

## For testing Purposes

### Usable Customer Accounts:
- email: `fatima@gmail.com`, password: `123123123`
- email: `israa@gmail.com`, password: `123123123`

### Usable Admin Account:
- email: `admin@gmail.com`, password: `123123123`

### Usable Delivery Accounts:
- email: `toroto.del@gmail.com`, password: `123123123`
- email: `quadbro@gmail.com`, password: `123123123`

### Usable Restaurant Accounts:
- email: `lakkis@gmail.com`, password: `123123123`
- email: `hindi@gmail.com`, password: `123123123`

### User Types (in users table):
- `0`: Customer
- `1`: Admin
- `2`: Restaurant
- `3`: Delivery Company

### Registering as a Customer:
 You just need to register and your account is created for you (with usertype = 0)
 
### Registering as a Restaurant or Delivery Account:
 You need to send a request form to the admin from the register page.
 Admin will create your account with usertype = 2 or usertype = 3 if your request was accepted.
