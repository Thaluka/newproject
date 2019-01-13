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

    /*public function zones(){
        $type_id = Input:: find('id');
        return Product::where('type_id',$type_id)->get();
    }*/
}
