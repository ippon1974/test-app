<?php


namespace App\Http\Controllers;

use App\Models\Post;

class NewsController extends Controller
{
    public function news(){

        $users = Post::all();
        dd($users->all());



//        $poststable = Post::all();
//        $filter = $poststable->filter(function($value, $key) {
//            if ($value['age'] == "osel") {
//                return true;
//            }
//        });
//        dd($filter);

        return view('news');
    }
}