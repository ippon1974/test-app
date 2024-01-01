<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class helloController extends Controller
{
    public function hello(){
        echo $helloController = Post::create([
            'name' => 'Rehan Khan',
            'age' => '55',
            'uin' => '100'
        ]);
        return view('profile.hello');

    }
}
