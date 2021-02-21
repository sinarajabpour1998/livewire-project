<?php

namespace Modules\Comment\Http\Livewire;

use Livewire\Component;

class Comment extends Component
{
    public $message;

    public $comments = [
        'name' => 'Sina',
        'desc' => 'my description',
        'date' => '1399/12/3',
    ];

    public function submit()
    {

    }

    public function render()
    {
        return view('CommentModule::livewire.comment');
    }
}
