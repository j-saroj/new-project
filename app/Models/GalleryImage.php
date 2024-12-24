<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $fillable = ([
        'image',
        'portfolio_id',
        'status',
        'extra',
    ]);

    public function portfolio()
    {
        return $this->belongsTo(PortfolioItem::class);
    }
}
