<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $table = "_z_country";

    protected $fillable =[
"iso",
"name",
"dname",
"iso3Index",
"position",
"numcode",
"phonecode",
"created",
"register_by",
"modified",
"modified_by",
"record_deleted"];
}
