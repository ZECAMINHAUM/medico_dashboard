<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Master',
            'email' => 'master@gmail.com',
            'password' => bcrypt('123'),
        ]);
    }
}
