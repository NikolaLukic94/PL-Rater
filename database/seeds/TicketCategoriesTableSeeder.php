<?php

use Illuminate\Database\Seeder;

class TicketCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TCategory::create([
			'name' => 'software'
        	        ]);

        TCategory::create([
			'name' => 'hardware'
        	        ]);

    }
}
