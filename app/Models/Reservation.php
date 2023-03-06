<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
     use HasFactory;


    protected $fillable = [
        'home_id',
        'user_id',
        'status',
        'name',
        'phone',
        'email',
        'wish',
        'gender',
        'accept_rules',
        'guests',
        'card_number',
        'card_date',
        'card_cvc',
        'card_user_name',
        'start_date',
        'end_date',
        'days',
        'total_price',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'card_number',
        'card_date',
        'card_cvc',
        'card_user_name',
    ];

    public $timestamps = false;
}
