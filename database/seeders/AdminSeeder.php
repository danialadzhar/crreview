<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'name' => 'Nabila',
            'email' => 'nabila97@gmail.com',
            'password' => Hash::make('nabila97'),
        ]);
    }
}
