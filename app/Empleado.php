<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //atributos
    protected $table = "employee";
    protected $primaryKey = "EmployeeId";

    public $timestamps = false;
}
