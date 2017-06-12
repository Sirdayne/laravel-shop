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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'info@purpur.kz',
            'password' => bcrypt('purpur123456'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
