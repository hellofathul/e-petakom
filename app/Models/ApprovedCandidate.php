<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Name;

class ApprovedCandidate extends Model
{
    use HasFactory;

    protected $fillables = [
      'matricid', 'name', 'major', 'intake',
      'manifesto', 'profilepicture', 'votes' => 0
    ];
}
