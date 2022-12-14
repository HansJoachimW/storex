<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdistributor extends Model
{
    use HasFactory;

    protected $fillable = [
        'subdistributor_name'
    ];  
}
