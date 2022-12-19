<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    use HasFactory;
    protected $fillable = [
        'username','coordinator_first_name','coordinator_last_name','coordinator_email','coordinator_mobile_no','coordinator_office_level','coordinator_office_wing','coordinator_picture'
    ];
}

