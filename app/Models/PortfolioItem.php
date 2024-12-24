<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    protected $fillable = ([
        'title',
        'description',
        'image',
        'category_id',
        'extra',
    ]);

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }

    public function galleryItems()
    {
        return $this->hasMany(GalleryImage::class,'portfolio_id');
    }
}
