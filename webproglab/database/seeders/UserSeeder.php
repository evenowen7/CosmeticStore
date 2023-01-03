<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user@mail.com',
            'role' => 'user',
            'password' => bcrypt('user123')
        ]);

        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'admin@mail.com',
            'role' => 'admin',
            'password' => bcrypt('admin123')
        ]);
    }
}
