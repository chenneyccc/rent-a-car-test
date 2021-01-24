<?php

namespace App\Models;
use App\Models\User;
use App\Models\Auto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Reservering extends Model
{
    protected $table = 'reserverings';
    protected $guarded = [''];

    public function auto()
    {
        return $this->belongsTo(Auto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
