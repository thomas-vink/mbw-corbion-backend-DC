<?php

use Illuminate\Database\Seeder;

class departmentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scan_departments')->insert([
            'id'        => '1',
            'name' => 'PuMa',
        ]);
        DB::table('scan_departments')->insert([
            'id'        => '2',
            'name' => 'Maxpro',
        ]);
        DB::table('scan_departments')->insert([
            'id'        => '3',
            'name' => 'Calp',
        ]);
        DB::table('scan_departments')->insert([
            'id'        => '4',
            'name' => 'AWZ',
        ]);
    }
}
