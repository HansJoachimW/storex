<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'promo_id',
        'product_id'
    ];

    public function promos(): HasMany
    {
        return $this->hasMany(Promo::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
