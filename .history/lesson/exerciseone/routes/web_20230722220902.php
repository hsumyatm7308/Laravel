<?php

use App\Http\Controllers\employeesController;
use App\Http\Controllers\membersController;
use App\Http\Controllers\staffsController;
use Doctrine\DBAL\Types\Types;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\Type;



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

Route::get('/about/company', function () {
    return view('aboutcompany');
});


// // Route::get('about/company','aboutcompany');

Route::redirect('contact', 'about/company');

route::get('about/company/{staff}', function ($staff) {
    return view('aboutcompanystaff', ['sf' => $staff]);
});

route::get('about/company/{staff}/{city}', function ($staff, $city) {
    return view('aboutcompnaystaffbycity', ['sf' => $staff, 'ct' => $city]);
});


Route::get('profile', function () {
    return view('profilme');
})->name('profiles');



// Route::get("students",[\App\Http\Controllers\studentsController::class,'index'])->name('students.index');
// Route::get("students/show",[\App\Http\Controllers\studentsController::class,'show'])->name('students.show');
// Route::get("students/edit",[\App\Http\Controllers\studentsController::class,'edit'])->name('students.edit');

// Route::group(['prefix=>students'],function(){
// Route::get("students",[\App\Http\Controllers\studentsController::class,'index'])->name('students.index');
// Route::get("students/show",[\App\Http\Controllers\studentsController::class,'show'])->name('students.show');
// Route::get("students/edit",[\App\Http\Controllers\studentsController::class,'edit'])->name('students.edit');

// });

Route::name('students.')->group(function () {
    Route::get("students", [studentsController::class, 'index'])->name('index');
    Route::get("students/show", [studentsController::class, 'show'])->name('show');
    Route::get("students/edit", [studentsController::class, 'edit'])->name('edit');

});


Route::get('/staffs', [staffsController::class, 'home'])->name('staffs.home');
Route::get('/staffsparty', [staffsController::class, 'party'])->name('staffs.party');
Route::get('/staffsparty/{total}', [staffsController::class, 'partytotal'])->name('staffs.total');
Route::get('/staffsparty/{total}/{status}', [staffsController::class, 'partytotalcomfirm'])->name('staffs.status');


Route::get('employees', [employeesController::class, 'index'])->name('employees.index');
Route::get('/employees/show', [employeesController::class, 'index'])->name('employees.show');
Route::get('/employees/show', [employeesController::class, 'show'])->name('employees.show');
Route::get('employees/passingdataone', [employeesController::class, 'passingdataone'])->name('employees.dataone');
Route::get('employees/passingdatatwo', [employeesController::class, 'passingdatatwo'])->name('employees.datatwo');
Route::get('employees/passingdatathree', [employeesController::class, 'passingdatathree'])->name('employees.datathree');
Route::get('employees/passingdatafour', [employeesController::class, 'passingdatafour'])->name('employees.datafour');
Route::get('/employees/edit', [employeesController::class, 'edit'])->name('employees.edit');
Route::get('/employees/update', [employeesController::class, 'update'])->name('employees.update');



Route::get('/dashboards', [dashboardController::class, 'index'])->name('dashboards.index');
Route::get('/members', [membersController::class, 'index'])->name('members.index');



//Data Insert from route 
// use Illuminate\Support\Facades\DB 
Route::get('types/insert', function () {
    DB::insert("INSERT INTO types(name) value(?)", ["book"]);
    return "Successfully Insert";
});

Route::get('types/insert', function () {
    DB::insert("INSERT INTO types(name) value(?)", ["pdf"]);
    return "Successfully Insert";
});


Route::get('types/read', function () {
    $result = DB::select("SELECT * FROM types");
    return $result;
});


// Route::get('types/read',function(){
//     $result =  DB::select("SELECT * FROM types");

//     foreach($result as $type){
//    echo $type->name. "<br>";
//     }
//  });


//  Route::get('types/read',function(){
//     $result =  DB::select("SELECT * FROM types");

//   var_dump($result);
//  });


