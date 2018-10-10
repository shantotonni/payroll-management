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
        $data = Faker\Factory::create();

        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'username' => 'Adminadmin',
            'email' => 'admin@ews.com',
            'password' => bcrypt('admin'),
            'telephone_number' => '65656555',
            'cell_phone' => '65656555',
            'permanent_address' => 'Dhaka',
            'city' => 'Dhaka',
            'country' => 'bangladesh',
            'type' => 'admin',
            'gender' => 1,
            'status' => 'active',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => $data->dateTime($max = 'now'),
            'updated_at' => $data->dateTime($max = 'now'),
        ]);
    }
}
