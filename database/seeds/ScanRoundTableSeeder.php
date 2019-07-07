<?php

use Illuminate\Database\Seeder;

class ScanRoundTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scanrounds')->insert([
            'id'        => '1',
            'shift_id' => '1',
        ]);
        DB::table('scanrounds')->insert([
            'id'        => '2',
            'shift_id' => '2',
        ]);
        DB::table('scanrounds')->insert([
            'id'        => '3',
            'shift_id' => '3',
        ]);
    }
}
