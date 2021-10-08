<?php

namespace App\Http\Controllers;

use App\Models\food;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        $posts = food::where('is_reserved', '=', '0')->latest()->paginate(9);
        return view('index', compact('posts'));
    }

    
    public function profil() {
        return view("profil");
    }
}