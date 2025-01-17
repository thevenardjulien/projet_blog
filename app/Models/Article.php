<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['titre', 'categories_id', 'auteur', 'contenu', 'photo'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
