<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];


    // sirve para que la url traiga el nombre(slug) en vez del id
    public function getRouteKeyName(){
        return "slug";
    }

    //relacion one to many
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
