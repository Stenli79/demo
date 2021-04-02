<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'uuid' => '36fdf560-76b4-11eb-b91a-fffb67de8d37',
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kxJaY3tGiAQmP9k/GilpCOJPMDIXz5UhmTd9MjKYJPSloqStAfmzO',
                'remember_token' => NULL,
                'created_at' => '2021-02-24 15:23:15',
                'updated_at' => '2021-02-24 15:23:15',
            ),
            1 =>
                array (
                    'id' => 2,
                    'uuid' => '9bbc27a0-9322-11eb-b889-e799ccee0cd5',
                    'name' => 'Demo',
                    'email' => 'demo@demo.com',
                    'email_verified_at' => NULL,
                    'password' => '$2y$10$J5oW9a.v.B5xFjKxfbTituOPhhv45.RjFhOfvihSLG/cLVTeN5s26',
                    'remember_token' => NULL,
                    'created_at' => '2021-04-01 19:44:01',
                    'updated_at' => '2021-04-01 19:44:01',
                ),
        ));
    }
}
