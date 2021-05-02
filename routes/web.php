<?php

use App\Http\Controllers\ApprovedBuildingController;
use App\Http\Controllers\ApprovedLayoutController;
use App\Http\Controllers\GosController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LTPController;
use App\Http\Controllers\UnauthorizedLayoutController;
use App\Models\Gos;
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

Route::get('/gos',[GuestController::class,"gos"])->name('gos');
Route::get('/apls', [GuestController::class, "apls"])->name('apls');

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

    Route::resource('/admin-gos', GosController::class);
    Route::resource('/admin-apls', ApprovedLayoutController::class);
    Route::resource('/admin-uals', UnauthorizedLayoutController::class);
    Route::resource('/admin-abls', ApprovedBuildingController::class);
    Route::resource('/admin-ltps', LTPController::class);
   

});

require __DIR__.'/auth.php';
