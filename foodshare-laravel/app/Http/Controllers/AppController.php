<?php

namespace App\Http\Controllers;

use App\Models\food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index() {
        $posts = food::where('is_reserved', '=', '0')->latest()->paginate(9);
        return view('index', compact('posts'));
    }

    public function update(Request $request)
    {
        $id = $request->input("id");

        $food = food::find($id);
        $food->is_reserved=1;
        $food->save();

        $user = User::find(Auth::user()->id);
        $user->food_id=$id;
        $user->save();
        return redirect("/");
    }
    
    public function profil() {
        return view("profil");
    }
}