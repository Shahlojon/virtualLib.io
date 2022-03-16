<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScientistArticle extends Model
{
    use HasFactory;
    
    public function author(){
        return $this->belongsTo(Skientist::class, 'id','scientistId');
    }

    public function article(){
        return $this->belongsTo(Article::class, 'articleId','id');
    }
}
