<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('post.index');
});

Route::get('/posts/{post}', function ($post) {
    return view('post.show',[
        'post' => $post 
    ]);
});

