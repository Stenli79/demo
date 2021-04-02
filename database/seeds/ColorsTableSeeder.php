<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('colors')->delete();

        \DB::table('colors')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'HotPink',
                'color_hex' => '#FF69B4',
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'DarkOrange',
                'color_hex' => '#FF8C00',
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'Yellow',
                'color_hex' => '#FFFF00',
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            3 =>
            array (
                'id' => 4,
                'title' => 'Gold',
                'color_hex' => '#FFD700',
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            4 =>
            array (
                'id' => 5,
                'title' => 'Violet',
                'color_hex' => '#EE82EE',
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            5 =>
            array (
                'id' => 6,
                'title' => 'DarkViolet',
                'color_hex' => '#9400D3',
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            6 =>
            array (
                'id' => 7,
                'title' => 'Lime',
                'color_hex' => '#00FF00',
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            7 =>
            array (
                'id' => 8,
                'title' => 'SpringGreen',
                'color_hex' => '#00FF7F',
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            8 =>
            array (
                'id' => 9,
                'title' => 'SteelBlue',
                'color_hex' => '#4682B4',
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            9 =>
            array (
                'id' => 10,
                'title' => 'DeepSkyBlue',
                'color_hex' => '#00BFFF',
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            10 =>
            array (
                'id' => 11,
                'title' => 'BurlyWood',
                'color_hex' => '#DEB887',
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            11 =>
            array (
                'id' => 12,
                'title' => 'Brown',
                'color_hex' => '#A52A2A',
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            12 =>
            array (
                'id' => 13,
                'title' => 'Silver',
                'color_hex' => '#C0C0C0',
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
            13 =>
            array (
                'id' => 14,
                'title' => 'Gray',
                'color_hex' => '#808080',
                'created_at' => '2021-03-30 17:37:34',
                'updated_at' => '2021-03-30 17:37:34',
            ),
        ));
    }
}
