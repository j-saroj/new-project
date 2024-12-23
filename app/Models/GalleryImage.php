<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $fillable = ([
        'title',
        'description',
        'image',
        'portfolio_id',
        'extra',
    ]);

    public function portfolioItem()
    {
        return $this->belongsTo(PortfolioItem::class);
    }
}
