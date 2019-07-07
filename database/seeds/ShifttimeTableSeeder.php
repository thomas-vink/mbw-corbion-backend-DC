<?php

use Illuminate\Database\Seeder;

class ShifttimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shifttimes')->insert([
            'id'        => '1',
            'timeStart' => '22:00',
            'timeEnd'    => '06:00',
        ]);
        DB::table('shifttimes')->insert([
            'id'        => '2',
            'timeStart' => '06:00',
            'timeEnd'    => '14:00',
        ]); 
        DB::table('shifttimes')->insert([
            'id'        => '3',
            'timeStart' => '14:00',
            'timeEnd'    => '22:00',
        ]); 
    }
}
