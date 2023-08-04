<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Locale;

class Article extends Model
{
    use HasFactory;
    
    protected $table = "articles";
    
    public function type(){
        return $this->belongsTo(TypeArticle::class, 'type_articles_tables_id', 'id');
    }

    public function tarifications()
    {
        return $this->hasMany(Tarification::class);
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class, "article_location_tables", "articles_id", "locations_tables_id");
    }

    public function proprietes()
    {
        return $this->belongsToMany(ProprieteArticle::class, "article_propriete_tables", "articles_id", "propriete_articles_tables_id");
    }
    
}