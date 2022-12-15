<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fernando Bautista',
            'email' => 'fernandobautista@prodooh.com',
            'password' => bcrypt('prodooh1122'),
        ]);

        User::create([
            'name' => 'Cristofer Gomez',
            'email' => 'cristoferg@prodooh.com',
            'password' => bcrypt('prodooh1122'),
        ]);

        User::create([
            'name' => 'Gustavo Espinosa',
            'email' => 'gustavo@prodooh.com',
            'password' => bcrypt('prodooh1122'),
        ]);

        User::create([
            'name' => 'Pilar Ayala',
            'email' => 'pilar@prodooh.com',
            'password' => bcrypt('prodooh1122'),
        ]);
    }
}
