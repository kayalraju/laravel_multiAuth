<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Front\StudentController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\superadmin\SuperAdminController;
use App\Http\Controllers\saler\SalerController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product',[ProductController::class,'index']);

//student controller part

Route::get('/student/all',[StudentController::class,'student'])->name('student');
Route::get('/student/form',[StudentController::class,'create'])->name('student_from');
Route::post('/student/add',[StudentController::class,'store'])->name('student_add');
Route::get('/student/edit/{id}',[StudentController::class,'edit']);
Route::post('/student/update/{id}',[StudentController::class,'update']);
Route::get('/student/delete/{id}',[StudentController::class,'delete']);


// for templete cutting route

Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/gallery/page',[HomeController::class,'gallery'])->name('gallery');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//admin auth

Route::prefix('admin')->group(function (){

Route::get('/login',[AdminController::class, 'Index'])->name('login_from');
Route::post('/login/owner',[AdminController::class,'login'])->name('admin.login');

Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('admin.dashboard')->middleware('admin');
Route::get('/logout',[AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');

 Route::get('/register',[AdminController::class,'register'])->name('admin.register');
 Route::post('/register/create',[AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');
});



//superadmin auth

Route::prefix('superadmin')->group(function (){

Route::get('/superadminlogin',[SuperAdminController::class, 'getlogin'])->name('login');
Route::post('/login/owner',[SuperAdminController::class,'postlogin'])->name('superadmin.login');

Route::get('/dashboard',[SuperAdminController::class,'index'])->name('super.dashboard')->middleware('superadmin');
Route::get('/logout',[SuperAdminController::class, 'superAdminLogout'])->name('superadmin.logout')->middleware('superadmin');

//  Route::get('/register',[SuperAdminController::class,'superregister'])->name('superadmin.register');
// Route::post('/register/create',[SuperAdminController::class, 'superAdminRegisterCreate'])->name('superadmin.register.create');
});

Route::get('/saler/login',[SalerController::class,'login'])->name('saler.login');
Route::post('/login/saler',[SalerController::class,'salerLogin'])->name('saler.create');
Route::get('/saler/dashboard',[SalerController::class,'index'])->name('saler.dashboard')->middleware('saler');
Route::get('/saler/signup',[SalerController::class,'signup'])->name('saler.signup');
Route::post('/saler/signup/create',[SalerController::class,'signupcreate'])->name('saler.signupcreate');
Route::get('/logout/saler',[SalerController::class, 'salerLogout'])->name('saler.logout')->middleware('saler');
