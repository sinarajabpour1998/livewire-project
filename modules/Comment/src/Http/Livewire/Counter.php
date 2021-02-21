<?php

namespace Modules\Comment\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $counter = 1;

    public function increment()
    {
        $this->counter++;
    }

    public function render()
    {
        return view('CommentModule::livewire.counter');
    }
}
