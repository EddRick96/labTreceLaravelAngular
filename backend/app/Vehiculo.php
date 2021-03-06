<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    //
    public function fabricante()
    {
        return $this->belongsTo(Fabricante::class);
    }

    protected $hidden=['created_at','updated_at'];
}
