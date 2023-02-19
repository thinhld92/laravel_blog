<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Group;
use App\Models\Social;
use App\Models\Website;
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

        $group =  new Group();
        $group->name = 'Administrator';
        $group->description = 'Quản trị hệ thống';
        $group->save();

        $category = new Category();
        $category->name = 'Thông tin';
        $category->slug = 'thong-tin';
        $category->show_in_menu = 1;
        $category->show_in_home = 1;
        $category->status = 1;
        $category->save();

        $social = new Social();
        $social->facebook = 'facebook.com';
        $social->save();

        $website = new Website();
        $website->author = "Promickey";
        $website->save();


        \App\Models\User::factory()->create([
            'name' => 'Thịnh Lê',
            'email' => 'thinhle@gmail.com',
            'username' => 'promickey',
            'password' => bcrypt(123456),
            'group_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Hoàng Đặng',
            'email' => 'hoangdv@gmail.com',
            'username' => 'promickey',
            'password' => bcrypt(123456),
            'group_id' => 1
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
