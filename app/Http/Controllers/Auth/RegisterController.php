<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'deskripsi_profile' => ['required', 'string', 'max:255'],
            'image' => 'required|mimes:png,jpg,jpeg',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'level' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
{
    // Simpan gambar ke direktori 'profile'
    $imagePath = $data['image']->store('profile');

    // Buat entri baru pada tabel users
    $user = User::create([
        'username' => $data['username'],
        'nama_lengkap' => $data['nama_lengkap'],
        'email' => $data['email'],
        'deskripsi_profile' => $data['deskripsi_profile'],
        'image' => $imagePath,
        'password' => Hash::make($data['password']),
    ]);

    // Buat entri baru pada tabel profile terkait dengan user baru
    $user->profile()->create([
        'describe_profile' => $data['deskripsi_profile'],
        'link_acc' => 'NULL',// Sesuaikan dengan nama kolom yang sesuai
        'photo_profile' => $imagePath, // Jika ingin menyimpan path gambar, sesuaikan dengan kolom yang sesuai
    ]);

    return $user;
}

}
