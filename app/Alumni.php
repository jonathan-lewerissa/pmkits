<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $primaryKey = 'id';

    protected $guarded = ['id',' remember_token','created_at','updated_at', ];
}
