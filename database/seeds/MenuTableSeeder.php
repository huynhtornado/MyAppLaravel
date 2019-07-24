<?php

use Illuminate\Database\Seeder;
use DemoLaravel\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = [
            [
                'name'  => 'Home'
            ],
            [
                'name'  => 'Gallery'
            ],
            [
                'name'  => 'About'
            ],
            [
                'name'  => 'Blog'
            ],
            [
                'name'  => 'Contact'
            ]
        ];

        Menu::insert($menu);
    }
}
