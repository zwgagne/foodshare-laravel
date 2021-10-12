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

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required',
            'description' => 'required|max:255',
            'created_at' => 'required',
            'user_id' => 'required',
            'meteo' => 'required',
        ]);

        $post = Post::find($id);
    }
    
    public function profil() {
        return view("profil");
    }
}