<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table='book';
    protected $fillable = [
        'title',
        'author',
        'synopsis',
        'cover',
        'ISBN',
        'price',
    ];
}
 /*$fillable é uma ferramenta do laravel para proteger a gravação de fora*/