<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\User::factory()->create([
            'name' => 'Thịnh Lê',
            'email' => 'thinhle@gmail.com',
            'username' => 'promickey',
            'password' => bcrypt(123456),
            'group_id' => 1
        ]);

        \App\Models\User::factory(10)->create();
    }
}
