<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\PostDec;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id_user = auth()->user()->id;
        $posts = Foto::where('id_user', $id_user)->get();

        return view ('foto/foto', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('foto/tambahfoto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        // dd ('berhasil');

        $this->validate($request, rules:[
            'image' => 'required|mimes:png,jpg,jpeg',
            'describe_photo' => 'required'
        ]);


        Foto::create([ 
            'id_user' =>auth()->user()->id,
            'image' => $request->file('image')->store('foto'),
            'describe_photo' => $request->describe_photo
        ]);

        return redirect('/foto');
        // dd($request);
        // $request->dd();

        // $_post = new Foto();
        // $_post->id_user = $request->id_user;
        // $_post->image = $request->image;
        // $_post->describe_photo = $request->describe_photo;
        // $_post->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $foto = Foto::where('id_photo', $id)->first(); // Retrieve the model instance

    if (!$foto) {
        return redirect('/foto')->with('error', 'Photo not found');
    }

    // Delete the record from the database
    $deletedRows = Foto::where('id_photo', $id)->delete();

    if ($deletedRows > 0 && $foto->image) {
        // Delete the image file
        Storage::delete($foto->image);
    }

    return redirect('/foto')->with('success', 'Foto Berhasil Di Hapus!');
}

    public function comment ($id){

    }

}
