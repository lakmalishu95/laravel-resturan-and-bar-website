<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController; 


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


Route::get('/food', function () {
    return view('food');
});

Route::get('/employecontact', function () {
    return view('employecontact');
});

Route::get('/businesscontact', function () {
    return view('businesscontact');
});
Route::get('/businessmanagement', function () {
    return view('bm');
});

Route::get('/employers', function () {
    return view('employers');
});
Route::get('/employees', function () {
    return view('employees');
});

Route::get('/ourmission', function () {
    return view('ourmission');
});

Route::get('/ourmenu', function () {
    return view('ourmenu');
});

Route::get('/service', function () {
    return view('service');
});


Route::get('/partners', function () {
    return view('partners');
});


//subpages
 

//employers sub pages

Route::get('/bar', function () {
    return view("subpages.employers.bar");
});

Route::get('/restaraunts', function () {
    return view('subpages.employers.restaraunts');
});





// business management sub pages

Route::get('/business-starter-packages', function () {
    return view('subpages.bm.bsp');
});
Route::get('/consultation', function () {
    return view('subpages.bm.consultation');
});
Route::get('/contracts', function () {
    return view('subpages.bm.contracts');
});
Route::get('/merchandise', function () {
    return view('subpages.bm.merchandise');
});
Route::get('/customerequest', function () {
    return view('subpages.bm.customrequest');
});




// employees subpages

Route::get('/foodindustry', function () {
    return view('subpages.employees.foodindustry');
});
Route::get('/residentialworkers', function () {
    return view('subpages.employees.rw');
});
Route::get('/commercialworkers', function () {
    return view('subpages.employees.cw');
});
Route::get('/trades', function () {
    return view('subpages.employees.trades');
});
Route::get('/natdisaster', function () {
    return view('subpages.employees.nd');
});
Route::get('/welderscommercial', function () {
    return view('subpages.employees.wc');
});
Route::get('/gallary', function () {
    return view('subpages.employees.gallary');
});
Route::get('/bleudonahue', function () {
    return view('subpages.employees.bd');
});

Route::get('/newpage', function () {
    return view('subpages.employees.newpage');
});







//dash board


Route::get("/users",[AdminController::class,"user"]);
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);



Route::get("/foodmenu",[AdminController::class,"foodmenu"]);
Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"]);


Route::get("/updateview/{id}",[AdminController::class,"updateview"]);



Route::post("/update/{id}",[AdminController::class,"update"]);


Route::post("/uploadfood",[AdminController::class,"upload"]);





//employee///////
Route::get("/employedash",[AdminController::class,"employedash"]);



//employers /////////
Route::get("/employersdash",[AdminController::class,"employersdash"]);



//business contact////
Route::post("/businesscontact",[AdminController::class,"businesscontact"]);
Route::get("/bcdash",[AdminController::class,"bcdash"]);
Route::get("/deletebc/{id}",[AdminController::class,"deletebc"]);




///employee registation

Route::get("/employeereg",[AdminController::class,"employeereg"]);




//home controllers
Route::get("/",[HomeController::class,"index"]);
Route::get("/home",[HomeController::class,"index"]);
Route::get("/ourmenu",[HomeController::class,"ourmenu"]);
Route::get("/redirects",[HomeController::class,"redirects"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function (){
    return view('dashboard');
})->name('dashboard');

?>