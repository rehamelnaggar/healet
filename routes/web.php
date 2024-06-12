<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productpages;

//Route::get('/', function () {
   // return view('index');
//});

Route::get('/', [Productpages::class, 'home'])->name('home');
