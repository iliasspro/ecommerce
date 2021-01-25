<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Photo;
use App\Models\Size;
use App\Models\Categorie;
use App\Models\Color;

class Product extends Model
{
    use HasFactory;
    
    
    public function productsUser(){
        return $this->belongsToMany(User::class);
    }
    
    public function productsAdmin(){
        return $this->belongsTo(User::class);
    }

    public function productPhotos(){
        return $this->hasMany(Photo::class);
    }

    public function productSizes(){
        return $this->belongsToMany(Size::class);
    }

    public function productCategories(){
        return $this->belongsToMany(Categorie::class);
    }

    public function productColors(){
        return $this->belongsToMany(Color::class);
    }
}
