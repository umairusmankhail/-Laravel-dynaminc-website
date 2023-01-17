<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;


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
    return view('dashboard');
});


//Home Route
Route::get('/create',[HomeController::class,'create']);
Route::post('/saved-data',[HomeController::class,'SavedData'])->name('saved-data');
Route::get('/home-index',[HomeController::class,'index'])->name('home-index');
Route::get('/home-destroy{id}',[HomeController::class,'destroy'])->name('home-destroy');
Route::get('home-edit/{id}',[HomeController::class,'edit'])->name('edit-home');
Route::put('/home-update{id}',[HomeController::class,'update'])->name('home-update');

// About Route
Route::get('/about',[AboutController::class,'create'])->name('about');
Route::post('/about-save',[AboutController::class,'SavedData'])->name('about-save');
Route::get('/about-index',[AboutController::class,'index'])->name('about-index');
Route::get('/about-destroy{id}',[AboutController::class,'destroy'])->name('about-destroy');
Route::get('about-edit/{id}',[AboutController::class,'edit'])->name('about-edit');
Route::put('/about-update{id}',[AboutController::class,'update'])->name('about-update');

//Fact Route
Route::get('/fact',[FactController::class,'create'])->name('fact');
Route::post('/fact-data',[FactController::class,'SavedData'])->name('fact-save');
Route::get('/fact-index',[FactController::class,'index'])->name('fact-index');
Route::get('/fact-destroy{id}',[FactController::class,'destroy'])->name('fact-destroy');
Route::get('fact-edit/{id}',[FactController::class,'edit'])->name('fact-edit');
Route::put('/fact-update{id}',[FactController::class,'update'])->name('fact-update');


//Skill Route
Route::get('/skill',[SkillsController::class,'create'])->name('skill');
Route::post('/skill-data',[SkillsController::class,'SavedData'])->name('skill-save');
Route::get('/skill-index',[SkillsController::class,'index'])->name('skill-index');
Route::get('/skill-destroy{id}',[SkillsController::class,'destroy'])->name('skill-destroy');
Route::get('skill-edit/{id}',[SkillsController::class,'edit'])->name('skill-edit');
Route::put('/skill-update{id}',[SkillsController::class,'update'])->name('skill-update');

//Contact Route
Route::get('/contact',[ContactController::class,'create'])->name('contact');
Route::post('/contact-data',[ContactController::class,'SavedData'])->name('contact-save');
Route::get('/contact-index',[ContactController::class,'index'])->name('contact-index');
Route::get('/contact-destroy{id}',[ContactController::class,'destroy'])->name('contact-destroy');
Route::get('contact-edit/{id}',[ContactController::class,'edit'])->name('contact-edit');
Route::put('/contact-update{id}',[ContactController::class,'update'])->name('contact-update');

//Website Route
Route::get('/iportfolio',[WebController::class,'index'])->name('iportfolio');


//Card Route
Route::get('/Card',[CardController::class,'create'])->name('Card');
Route::post('/Card-data',[CardController::class,'SavedData'])->name('Card-save');
Route::get('/Card-index',[CardController::class,'index'])->name('Card-index');
Route::get('/Card-destroy{id}',[CardController::class,'destroy'])->name('Card-destroy');
Route::get('Card-edit/{id}',[CardController::class,'edit'])->name('Card-edit');
Route::put('/Card-update{id}',[CardController::class,'update'])->name('Card-update');

//Image Route
Route::get('/Image',[ImageController::class,'create'])->name('Image');
Route::post('/Image-data',[ImageController::class,'SavedData'])->name('Image-save');
Route::get('/Image-index',[ImageController::class,'index'])->name('Image-index');
Route::get('/Image-destroy{id}',[ImageController::class,'destroy'])->name('Image-destroy');
Route::get('Image-edit/{id}',[ImageController::class,'edit'])->name('Image-edit');
Route::put('/Image-update{id}',[ImageController::class,'update'])->name('Image-update');

//App Images Route
Route::get('/App',[AppController::class,'create'])->name('App');
Route::post('/App-data',[AppController::class,'SavedData'])->name('App-save');
Route::get('/App-index',[AppController::class,'index'])->name('App-index');
Route::get('/App-destroy{id}',[AppController::class,'destroy'])->name('App-destroy');
Route::get('App-edit/{id}',[AppController::class,'edit'])->name('App-edit');
Route::put('/App-update{id}',[AppController::class,'update'])->name('App-update');

//Category Route
Route::get('/Category',[CategoryController::class,'create'])->name('Category');
Route::post('/Category-data',[CategoryController::class,'SavedData'])->name('Category-save');
Route::get('/Category-index',[CategoryController::class,'index'])->name('Category-index');
Route::get('/Category-destroy{id}',[CategoryController::class,'destroy'])->name('Category-destroy');
Route::get('Category-edit/{id}',[CategoryController::class,'edit'])->name('Category-edit');
Route::put('/Category-update{id}',[CategoryController::class,'update'])->name('Category-update');

