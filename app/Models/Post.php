<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['titre', 'contenu', 'categorie_id'];

    public function category(): HasMany{
        return $this->HasMany(Category::class);
    }
}