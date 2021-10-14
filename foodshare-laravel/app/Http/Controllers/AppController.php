<?php

namespace App\Http\Controllers;

use App\Models\food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AppController extends Controller
{
    public function index() {

        $posts = food::where('is_reserved', '=', '0')->latest()->paginate(9);
        return view('index', compact('posts'));
    }

    public function update(Request $request)
    {
        if(Auth::user()->food_id == null){
        $id = $request->input("id");

        $food = food::find($id);
        $food->is_reserved=1;
        $food->save();

        $user = User::find(Auth::user()->id);
        $user->food_id=$id;
        $user->save();
        
        return redirect("/")->with('status', "L'article a bien été réservé");
        } else {
            return redirect("/")->with('status', "Vous avez déjà un article réservé, veuillez aller le récupérer avant d'en réserver un autre!");
        }

    }

    
    public function profil() {
        
        $userCon = Auth::user()->id;
        $foodID = Auth::user()->food_id;
        $listDon = food::where('user_id', $userCon )->get();

        $foodReserved = food::where('id', $foodID)->get();
        $post = User::find($userCon);

        return View('profil', compact('post', 'listDon', 'foodReserved', 'foodID'));
    }


    public function updateProfil(Request $request) {
        
        
        $user = User::find(Auth::user()->id);

        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/profil')->with('status', "Le profil a bien été modifié!");
    }


    public function destroy($id) {
        food::destroy($id);
        return redirect("/profil")->with('status', "L'article a bien été supprimé!");

    }
    
    public function destroyUser() {
        $userId = Auth::user()->id;
        User::destroy($userId);
        return redirect('/')->with('status', "Votre compte a bien été supprimé!");

    }

}
