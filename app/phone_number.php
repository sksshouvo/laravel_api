<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phone_number extends Model
{
    protected $table = "phone_numbers";
    public function user(){
        return $this->belongsTo(user::class);
    }
}
