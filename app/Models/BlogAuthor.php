<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogAuthor extends Model
{
    protected $primaryKey = 'author_id';
    protected $fillable = ['name', 'email', 'bio'];
}
