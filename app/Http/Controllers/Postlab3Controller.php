<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Postlab3;


class Postlab3Controller extends Controller
{
    public function show($id)
    {
        $post = Postlab3::where('user_id', $id)->get();
        return view('showposts', ['posts' => $post]);
    }
}
