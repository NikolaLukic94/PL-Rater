<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<b>PLQR - Personal Lines Quote Rater:</b>

This is a rating system that will calculate the insurance premium per the information provided. Workflow would be: someone sends you risk rating characteristics (or you can add that yourself), you set up rate that will be used for each risk rating characteristic (for example, different construction types will require a surcharge or discount), then create the file in the system based on the information provided in the submission email, and rate it. 

Prerequisites:

To get this app up and running, clone the github repo and run "composer install" to install all necessary packages. Make sure to amend .env file as well.

<b>Getting Started:</b>

All new users will need to be approved, before using this app. Make sure to run php artisan db:seed AdminSeeder to create the Admin account that will have the option to approve the other users. For testing purposes, you can also use RateTableSeeder, SubmissionTableSeeder or UsersSeeder, as well as the Factories for Forms, Submissions and Users.

<b>This project was Built With:</b>
- Laravel 5.5



