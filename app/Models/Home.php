<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'uniq_id',
        'title',
        'info',
        'category',
        'rating',
        'location',
        'user_up',
        'user_down',
        'reserved',
        'min_price',
        'reservation_d',
        'home_has',
        'home_has_d',
        'permissions',
        'comments_id',
    ];

    public $timestamps = true;

    // protected $fillable = [
    //     'title',
    // ];

    // protected $hidden = [
    //     'id',
    // ];
}
