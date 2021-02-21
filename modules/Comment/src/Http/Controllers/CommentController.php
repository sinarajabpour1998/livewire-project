<?php

namespace Modules\Comment\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Comment\Models\Comment;

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
        $comments = Comment::all();
        return view('CommentModule::show-comment', [
            'comments' => $comments
        ]);
    }
}
