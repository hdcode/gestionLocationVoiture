<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = "roles_tables";

    public function users(){
        return $this->belongsToMany(User::class, "user_role_tables", "roles_tables_id", "users_id");
    }
    

}