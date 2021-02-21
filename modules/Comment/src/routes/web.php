<?php
use Illuminate\Support\Facades\Route;
use Modules\Comment\Http\Controllers\CommentController;

Route::group(['middleware' => 'web'], function () {
    Route::get('/', [CommentController::class, 'index']);
    Route::get('/counter', [CommentController::class, 'counter'])->name('counter');
});
