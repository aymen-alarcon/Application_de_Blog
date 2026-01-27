<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $fillable = ['titre', 'contenu', 'categorie_id', "timestamps"];

    public function category(): HasMany{
        return $this->HasMany(Category::class);
    }
}