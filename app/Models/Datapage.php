<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapage extends Model
{
    use HasFactory;

    protected $casts = [ 
        'id' => 'int', 
        'items' => 'array' 
    ];
    protected $fillable = [ 

        'id', 
        'page', 
        'totalPages', 
        'totalResults', 
        'type', 
        'count', 
        'items'

    ];
}
