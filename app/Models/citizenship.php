<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citizenship extends Model
{
    protected $table = 'citizenships'; 
    protected $fillable = ['name', 'nik', 'phonenumber', 'address', 'age', 'religion', 'gender', 'job', 'maritalstatus', 'citizenship', 'picture'];
}
