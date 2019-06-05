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
            'name'  => 'admin',
            'username' => 'admin',
            'password' => bcrypt('geheim'),
            'is_admin' => 1,
        ]);
    }
}
