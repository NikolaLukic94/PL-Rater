<?php

use Illuminate\Database\Seeder;

class TicketTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TType::create([
			'name' => 'failure'
        ]);

        TType::create([
			'name' => 'request'
        ]);        
    }
}
