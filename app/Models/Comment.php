<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function manga()
    {
        return $this->belongsTo(Manga::class, 'id_manga');
    }
}
