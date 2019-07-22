<?php

use DemoLaravel\Contact;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = [
            [
                'id'            => 1,
                'name'          => 'About',
                'url'           => 'Follow on Twitter',
                'created_at'    => '2019-06-22 16:05:11',
                'updated_at'    => '2019-06-22 16:05:11',
                'deleted_at'    => null,
            ],
            [
                'id'            => 2,
                'name'          => 'About',
                'url'           => 'Like on Facebook',
                'created_at'    => '2019-06-22 16:05:11',
                'updated_at'    => '2019-06-22 16:05:11',
                'deleted_at'    => null,
            ],
            [
                'id'            => 3,
                'name'          => 'About',
                'url'           => 'Email me',
                'created_at'    => '2019-06-22 16:05:11',
                'updated_at'    => '2019-06-22 16:05:11',
                'deleted_at'    => null,
            ],
        ];

        Contact::insert($contact);
    }
}
