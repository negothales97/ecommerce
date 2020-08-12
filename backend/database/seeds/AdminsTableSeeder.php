<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => 'Thales Serra',
                'email' => 'thales@imaxinformatica.com.br',
                'password' => Hash::make('010203'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Lucas Borelli',
                'email' => 'lucas@imaxinformatica.com.br',
                'password' => Hash::make('.Welcome09'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com.br',
                'password' => Hash::make('010203'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
