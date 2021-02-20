<?php
use Illuminate\Support\Facades\Route;
use Modules\Comment\Http\Livewire\Comments;


Route::get('/', [Comments::class, 'render']);
