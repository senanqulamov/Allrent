<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $primaryKey = 'ID';

    protected $fillable = ['type', 'user_id', 'admin_id', 'details', 'info'];
}
