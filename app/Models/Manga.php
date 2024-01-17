<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'slug',
        'link',
        'rank',
        'id_category'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'id_category');
    }
}
