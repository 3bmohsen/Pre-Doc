<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'getdocs']);

Route::get('/dashboard', function (){ 
    $user = Auth::user();
    if ($user->role == 'user') {
        return redirect('/user/dashboard');
    } elseif ($user->role == 'doc') {
        return redirect('/doc/dashboard');
    }elseif ($user->role == 'admin') {
        return redirect('/admin/dashboard');
    } else {
        return redirect('/'); // Fallback for other roles
    }
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


#USER
Route::middleware(['auth','Checkuser'])->group(function () {

Route::view('/user/dashboard','pre-doc.userdashb.usr_dboard');
Route::get('/user/doctors',[UserController::class,'showDoctors4usr']);


Route::get('/user/book/{id}',[UserController::class,'GetDocInfo']);
Route::get('/user/doctors/{id}',[UserController::class,'filterdoc']);
Route::get('/doctors/search/',[UserController::class,'search']);

Route::post('/user/book/add',[BookingController::class,'create']);
Route::get('/user/active/{id}',[BookingController::class,'show'])->middleware('Checkid');
Route::put('/user/book/edit/{id}',[BookingController::class,'update'])->middleware('Checkid');
Route::get('/del/book/{id}',[BookingController::class,'destroy'])->middleware('Checkid');
Route::get('/user/history/{id}',[BookingController::class,'history'])->middleware('Checkid');


Route::get('/user/editprofile',[UserController::class,'edit']);
Route::put('/user/update',[UserController::class,'update']);
});






###############################################################


#DOC
Route::middleware(['auth','Checkdoc'])->group(function () {

Route::view('/doc/dashboard','pre-doc.docdash.usr_dboard');

Route::get('/doc/book/{id}',[UserController::class,'GetDocInfo4doc'])->middleware('Checkid');

Route::get('/doc/active/{id}',[BookingController::class,'show4d'])->middleware('Checkid');
Route::get('/doc/history/{id}',[BookingController::class,'history4d'])->middleware('Checkid');

Route::post('/book/approve/{id}',[BookingController::class,'booka']);
Route::post('/book/decline/{id}',[BookingController::class,'bookd']);

Route::get('/doc/editprofile',[UserController::class,'edit']);
});

###############################################################

#admin
Route::middleware(['auth','Checkadmin'])->group(function () {

Route::view('/admin/dashboard','pre-doc.admindash.usr_dboard');
Route::get('/admin/editprofile',[UserController::class,'edit']);
Route::put('/admin/update',[UserController::class,'update']);


Route::get('/admin/users',[UserController::class,'show']);
Route::view('/user/add','pre-doc.admindash.adduser');
Route::post('/user/insert',[UserController::class,'insert']);
Route::get('/del/user/{id}',[UserController::class, 'destroy']);
Route::get('/edituser/{id}',[UserController::class, 'adminedit']);
Route::put('/updateuser/{id}',[UserController::class,'adminupdate']);


Route::get('/doc/add',[UserController::class, 'adddoc']);
Route::post('/doc/insert',[UserController::class, 'insertdoc']);
Route::get('/admin/doctors',[UserController::class,'showDoctors4admin']);

Route::get('/admin/admins',[UserController::class, 'admins']);
Route::view('/add/admin','pre-doc.admindash.addadmin');
Route::post('/admin/insert',[UserController::class,'insertadmin']);

Route::get('/recent/book',[BookingController::class,'recent']);
});
