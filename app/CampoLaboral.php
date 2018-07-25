<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampoLaboral extends Model
{
    protected $table = 'camposLaborales';

	// Obtiene Planes de Estudio que pertenecen al Campo Laboral
	public function planesEstudio()
	{
	    return $this->belongsToMany('App\PlanEstudio', 'campoLaboral_planEstudio', 'campoLaboral_id', 'planEstudio_id');
	}
}
