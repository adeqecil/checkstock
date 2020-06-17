<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['fullname', 'dateofbirth', 'gender', 'password', 'retypepassword', 'email'];
}
