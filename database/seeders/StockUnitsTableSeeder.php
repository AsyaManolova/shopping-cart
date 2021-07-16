<?php

namespace Database\Seeders;

use App\Models\StockUnits;
use Illuminate\Database\Seeder;

class StockUnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StockUnits::create([
            'name' => 'A',
            'price' => 50,
            'special_price_qty' => 3,
            'special_price' => 130
        ]);
        StockUnits::create([
            'name' => 'B',
            'price' => 30,
            'special_price_qty' => 2,
            'special_price' => 45
        ]);
        StockUnits::create([
            'name' => 'C',
            'price' => 20,
        ]);
        StockUnits::create([
            'name' => 'D',
            'price' => 10,
        ]);
    }
}
