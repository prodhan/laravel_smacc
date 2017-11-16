<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table='orders';
    protected $fillable=['packageid', 'userid', 'comments'];
}
