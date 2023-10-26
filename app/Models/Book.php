<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // protected $fillable = ['id','username','name','email','email_verified_at','password'];

    public function categorie()
    {
        return $this->hasMany(Categorie::class,'id');
    }

    public function bookshelf()
    {
        return $this->belongsTo(Bookshelf::class,'bookshelf_id');
    }
}
