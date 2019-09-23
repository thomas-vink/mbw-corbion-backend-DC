<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ScannedRoundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scannedrounds')->insert([
            'id'        => '3',
            'scanneddate' => Carbon::parse('11-09-2019'),
            'employee_id' => '1',
            'scanpoint_id' => '3',
            'shifttime_id' => '1',
        ]);
    }
}
