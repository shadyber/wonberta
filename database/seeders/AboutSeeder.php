<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          \DB::table('abouts')->insert([
              'name' => 'Wonbrta General Import and Export plc',
              'about' => 'Wonberta is supported by it s sister company DT and Family P.L.C which is engaged in the supply of both washed and unwashed coffee from its washing and hulling stations located in Oromiya Regional State. DT and Family P.L.C owns two independent sun dried coffee hulling stations and one of the largest washing station with a double capacity of processing washed coffee in the Guji Zone and other in Borena Zone. Employs over 1,000 employees on a temporary basis and provides housing and health care to the dependants.<br> Wonberta and DT are fully committed on conserving the environment through programs of reforestation, preservation of water sources and the natural eco system.',
               'mission' => 'To ensure production and serving quality coffee to the world with emphasis on environmental conservation, applying latest technology, value addition to existing products, diversifying while giving utmost care to the interest of our valued customers.',
               'vision' => 'To be a market leader in producing and serving quality coffee and related products to the world.',
               'value' => 'Professionalism Integrity Creativity, innovation & willingness to change Team work Corporate governance Social responsibility Promptness responsibility',
               'goal' => '',
               'background' => 'Wonberta General Import and Export P.L.C And its sister company Dt and Family Business P.L.C were officially established in 2007 and 1996 respectively with operational sites in Oromiya National Regional States. Wonberta is one of the major coffee exporters that has built a good track record in Ethiopia and its majorly involved in the coffee export sector along with some general import trading activities.',
               'photo' => '/img/banner.jpg'
               ]);
            }
}
