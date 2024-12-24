<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    protected $fillable = ['name'];
    public function portfolioItems()
    {
        return $this->hasMany(PortfolioItem::class);
    }
}
