<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterMenu extends Model
{
   protected $table='footer_menu';
   protected $fillable=['title', 'link', 'position'];
}
