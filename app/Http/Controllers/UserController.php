<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::get();

        return view('datauser/user',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'deskripsi_profile' => ['required', 'string', 'max:255'],
            // 'image' => 'required|mimes:png,jpg,jpeg',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $data = new User;
        $data->username = $request->username;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->email = $request->email;
        $data->deskripsi_profile = $request->deskripsi_profile;
        // 'image' => $request->file('image')->store('foto'),
        $data->password = $request->password;
        $data->save();

        return to_route('user.index')->with('success', 'Data Berhasil Ditambahkan');
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
        return view('datauser.edit')->with([
            'username'=> User::find($id),
        ]);
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
    public function destroy(string $id)
    {
        //
    }

    // public function trafficuser()
    // {
    //     // Mengambil total pengguna yang sedang login
    //     $totalLoggedInUsers = Auth::user() ? 1 : 0; // Jika ada pengguna yang login, set total ke 1, jika tidak, set ke 0

    //     return view('traffic/traffic', compact('totalLoggedInUsers', $totalLoggedInUsers));
    // }
}
