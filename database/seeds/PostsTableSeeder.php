<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'MEASUREMENT EQUIPMENT FOR RENT',
            'description' => 'We offer  the service or Renting to you the measurement
             equipmnets such as: Spectrum Analizers, Cell phone testing equipment,
             Interference Analizers, Osciloscopes, Radio Frecuency Generators, etc,.
             With in our services we will give to you a introduction course for the
             better exploitation of the equipment and its accesories.
             You can rent for the minimum period of one week or more. Ask for our
             special offers',
            'link_to_image' => 'uploads/instrumentos.png',
            'link_to_video' => 'https://www.youtube.com/embed/JfjJOqdvACw',
            ]);

        DB::table('posts')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'MOBILE TOWER',
            'description' => 'One exceptional product from Rohde&Schwarz is the
             ̧MX400 mobile tower, designed for use in critical situations. This tower
             is a turnkey, container-based air traffic control communications system –
             complete with everything from operator microphones to antennas. It is
             designed and optimized for rapid deployment and is capable of long-term
             operation in any weather conditions.
             The mobile tower is fitted with the same advanced radios as are used in
             stationary installations. The tower is suit- able for both military
             and civil use, and customers can choose which equipment they wish
             to have installed. Besides  ̧Series4200 radios, the tower can also
             be equipped with  ̧M3SR Series4400 multiband radios.',
            'link_to_image' => 'uploads/mobile_tower.png',
            ]);
    }
}
