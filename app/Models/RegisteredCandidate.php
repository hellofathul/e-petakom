<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredCandidate extends Model
{
    use HasFactory;

    protected $fillables = [
      'matricid', 'name', 'major', 'intake',
      'manifesto', 'profilepicture',
    ];
}
