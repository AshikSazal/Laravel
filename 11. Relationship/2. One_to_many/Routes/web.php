<?php

use App\Models\Post;
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
    $user = User::findOrFail(1);

    $post = new Post(['title'=>'My Second post with Rahman','body'=>'I am doing laravel']);

    $user->posts()->save($post);
});

Route::get('/read',function(){
    // It will give all referenced data
    // $user = User::with('posts')->get();
    // It will give One referenced data
    // $user = User::with('posts')->find(1);
    
    $user = User::findOrFail(1);
    foreach($user->posts as $post){
        echo $post->title."<br>";
    }
});

Route::get('/update',function(){
    $user = User::find(1);
    $user->posts()->whereId(2)->update(['title'=>'Laravel','body'=>'This is Awesome']);
});

Route::get('/delete',function(){
    $user = User::find(1);
    $user->posts()->whereId(1)->delete();
});
