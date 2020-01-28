<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'name',
        'username',
        'email',
        'gender',
        'user_type',
        'password'
    ];
    //
}