<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\food;
use Intervention\Image\Facades\Image as InterventionImage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;


class AddDonnationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fooddonnation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'description' => 'required|max:255',
            'created_at' => 'required',
            'user_id' => 'required',
        ]);

        $path = "";
        
        if ($request->image) {
            $path = basename($request->image->store('img', 'public'));

            $image = InterventionImage::make($request->image)->widen(300)->encode();
            Storage::put('public/img/' . $path, $image);
        }

        $city = Auth::user()->city;
        $apiKey = 'f37b40319956a02fef274656bbfbfb11';
        $res = Http::get("api.openweathermap.org/data/2.5/weather?q={$city}&units=metric&appid={$apiKey}");
        $temp = $res->json()['main']['temp'];

        $post = new food();
        $post->image = $path;
        $post->description = $request->description;
        $post->created_at = $request->created_at;
        $post->user_id = $request->user_id;
        $post->meteo = $temp;
        $post->save();

        return redirect("/")->with('status', "L'article a bien été ajouté!");

    
        }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
