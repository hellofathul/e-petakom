<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;
    protected $fillable = [
        'username','committee_first_name','committee_last_name','committee_email','committee_mobile_no','committee_address','committee_city','committee_state','committee_zipcode','committee_course','committee_year','committee_semester','committee_picture','committee_position'
    ];

    public function detail()
    {
        return $this->belongsTo(Authentication::class, 'username', 'username');
    }
}

