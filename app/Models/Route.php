<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'producer_id',
        'product_id'
    ];

    public function producers(): HasMany
    {
        return $this->hasMany(Producer::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
