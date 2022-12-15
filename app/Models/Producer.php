<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Producer extends Model
{
    use HasFactory;

    protected $fillable = [
        'producer_name'
    ];

    public function routes(): HasOne
    {
        return $this->hasOne(Route::class);
    }
}
