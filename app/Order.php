<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ["address", "amount"];

    public function product(){
        return $this->belongsToMany('App\Product', 'productNOrder', 'order_id', 'product_id');
    }
}
