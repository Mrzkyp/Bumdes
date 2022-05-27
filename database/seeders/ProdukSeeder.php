<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("produks")->insert([
            "nama" => "Andi Nuraziddin",
            "Namaproduk" => "Susu Murni",
            "Notelepon" => "089630345831",
        ]);
    }
}
