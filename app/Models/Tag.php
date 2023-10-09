<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['title'];

    public function blogs()
    {
        return $this->belongsToMany(Blogs::class)->withTimestamps();
    }
}