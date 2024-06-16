<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cards;

Route::get('/', function () {
    $cards=Cards::all()->toArray();
    // format($cards);
    return view('home')->with(compact("cards"));
});
Route::get('/about',function(){
    echo view('about');
});
Route::get('/team',function(){
    echo view('team');
});
