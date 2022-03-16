<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoryId',
        'title',
        'isbn',
        'image',
        'yearOfIssue',
        'file',
        'pageCount',
        'description',
        'isActive',
    ];
    public function bookAuthors(){
       return $this->hasMany(ScientistBook::class, 'bookId', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'categoryId', 'id');
     }

}
