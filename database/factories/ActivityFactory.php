<?php

use Faker\Generator as Faker;

$factory->define(App\Activity::class, function (Faker $faker) {
    return [
        'log_name' => $faker->word,
		'description' => $faker->sentence,
		'subject_id' => 1, 
		'subject_type' => 'form',
		'type' => 'form,'
    	'user_id' => function() {
    		return factory('App\User')->create()->id;
    	},	
    ];
});
