<?php

namespace Modules\Comment\Http\Livewire;

use Livewire\Component;

class Comment extends Component
{
    public $message;
    public $comments;

    public function submit()
    {

    }

    public function render()
    {
        return view('CommentModule::livewire.comment');
    }
}
