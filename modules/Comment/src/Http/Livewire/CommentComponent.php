<?php

namespace Modules\Comment\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Comment\Facades\CommentsFacade;
use Modules\Comment\Models\Comment;

class CommentComponent extends Component
{
    use WithPagination;

    public $message;
    protected $comments;

    protected $rules = [
        'message' => 'required|max:15'
    ];

    public function mount()
    {
        $this->comments = Comment::query()->paginate(5);
    }

    public function submit()
    {
        $this->validate();
        CommentsFacade::create($this->message);
        $this->message = '';
    }

    public function render()
    {
        return view('CommentModule::livewire.comment-component', [
            'comments' => Comment::query()->paginate(5)
        ]);
    }
}
