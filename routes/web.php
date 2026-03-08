<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;

Route::get('/', function () {
    return view('welcome');
});
// Route::get("/book",function(){
// return "Fares";
// });
// Route::get("/post/{id}",function($id) {
//     return "post num " . $id ;
// });
// Route::get("/contact/{number}",function($number){
//     return "Your contact number is " . $number ;
// });             

// Route::get('/post/{id}', [Posts::class, 'index']);
// Route::resour , Posts::class); 
// Route::get("/post/{name}/{id}",[Posts::class,'index']);
// Route::get("/path/{name}",[Posts::class , "store"]);
Route::get('/multiple',function (){
    return view('multiple') ;
});

Route::get('/even',function(){
    return view('even');
});

Route::get('/prime',function (){
    return view('prime');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/multiTable',function (){
    $j = 6 ;
    return view ('multiTable' , compact ('j'));
});
Route::get('/multi/{number?}',function ($number = null){
    $j = $number??2 ;
    return view('multi',compact('j'));

});


Route::get("/post/{id}",[Posts::class,"index"]);
Route::get('/category',[Posts::class ,"category"]);
Route::get('/types',[Posts::class , "type"]);
Route::get('/sign/{num?}',function ($num){
    return "Signed in ID : ". $num ;
})->where('num', '[0-9]+');
Route::get('/products',[Posts::class,'index'])->name('products.index');
Route::get('/test',[Posts::class,'index']);
