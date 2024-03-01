<?php

namespace App\Http\Controllers;

use App\Models\Komen;
use App\Models\Foto;
use Illuminate\Http\Request;

class KomenController extends Controller
{
    public function buatKomentar(Request $request, $foto)
    {
        $comment = New Komen;
        $comment->content = $request->comment;
        $comment->id_user = auth()->user()->id;
        $comment->id_photo= $foto;
        $comment->username= auth()->user()->username;
        // $comment->commentable_type='App\Models\Foto';
        $comment->save();
    //    $foto->komens()->save($comment);

        return back()->with('success', 'komentar berhasil..');
    }
}
