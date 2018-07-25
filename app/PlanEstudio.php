<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanEstudio extends Model
{
    protected $table = 'planesEstudio';

	// Obtiene Campos Laborales que pertenecen al Plan de Estudios
	public function camposLaborales()
	{
	    return $this->belongsToMany('App\CampoLaboral', 'campoLaboral_planEstudio', 'planEstudio_id', 'campoLaboral_id');
	}
}
