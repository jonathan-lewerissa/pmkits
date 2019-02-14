<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'frontdb';

    public function presensis()
    {
        return $this->hasMany('App\Presensi');
    }
}
