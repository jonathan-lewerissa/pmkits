<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'frontdb';
    
    protected $primaryKey = 'id';

    protected $guarded = ['id',' remember_token','created_at','updated_at', ];
}
