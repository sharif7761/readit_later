<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PocketData extends Model
{
    use HasFactory;

    protected $fillable = [
        'data'
    ];
}
