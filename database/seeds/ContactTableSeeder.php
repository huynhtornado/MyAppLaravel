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
                'name'          => 'Follow on Twitter',
                'url'           => '',
                'created_at'    => '2019-06-22 16:05:11',
                'updated_at'    => '2019-06-22 16:05:11',
                'deleted_at'    => null,
            ],
            [
                'name'          => 'Like on Facebook',
                'url'           => '',
                'created_at'    => '2019-06-22 16:05:11',
                'updated_at'    => '2019-06-22 16:05:11',
                'deleted_at'    => null,
            ],
            [
                'name'          => 'Email me',
                'url'           => '',
                'created_at'    => '2019-06-22 16:05:11',
                'updated_at'    => '2019-06-22 16:05:11',
                'deleted_at'    => null,
            ],
        ];

        Contact::insert($contact);
    }
}
