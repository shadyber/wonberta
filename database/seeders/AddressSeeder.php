<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('addresses')->insert([
            'email' => 'admin@wonberta.com',
            'tel' => '+251-11-6631381',
            'tel2' => '+251-911-490397',
            'address1' => 'Africa Avenue , Africa Insurance bldg 4th floor',
            'address2' => '',
            'city' => 'Addis Ababa',
            'country' => 'Ethiopia',
            'fax' => '+251-11-6631382',
            'facebook' => 'https://facebook.com/wonberta',
            'twitter' => 'https://twitter.com/wonberta',
            'instagram' => 'https://instagram.com/wonerta',

        ]);
    }

}
