<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //realtion many to many
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //relation one to many polimorphic
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}