<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $table = 'seasons';

    public function air()
    {
        return $this->belongsToMany(Air::class, 'air_season');
    }
//    use HasFactory;
}
