<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = "tb_artist";

    protected $primarykey = 'artist_id';

    protected $fillable = ['artist_name'];
}
