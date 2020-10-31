<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $fillable=[
      'post',
      //'usuario_id'  
    ];
    public function comentario(){
        return $this->hasMany('app\comentario');
    }
    /*public function usuario(){
        return $this->belongsTo('app\User');
    }*/
}
