<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        return view("index");
    }

    public function addFood() {
        return view("addFood");
    }
    
    public function profil() {
        return view("profil");
    }
}