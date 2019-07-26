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
                'name'  =>  'Home',
                'url'   =>  'http://localhost:8080/myapp/'
            ],
            [
                'name'  =>  'Gallery',
                'url'   =>  ''
            ],
            [
                'name'  =>  'About',
                'url'   =>  ''
            ],
            [
                'name'  =>  'Blog',
                'url'   =>  'http://localhost:8080/myapp/blog'
            ],
            [
                'name'  =>  'Contact',
                'url'   =>  ''
            ]
        ];

        Menu::insert($menu);
    }
}
