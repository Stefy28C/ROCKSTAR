<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Compra extends Model
{
    //
    protected $table="invoice";
    protected $primaryKey="InvoiceId";
    public $timestamps=false;


}
