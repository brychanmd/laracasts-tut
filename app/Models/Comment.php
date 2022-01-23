<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    public function post() {
        return $this->belongsTo(Post::class); // post_id is not needed since the function name is used by laravel to work it out.
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
