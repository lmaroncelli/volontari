<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volontario extends Model
	{
  
  protected $table = 'tblVolontari';



  public function associazione()
  	{
  		return $this->belongsTo('App\Associazione','associazione_id','id');
  	}

	}
