This is a sample Todo REST Api in Laravel using MongoDB
<hr>
### Table of Contents
**[Dependencies](#dependencies)**  
**[Usage](#usage)**
**[Configuration](#configuration)**
**[Setup Detail](#setup-detail)**  
**[More Usage Detail](#more-usage-detail)**

### Dependencies
Other than Laravel and MongoDB, there is php mongodb driver that needs to be installed. You can find how to install MongoDB driver tutorials here for Linux:http://haafiz.me/development/installing-mongodb-driver-mongoclient-for-php-on-ubuntu
and here for Windows:http://haafiz.me/development/installing-mongodb-driver-mongoclient-for-php-on-windows

Other than MongoDB driver, we are using Laravel MongoDB package (aka Moloquent) that package is included in composer so you don't need to install it separately.

### Usage
This sample REST Api for todo app. is intended to provide a basic setup of Laravel 5 with MongoDB so it can be used as starting point to understand and setup MongoDB usage with Laravel.
And make several similar Models. Right now it has two models only but Category and Task with hasMany relation. You can go to Category Model and try different relations as told here:
https://github.com/jenssegers/laravel-mongodb#relations

And see response in REST Api clients like Postman and understand how different relations work. This will help beginners to understand how different relations are managed in different structures in MongoDB.

### Configurations
Connection detail can be configure in app/config/database.php in Laravel. If you are using .env file then configure accordingly. Here is connection detail example:
app/config/database.php

...php
'mongodb' => array(
            'driver' => 'mongodb',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', 27017),
            'database' => env('DB_DATABASE', 'l5'),
            'username' => env('DB_USERNAME', 'l5'),
            'password' => env('DB_PASSWORD', '123456'),
            'options' => array(
                'db' => 'admin' // sets the authentication database required by mongo 3
            )
        ),
...

### Setup Detail
If you want to know how to setup MongoDB with Laravel step by step, then you can find detail here: http://haafiz.me/development/using-laravel-with-mongodb

### More Usage Detail
This App. use Moloquent package of Laravel actually named as Laravel MongoDB. So I would recommend checking detail of that package: https://github.com/jenssegers/laravel-mongodb