<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    /**
     * This attributes are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'overview',
        'quantity_left',
        'description'
    ];

    protected $casts = [
        'description' => 'array',
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
