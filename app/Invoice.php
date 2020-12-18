<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    protected $table = "CartProduct";

    protected $fillable = ['product','price','subtotal'];
}
