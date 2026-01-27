<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $fillable = ['nom', 'description', 'completed'];

    public function posts(): BelongsTo{
        return $this->BelongsTo(Post::class);
    }
}
