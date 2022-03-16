<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Skientist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'birthplace',
        'birthday',
        'country',
        'scientificSphere',
        'academicDegree',
        'academicTitle',
        'placeOfWork',
        'awardsAndPrizes',
        'dateOfDeath',
        'placeOfDeath',
        'shortDescription',
        'description',
        'isActive',
    ];

    public function ScientistBooks(){
        return $this->hasMany(ScientistBook::class, 'scientistId', 'id');
    }

    public function ScientistArticles(){
        return $this->hasMany(ScientistArticle::class, 'scientistId', 'id');
    }
}
