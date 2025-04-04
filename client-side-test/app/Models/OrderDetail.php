<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';
    protected $fillable = ['product_id', 'product_size', 'product_color', 'quantity', 'product_price'];
// Disable timestamps
public $timestamps = false;
}
