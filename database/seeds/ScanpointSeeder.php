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
            'location'   => 'Onder de machine',
            'department_id' => '1',
        ]);
        DB::table('scanpoints')->insert([
            'id'        => '2',
            'barcode'   => 'p0222',
            'location'   => 'Boven de machine',
            'department_id' => '2'
        ]);
    }
}
