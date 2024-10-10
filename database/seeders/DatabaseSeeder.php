<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\order;
use App\Models\product;
use App\Models\Produk;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name'=>'ismi',
            'email'=>'ismi@gmail.com',
            'password'=>bcrypt('123456')
        ]);
        Produk::create([
            'name'=>'Emina',
            'deskripsi'=>'Toner',
            'harga'=>'98.000',
            'foto'=>'image1.png',
        ]);
        Produk::create([
            'name'=>'Emina',
            'deskripsi'=>'Toner',
            'harga'=>'93.000',
            'foto'=>'image2.png',
        ]);
        Produk::create([
            'name'=>'Centella',
            'deskripsi'=>'Serum HYLU CICA',
            'harga'=>'97.000',
            'foto'=>'serum.png',
        ]);
        Produk::create([
            'name'=>'Centella',
            'deskripsi'=>'Moisture cream',
            'harga'=>'70.000',
            'foto'=>'cream.jpg',
        ]);
        Produk::create([
            'name'=>'Centella',
            'deskripsi'=>'Paket Glowing',
            'harga'=>'450.000',
            'foto'=>'paket centella.png',
        ]);
        Produk::create([
            'name'=>'Centella',
            'deskripsi'=>'2PCS toner 200ml',
            'harga'=>'399.000',
            'foto'=>'serum1.jpg',
        ]);
        Produk::create([
            'name'=>'Centella',
            'deskripsi'=>'Body Lotion Rose 500ml',
            'harga'=>'85.000',
            'foto'=>'bodylotion.jpg',
        ]);
        Produk::create([
            'name'=>'Centella',
            'deskripsi'=>'serum 20ml',
            'harga'=>'65.000',
            'foto'=>'serum biru.jpg',
        ]);
        Produk::create([
            'name'=>'Centella',
            'deskripsi'=>'Face Wash',
            'harga'=>'98.000',
            'foto'=>'face wash.jpg',
        ]);
        order::create([
            'name' => 'ikbal',
            'email' => 'ikbal@gmail.com',
            'alamat' => 'cigalontang',
            'kota' => 'tasikmalaya',
        ]);
    }
}