<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\simpleController;
use App\Http\Controllers\basicController;
use Illuminate\Support\Facades\Route;
// use App\Http\Livewire\Basic\CustomerIndex;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [adminController::class, 'index'])->name('index');

Route::get('/quick-start', [simpleController::class, 'quickStart'])->name('quickStart');
Route::get('/hello', [simpleController::class, 'hello'])->name('hello');
Route::get('/hellos', [simpleController::class, 'hellos'])->name('hellos');

Route::get('/student', [basicController::class, 'student'])->name('student');
Route::get('/customer', [basicController::class, 'customer'])->name('customer');


Route::get('/posts', [PostCRUD::class,])->name('posts');


// Route::get('/customers', CustomerIndex::class);
