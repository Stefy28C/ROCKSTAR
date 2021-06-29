<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //atributos
    protected $table = "employee";
    protected $primaryKey = "EmployeeId";
    public $timestamps = false;

    //1 m A compras
    public function compras(){
        return $this->hasManyThrough('App\Compra','App\Cliente','SupportRepId','CustomerId','EmployeeId','CustomerId');
    }
}
