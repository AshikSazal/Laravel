<?php

use App\Models\Role;
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


Route::get('/create',function(){
    $user = User::find(1);
    $role = new Role(['name'=>'Administrator']);
    $user->roles()->save($role);
});

Route::get('/read',function(){
    $user = User::findOrFail(1);
    // return $user->roles;
    foreach($user->roles as $role){
        echo $role->name;
    }
});

Route::get('/update',function(){
    $user = User::findOrFail(1);
    if($user->has('roles')){
        foreach($user->roles as $role){
            if($role->name=='Administrator'){
                $role->name= 'Subscriber';
                $role->save();
            }
        }
    }
});

Route::get('/delete',function(){
    $user = User::findOrFail(1);
    foreach($user->roles as $role){
        $role->whereId(2)->delete();
    }
});

// It will add in role_user table
Route::get('/attach',function(){
    $user = User::findOrFail(1);
    // Id of roles table
    $user->roles()->attach(3);
});

// It will delete from role_user table
Route::get('/detach',function(){
    $user = User::findOrFail(1);
    // Id of roles table
    $user->roles()->detach(3);
});

Route::get('/sync',function(){
    $user = User::findOrFail(1);

    // Array value(8) will be added if they are not there and rest of the values will be delete
    $user->roles()->sync([8]);
});