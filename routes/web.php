<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
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

Route::get('/', [EventsController::class,'index']);
Route::resource('events',EventsController::class);//cim dorimi sa creem crud,asr=tfel ea creaza toate linkurile necesare pentru crud
Route::post('/events/{event}/register', [EventsController::class, 'register'])->name('events.register');

