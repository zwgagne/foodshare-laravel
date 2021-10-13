<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
use Intervention\Image\Facades\Image as InterventionImage;
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
            'meteo' => 'required',
        ]);

        $path = "";
        
        if ($request->image) {
            $path = basename($request->image->store('img', 'public'));

            // Enregistre l'image réduite dans le dossier '/storage/app/public/thumbs'
            $image = InterventionImage::make($request->image)->widen(500)->encode();
            Storage::put('public/img/' . $path, $image);
        }

        $post = new food();
        $post->image = $path;
        $post->description = $request->description;
        $post->created_at = $request->created_at;
        $post->user_id = $request->user_id;
        $post->meteo = $request->meteo;
        $post->save();

        return redirect('/');
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
