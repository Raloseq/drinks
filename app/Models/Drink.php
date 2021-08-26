<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'ingredients',
        'recipe',
        'image',
        'author'
    ];

    public $timestamps = false;

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
