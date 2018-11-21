<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    
    protected $table = 'complains';

    public $primaryKey = 'id';

    public $timestamps = true;
}
