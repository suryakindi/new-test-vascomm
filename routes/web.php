<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LoginController,
    DashboardController,
    LandingPageController,
};
use Illuminate\Support\Facades\Auth;

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

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/login/admin', [LoginController::class, 'index']);
Route::post('/login/admin', [LoginController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);  
    Route::get('/dashboard/manajemen-user', [DashboardController::class, 'user']); 
    Route::get('/dashboard/tambah-user', [DashboardController::class, 'adduser']); 
    Route::post('/dashboard/tambah-user', [DashboardController::class, 'adduser']); 
    Route::get('/dashboard/manajemen-user/edit/{id}', [DashboardController::class, 'edituser']);  
    Route::post('/dashboard/manajemen-user/edit/{id}', [DashboardController::class, 'edituser']);    
    Route::get('/dashboard/manajemen-user/hapus/{id}', [DashboardController::class, 'hapususer']);
    Route::get('/dashboard/manajemen-user/active/{slug}/{id}', [DashboardController::class, 'status']);  
    Route::get('/dashboard/manajemen-product', [DashboardController::class, 'product']);
    Route::get('/dashboard/tambah-product', [DashboardController::class, 'addproduct']);
    Route::post('/dashboard/tambah-product', [DashboardController::class, 'addproduct']);
    Route::get('/dashboard/manajemen-product/edit/{id}', [DashboardController::class, 'editproduct']);
    Route::post('/dashboard/manajemen-product/edit/{id}', [DashboardController::class, 'editproduct']);
    Route::get('/dashboard/manajemen-product/hapus/{id}', [DashboardController::class, 'hapusproduct']);
    Route::get('/dashboard/manajemen-product/active/{slug}/{id}', [DashboardController::class, 'statusproduct']);  

    Route::get('/dashboard/logout', function(){
        Auth::logout();
        return redirect('/login/admin');
    });
    
});
Route::get('/', [LandingPageController::class, 'index']);
Route::get('/register', [LandingPageController::class, 'register']);
Route::post('/register', [LandingPageController::class, 'register']);
Route::get('/login', [LoginController::class, 'loginuser'])->name('login');
Route::post('/login', [LoginController::class, 'loginuser']);
Route::get('/logout', function(){
    Auth::logout();
    return redirect('/login');
});
