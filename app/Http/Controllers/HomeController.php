<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'fotos' => Foto::orderBy('id_photo', 'desc')->get()
        ]);
    }

    public function comment(Foto $foto)
{
    $user = User::where("id", $foto->id_user)->first();

    return view('comment.comment', [
        'foto' => $foto,
        'user' => $user,
    ]);
}
}
