<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $primaryKey = 'ID';

    protected $fillable = ['user_id', 'balance_id' , 'type' , 'details' , 'amount'];
}
