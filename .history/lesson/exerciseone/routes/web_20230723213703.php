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
    $results = DB::table('types')->pluck('fullname', 'id'); //object

    return $results;

    // 16PK 
});



// =>Database Eloquent ORM 
// sro 
Route::get('article/read', function () {
    // use App\Models\Article
    $articles = Article::all();
    return $articles;
    // return "Hello";


    foreach ($articles as $article) {
        echo "$article->title  <br> $article->description";
    }
});



Route::get('article/types', function () {
    // use App\Models\Article
    $types = Type::all();
    // return "Hello";

});



Route::get('article/find', function () {
    // use App\Models\Article
    // $articles = Article::find(5);

    // =Not Found Exception 
    $articles = Article::findOrFail(20); //404 NOT FOUND    
    return $articles;





});



Route::get('article/where', function () {



    // $articles = Article::where('user_id',2)->orderBy('id','desc')->get();     
    // return $articles;



    // $articles = Article::where('user_id',2)->orderByDesc('id')->get();     
    // return $articles;

    // $articles = Article::where('user_id',2)->take(5)->orderBy('id','desc')->get();     
    // return $articles;



    // $articles = Article::where('user_id',2)->limit(5)->orderBy('id','desc')->get();     
    // return $articles;



    // $articles = Article::where('id',2)->first();  //Object    
    // return $articles;



    // $articles = Article::where('id',2)->select('user_id','title','decription')->get();  //array     
    // return $articles;

    // $articles = Article::where('id',2)->select('user_id','title','decription')->first();     
    // return $articles;



    // $articles = Article::where('id',2)->pluck('description'); //array      
    // return $articles;




    // $articles = Article::where('id',2)->pluck('description','id'); //array      
    // return $articles;





    // $articles = Article::firstWhere('user_id',2);     
    // return $articles;


    // $articles = Article::where('id','>',50)->firstOrFail();     
    // return $articles; //404 NOT FOUND 



    // $article = Article::findOr('50',function(){
    //     return "Hello sir there is no data";
    // });
    // return $article;


    $article = Article::where('user_id')->firstOr(function () {
        return "Hello sir there is no data";
    });
    return $article;

});



// =>Retreving Aggregates 

Route::get('articles/aggregates', function () {
    $data = [
        ['price' => 100],
        ['price' => 200],
        ['price' => 300],
        ['price' => 400],

    ];


    // var_dump($data);
    // echo "<br>";
    // var_dump(collect($data));

    // dd(
    //     $data,
    //     collect($data)
    // );


    // return collect($data)->count();  //4
    // return collect($data)->min() //{"price":100}
    // return collect($data)->max(function($num){

    //     return $num['price'];

    // });

    //  $result =  collect($data)->max(function($num){

    //     return $num['price'];

    // });

    // return $result;




    // return collect($data)->min(function($num){
    //     return $num['price'];
    // }); //250


    // return collect($data)->average(function($num){
    //     return $num['price'];
    // });

    // return collect($data)->avg(function($num){
    //     return $num['price'];
    // }); //250

    // return collect($data)->sum(function($num){
    //     return $num['price'];
    // }); //1000

    // $articles = Article::where('user_id',1)->min('rating');
// return $articles; //2 

    // $articles = Article::where('user_id',1)->min('rating');
// return $articles;

    // $articles = Article::where('user_id',1)->average('rating');
// return $articles;

    // $articles = Article::where('user_id',1)->avg('rating');
// return $articles;


    $articles = Article::where('user_id', 1)->sum('rating');
    return $articles;

});


// -------------------------------------------

// =>Retrieving or Creating Data to Model 

Route::get('articles/create', function () {
    //   $article = Article::firstOrCreate([
//     'title'=>'this is new article 1'
//   ]);

    //   return "Retrive Data or Insert $article";


    // $article = Article::firstOrCreate([
//     'title'=>'this is new article 15',
//     'description'=>'Loream Ipsum is simply dummy tet of the sdf;sa',
//     'user_id'=>3,
//     'rating'=>2 
// ]);
// return "Retrive Data or Insert $article";



    $article = Article::firstOrCreate(
        [
            'title' => 'this is new article 15'

        ],
        [
            'description' => 'Loream Ipsum is simply dummy tet of the sdf;sa',
            'user_id' => 3,
            'rating' => 2
        ]

    );
    return "Retrive Data or Insert $article";


});


Route::get('article/filter',function(){
    // $articles = Article::all()->filter(function($article){
    //     return $article->id > 5;
    // })   ;


    // $articles = Article::get()->filter(function($article){
    //     return $article->id > 5;
    // })   ;


    // $articles = Article::cursor()->filter(function($article){
    //     return $article->id > 5;
    // })   ;

    $articles = Article::all()->filter(function($article){
        return $article->id > 5;
    })   ;


    foreach($articles as $article){
        echo "$article->id <br> $article->title <br> $article->description";
    }


});


Route::get('articles/reject',function(){
    
})