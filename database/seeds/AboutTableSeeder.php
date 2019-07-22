<?php

use DemoLaravel\About;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $About = [
            [
                'id'            => 1,
                'name'          => 'About',
                'description'   => 'Add some information about the album below, the author or any other
                    background context. Make it a few sentences long so folks can pick up some informative
                    tidbits. Then link them off to some social networking sites or contact information.',
                'created_at'    => '2019-06-22 16:05:11',
                'updated_at'    => '2019-06-22 16:05:11',
                'deleted_at'    => null,
            ],
        ];

        About::insert($About);
    }
}