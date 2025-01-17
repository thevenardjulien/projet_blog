<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    protected $fillable = ['titre', 'categories_id', 'auteur', 'contenu', 'photo'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function getPhotoUrlAttribute()
    {
        if ($this->photo) {
            return Storage::url($this->photo); // url de la photo
        }
        // s'il n'y a pas de photo on envoie une photo par défaut
        return asset('images/defaut_photo.png');
    }
}
