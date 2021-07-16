<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function addNewItem($item, $id) {
        $newItem = [
            'qty' => 0,
            'price' => $item->price,
            'item' => $item
        ];

        if ($this->items) {
            array_key_exists($id, $this->items) ?? $newItem = $this->items[$id];
        }
        $newItem['qty']++;
        $this->items[$id] = $newItem;
        $this->totalQty++;

        if (isset($newItem['item']->attributes['special_price'])) {
            $specialPrice = $newItem['item']->attributes['special_price'];
            $specialPriceQty = $newItem['item']->attributes['special_price_qty'];

            $this->updatePromotionPrice($specialPrice, $specialPriceQty, $newItem['qty']);
        }
    }

    public function updatePromotionPrice($specialPrice, $specialQty, $itemQty) {
        //TODO
    }
}
