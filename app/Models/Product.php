<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable= [
        'name',
        'description',
        'price',
        'image',
        'category_id',
        'availability'
    ];

    // Accesseur pour l'URL complète de l'image
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
