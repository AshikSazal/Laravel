<?php

use App\Models\Address;
use App\Models\User;
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
    return view('welcome');
});

// This will save only one data which is related to another table data
Route::get('/insert',function(){
    $user = User::findOrFail(1);
    // Mass assignment
    $address = new Address([
        'name'=>'4435 Paulina av NY NY 11218',
    ]); 
    $user->address()->save($address);
});

Route::get('/update',function(){
    $address = Address::whereUserId(1)->first();
    $address->name = "4353 Update Av, alaska";
    $address->save();
});
Route::get('/read',function(){
    $user = User::findOrFail(1);
    echo $user->address->name;
    
    // It will give all referenced data
    $user = User::with('address')->get();
    echo $user;
});
Route::get('/delete',function(){
    $user = User::findOrFail(1);
    $user->address()->delete();
    return "Delete Done";
});
