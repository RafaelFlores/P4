<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(ProductsTableSeeder::class);
         $this->call(PostsTableSeeder::class);
         $this->call(CustomersTableSeeder::class);
         $this->call(UsersTableSeeder::class);
        Model::reguard();
    }
}
