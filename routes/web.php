<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;


//==================================
//          Lecture practice
//==================================

Route::get('/', function () {
    return view('welcome');
});

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
Route::get('/minitest', function () {
    $bill = [
        ['item' => 'Milk', 'quantity' => 2, 'price' => 20],
        ['item' => 'Bread', 'quantity' => 1, 'price' => 15],
        ['item' => 'Eggs', 'quantity' => 12, 'price' => 2],
        ['item' => 'Apple', 'quantity' => 6, 'price' => 5],
    ];
    return view('minitest', compact('bill'));
});
Route::get('/transcript', function () {
    $studentName = "John Doe";
    $studentId = "S123456";

    $courses = [
        ['course' => 'Mathematics', 'grade' => 'A'],
        ['course' => 'Physics', 'grade' => 'B+'],
        ['course' => 'Chemistry', 'grade' => 'A-'],
        ['course' => 'Computer Science', 'grade' => 'A'],
        ['course' => 'English', 'grade' => 'B'],
    ];

    return view('transcript', compact('studentName', 'studentId', 'courses'));
});



Route::get('/buy', function () {
    $products = [
        [
            'name' => 'Apple iPhone 15',
            'image' => 'https://via.placeholder.com/150',
            'price' => 999,
            'description' => 'Latest iPhone with amazing features.',
        ],
        [
            'name' => 'Samsung Galaxy S23',
            'image' => 'https://via.placeholder.com/150',
            'price' => 899,
            'description' => 'High-end Samsung smartphone.',
        ],
        [
            'name' => 'Sony Headphones',
            'image' => 'https://via.placeholder.com/150',
            'price' => 150,
            'description' => 'Noise-cancelling over-ear headphones.',
        ],
        [
            'name' => 'Dell Laptop',
            'image' => 'https://via.placeholder.com/150',
            'price' => 1200,
            'description' => 'Powerful laptop for work and gaming.',
        ],
    ];

    return view('buy', compact('products'));
});
Route::get('/calculator', function () {
    return view('calculator');
});


//=======================================================

//==================================
//          self practice
//==================================


Route::get("/post/{id}",[Posts::class,"index"]);
Route::get('/category',[Posts::class ,"category"]);
Route::get('/types',[Posts::class , "type"]);
Route::get('/sign/{num?}',function ($num){
    return "Signed in ID : ". $num ;
})->where('num', '[0-9]+');
Route::get('/products',[Posts::class,'index'])->name('products.index');
Route::get('/test',[Posts::class,'index']);
Route::get("/book",function(){
return "Fares";
});
Route::get("/post/{id}",function($id) {
    return "post num " . $id ;
});
Route::get("/contact/{number}",function($number){
    return "Your contact number is " . $number ;
});             

Route::get('/post/{id}', [Posts::class, 'index']);
Route::get("/post/{name}/{id}",[Posts::class,'index']);
Route::get("/path/{name}",[Posts::class , "store"]);
//======================================================



//==================================
//          lab practice
//==================================

Route::get('/master',function (){
    return view('master');
});
Route::get('/prod', function () {

    $products = [];
    
    for ($i=1; $i<=20; $i++) {
        $products[] = [
            'name' => "Product $i",
            'image' => 'https://picsum.photos/300?random='.$i,
            'price' => rand(10,500),
            'description' => 'Sample product description for item '.$i
        ];
    }
    
    return view('prod', compact('products'));
    
    });