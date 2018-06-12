<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users';

    protected $fillable = [
        'username',
        'phone',
        'gender',
        'age',
        'birth',
        'id_card',
    ];
}
