<?php

namespace App\Http\Controllers;

use App\Models\food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index() {
        // tentative de debug ;) marche pas pour l'insatant
        //$posted = food::where('is_reserved', '=', '0')->get();
        //$userInfo = $posted->InfoUser()->user_id;
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
        
        $userCon = Auth::user()->id;
        $foodID = Auth::user()->food_id;
        $listDon = food::where('user_id', $userCon )->get();

        $foodReserved = food::where('id', $foodID)->get();
        $post = User::find($userCon);

        return View('profil', compact('post', 'listDon', 'foodReserved', 'foodID'));
    }

    public function destroy($id) {
        food::destroy($id);
        return redirect('/profil');

    }

}
