<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['nama' => 'Hoodie abu abu',
            'harga' => '190.000',
            'deskripsi' => 'Hoodie bahan sejuk dan nyaman dipakai',
            'kategori' => 'Hoodie',
            'gallery' => 'https://images.app.goo.gl/gS8eFTtoEk5YanLp6'],

            ['nama' => 'Kaos batman',
            'harga' => '135.000',
            'deskripsi' => 'kaos bahan sejuk dan nyaman dipakai',
            'kategori' => 'kaos',
            'gallery' => 'https://images.app.goo.gl/oqdczjX6QqRMY2kB8'],

            ['nama' => 'Kaos sablon lengan panjang ',
            'harga' => '155.000',
            'deskripsi' => 'kaos bahan sejuk dan nyaman dipakai',
            'kategori' => 'kaos lengan panjang ',
            'gallery' => 'https://images.app.goo.gl/WsuPyxDBTvydubQw7'],
           
        ]);
    }
}
