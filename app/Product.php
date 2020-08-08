<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["product_name"];

    public function order()
    {
        return $this->belongsToMany('App\Order', 'productNOrder', 'order_id', 'product_id');
    }
}
