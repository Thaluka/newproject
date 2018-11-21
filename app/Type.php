<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'Types';

    public $primaryKey = 'type_id';

    public $timestamps = true;

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function technicians(){
        return $this->hasMany('App\Technician');
    }
}
