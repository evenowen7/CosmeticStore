<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'Lipstick',
            'price' => '10000',
            'image' => 'lipstik.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Shampoo',
            'price' => '15000',
            'image' => 'b.jpg'
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Baby Oil',
            'price' => '150000',
            'image' => ''
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'name' => 'Eau De Toillete',
            'price' => '100000',
            'image' => ''
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'Moistuizer',
            'price' => '19000',
            'image' => ''
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'Concealer',
            'price' => '50000',
            'image' => ''
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Soap',
            'price' => '5000',
            'image' => ''
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Baby powder',
            'price' => '150000',
            'image' => ''
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'name' => 'Eau De Collogne',
            'price' => '200000',
            'image' => ''
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'Mask',
            'price' => '20000',
            'image' => ''
        ]);
    }
}
