<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarification extends Model
{
    use HasFactory;

    protected $table = "tarifications_tables";

    public function dureeLocation()
    {
        return $this->belongsTo(DureeLocation::class, "duree_locations_tables_id", "id");
    }

    public function articles()
    {
        return $this->belongsTo(Article::class);
    }


}