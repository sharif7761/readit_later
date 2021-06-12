<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PocketContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'pocket_id',
        'url'
    ];
}
