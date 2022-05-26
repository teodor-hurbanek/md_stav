<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * Get the images of this service
     */
    public function images() {
        return $this->hasMany('App\Models\Image');
    }

    use HasFactory;
}
