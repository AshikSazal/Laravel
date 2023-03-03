<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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
    return view('welcome');
});
Route::view('user', 'addmember');
Route::post('users',[MemberController::class,'addMember']);
Route::get('show',[MemberController::class,'showMember']);
Route::get('delete/{id}',[MemberController::class, 'deleteMember']);
Route::get('update/{id}',[MemberController::class, 'updateMember']);
