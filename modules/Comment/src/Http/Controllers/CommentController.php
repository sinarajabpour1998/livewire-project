<?php

namespace Modules\Comment\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return view('CommentModule::index');
    }

    public function counter()
    {
        return view('CommentModule::show-counter');
    }

    public function comment()
    {
        return view('CommentModule::show-comment');
    }
}
