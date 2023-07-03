<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $array_service = ['klasifikasi', 'komersil'];
        DB::table('items')->insert([
            'item_service' => Str::random(10),
            'description' => Str::random(20),
            'price' => Str::random(10),
            'service_type' => $array_service[rand(0, 1)]
        ]);
    }
}
