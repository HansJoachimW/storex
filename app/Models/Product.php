<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
  use HasFactory;

  protected $fillable = [
    'product_name',
    'category',
    'price',
    'image',
    'brand_id'
  ];

  public function carts(): BelongsToMany
  {
    return $this->belongsToMany(Cart::class);
  }

  public function platforms(): BelongsToMany
  {
    return $this->belongsToMany(Platform::class);
  }

  public function promos(): BelongsToMany
  {
    return $this->belongsToMany(Promo::class);
  }

  public function producers(): BelongsToMany
  {
    return $this->belongsToMany(Producer::class);
  }

  public function brands(): HasOne
  {
    return $this->hasOne(Brand::class);
  }
}
