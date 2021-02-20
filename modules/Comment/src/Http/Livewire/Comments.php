<?php

namespace Modules\Comment\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{

    public function like()
    {
        dd(1);
    }

    public function render()
    {
        return view('CommentModule::livewire.comment');
    }
}
