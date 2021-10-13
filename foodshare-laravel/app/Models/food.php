<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class food extends Model
{
    use HasFactory;

    public function food()
    {
        return $this->hasMany(food::class);
    }

    public function InfoUser()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'description',
        'email',
        'address',
        'city',
        'password',
        'updated_at',
        'created_at',
        'image',
        'user_id',
        'meteo',
    ];
}