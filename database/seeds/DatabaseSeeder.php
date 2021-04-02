<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(LinksTableSeeder::class);
        $this->call(GridTableSeeder::class);
    }
}
