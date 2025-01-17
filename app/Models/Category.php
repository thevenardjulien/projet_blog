<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    protected $fillable = ['titre'];

    public function articles()
    {
        return $this->hasMany(Article::class);
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