//  Route::get('types/read',function(){
//     $result =  DB::select("SELECT * FROM types WHERE id=?",[3]);
//      return $result;
//  });




Route::get('students/insert', function () {
    DB::insert('INSERT INTO students(name, phonenumber, city, address) VALUES (?, ?, ?, ?)', ['aung aung', '11111', 'yangon', 'alone']);
    return "Data Insert";
});

Route::get('students/update', function () {
    DB::update("UPDATE types SET name='ebook' WHERE id=? ", ['4']);
    DB::update("UPDATE types SET name='pdf' WHERE id=? ", ['4']);
    return "Data Updated";

});


Route::get('shopper/update', function () {
    DB::update("UPDATE shopper SET fullname=?,phone=?,city=? WHERE id =?", ['kyaw kayw', '222222', 'bago']);
    return "Data Updated";

});

Route::get('shopper/delete', function () {
    DB::delete("DELETE FROM shopper WHERE id=?", [1]);
    return "Data Delete";

});


Route::get('shoppers/read', function () {

    // $results = DB::select("SELECT * FROM shoppers");
    // $results = DB::select("SELECT * FROM shoppers WHERE id = ?",[6]);


    // =>selet(columns)
    // =>selectRaw(expression)

    //  $results = DB::table('types')->get();
    //  $results = DB::table('shopper')->select('*')->get();
    //  $results = DB::table('shopper')->selectRaw('*')->get();
    //  $results = DB::table('shopper')->select(DB::raw('*'))->get();
    //  $results = DB::table('shopper')->selectRaw(DB::raw('*'))->get();

    // $results = DB::table('shopper')->select('fullname')->where('id', 5)->get();
    // $results = DB::table('shopper')->select('fullname', 'phonenumber', 'city')->where('id', 5)->get();
    // $results = DB::table('shopper')->select('fullname', 'phonenumber', 'city')->where('id', "<>", 5)->get();


    // $results = DB::table('shopper')->select(DB::raw('fullname,phonenumber,city'))->where('id', 5)->get();


    //  $results = DB::table('shopper')->selectRaw('*')->get();
    //  $results = DB::table('shopper')->selectRaw('phone')->get();
    //  $results = DB::table('shopper')->selectRaw(DB::raw('*'))->get();
    //  $results = DB::table('shopper')->selectRaw(DB::raw('phone,number'))->where('id',2)->get();

    // *error   (select know only columns)
    // $results = DB::table('shopper')->select('count(*) AS totalshopper,city')->where('id',"<>",3)->groupBy('city')->get();

    //ok
    // $results = DB::table('shopper')->select(DB::raw('count(*) AS totalshopper,city'))->where('id',"<>",3)->groupBy('city')->get();


    // $results = DB::table('shopper')->selectRaw('count(*) AS totalshopper,city')->where('id',"<>",3)->groupBy('city')->get();

    // $results = DB::table('shopper')->selectRaw(DB::raw('count(*) AS totalshopper,city'))->where('id',"<>",3)->groupBy('city')->get();


    // $results = DB::table('types')->first();
    $results = DB::table('types')->pluck('fullname'); //array
    $results = DB::table('types')->pluck('fullname','id'); //object

    return $results;

    // 16PK 
});



// =>Database Eloquent ORM 
// sro 
Route::get('article/read',function(){
    // use App\Models\Article
    $articles = Article::all();
    return $articles;
    // return "Hello";


    foreach($articles as $article){
        echo "$article->title  <br> $article->description";
    } 
});



Route::get('article/types',function(){
    // use App\Models\Article
    $types = Type::all();
    // return "Hello";
   
});



Route::get('article/find',function(){
    // use App\Models\Article
    // $articles = Article::find(5);

    // =Not Found Exception 
    $articles = Article::findOrFail(20); //404 NOT FOUND    
    return $articles;




   
});



Route::get('article/where',function(){
    // use App\Models\Article
    // $articles = Article::find(5);

    
    $articles = Article::where('user_id',2)->take(5)->orderBy('id','desc')->get();     
    return $articles;


    

   
});


