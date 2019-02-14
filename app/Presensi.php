<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'frontdb';

    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
