<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController; 


//home controllers
Route::get("/",[HomeController::class,"index"]);
Route::get("/home",[HomeController::class,"index"]);
Route::get("/redirects",[HomeController::class,"redirects"]);

//users
Route::get("/users",[AdminController::class,"user"]);
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]); 

//employee contrillers
    
Route::get("/employedash",[AdminController::class,"employedash"]);
Route::get("/employedash",[AdminController::class,"employedashview"]);
Route::get('/searchemployee',[AdminController::class,"searchemployee"]);
Route::get("/emplyee",[AdminController::class,"user"]);

Route::post("/employeereg",[HomeController::class,"employeereg"]);
Route::get("/employees",[HomeController::class,"employeeview"]);
Route::get("/searchemployeerc",[HomeController::class,'searchemployeerc']);
Route::get("/employeeprofile/{id}",[HomeController::class,"employeeprofile"]);
Route::post("/employeerev/{id}",[HomeController::class,"employeerev"]);

//employers controllers////

Route::get("/bcdash",[AdminController::class,"bcdash"]);
Route::get("/deletebc/{id}",[AdminController::class,"deletebc"]);

Route::post("/businesscontact",[HomeController::class,"businesscontact"]);
Route::get("/employers",[HomeController::class,'employers']);
Route::get('employerprofile/{id}',[HomeController::class,'employerprofile']);
Route::post('/employerrev/{id}',[HomeController::class,'employerrev']);

Route::get('/bar',[HomeController::class, 'bar']);
Route::get('/restaraunts',[HomeController::class, 'restaraurents']);





//food menu
Route::get("/foodmenu",[AdminController::class,"foodmenu"]);
Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"]);
Route::get("/updateview/{id}",[AdminController::class,"updateview"]);
Route::post("/update/{id}",[AdminController::class,"update"]);
Route::post("/uploadfood",[AdminController::class,"upload"]);
Route::get('/searchfood',[AdminController::class,"searchfood"]);

Route::get("/ourmenu",[HomeController::class,"ourmenu"]);





//Route 

    //pages
 
    Route::get('/employecontact', function () {
        return view('employecontact');
    });
    Route::get('/businesscontact', function () {
        return view('businesscontact');
    });
    Route::get('/businessmanagement', function () {
        return view('bm');
    });
    Route::get('/ourmission', function () {
        return view('ourmission');
    });

    Route::get('/service', function () {
        return view('service');
    });
    Route::get('/oilandgas',function() {
        return view('oilandgas');
    });
    Route::get('/partners', function () {
        return view('partners');
    });


    // employee subpages

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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function (){
    return view('dashboard');
})->name('dashboard');

?>