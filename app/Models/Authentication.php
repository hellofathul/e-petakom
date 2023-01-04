<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authentication extends Model
{
    use HasFactory;

    protected $fillable = [
        'role', 'password', 'username', 'facebook_id',
    ];

    protected $hidden = [
        'password'
    ];

    public function dean()
    {
        return $this->hasOne(Dean::class, 'username','username');
    }

    public function student()
    {
        return $this->hasOne(Student::class,'username', 'username');
    }

    public function lecturer()
    {
        return $this->hasOne(Lecturer::class,'usernane', 'username');
    }

    public function committee()
    {
        return $this->hasOne(Committee::class,'username', 'username');
    }

    public function coordinator()
    {
        return $this->hasOne(Coordinator::class,'username', 'username');
    }
}

