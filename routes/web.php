<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});

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
