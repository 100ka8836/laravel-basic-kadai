<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('投稿一覧');
});

Route::get('/posts', [PostController::class, 'index']);
