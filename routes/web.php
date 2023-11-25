<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [homeController::class, 'home'])->name('home');
Route::get('/about', [homeController::class, 'about'])->name('about');
Route::get('/project', [homeController::class, 'project'])->name('project');
Route::get('/contact', [homeController::class, 'contact'])->name('contact');
