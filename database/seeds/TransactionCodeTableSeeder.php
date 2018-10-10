<?php

use Illuminate\Database\Seeder;

class TransactionCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Faker\Factory::create();

        DB::table('transaction_code')->insert([
            'type' => 'client-id',
            'code' => 'MNHC',
            'title' => 'This is transaction code generator',
            'last_number' => 0,
            'increment' => 1,
            'status' => 'active',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => $data->dateTime($max = 'now'),
            'updated_at' => $data->dateTime($max = 'now'),
        ]);

        DB::table('transaction_code')->insert([
            'type' => 'employee-id',
            'code' => 'MNHC',
            'title' => 'This is transaction code generator',
            'last_number' => 0,
            'increment' => 1,
            'status' => 'active',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => $data->dateTime($max = 'now'),
            'updated_at' => $data->dateTime($max = 'now'),
        ]);
    }
}
