<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JewelleryBrand extends Model
{
    // Define the table name associated with this model
    protected $table = 'jewellery_brands';

    // Define the primary key column name (assuming 'id' as the primary key)
    protected $primaryKey = 'id';

    // Define the columns that are fillable (i.e., can be mass-assigned)
    protected $fillable = ['brand_name', 'brand_image', 'description', 'website_url'];

    // Optionally, you can define any relationships, custom methods, or other logic for this model here.
}
