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

Route::get('/', [VoteController::class, 'index']);
Route::get('/modals/on/{id}', [VoteController::class, 'on']);

Route::prefix('front')->group(function () {
    Route::get('/login', [UserController::class, 'loginpage']);
Route::post('/login', [UserController::class, 'authenticate']);
Route::get('/register', [UserController::class, 'registerpage']);
Route::post('/register', [UserController::class, 'register']);

});


Route::prefix('back')->middleware('auth')->group(function () {
    Route::get('/member', [UserController::class, 'memberpage']);
    Route::get('/addVote', [VoteController::class, 'addVotepage']);
    Route::post('/addVote', [VoteController::class, 'store']);
    Route::post('/editVotePage/{id}', [VoteController::class, 'editVotePage']);
    Route::post('/editVote', [VoteController::class, 'editVote']);
    Route::post('/delVote/{id}', [VoteController::class, 'delVote']);
    Route::get('/listVotes', [VoteController::class, 'listVotes']);
    Route::post('/votepage/{id}', [VoteController::class, 'votepage']);
    Route::post('/listVotes', [VoteController::class, 'listVotes']);
});
