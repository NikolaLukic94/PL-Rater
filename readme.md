<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<b>PLQR - Personal Lines Quote Rater:</b>

<p>This is a rating system that will calculate the insurance premium per the information provided.</p>

<b>Features:</b>

- Simple, responsive design using the Bootstrap framework
- User functions - log in, log out, reset password, update account
- Admin functions - approve/revoke users access
- Whenever new user registers, email will be sent to Admin; Admin will have to approve access for newly created user
- Activity Log
- Authorization policies

<b>Technologies used:</b>

- Laravel
- Bootstrap
- JavaScript

<b>Basic Configuration:</b>

- Set up .env file (make sure to inlude mailtrap credentials for sending emails)
- Run: composer install
- Run: php artisan key:generate

<b>Workflow and Setting up PLQR App:</b>

- Run: php artisan db:seed --class=AdminSeeder. 
- When user logges in, home page will display past activity information
To have some sample data, follow the next steps:
- Run factories for Users, Forms and for Submissions
- Mailtrap could return error "too many emails per second" ,in that case, run db:seed for UsersSeeder and RateSeeder
- As an Admin in 'Users' section, approve, revoke or delete users
- Search for submission, user, form, account, etc.
- Send an email using email feature
- Access statistics showing breakdown per agencies, lobs, etc.
- Add rates and use them to calculate your premium


<p>...more coming soon!</p>