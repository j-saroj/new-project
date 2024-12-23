<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JourneyStat extends Model
{
    protected $fillable = ([
        'title',
        'count',
        'icon',
    ]);
}
