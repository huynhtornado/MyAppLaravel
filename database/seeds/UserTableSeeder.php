<?php

use Illuminate\Database\Seeder;
use DemoLaravel\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'          => 'Huỳnh Nhã Tuấn',
                'email'         => 'huynhnhatuanqnu@gmail.com',
                'password'      =>  bcrypt('123456'),
                'gender'        =>  "1",
                'level'         =>  1,
                'status'        =>  1,
                'created_at'    => '2019-06-22 16:05:11',
                'updated_at'    => '2019-06-22 16:05:11',
            ],
        ];

        User::insert($user);
    }
}
