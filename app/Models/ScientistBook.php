<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScientistBook extends Model
{
    use HasFactory;

    public function author(){
        return $this->belongsTo(Skientist::class, 'id','scientistId');
    }
    public function authorBook(){
        return $this->belongsTo(Skientist::class, 'scientistId','id');
    }
    public function book(){
        return $this->belongsTo(Book::class, 'bookId', 'id');
    }
}
