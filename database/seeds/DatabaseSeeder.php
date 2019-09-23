<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(departmentseeder::class);
        $this->call(ScanpointSeeder::class);
        $this->call(ShifttimeTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
        $this->call(ScanRoundTableSeeder::class);
        $this->call(ScannedpointsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);



    }
}
