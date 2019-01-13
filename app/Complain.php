<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    
    protected $table = 'complains';

    public $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'type_id','product_name','user_email','user_id','technician_email',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function technician(){
        return $this->belongsTo('App\Technician');
    }

    public function type(){
        return $this->belongsTo('App\Type');
    }
}
