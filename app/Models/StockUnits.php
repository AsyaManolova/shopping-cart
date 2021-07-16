<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockUnits extends Model
{
    protected $fillable = ['name', 'price', 'special_price_qty', 'special_price'];

    public $timestamps = false;
}
