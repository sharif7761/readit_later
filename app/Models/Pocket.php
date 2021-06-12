<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pocket extends Model
{
    use HasFactory;

    protected $table = 'pockets';

    protected $fillable = ['title'];

    public function pocketContent() {
        return $this->hasMany(PocketContent::class);
    }

}
