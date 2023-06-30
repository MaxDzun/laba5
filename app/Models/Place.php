<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';

    public function air()
    {
        return $this->hasMany(Air::class);
    }
//    use HasFactory;
}
