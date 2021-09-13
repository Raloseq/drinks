<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrinkReview extends Model
{
    use HasFactory;

    protected $table = 'drinkReviews';

    protected $fillable = [
        'headline',
        'description',
        'rating',
        'drink_id'
    ];

}
