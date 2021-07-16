<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialPriceDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stock_units')
            ->where('name', 'A')
            ->update(['special_price_description' => '3 for 130']);

        DB::table('stock_units')
            ->where('name', 'B')
            ->update(['special_price_description' => '2 for 45']);
    }
}
