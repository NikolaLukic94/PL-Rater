<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Tom',
            'email' => 'tome@example.com',
            'password' => bcrypt('exampleuser'),
            'admin' => 0,
        ]);

        \App\User::create([
            'name' => 'Hank',
            'email' => 'hank@example.com',
            'password' => bcrypt('exampleuser'),
            'admin' => 0,
        ]);
    }
}
