<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',
        'logo',
        'origin'
    ];

    public function products(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
