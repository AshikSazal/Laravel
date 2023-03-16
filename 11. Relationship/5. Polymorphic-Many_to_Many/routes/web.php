<?php

use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
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
    $post = Post::create(['name'=>"My first post"]);
    $tag1 = Tag::find(1);
    $post->tags()->save($tag1);

    $video = Video::create(['name'=>'video.mov']);
    $tag2 = Tag::find(2);
    $video->tags()->save($tag2);
});

Route::get('/update',function(){
    // $post = Post::findOrFail(1);
    // foreach($post->tags as $tag){
    //     return $tag->whereName('PHP')->update(['name'=>'Updated PHP']);
    // }

    // It will add in taggables table
    $post = Post::findOrFail(1);
    $tag = Tag::find(3);
    $post->tags()->save($tag);
    // $post->tags()->attach($tag);
    // $post->tags()->sync([1]);
});

Route::get('/delete',function(){
    $post = Post::find(1);
    // It will delete tag table value
    foreach($post->tags as $tag){
        $tag->whereId(2)->delete();
    }
});