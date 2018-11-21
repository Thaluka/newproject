<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'name','code',
    ];

    public function type(){
          return $this->belongsTo('App\Type');
    }
}
