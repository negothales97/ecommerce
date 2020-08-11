<?php

use Illuminate\Database\Seeder;

class ConfigurationPaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configuration_payments')->insert([
            'max_parcel' =>6,
            'max_interest' =>6,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
