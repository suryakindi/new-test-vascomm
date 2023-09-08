<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'notelp'=>'0',
            'password'=>bcrypt('12345'),
            'role'=>'admin',
            'active'=>1,
        ]);
        \App\Models\Product::create([
            'name_product' => 'Susu',
            'gambar_product' => '1.png',
            'price'=>'10000',
            'show'=>1,
        ]);
    }
}
