<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'id'        => '1',
            'name'   => 'Peter Duivestein',
            'employeecode'   => 'e0014',
        ]);
    }
}
