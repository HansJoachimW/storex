<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Subdistributor extends Model
{
    use HasFactory;

    protected $fillable = [
        'subdistributor_name',
        'platform_id'
    ];

    public function platforms(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
