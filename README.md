# Building a Reiss Store Platform (with vendors & payments) with Laravel and Vue
This is a demo application showing an e-commerce platform using Laravel and Vue. This was created as a test project for Reiss Agency.

## Features
* Backend with Laravel.
* Frontend with Vue.
* Products
* Orders
* Payment
* Customers.
* Vendors
* Admin

## Getting Started
The following steps will get you a copy of the project up and running on your local machine for development, staging, and production purposes.

### Prerequisites
What software are required.
* Git.
* PHP.
* Composer.
* Laravel CLI.
* A webserver like Nginx or Apache.
* A Node Package Manager ( npm or yarn ).

### Install
Clone the git repository on your computer

```$ git clone https://github.com/thisishaykins/reissStore.git```


You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies.

```
$ cd reissStore
$ composer install
```


### Setup
- When you are done with installation, copy the `.env.example` file to `.env`

  ```$ cp .env.example .env```


- Generate the application key

  ```$ php artisan key:generate```


- Add your database credentials to the necessary `env` fields

- Migrate the application

  ```$ php artisan migrate```

- Install laravel passport

  ```$ php artisan passport:install```

- Seed Database

  ```$ php artisan db:seed```


- Install node modules

  ```$ npm install```


### Run the application
- Run the command to build the vue application

  ```$ npm run prod```

- Run the command to serve the laravel application

  ```$ php artisan serve```


## Built With
* [Laravel](https://laravel.com) - The PHP framework for building the API endpoints needed for the application
* [Vue](https://vuejs.org) - The Progressive JavaScript Framework for building interactive interfaces


## Acknowledgments
* [Laravel](https://laravel.com) - The excellent documentation explaining how to get started with Laravel and Laravel Passport
* [Vue](https://vuejs.org) - A Vue Concise documentation
