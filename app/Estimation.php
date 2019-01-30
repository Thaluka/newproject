<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimation extends Model
 {
    public function complains(){
        return $this->belongsTo('App\Complain');
    }

    public function technicians(){
        return $this->belongsTo('App\Technician');
    }

    public function types(){
        return $this->belongsTo('App\Type');
    }
}
