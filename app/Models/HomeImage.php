<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_id',
        'image_type',
        'image_name',
        'image_location',
    ];

    public $timestamps = true;
}
