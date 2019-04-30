<?php

use Faker\Generator as Faker;

$factory->define(App\Form::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
		'edition_date' => date($format = 'Y-m-d'), 
		'text' => $faker->paragraph,
		'attachment' => $faker->word,
		'archived' => 0, 
    	'user_id' => function() {
    		return factory('App\User')->create()->id;
    	},		   
    ];
});
