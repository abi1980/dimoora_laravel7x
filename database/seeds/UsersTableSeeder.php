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
        DB::table('users')->insert([
            'name' => 'Khawaja Abid',
            'email' => 'khawaja@abid.com',
            'password' => Hash::make('123')
        ]);
    }
}
