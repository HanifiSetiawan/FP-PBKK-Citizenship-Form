<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginTime extends Model
{
    protected $fillable = ['user_id', 'login_time'];
}
