<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\StockUnits;
use Illuminate\Http\Request;

class StockUnitsController extends Controller
{
    public function getUnits()
    {
        $units = StockUnits::all();

        return view('shop.index', ['units' => $units]);
    }

    public function addToCart($id) {
        $unit = StockUnits::find($id);
        $cart = new Cart();
        $cart->addNewItem($unit, $id);

    }
}
