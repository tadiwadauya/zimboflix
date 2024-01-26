<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tvproduction extends Model
{
    protected $dates = [
        'release_date',
    ];
    protected $fillable = [
                            'title',
                            'file',
                            'cover_photo',
                            'description',
                            'views',
                            'downloads',
                            'type',
                            'country',
                            'release_date',
                            'director',
                            'production_company',
                            'cast',
                            'category_id',
                            'parent_id',
                            'subtitle'
                        ];
    
    public function category()
        {
            return $this->belongsTo(Category::class);
        }
}
