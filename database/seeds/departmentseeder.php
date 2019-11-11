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
            'name' => 'Calp',
        ]);
        DB::table('scan_departments')->insert([
            'id'        => '2',
            'name' => 'Puma C',
        ]);
        DB::table('scan_departments')->insert([
            'id'        => '3',
            'name' => 'ETL/AWZ',
        ]);
        DB::table('scan_departments')->insert([
            'id'        => '4',
            'name' => 'MaXpro',
            'name' => 'Department1',
        ]);

    }
}
