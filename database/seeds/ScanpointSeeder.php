<?php

use Illuminate\Database\Seeder;

class ScanpointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scanpoints')->insert([
            'id'        => '1',
            'barcode'   => 'p0111',
            'location'   => 'testlocatie1',
            'department_id' => '1',
        ]);
        DB::table('scanpoints')->insert([
            'id'        => '2',
            'barcode'   => 'p0222',
            'location'   => 'testlocatie2',
            'department_id' => '2'
        ]);
        DB::table('scanpoints')->insert([
            'id'        => '3',
            'barcode'   => 'p0333',
            'location'   => 'testlocatie3',
            'department_id' => '2'
        ]);
    }
}
