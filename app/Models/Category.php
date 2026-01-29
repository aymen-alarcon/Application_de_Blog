<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['nom', 'description', 'completed'];

    public function posts(): BelongsTo{
        return $this->BelongsTo(Post::class);
    }
}
