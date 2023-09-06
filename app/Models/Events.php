<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $primaryKey = 'event_id';
    use HasFactory;
    protected $fillable = [
        'event_name',
        'event_description',
        'event_date',
        'event_location',
        'gps_location',
        'event_website',
        'event_category',
        'event_organizer',
        'event_contact',
        'event_image',
        'registration_link',
        // Add any other fields you want to be mass-fillable here
    ];
}
