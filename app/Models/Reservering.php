<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservering extends Model
{
    protected $table = 'reserverings' ;
    protected $guarded = [''];

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
