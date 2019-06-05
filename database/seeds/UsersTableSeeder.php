<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            'name'        => 'admin',
            'username'  => 'admin1',
            'is_admin' => '1',
            'password' => bcrypt('test1234'),
        ]);
    }
}
