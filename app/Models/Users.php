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
        'password',
        'api_token',
        'remember_token',
    ];

    protected $table = 'users';
}
