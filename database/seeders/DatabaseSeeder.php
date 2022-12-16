<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Reproduction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

//        Reproduction::create([
//            'track' => 'Test',
//            'reproductions' => 1343247
//        ]);

        Reproduction::create([
            'track' => 'playlist',
            'reproductions' => 1343247
        ]);

//        x
    }
}
