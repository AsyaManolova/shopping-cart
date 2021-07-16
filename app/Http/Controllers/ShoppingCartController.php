<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index(Cart $cart)
    {
        $totalCartQty = $cart->totalQty;
        return view('cart.index', ['totalCartQty' => $totalCartQty]);
    }
}
