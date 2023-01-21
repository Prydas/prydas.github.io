<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'accueil'])->name('accueil');
Route::get('/actualites', [PagesController::class, 'actualites'])->name('actualites');
Route::get('/apropos', [PagesController::class, 'apropos'])->name('apropos');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/mission1', [PagesController::class, 'mission1'])->name('mission1');
Route::get('/mission2', [PagesController::class, 'mission2'])->name('mission2');
Route::get('/mission3', [PagesController::class, 'mission3'])->name('mission3');
Route::get('/mission4', [PagesController::class, 'mission4'])->name('mission4');
Route::get('/mission5', [PagesController::class, 'mission5'])->name('mission5');
Route::get('/mission6', [PagesController::class, 'mission6'])->name('mission6');

Route::resource("news", NewsController::class);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});