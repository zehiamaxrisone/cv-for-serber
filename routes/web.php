<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontroller;

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


Route::get('/', [Pagecontroller::class, 'index'])->name('index');

Route::get('/login2', 'App\Http\Livewire\Login@login2')->name('login2');
Route::post('/login2', 'App\Http\Livewire\Login@login')->name('login');

// Route::get('/formulaire', [Pagecontroller::class, 'formulaire'])->name('formulaire');
Route::get('/formulaire', 'App\Http\Livewire\Form@formulaire')->name('formulaire');
// Route::post('/formulaire', [Pagecontroller::class, 'store'])->name('store');
Route::post('/formulaire', 'App\Http\Livewire\Form@store')->name('store');

Route::get('/modele', [Pagecontroller::class, 'modele'])->name('modele');
Route::get('/modele2', [Pagecontroller::class, 'modele2'])->name('modele2');
Route::get('/modele3', [Pagecontroller::class, 'modele3'])->name('modele3');
Route::get('/modele4', [Pagecontroller::class, 'modele4'])->name('modele4');
Route::get('login/modele/formulaire/cv2', [Pagecontroller::class, 'cv2'])->name('cv2');
Route::get('/login/modele/formulaire/cv', [Pagecontroller::class, 'cv'])->name('cv');

Route::get('login/modele/formulaire/cv3', [Pagecontroller::class, 'cv2'])->name('cv3');
Route::get('/login/modele/formulaire/cv4', [Pagecontroller::class, 'cv'])->name('cv4');
Route::get('login/modele/formulaire/cv5', [Pagecontroller::class, 'cv2'])->name('cv5');
