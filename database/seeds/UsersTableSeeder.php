<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $user = \App\User::firstOrCreate(['email' => 'somebody@harvard.edu']);
        $user->name = 'somebody';
        $user->email = 'somebody@harvard.edu';
        $user->password = \Hash::make('crimson');
        $user->save();
    }
}
