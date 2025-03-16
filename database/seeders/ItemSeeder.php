<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run()
    {
        Item::create([
            'name' => 'Laptop',
            'price' => 25000,
        ]);

        Item::create([
            'name' => 'Mouse',
            'price' => 2500,
        ]);

        Item::create([
            'name' => 'Keyboard',
            'price' => 5800,
        ]);
    }
}