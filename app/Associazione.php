<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Associazione extends Model
	{
	protected $table = 'tblAssociazioni';




	public function volontari()
		{
			return $this->hasMany('App\Volontario','associazione_id','id');
		}


	public function utente()
		{
			return $this->belongsTo('App\User','user_id','id');
		}


	}	
