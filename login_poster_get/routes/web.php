<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoteController;
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

Route::get('/', [VoteController::class,'on']);
Route::prefix('front')->group(function(){
    Route::get('/login', [UserController::class,'loginpage']);
    Route::post('/login', [UserController::class,'authenticate']);


    Route::get('/register', [UserController::class,'registerpage']);
    Route::post('/register', [UserController::class,'register']);
    







});
Route::prefix('back')->middleware('auth')->group(function(){
    Route::get('/member', [UserController::class,'memberpage']);
    Route::get('/addVote', [VoteController::class,'addVotepage']);
    Route::post('/addVote', [VoteController::class,'store']);
    Route::post('/{id}', [VoteController::class,'votepage']);
});

