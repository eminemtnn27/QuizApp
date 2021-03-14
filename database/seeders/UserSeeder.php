<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            'name'=>'Emine Metin',
            'email'=>'eminemetin9@gmail.com',
            'email_verified_at' => now(),
            'type'=>'admin',
            'password' => '$2y$10$H.V1UzaXMjIgD81kTd6ny.7QmKSppi2O7LAKanh.tKDVIIOciUpRy', // password bcrypt(12345678)
            'remember_token' => Str::random(10),
        ]);

 
        \App\Models\User::factory(5)->create();
    }
}
