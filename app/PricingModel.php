<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricingModel extends Model
{
    protected $table='pricing';
    protected $fillable=['package', 'price', 'details'];
}
