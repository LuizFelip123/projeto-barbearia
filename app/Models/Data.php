<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table ='datas';
    use HasFactory;
    public function agenda(){

        return $this->belongsTo('App\Models\Agenda');
    }
    
    public function horarios(){

        return $this->hasMany('App\Models\Horario');
    }

}
