<?php

namespace App\Models;

use App\Traits\CustomId;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use HasFactory, CustomId, InteractsWithMedia;


    /**
     * This attributes are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'discount',
        'tax',
        'quantity_left',
    ];

    protected $casts = [
        'description' => 'array',
        'product_seo' => 'array'
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    protected static function booted()
    {
        static::creating(function ($product) {
            $product->slug = Str::slug($product->name);
        });
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')->width(560)->height(672);
    }
}
