<?php

use App\Models\Staff;
use App\Models\Photo;
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
    $staff = Staff::find(1);
    $staff->photos()->create(['path'=>'example.jpg']);
});

Route::get('/read',function(){
    $staff = Staff::findOrFail(1);
    foreach($staff->photos as $photo){
        echo $photo->path;
    }
});

Route::get('/update',function(){
    $staff = Staff::findOrFail(1);
    $photo = $staff->photos()->whereId(1)->first();
    $photo->path = "Update exmpla.jpg";
    $photo->save();
});

Route::get('/delete',function(){
    $staff = Staff::findOrFail(1);
    $staff->photos()->whereId(1)->delete();
});

Route::get('/assign',function(){
    $staff = Staff::findOrFail(1);
    $photo = Photo::findOrFail(3);
    // If photo table doesn't have value in column then it will fill the column with value
    $staff->photos()->save($photo);
});

Route::get('/un-assign',function(){
    $staff = Staff::findOrFail(1);
    // This is reverse of assign like It will unassign the value of photo table imageable_id and imageable_type to null
    $staff->photos()->whereId(3)->update(['imageable_id'=>0,'imageable_type'=>'']);
});