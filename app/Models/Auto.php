<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = 'autos';
    protected $guarded = [''];

    public function autos()
    {
        return $this->belongsToMany('\App\Reservering');
    }
}
