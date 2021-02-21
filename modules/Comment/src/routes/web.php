<?php
use Illuminate\Support\Facades\Route;
use Modules\Comment\Http\Controllers\CommentController;

Route::get('/', [CommentController::class, 'index']);
