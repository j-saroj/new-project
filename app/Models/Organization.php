<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = ([
        'name',
        'description',
        'banner_image',
        'logo',
        'email',
        'phone',
        'address',
        'website',
        'motto',
        'title',
        'sublitle',
        'extra',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',

    ]);
    protected $casts = [
        'extra'=>'array'
    ];
}
