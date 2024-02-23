<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('datauser.edit');
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
        //
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
    public function edit(Request $request, string $id)
    {
        return view('datauser.edit',[
            'user'=> User::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'username' => ['string', 'max:255'],
            'nama_lengkap' => ['string', 'max:255'],
            'email' => ['string', 'max:255'],
            // 'password' => ['string', 'min:8', 'confirmed'],
            'level' => ['string'],
        ]);

        $data = User::find($id);
        $data->username = $request->username;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->email = $request->email;
        // $data->password = $request->password;
        $data->level = $request->level;
        // dd($request);
        $data->save();


        return to_route('user')->with('success', 'Data Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = User::find($id);
        $delete ->delete();

        return back ()->with('success', 'Data Berhasil Di Hapus!');
    }
}
