<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartOrder extends Model
{
  use HasFactory;
  protected $table = "cart_orders";
  protected $fillable = [
    'user_id', 'product_id', 'currency_id', 'weight', 'price','notes'
  ];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function product()
  {
    return $this->belongsTo(Item::class);
  }
}
