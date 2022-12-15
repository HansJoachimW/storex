<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
  use HasFactory;

  protected $fillable = [
    'product_name',
    'category',
    'price',
    'stock',
    'brand_id'
  ];

  public function carts(): HasOne
  {
    return $this->hasOne(Cart::class);
  }

  public function shops(): HasOne
  {
    return $this->hasOne(Shop::class);
  }

  public function discounts(): HasOne
  {
    return $this->hasOne(Discount::class);
  }

  public function routes(): HasOne
  {
    return $this->hasOne(Route::class);
  }

  public function brands(): HasOne
  {
    return $this->hasOne(Brand::class);
  }
}
