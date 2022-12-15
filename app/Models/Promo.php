<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Promo extends Model
{
    use HasFactory;

    protected $fillable = [
        'promo_name',
        'uses',
        'amount'
    ];

    public function discounts(): HasOne
    {
        return $this->hasOne(Discount::class);
    }
}
