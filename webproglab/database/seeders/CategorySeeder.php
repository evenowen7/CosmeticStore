<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Baby Preparation'
        ]);
        DB::table('categories')->insert([
            'name' => 'Bath'
        ]);
        DB::table('categories')->insert([
            'name' => 'Make up'
        ]);
        DB::table('categories')->insert([
            'name' => 'Perfume'
        ]);
    }
}
