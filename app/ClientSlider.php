<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientSlider extends Model
{
    protected $table='client_slider';
    protected $fillable=['caption', 'link', 'image'];
}
