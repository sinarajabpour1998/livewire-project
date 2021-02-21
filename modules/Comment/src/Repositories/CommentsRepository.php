<?php

namespace Modules\Comment\Repositories;

use Modules\Comment\Models\Comment;

class CommentsRepository
{
    public function create($message)
    {
        return Comment::create([
            'user_id' => '1',
            'description' => $message
        ]);
    }
}
