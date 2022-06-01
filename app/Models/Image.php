<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * Get Service of the Images
     */
    /*public function service() {
        return $this->belongsTo('App\Models\Service');
    }*/

    /**
     * The attributes that are mass assignable
     */
    protected $fillable = [
        'fileName', 'filePath', 'service_id', 'file'
    ];
}
