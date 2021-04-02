<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('links')->delete();

        \DB::table('links')->insert(array (
            0 =>
            array (
                'id' => 1,
                'color' => '#FF69B4',
                'title' => 'Shkolo',
                'link' => 'https://www.shkolo.bg/',
                'sequence' => 1,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            1 =>
            array (
                'id' => 2,
                'color' => '#FF8C00',
                'title' => 'Vicove',
                'link' => 'http://stenli.net/vicove/',
                'sequence' => 2,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            2 =>
            array (
                'id' => 3,
                'color' => '#FFFF00',
                'title' => 'Google',
                'link' => 'https://www.google.bg/',
                'sequence' => 3,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            )
            /* Old Records */
            /*
            3 =>
            array (
                'id' => 4,
                'color' => '',
                'title' => '',
                'link' => '',
                'sequence' => 4,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            4 =>
            array (
                'id' => 5,
                'color' => '',
                'title' => '',
                'link' => '',
                'sequence' => 5,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            5 =>
            array (
                'id' => 6,
                'color' => '',
                'title' => '',
                'link' => '',
                'sequence' => 6,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            6 =>
            array (
                'id' => 7,
                'color' => '',
                'title' => '',
                'link' => '',
                'sequence' => 7,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            7 =>
            array (
                'id' => 8,
                'color' => '',
                'title' => '',
                'link' => '',
                'sequence' => 8,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            8 =>
            array (
                'id' => 9,
                'color' => '',
                'title' => '',
                'link' => '',
                'sequence' => 9,
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            */
        ));
    }
}
