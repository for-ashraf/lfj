<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    protected $table = 'image_gallery';

    protected $fillable = [
        'category',
        'title',
        'image',
        'created_at',
        'updated_at',
    ];

    // Add any additional model logic or relationships here
}