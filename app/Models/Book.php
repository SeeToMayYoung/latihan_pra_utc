<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function Category(){
        return $this->belongsTo(Category::class);
    }
    public function Detail(){
        return $this->hasOne(Detail::class);
    }
    use HasFactory;
}
