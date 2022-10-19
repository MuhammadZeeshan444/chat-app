<?php

use App\Http\Controllers\chat\ChatController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('chat/{id}', [HomeController::class, 'chatView'])->name('chat.open');

Route::post('sender_id/{send_id}/receiver_id/{recei_id}', [ChatController::class, 'chatStore'])->name('chat.store');
