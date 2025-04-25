<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\TemplateController;


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

Route::get('/uji1', function () {
    return view('uji1');
});

Route::get('/uji2', function () {
    return view('uji2');
});

Route::controller(TemplateController::class)->group(function () {
    // Routing halaman templating_login (Master Template untuk login/register)
    Route::get('/template_login', 'template_login');
    // Routing halaman master template
    Route::get('/master', 'master');
    // Routing halaman landingPage
    Route::get('/', 'section_project');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(ProjekController::class)->group(function () {
        // Routing halaman data projek
        Route::get('/data_projek', 'index');
    
        // Routing tambah projek
        Route::get('/tambah_projek', 'create');
        Route::post('/tambah_projek', 'store');

        Route::get('/detail_projek/{slug}','show')->name('projek.detail');
    
        // Routing ubah projek
        Route::get('/ubah_projek/{id}', 'edit');
        Route::post('/ubah_projek/{id}', 'update')->name('name_edit_projek');
    
        // Routing hapus projek
        Route::get('/hapus_projek/{id}', 'destroy');
    });
});


Route::controller(AuthController::class)->group(function () {
    // Routing halaman login
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate')->name('login.submit');
});

// Routing halaman logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');


