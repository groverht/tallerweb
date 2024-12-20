<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //relacion muchos a muchos (inversa)
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
