<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\food as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class food extends Model
{
    use HasFactory;

    public function food()
    {
        return $this->hasMany(food::class);
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

    public function InfoUser()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}