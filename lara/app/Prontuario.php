<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prontuario extends Model
{
	    protected $fillable=
	    [
	    'id',
	    'numeroDoProntuario',
	    'idadeDoPaciente',
	    'nomeDoPaciente'
	    ];
}
