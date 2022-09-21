<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product::create([
            'name' => 'semen 3 biji',
            'desc' => 'semen kualitas keren',
            'harga' => '10.000',
        ]);

        product::create([
            'name' => 'cat',
            'desc' => 'cat kualitas keren',
            'harga' => '10.000',
        ]);
    }
}
