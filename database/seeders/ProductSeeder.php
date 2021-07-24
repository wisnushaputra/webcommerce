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
            'nama' => 'Hoodie gambar mikey',
            'harga' => '200.000',
            'deskripsi' => 'Hoodie bahan sejuk dan nyaman dipakai',
            'kategori' => 'Hoodie',
            'gallery' => 'https://images.app.goo.gl/naEkivRt2V3NBqQD6'
           
        ]);
    }
}
