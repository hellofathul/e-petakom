<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    protected $fillable = [
        'username','lecturer_first_name','lecturer_last_name','lecturer_email','lecturer_mobile_no','lecturer_office_level','lecturer_office_wing','lecturer_picture'
    ];
}
