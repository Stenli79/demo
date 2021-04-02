<?php

use Illuminate\Database\Seeder;

class GridTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('grid')->delete();

        \DB::table('grid')->insert(array (
            0 =>
            array (
                'id' => 1,
                'link_id' => 1,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            1 =>
            array (
                'id' => 2,
                'link_id' => 2,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            2 =>
            array (
                'id' => 3,
                'link_id' => 3,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            3 =>
            array (
                'id' => 4,
                'link_id' => NULL,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            4 =>
            array (
                'id' => 5,
                'link_id' => NULL,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            5 =>
            array (
                'id' => 6,
                'link_id' => NULL,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            6 =>
            array (
                'id' => 7,
                'link_id' => NULL,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            7 =>
            array (
                'id' => 8,
                'link_id' => NULL,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            8 =>
            array (
                'id' => 9,
                'link_id' => NULL,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
        ));
    }
}
