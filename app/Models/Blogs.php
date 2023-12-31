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
        'author_name',
        'featured_image',
        'category_id',
        'publication_date',  
        'celebrity_id',
        'meta_tags',

        // Add more attributes here if needed
    ];
    public function author()
{
    return $this->belongsTo(BlogAuthor::class, 'author_id');
}
public function tags()
{
    return $this->belongsToMany(Tag::class, 'blog_tag', 'blog_id', 'tag_id')->withTimestamps();
}
public function categories()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
