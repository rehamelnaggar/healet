<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productpages extends Controller
{
    public function home(){
        $title= "Healet";
    return view('home', compact('title'));
    }
}
