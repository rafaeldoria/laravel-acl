<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
               'name' => 'admin',
               'email' => 'admin@gmail.com',
               'password' => Hash::make(123456),
               'created_at' => date('Y-m-d'),
               'updated_at' => date('Y-m-d')
           ],
            [
               'name' => 'user',
               'email' => 'user@gmail.com',
               'password' => Hash::make(123456),
               'created_at' => date('Y-m-d'),
               'updated_at' => date('Y-m-d')
           ],
       ]);
    }
}
