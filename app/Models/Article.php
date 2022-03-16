<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'shortDescription',
        'description',
        'file',
        'publishedAt',
        'isActive'
    ];

    public function articleAuthors(){
        return $this->hasMany(ScientistArticle::class, 'articleId', 'id');
    }
}
