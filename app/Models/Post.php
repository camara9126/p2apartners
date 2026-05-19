<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'titre',
        'type',
        'categorie_id',
        'contenu',
        'image',
        'date',
        'statut',
        'editeur'
    ];

    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }


     // creation de slug a chaque article
        protected static function boot()
            {
                parent::boot();
            
                static::saving(function ($post) {
                    if (empty($post->slug)) {
                        $slug = Str::slug($post->titre);
                        $originalSlug = $slug;
            
                        // Vérifier l'unicité du slug
                        $count = 1;
                        while (Post::where('slug', $slug)->exists()) {
                            $slug = $originalSlug . '-' . $count;
                            $count++;
                        }
            
                        $post->slug = $slug;
                    }
                });
            }
}
