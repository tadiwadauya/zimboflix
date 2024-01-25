<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'title',
        'description',
        'filename',
        'views',
        'downloads',
        'type',
        'country',
        'release_date',
        'director',
        'production_company',
        'cast',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}