<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    public function hello(){
        return view('profile.hello');
    }
}
