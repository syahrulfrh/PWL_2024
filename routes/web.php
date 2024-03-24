<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

Route::get('/hello', [WelcomeController::class,'hello']); 


Route::get('/world', function(){
    return 'world';
});

Route::get('/', function(){
    return 'Selamat Datang';
});

Route::get('/about', function(){
    return '2241720259 ACHMAD SYAHRUL FAROH';
});

Route::get('/user/{syahrul}', function($syahrul ){
    return 'Nama Saya ' . $syahrul;
});

Route::get('/posts/{post}/comments/{coment}', function($postId,$comentId ){
    return 'Pos ke-'. $postId." komentar ke-:" . $comentId;
});

Route::get('/articles/{id}', function($id) {
    return 'Halaman artikel dengan ' . $id;
});

Route::get('/user/{name?}', function($name='jhon') {
    return 'Nama Saya ' . $name;
});

Route::get('/user/profile', function() {
})->name('profile');

Route::get('/index',[PageController::class,'index']);

Route::get('/about',[PageController::class,'about']);

Route::get('/articles/{id}',[PageController::class,'articles']);

Route::get('/index',[HomeController::class,'index']);

Route::get('/about',[AboutController::class,'about']);

Route::get('/articles/{id}',[ArticlesController::class,'articles']);

Route::resource('photos',PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show']);

Route::resource('photos', PhotoController::class)->except([
 'create', 'store', 'update', 'destroy'
]);