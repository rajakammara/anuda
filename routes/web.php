<?php

use App\Http\Controllers\ApprovedBuildingController;
use App\Http\Controllers\ApprovedLayoutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GosController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LatestUpdateController;
use App\Http\Controllers\LTPController;
use App\Http\Controllers\PressReleaseController;
use App\Http\Controllers\ScrollTextController;
use App\Http\Controllers\UnauthorizedLayoutController;
use App\Models\Gos;
use App\Models\LatestUpdate;
use App\Models\PressRelease;
use App\Models\ScrollText;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

// Nonpayment Page
// Route::get('/', function () {
//    return view('nonpayment');
// })->name('home');

// Main Page
Route::get('/', function () {
    DB::table('page_hit_counters')->increment('home_page_counter');
    $updates = LatestUpdate::all();
    $news = PressRelease::all();
    $scrolling_text = ScrollText::all();
    return view('welcome', compact('updates', 'news', 'scrolling_text'));
})->name('home');

Route::get('/downloads', function () {
    return view('welcome');
})->name('downloads');

Route::get('/contactus', function () {
    $contacts = array(
        array("Sri Singasani Guru Mohan", "Chairman", ""),
        array("Smt D. Sreelakshmi",  "Vice Chairman",  ""),
        array("Vacant",  "Secretary",  ""),
        array("Sri B.V. Narasa Reddy",  "Administrative Officer",  "8074406709"),
        array("Smt P. Sailaja",  "Planning Officer",  "9849816815"),
        array("Sri C. Revapathi",  "Asst Planning Officer (I/c)",  "9849146815"),
        array("Smt G.Indu",  "Asst Draftsman (I/c)",  "8142075848"),

    );
    //dd($contacts);
    return view('contactus', compact("contacts"));
})->name('contactus');

Route::get('/gos', [GuestController::class, "gos"])->name('gos');
Route::get('/approvedlayouts', [GuestController::class, "apls"])->name('apls');
Route::get('/approvedbuildings', [GuestController::class, "abls"])->name('abls');
Route::get('/unauthorizedlayouts', [GuestController::class, "uals"])->name('uals');
Route::get('/licensed_technical_persons', [GuestController::class, "ltps"])->name('ltps');
Route::get('/gallery', [GuestController::class, "gallery_images"])->name('gallery');

Route::view('ulbs', 'ulbs')->name('ulbs');
Route::view('jurisdiction', 'jurisdiction')->name('jurisdiction');
Route::view('layoutrules', 'layoutrules')->name('layoutrules');
Route::view('buildingrules', 'buildingrules')->name('buildingrules');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $updates = LatestUpdate::all();
        $news = PressRelease::all();
        return view('dashboard', compact('updates', 'news'));
    })->name('dashboard');

    Route::resource('/admin-gos', GosController::class);
    Route::resource('/admin-apls', ApprovedLayoutController::class);
    Route::resource('/admin-uals', UnauthorizedLayoutController::class);
    Route::resource('/admin-abls', ApprovedBuildingController::class);
    Route::resource('/admin-ltps', LTPController::class);
    Route::resource('/admin-lupdates', LatestUpdateController::class);
    Route::resource('/admin-preleases', PressReleaseController::class);
    Route::resource('/admin-gallery', GalleryController::class);
    Route::resource('/admin-scrolltext', ScrollTextController::class);
});


require __DIR__ . '/auth.php';
