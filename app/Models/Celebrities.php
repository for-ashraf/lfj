<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celebrities extends Model
{
    use HasFactory;
    protected $primaryKey = 'celebrity_id';

    protected $fillable = [
        'name',
        'nationality',
        'description',
        'image',
        'birthdate',
        'instagram',
        'twitter',
        'facebook',
        'youtube',
        'tiktok',
        'snapchat',
        'website',
        'celebrity_type',
    ];

    // Define any relationships here if needed
}
