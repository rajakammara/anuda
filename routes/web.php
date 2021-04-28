<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    DB::table('page_hit_counters')->increment('home_page_counter');
    return view('welcome');
})->name('home');

Route::get('/downloads', function () {
    return view('welcome');
})->name('downloads');

Route::get('/contactus', function () {
    return view('welcome');
})->name('contactus');

Route::get('/gos',function(){
    return view('gos');
})->name('gos');

Route::view('ulbs','ulbs')->name('ulbs');
Route::view('jurisdiction', 'jurisdiction')->name('jurisdiction');
Route::view('layoutrules', 'layoutrules')->name('layoutrules');
Route::view('buildingrules', 'buildingrules')->name('buildingrules');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');



Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin-gos', function () {
        return view('admin.gos');
    })->name('admin.gos');

});

require __DIR__.'/auth.php';
