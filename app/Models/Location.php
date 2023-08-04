<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class Location extends Model
{
    use HasFactory;

    protected $table = "locations_tables";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function statut()
    {
        return $this->belongsTo(StatutLocation::class, 'statut_location_tables_id', 'id');
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class, "article_location_tables", "locations_tables_id", "articles_id");
    }
    
    
}