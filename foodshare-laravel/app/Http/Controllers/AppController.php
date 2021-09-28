<?php

namespace App\Http\Controllers;

use App\Models\food;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        $posts = food::all();
        return view('index', compact('posts'));
    }

    public function addFood() {
        return view("addFood");
    }
    
    public function profil() {
        return view("profil");
    }
}