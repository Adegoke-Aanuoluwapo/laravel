<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function(){
    return 'Hello lara';
});
Route::get('/contact', function () {
    return 'contact lara';
});
Route::get('/menu', function(){
    return '<h2>Our Menu are great<h2>';
});
Route::get("/store/{category?}/{item?}", function ($category= null, $item=null) {
    
    if (isset($category)) {
        if(isset($item)){
            return "you are viewing the store for {$category} for {$item}";
        }
        return 'you are viewing the store for ' . strip_tags($category);
       
    }
    return 'you are viewing all instruments';
}); 
// Route::get('/store', function(){
//     $category = request('category');
//     if(isset($category)){
//         return 'you are viewing the store'. ' '. strip_tags($category);
//     }
//     return 'you are viewing all instruments';
    
// }); 