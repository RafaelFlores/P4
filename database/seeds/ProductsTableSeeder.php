<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'AMPLIFICADOR DE BANDA ANCHA BBA100',
            'description' => 'The R&S®BBA100 broadband amplifiers are suitable for a
            variety of applications in EMC environments, communications, research
            and physical engineering. They are optimally scalable and configurable.
            Due to their modular design, the amplifiers can be tailored to meet
            specific requirements with regard to output power and frequency range.',
            'link_to_image' => 'uploads/bba100.png',
            ]);

        DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'AMPLIFICADOR DE BANDA ANCHA - BBA150',
            'description' => 'The new R&S®BBA150 broadband amplifiers featuring an
            instantaneous frequency range from 0.8 GHz to 3.0 GHz open up applications
            in the microwave range. Together with the well-established R&S®BBA100
            broadband amplifier family, all-in-one amplifier systems with multiple
            frequency ranges from 9 kHz to 3.0 GHz and different power classes can
            be implemented..',
            'link_to_image' => 'uploads/bba150.jpg',
            ]);

    }
}
