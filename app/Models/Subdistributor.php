<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subdistributor extends Model
{
    use HasFactory;

    protected $fillable = [
        'subdistributor_name'
    ];

    public function platforms(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
