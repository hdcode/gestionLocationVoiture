<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProprieteArticle extends Model
{
    use HasFactory;

    protected $table = "propriete_articles_tables";

    public function type()
    {
        return $this->belongsTo(TypeArticle::class, "type_articles_tables_id", "id");
    }
}