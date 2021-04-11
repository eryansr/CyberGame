<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Gamers extends Model
{
	protected $table='gamers';
	protected $fillable=['name','apell','mail','telf','cedu','edad','sexo','direc'];

}
