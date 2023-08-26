<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $primaryKey = 'category_id';
 
    protected $fillable = [
        'category_name',
        'category_description',
        'parent_category_id',
        'category_image',
    ];
}
