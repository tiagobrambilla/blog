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
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
        	'name' => 'kamile',
        	'email' => 'admin@admin.com',
        	'tipo' => 1,
        	'password' => bcrypt('admin'),
        ]);
    }
}




