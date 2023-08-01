<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $primaryKey = 'blog_id';

    protected $fillable = [
        'title', // Add any other attributes you want to allow mass assignment for
        'content',
        'author_id',
        'featured_image',

        // Add more attributes here if needed
    ];
}
