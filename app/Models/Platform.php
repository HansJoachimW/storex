<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Platform extends Model
{
    use HasFactory;

    protected $fillable = [
        'platform_name',
        'logo'
    ];

    public function subdistributors(): HasMany
    {
        return $this->hasMany(Subdistributor::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
