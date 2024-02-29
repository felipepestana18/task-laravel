<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
    return view('welcome');
});


Route::get('/index',  [TaskController::class, 'index'])->name("task.index");
Route::get('/show/{id}',  [TaskController::class, 'show']);
Route::put('/edit',  [TaskController::class, 'update']);
Route::post('/create',  [TaskController::class, 'store']);
Route::delete('/delete/{id}', 'TaskController@delete', 'destroy');

   Route::get('/token', function () {
        return csrf_token(); 
    });