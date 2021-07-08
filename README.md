![visitors](https://visitor-badge.glitch.me/badge?page_id=happiguru/Multi-User-Blogging-App)

## Multi User Blogging App Built With Laravel (PHP, Mysql)

This app is for multi-user blogging. Users can choose between being a subscriber, an author, or an administrator. Users have different levels of access depending on their responsibilities. Before they may do certain tasks, users must be authenticated. I've integrated Disqus and Mailtraps to make posting comments and sending bulk emails easier. It now has a slew of additional features.

In this project I build a RESTFUL API/CRUD application using laravel.
- Admin Dashboard
- Multi Roles
- Authentication
- Eloquent and more

![screenshot](screenshots.png)

This project was built with:

- PHP. v7.2.3
- Laravel 5.6.*
- Composer 2.0
- Laravel File Manager

## 🛠 Getting Started
## Install 
In order to run, you need to install Laravel in your computer. Follow the Laravel step by step installation guide by visiting the following link (https://laravel.com/docs/8.x/installation) to get intructions on how to intall it.

## Run the application
To get a local copy up and running follow these simple steps.

- Open a terminal
- Clone this repo using: `git clone "https://github.com/happiguru/Happi_Blog"`
- Create a mysql database
- Change mysql information on the env file
- Run `php artisan serve` on the terminal

### Installation
* Run `git clone https://github.com/LMS-Laravel/LMS-Laravel.git LMS-Laravel`
* `cd LMS-Laravel` 
* Run `composer install` (install composer beforehand)
* From the projects root run `cp .env.example .env`
* Configure your `.env` file, with:

Database settings
```
DB_DATABASE=lms_laravel
DB_USERNAME=root
DB_PASSWORD=root
```

* Run `php artisan key:generate`
* Run `php artisan migrate`
* For Auth API (to configure Laravel Passport), run: `php artisan passport:install`
* Run `npm install`
* Run `php artisan db:seed`

* Start the Laravel server `php artisan serve --port=8000`

## Open app in browser

- When the program is running go to your browser
- put: localhost:8000/
- Click on login, register and Sign up as a new member
- Enjoy the app

## ✒️ Authors

👤 **Stanley Enow Lekunze**

- Github: [@happiguru](https://github.com/happiguru)
- LinkedIn:[LinkedIn](https://www.linkedin.com/in/lekunze-nley)


## 🤝 Contributing
Contributions, issues and feature requests are welcome!

Feel free to check the [issues page](https://github.com/happiguru/Multi-User-Blogging-App/issues).

## 📝 License
This project is [MIT](lic.url) licensed.
