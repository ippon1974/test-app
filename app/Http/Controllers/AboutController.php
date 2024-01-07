<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AboutController extends Controller
{
    public function about(){
        $post = new Post();
        $post->name = "Vovan";
        $post->age = "osel";
        $post->description = "osel";
        $post->kewords = "osel";
        $post->uin = encrypt('100');
        
        $post->save();
        //dd($post);
        return view('about');
    }
}
