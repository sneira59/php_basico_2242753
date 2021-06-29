<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "employee";
    protected $primaryKey = "EmployeeId";
    public $timestamps = false;

    public function compras(){
        return $this->hasManyThrough('App\Compra' ,
                                     'App\Customer',
                                     'SupportRepId',
                                     'CustomerId' ,
                                     'EmployeeId' ,
                                     'CustomerId'  );
    }
    public function clientes(){
        //hasmany:
        //1.modelo a relacionar
        //2.fk del artista(papa) en los albunes (hijo)
        return $this->hasMany('App\Customer', 'SupportRepId');
}
}
