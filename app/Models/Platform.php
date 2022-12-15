<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Platform extends Model
{
    use HasFactory;

    protected $fillable = [
        'platform_name',
        'logo',
        'subdistributor_id'
    ];

    public function subdistributors(): HasOne
    {
        return $this->hasOne(Subdistributor::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
