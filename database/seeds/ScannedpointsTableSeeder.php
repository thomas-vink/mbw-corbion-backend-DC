<?php

use Illuminate\Database\Seeder;

class ScannedpointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scanned_points')->insert([
            'id'        => '1',
            'scanned_at' => '2019-01-01 07:14:39',
            'operator_id' => '1',
            'scanround_id' => '1',
            'scanpoint_id' => '1',
        ]);
        DB::table('scanned_points')->insert([
            'id'        => '2',
            'scanned_at' => '2019-02-02 08:14:39',
            'operator_id' => '1',
            'scanround_id' => '2',
            'scanpoint_id' => '2',
        ]);
        DB::table('scanned_points')->insert([
            'id'        => '3',
            'scanned_at' => '2019-03-03 09:14:39',
            'operator_id' => '1',
            'scanround_id' => '3',
            'scanpoint_id' => '3',
        ]);
    }
}
