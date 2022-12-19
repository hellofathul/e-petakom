<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dean extends Model
{
    use HasFactory;
    protected $fillable = [
        'username','dean_first_name','dean_last_name','dean_email','dean_mobile_no','dean_office_level','dean_office_wing','dean_picture'
    ];
}

