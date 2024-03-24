<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/',[App\Http\Controllers\FormController::class, 'records']);
Route::get('records',[App\Http\Controllers\FormController::class, 'records']);


Route::get('contact',[App\Http\Controllers\Contact::class, 'contact']);
Route::post('/register',[App\Http\Controllers\Contact::class, 'register']);
