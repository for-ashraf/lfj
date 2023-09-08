<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmazonProduct extends Model
{
    use HasFactory;

    protected $table = 'amazon_products';
    
    protected $fillable = [
        'product_id',
        'category',
        'title',
        'description',
        'featured_image',
        'price',
        'affiliate_link',
    ];
}
