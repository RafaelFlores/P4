<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Rafa',
            'last_name1' => 'Flores',
            'last_name2' => 'Gonzalez',
            'email' => 'rafloresgo@gmail.com',
            'phone_number1' => '044 55 1010 98 56',
            'phone_number2' => '67 18 97 55',
            ]);

            DB::table('customers')->insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'first_name' => 'Rafael',
                'last_name1' => 'Flores',
                'last_name2' => 'Gonz',
                'email' => 'rafaelfl@prodigy.net.mx',
                'phone_number1' => '044 55 1010 98 56',
                'phone_number2' => '67 18 97 55',
                ]);
    }
}
