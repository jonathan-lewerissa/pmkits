<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $primaryKey = 'id';

    protected $guarded = ['id',' remember_token','created_at','updated_at', ];
}
