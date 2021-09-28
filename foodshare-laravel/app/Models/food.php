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
}