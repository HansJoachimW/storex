<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'platform_id',
        'product_id'
    ];

    public function platforms(): HasMany
    {
        return $this->hasMany(Platform::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
