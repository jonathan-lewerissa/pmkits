<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'pmkits1718@gmail.com',
            'password' => bcrypt('Roma12:11'),
        ]);
    }
}
