<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Air extends Model
{
    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function season()
    {
        return $this->belongsToMany(Season::class,'air_season');
    }
//    use HasFactory;
}
