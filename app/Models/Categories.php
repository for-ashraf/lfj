<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name', // Add any other attributes you want to allow mass assignment for
         // Add more attributes here if needed
    ];
}
