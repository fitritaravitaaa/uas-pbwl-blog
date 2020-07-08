<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "tb_users";

    protected $primarykey = 'id';

    protected $fillable = ['user_name', 'user_password', 'user_email', 'user_nama_lengkap'];
}
