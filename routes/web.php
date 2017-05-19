<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Staff;
use App\Photo;
use App\Product;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/create', function(){
    
   $staff = Staff::findOrFail(1);
    
    
    $staff->photos()->create(['path' => 'example.jpg']);
    
    
});

Route::get('/read', function(){
    
    $staff = Staff::findOrFail(1);
    
    
    foreach($staff->photos as $photo){
        
    return  $photo->path;
        
    }
    
    
});


Route::get('/update', function)



