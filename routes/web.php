<?php

use App\Http\Controllers\AuthenticatedSessionController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/blog', function (){
    return view('blog');
});
Route::get('/forum', function (){
    return view('forum');
});
Route::get('/project', function (){
    return view('project');
});
Route::get('/section', function (){
    return view('section');
});
Route::get('/teacher', function (){
    return view('teacher');
});
Route::get('/placement', function (){
    return view('placement');
});
Route::get('/result', function (){
    return view('result');
});
Route::get('/alumni', function (){
    return view('alumni');
});
Route::get('/contact', function (){
    return view('contact');
});
Route::get('/new', function (){
    return view('new');
});

//login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth');
