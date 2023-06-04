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

Route::get('/sayar', function () {
    return 'Hey,Sayar Nay Kaung Lar??';
});

Route::get('sayhi', function () {
    return 'Hi Mingalarpar';
});


// Route::get("/",function(){
//    return view("aboutme");
// });

// // (or) 

// Route::view("about","aboutme");

Route::get('/about/company',function(){
    return view('aboutcompany');
});


// // Route::get('about/company','aboutcompany');

Route::redirect('contact','about/company');

route::get('about/company/{staff}',function($staff){
    return view('aboutcompanystaff',['sf'=>$staff]);
});

route::get('about/company/{staff}/{city}',function($staff,$city){
    return view('aboutcompnaystaffbycity',['sf'=>$staff,'ct'=>$city]);
});


Route::get('profile',function(){
    return view('profilme');
})->name('profiles');



// Route::get("students",[\App\Http\Controllers\studentsController::class,'index'])->name('students.index');
// Route::get("students/show",[\App\Http\Controllers\studentsController::class,'show'])->name('students.show');
// Route::get("students/edit",[\App\Http\Controllers\studentsController::class,'edit'])->name('students.edit');


Route::group(['prefix'=>'sutdents'],function(){
    
Route::get("/",[\App\Http\Controllers\studentsController::class,'index'])->name('students.index');
Route::get("/show",[\App\Http\Controllers\studentsController::class,'show'])->name('students.show');
Route::get("/edit",[\App\Http\Controllers\studentsController::class,'edit'])->name('students.edit');

})