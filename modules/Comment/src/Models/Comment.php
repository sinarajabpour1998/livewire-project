<?php

namespace Modules\Comment\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'description'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
